<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use Auth;
use App\User;
use App\Card;
use App\Website;
use File;
use Intervention\Image\Facades\Image;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }
    public function handleFacebookCallback()
    {
        $user = Socialite::driver('facebook')->user();
        // $user->token;
    }
    public function redirectToTwitter()
    {
        return Socialite::driver('twitter')->redirect();
    }
    public function handleTwitterCallback()
    {
        $user = Socialite::driver('twitter')->user();
        return redirect('home');
    }
    public function redirectToLinkedin()
    {
        return Socialite::driver('linkedin')->redirect();
    }
    public function handleLinkedinCallback()
    {
        $user = Socialite::driver('linkedin')->user();
        // $user->token;
    }
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user();
        // $user->token;
    }
    public function redirectToGithub()
    {
        return Socialite::driver('github')->redirect();
    }
    public function handleGithubCallback()
    {
        $github_user = Socialite::driver('github')->user();
        // $user->token;
        //print_r($github_user);die();
        $user=$this->userFindOrCreate($github_user);
        Auth::login($user,true);
        $this->cardFindOrCreate($github_user,Auth::id());
        $this->websiteFindOrCreate($github_user,Auth::id());
        return redirect($this->redirectTo);
    }
    public function userFindOrCreate($user_object)
    {
        $checkUser = User::where('provider_id',$user_object->id)->first();
        if($checkUser)
        {
          return $checkUser;
        }
        else
        {
          $new_user = new User;
          $new_user->name = $user_object->getName();
          $new_user->email = $user_object->getEmail();
          $new_user->provider_id = $user_object->getId();
          $new_user->save();
          return $new_user;
        }
    }
    public function cardFindOrCreate($user_object,$user_id)
    {
        $checkCard = Card::where('id',$user_id)->first();
        if($checkCard)
        {
          return $checkCard;
        }
        else
        {
          $new_card = new card;
          $new_card->first_name = $user_object->getName();
          $new_card->last_name = $user_object->getNickname();
          $new_card->designation = 'Administrator';
          $new_card->email = $user_object->getEmail();
          $new_card->address = $user_object['location'];
          $new_card->website = $user_object['url'];
          $new_card->qr_url = $user_object['url'];
          $new_card->save();
          return $new_card;
        }
    }
    public function websiteFindOrCreate($user_object,$user_id)
    {
        $checkWebsite = Website::where('id',$user_id)->first();
        if($checkWebsite)
        {
          return $checkWebsite;
        }
        else
        {
          $avatar = file_get_contents($user_object->getAvatar());
          if (!file_exists('img/'.$user_id.'/profile')) {
              mkdir('img/'.$user_id.'/profile', 0777, true);
          }
          File::put('img/'.$user_id.'/profile/main_image_original.jpg',$avatar);
          $img = Image::make('img/'.$user_id.'/profile/main_image_original.jpg')->crop(494, 668)->save('img/'.$user_id.'/profile/main_image.jpg');
          $new_website = new Website;
          $new_website->main_image = url('/img/'.$user_id.'/profile/main_image.jpg');
          $new_website->first_name = $user_object->getNickname();
          $new_website->last_name = $user_object->getName();
          $new_website->tag_line_1 = 'Hi, I am <span>'.$user_object->getName().'</span>';
          $new_website->tag_line_2 = 'An administrator based in <span>'.$user_object['location'].'</span>';
          $new_website->contact_receiving_email = $user_object->getEmail();
          $new_website->save();
          return $new_website;
        }
    }
}
