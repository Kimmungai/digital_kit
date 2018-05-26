<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use Auth;
use App\User;
use App\publishing_details;
use App\payment_details;
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
    protected $redirectTo = '/';

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
        $twitter_user = Socialite::driver('twitter')->user();
        $user=$this->userFindOrCreate($twitter_user);
        Auth::login($user,true);
        $this->cardFindOrCreate($twitter_user,Auth::id(),'twitter');
        $this->websiteFindOrCreate($twitter_user,Auth::id(),'twitter');
        return redirect($this->redirectTo);
    }
    public function redirectToLinkedin()
    {
        return Socialite::driver('linkedin')->redirect();
    }
    public function handleLinkedinCallback()
    {
        $linkedin_user = Socialite::driver('linkedin')->user();
        // $user->token;
        //print_r($linkedin_user['pictureUrls']['values'][0]);die();
        $user=$this->userFindOrCreate($linkedin_user);
        Auth::login($user,true);
        $this->cardFindOrCreate($linkedin_user,Auth::id(),'linkedin');
        $this->websiteFindOrCreate($linkedin_user,Auth::id(),'linkedin');
        return redirect($this->redirectTo);
    }
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user();
        print_r($user);die();
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
        $this->cardFindOrCreate($github_user,Auth::id(),'github');
        $this->websiteFindOrCreate($github_user,Auth::id(),'github');
        return redirect($this->redirectTo);
    }
    public function userFindOrCreate($user_object)
    {
        $checkUser = User::where('provider_id',$user_object->getId())->first();
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
          $pub_details = new publishing_details;
          $pub_details->website_url = url('/website/1/index.php?id='.$new_user->id.'');
          $pub_details->publishing_period = '1 year';
          $pub_details->publishing_cost = '99';
          $pub_details->user_id = $new_user->id;
          $pub_details->save();
          $pay_details = new payment_details;
          $pay_details->acc_bal = '0';
          $pay_details->user_id = $new_user->id;
          $pay_details->save();
          return $new_user;
        }
    }
    public function cardFindOrCreate($user_object,$user_id,$provider)
    {
        $checkCard = Card::where('id',$user_id)->first();
        if($checkCard)
        {
          return $checkCard;
        }
        else
        {
          if($provider === 'github')
          {
            $new_card = new card;
            $new_card->first_name = $user_object->getName();
            //$new_card->last_name = $user_object->getNickname();
            $new_card->designation = 'Administrator';
            $new_card->email = $user_object->getEmail();
            $new_card->address = $user_object['location'];
            $new_card->website = $user_object['url'];
            $new_card->qr_url = $user_object['url'];
            $new_card->save();
            return $new_card;
          }
          elseif($provider === 'linkedin')
          {
            $new_card = new card;
            $new_card->first_name = $user_object['firstName'];
            $new_card->last_name = $user_object['lastName'];
            $new_card->designation = $user_object['headline'];
            $new_card->email = $user_object->getEmail();
            $new_card->address = $user_object['location']['name'];
            $new_card->website = $user_object['publicProfileUrl'];
            $new_card->qr_url = $user_object['publicProfileUrl'];
            $new_card->save();
            return $new_card;
          }
          elseif($provider === 'twitter')
          {
            $new_card = new card;
            $new_card->first_name = $user_object->getName();
            //$new_card->last_name = $user_object->getNickname();
            $new_card->designation = 'Administrator';
            $new_card->email = $user_object->getEmail();
            $new_card->address = $user_object['location'];
            $new_card->website = $user_object['url'];
            $new_card->qr_url = $user_object['url'];
            $new_card->save();
            return $new_card;
          }
        }
    }
    public function websiteFindOrCreate($user_object,$user_id,$provider)
    {
        $checkWebsite = Website::where('id',$user_id)->first();
        if($checkWebsite)
        {
          return $checkWebsite;
        }
        else
        {
          if($provider === 'github')
          {
            $avatar = file_get_contents($user_object->getAvatar());
            if (!file_exists('img/'.$user_id.'/profile')) {
                mkdir('img/'.$user_id.'/profile', 0777, true);
            }
            File::put('img/'.$user_id.'/profile/main_image_original.jpg',$avatar);
            $img = Image::make('img/'.$user_id.'/profile/main_image_original.jpg')->crop(494, 668)->save('img/'.$user_id.'/profile/main_image.jpg');
            $new_website = new Website;
            $new_website->main_image = url('img/'.$user_id.'/profile/main_image_original.jpg');
            $new_website->first_name = $user_object->getNickname();
            //$new_website->last_name = $user_object->getName();
            $new_website->tag_line_1 = 'Hi, I am <span>'.$user_object->getName().'</span>';
            $new_website->tag_line_2 = 'An administrator based in <span>'.$user_object['location'].'</span>';
            $new_website->contact_receiving_email = $user_object->getEmail();
            $new_website->save();
            return $new_website;
          }
          elseif($provider === 'linkedin')
          {
            $avatar = file_get_contents($user_object['pictureUrls']['values'][0]);
            if (!file_exists('img/'.$user_id.'/profile')) {
                mkdir('img/'.$user_id.'/profile', 0777, true);
            }
            File::put('img/'.$user_id.'/profile/main_image_original.jpg',$avatar);
            $img = Image::make('img/'.$user_id.'/profile/main_image_original.jpg')->crop(494, 668)->save('img/'.$user_id.'/profile/main_image.jpg');
            $new_website = new Website;
            $new_website->main_image = url('img/'.$user_id.'/profile/main_image_original.jpg');
            $new_website->first_name = $user_object['firstName'];
            $new_website->last_name = $user_object['lastName'];
            $new_website->tag_line_1 = 'Hi, I am <span>'.$user_object['firstName'].' '.$user_object['lastName'].'</span>';
            $new_website->tag_line_2 = $user_object['headline'].' based in <span>'.$user_object['location']['name'].'</span>';
            $new_website->contact_receiving_email = $user_object->getEmail();
            $new_website->save();
            return $new_website;
          }
          elseif($provider === 'twitter')
          {
            $avatar = file_get_contents(str_replace('_normal','',$user_object->getAvatar()));
            if (!file_exists('img/'.$user_id.'/profile')) {
                mkdir('img/'.$user_id.'/profile', 0777, true);
            }
            File::put('img/'.$user_id.'/profile/main_image_original.jpg',$avatar);
            $img = Image::make('img/'.$user_id.'/profile/main_image_original.jpg')->crop(494, 668)->save('img/'.$user_id.'/profile/main_image.jpg');
            $new_website = new Website;
            $new_website->main_image = url('img/'.$user_id.'/profile/main_image_original.jpg');
            $new_website->first_name = $user_object->getNickname();
            //$new_website->last_name = $user_object->getName();
            $new_website->tag_line_1 = 'Hi, I am <span>'.$user_object->getName().'</span>';
            $new_website->tag_line_2 = 'An administrator based in <span>'.$user_object['location'].'</span>';
            $new_website->contact_receiving_email = $user_object->getEmail();
            $new_website->save();
            return $new_website;
          }
        }
    }
}
