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
        $facebook_user = Socialite::driver('facebook')->user();
        //print_r($facebook_user);die();
        $user=$this->userFindOrCreate($facebook_user);
        Auth::login($user,true);
        $this->cardFindOrCreate($facebook_user,Auth::id(),'facebook');
        $this->websiteFindOrCreate($facebook_user,Auth::id(),'facebook');
        return redirect($this->redirectTo);
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
        $facebook_user = Socialite::driver('google')->user();
        print_r($user);die();
        // $user->token;
    }
    public function redirectToGithub()
    {
        return Socialite::driver('github')->setScopes(['read:user', 'public_repo'])->redirect();
    }
    public function handleGithubCallback()
    {
        $github_user = Socialite::driver('github')->user();
      //echo $github_user['hireable'];die();
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
          ##start variables##
          $user_name=$user_object->getName()!= null ? $user_object->getName()  : '';
          $user_email=$user_object->getEmail()!= null ? $user_object->getEmail()  : '';
          ##end variables####
          $new_user = new User;
          $new_user->name = $user_name;
          $new_user->email = $user_email;
          $new_user->provider_id = $user_object->getId();
          $new_user->save();
          $pub_details = new publishing_details;
          $pub_details->website_url = 'https://www.'.str_replace(' ','',$new_user->name).'.me';
          $pub_details->publishing_period = 'Yearly';
          $pub_details->publishing_cost = '99.99';
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
            ##start variables##
            $user_name=$user_object->getName()!= null ? $user_object->getName()  : '';
            $user_email=$user_object->getEmail()!= null ? $user_object->getEmail()  : '';
            $user_location=$user_object['location']!= null ? $user_object['location']  : '';
            $user_url=$user_object['url']!= null ? $user_object['url']  : '';
            ##end variables####

            $new_card = new card;
            $new_card->first_name = $user_name;
            //$new_card->last_name = $user_object->getNickname();
            $new_card->designation = 'Administrator';
            $new_card->email = $user_email;
            $new_card->address = $user_location;
            $new_card->website = $user_url;
            $new_card->qr_url = $user_url;
            $new_card->save();
            return $new_card;
          }
          elseif($provider === 'linkedin')
          {
            ##start variables##
            $user_first_name=$user_object['firstName']!= null ? $user_object['firstName']  : '';
            $user_last_name=$user_object['lastName']!= null ? $user_object['lastName'] : '';
            $user_designation=$user_object['headline']!= null ? $user_object['headline']  : '';
            $user_email=$user_object->getEmail()!= null ? $user_object->getEmail()  : '';
            $user_address=$user_object['location']['name']!= null ? $user_object['location']['name']  : '';
            $user_website=$user_object['publicProfileUrl']!= null ? $user_object['publicProfileUrl']  : '';
            $user_qr_url=$user_object['publicProfileUrl']!= null ? $user_object['publicProfileUrl']  : '';
            ##end variables####

            $new_card = new card;
            $new_card->first_name = $user_first_name;
            $new_card->last_name = $user_last_name;
            $new_card->designation = $user_designation;
            $new_card->email = $user_email;
            $new_card->address = $user_address;
            $new_card->website = $user_website;
            $new_card->qr_url = $user_qr_url;
            $new_card->save();
            return $new_card;
          }
          elseif($provider === 'twitter')
          {
            ##start variables##
            $user_first_name=$user_object->getName()!= null ? $user_object->getName()  : '';
            $user_last_name=$user_object->getNickname()!= null ? $user_object->getNickname()  : '';
            $user_designation='Administrator';
            $user_email=$user_object->getEmail()!= null ? $user_object->getEmail()  : '';
            $user_address=$user_object['location']!= null ? $user_object['location'] : '';
            $user_website=$user_object['url']!= null ? $user_object['url']  : '';
            $user_qr_url=$user_object['url']!= null ? $user_object['url']  : '';
            ##end variables####

            $new_card = new card;
            $new_card->first_name = $user_first_name;
            $new_card->last_name = $user_last_name;
            $new_card->designation = $user_designation;
            $new_card->email = $user_email;
            $new_card->address = $user_address;
            $new_card->website = $user_website;
            $new_card->qr_url = $user_qr_url;
            $new_card->save();
            return $new_card;
          }
          elseif($provider === 'facebook')
          {
            ##start variables##
            $user_first_name=$user_object->getName()!= null ? $user_object->getName()  : '';
            $user_last_name=$user_object->getNickname()!= null ? $user_object->getNickname()  : '';
            $user_designation='Administrator';
            $user_email=$user_object->getEmail()!= null ? $user_object->getEmail()  : '';
            /*$user_address=$user_object['location'] ? $user_object['location'] != null : '';
            $user_website=$user_object['url'] ? $user_object['url'] != null : '';
            $user_qr_url=$user_object['url'] ? $user_object['url'] != null : '';*/
            ##end variables####
            $new_card = new card;
            $new_card->first_name = $user_first_name;
            $new_card->last_name =$user_last_name;
            $new_card->designation = $user_designation;
            $new_card->email = $user_email;
            //$new_card->address = $user_object['location'];
            //$new_card->website = $user_object['profileUrl'];
            //$new_card->qr_url = $user_object['profileUrl'];
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
            ##start variables##
            //$avatar = file_get_contents($user_object->getAvatar()) ? $user_object->getAvatar() != null : url('img/default_avata.PNG');
            $user_first_name= $user_object->getNickname()!= null ? $user_object->getNickname()  : '';
            $user_name=$user_object->getName()!= null ? $user_object->getName()  : '';
            $user_email=$user_object->getEmail()!= null ? $user_object->getEmail() : '';
            $user_location=$user_object['location']!= null ? $user_object['location']  : '';
            $user_url=$user_object['url']!= null ? $user_object['url'] : '';
            $user_bio=$user_object['bio']!= null ? $user_object['bio'] : '';
            $user_company=$user_object['company']!= null ? $user_object['company'] : '';
            $tag_line_2=$user_company!= null ? 'A member of '.$user_company.' based in <span>'.$user_location.'</span>' : 'Currently based in <span>'.$user_location.'</span>';
            $repos_url = $user_object['repos_url'];
            $opts = [
                'http' => [
                    'method' => 'GET',
                    'header' => [
                            'User-Agent: PHP'
                    ]
                ]
            ];
            $json = file_get_contents($repos_url, false, stream_context_create($opts));
            $repos = json_decode($json);
            $mission_statement=count($repos) ? 'As of now I have contributed to <strong>'.count($repos).'</strong> public repositories.' : 'Professionalism in my work is self evident.';
            $vision_statement=$user_first_name!= null ? 'You can also call me '.$user_first_name : 'My Mantra is to keep moving forward';
            $hireable=$user_object['hireable'] ? ' I am currently open to job offers.' : '';
            $speciality_1=$repos[0]->name!= null ? $repos[0]->name : '';
            $speciality_1_text=$repos[0]->description!= null ? $repos[0]->description : '';
            $language_1=$repos[0]->language!= null ? ' developed in '.$repos[0]->language : '';
            $icon_1=$repos[0]->language!= null ? 'fa-code' : '';
            $speciality_2=$repos[1]->name!= null ? $repos[1]->name : '';
            $speciality_2_text=$repos[1]->description!= null ? $repos[1]->description : '';
            $language_2=$repos[1]->language!= null ? ' developed in '.$repos[1]->language : '';
            $icon_2=$repos[1]->language!= null ? 'fa-code' : '';
            $speciality_3=$repos[2]->name!= null ? $repos[2]->name : '';
            $speciality_3_text=$repos[2]->description!= null ? $repos[2]->description : '';
            $language_3=$repos[2]->language!= null ? ' developed in '.$repos[2]->language : '';
            $icon_3=$repos[2]->language!= null ? 'fa-code' : '';
            $speciality_4=$repos[3]->name!= null ? $repos[3]->name : '';
            $speciality_4_text=$repos[3]->description!= null ? $repos[3]->description : '';
            $language_4=$repos[3]->language!= null ? ' developed in '.$repos[3]->language : '';
            $icon_4=$repos[3]->language!= null ? 'fa-code' : '';
            ##end variables####
            $avatar = file_get_contents($user_object->getAvatar());

            if (!file_exists('img/'.$user_id.'/profile')) {
                mkdir('img/'.$user_id.'/profile', 0777, true);
            }
            File::put('img/'.$user_id.'/profile/main_image_original.jpg',$avatar);
            $img = Image::make('img/'.$user_id.'/profile/main_image_original.jpg')->crop(494, 668)->save('img/'.$user_id.'/profile/main_image.jpg');
            $new_website = new Website;
            $new_website->main_image = url('img/'.$user_id.'/profile/main_image_original.jpg');
            $new_website->first_name = $user_first_name;
            //$new_website->last_name = $user_object->getName();
            $new_website->tag_line_1 = 'Hi, I am <span>'.$user_name.'</span>';
            $new_website->tag_line_2 = $tag_line_2;
            $new_website->about_story = $user_bio;
            $new_website->mission_statement = $mission_statement;
            $new_website->vision_statement = $vision_statement.$hireable;
            $new_website->speciality_1 = $speciality_1.$language_1;
            $new_website->speciality_1_icon = $icon_1;
            $new_website->speciality_1_text = $speciality_1_text;
            $new_website->speciality_2 = $speciality_2.$language_2;
            $new_website->speciality_2_icon = $icon_2;
            $new_website->speciality_2_text = $speciality_2_text;
            $new_website->speciality_3 = $speciality_3.$language_3;
            $new_website->speciality_3_icon = $icon_3;
            $new_website->speciality_3_text = $speciality_3_text;
            $new_website->speciality_4 = $speciality_4.$language_4;
            $new_website->speciality_4_icon = $icon_4;
            $new_website->speciality_4_text = $speciality_4_text;
            $new_website->contact_receiving_email = $user_email;
            $new_website->save();
            return $new_website;
          }
          elseif($provider === 'linkedin')
          {
            ##start variables##
            //$avatar = file_get_contents($user_object['pictureUrls']['values'][0]) ? $user_object['pictureUrls']['values'][0] != null : url('img/default_avata.PNG');
            $user_first_name=$user_object['firstName']!= null ? $user_object['firstName']  : '';
            $user_last_name=$user_object['lastName']!= null ? $user_object['lastName']  : '';
            $user_designation=$user_object['headline']!= null ? $user_object['headline']  : '';
            $user_email=$user_object->getEmail()!= null ? $user_object->getEmail()  : '';
            $user_address=$user_object['location']['name']!= null ? $user_object['location']['name']  : '';
            $user_website=$user_object['publicProfileUrl']!= null ? $user_object['publicProfileUrl']  : '';
            $user_qr_url=$user_object['publicProfileUrl']!= null ? $user_object['publicProfileUrl']  : '';
            ##end variables####
            $avatar = file_get_contents($user_object['pictureUrls']['values'][0]);

            if (!file_exists('img/'.$user_id.'/profile')) {
                mkdir('img/'.$user_id.'/profile', 0777, true);
            }
            File::put('img/'.$user_id.'/profile/main_image_original.jpg',$avatar);
            $img = Image::make('img/'.$user_id.'/profile/main_image_original.jpg')->crop(494, 668)->save('img/'.$user_id.'/profile/main_image.jpg');
            $new_website = new Website;
            $new_website->main_image = url('img/'.$user_id.'/profile/main_image_original.jpg');
            $new_website->first_name = $user_first_name;
            $new_website->last_name = $user_last_name;
            $new_website->tag_line_1 = 'Hi, I am <span>'.$user_first_name.' '.$user_last_name.'</span>';
            $new_website->tag_line_2 = $user_object['headline'].' based in <span>'.$user_address.'</span>';
            $new_website->contact_receiving_email = $user_email;
            $new_website->save();
            return $new_website;
          }
          elseif($provider === 'twitter')
          {
            ##start variables##
            //$avatar = file_get_contents(str_replace('_normal','',$user_object->getAvatar())) ? $user_object->getAvatar() != null : url('img/default_avata.PNG');
            $user_first_name=$user_object->getName()!= null ? $user_object->getName()  : '';
            $user_last_name=$user_object->getNickname()!= null ? $user_object->getNickname()  : '';
            $user_designation='Administrator';
            $user_email=$user_object->getEmail()!= null ? $user_object->getEmail()  : '';
            $user_address=$user_object['location']!= null ? $user_object['location']  : '';
            $user_website=$user_object['url']!= null ? $user_object['url']  : '';
            $user_qr_url=$user_object['url']!= null ? $user_object['url']  : '';
            ##end variables####
            $avatar = file_get_contents(str_replace('_normal','',$user_object->getAvatar()));

            if (!file_exists('img/'.$user_id.'/profile')) {
                mkdir('img/'.$user_id.'/profile', 0777, true);
            }
            File::put('img/'.$user_id.'/profile/main_image_original.jpg',$avatar);
            $img = Image::make('img/'.$user_id.'/profile/main_image_original.jpg')->crop(494, 668)->save('img/'.$user_id.'/profile/main_image.jpg');
            $new_website = new Website;
            $new_website->main_image = url('img/'.$user_id.'/profile/main_image_original.jpg');
            $new_website->first_name = $user_first_name;
            $new_website->last_name = $user_last_name;
            $new_website->tag_line_1 = 'Hi, I am <span>'.$user_first_name.'</span>';
            $new_website->tag_line_2 = 'An administrator based in <span>'.$user_address.'</span>';
            $new_website->contact_receiving_email = $user_email;
            $new_website->save();
            return $new_website;
          }
          elseif($provider === 'facebook')
          {
            ##start variables##
            //$avatar = file_get_contents(str_replace('type=normal','width=1920',$user_object->getAvatar())) ? $user_object->getAvatar() != null : url('img/default_avata.PNG');
            $user_first_name=$user_object->getName()!= null ? $user_object->getName()  : '';
            $user_last_name=$user_object->getNickname()!= null ? $user_object->getNickname()  : '';
            $user_designation='Administrator';
            $user_email=$user_object->getEmail()!= null ? $user_object->getEmail()  : '';
            /*$user_address=$user_object['location'] ? $user_object['location'] != null : '';
            $user_website=$user_object['url'] ? $user_object['url'] != null : '';
            $user_qr_url=$user_object['url'] ? $user_object['url'] != null : '';*/
            ##end variables####
            $avatar = file_get_contents(str_replace('type=normal','width=1920',$user_object->getAvatar()));

            if (!file_exists('img/'.$user_id.'/profile')) {
                mkdir('img/'.$user_id.'/profile', 0777, true);
            }
            File::put('img/'.$user_id.'/profile/main_image_original.jpg',$avatar);
            $img = Image::make('img/'.$user_id.'/profile/main_image_original.jpg')->crop(494, 668)->save('img/'.$user_id.'/profile/main_image.jpg');
            $new_website = new Website;
            $new_website->main_image = url('img/'.$user_id.'/profile/main_image_original.jpg');
            $new_website->first_name = $user_first_name;
            $new_website->last_name = $user_last_name;
            $new_website->tag_line_1 = 'Hi, I am <span>'.$user_first_name.'</span>';
            $new_website->tag_line_2 = 'An administrator based in <span>'.$user_first_name.'</span>';
            $new_website->contact_receiving_email = $user_email;
            $new_website->save();
            return $new_website;
          }
        }
    }
}
