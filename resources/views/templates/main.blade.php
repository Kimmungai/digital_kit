<!DOCTYPE html>
<html lang="en" dir="ltr" ng-app="App" ng-controller="Ctrl">
  <head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link  href="{{url('/css/bootstrap.min.css')}}" rel="stylesheet">
    <link  href="{{url('/css/new_style.css')}}" rel="stylesheet">
    <link  href="{{url('/css/website.css')}}" rel="stylesheet">
    <link href="{{url('/css/ssi-uploader.min.css')}}" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <title>biznessKit</title>
    <script src="{{url('/js/angular.min.js')}}"></script>
  </head>
  <body ng-cloak>
    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <!-- Your customer chat code -->
    <div class="fb-customerchat"
      attribution=setup_tool
      page_id="1908267229501969">
    </div>
<!-- End Load Facebook SDK for JavaScript -->
    <div id="new-edit-panel" class="new-edit-panel" ng-show="edit_details==10" ng-click="edit_details=0" onclick="unblur_bg()"><!--help form starts here-->
      <div class="container" ng-click="$event.stopPropagation();">
        <button type="button" class="close mb-2" aria-label="Close" ng-click="edit_details=0" onclick="unblur_bg()">
          <span class="fa fa-window-close" aria-hidden="true"></span>
        </button>
        <h4>We are here to help!</h4>
        <div class="row mt-3">
          <div class="col-md-6">
            <form id="help_form" method="post">
              <div class="form-group">
                <label for="help_name">Name *</label>
                <input type="text" name="help_name" class="form-control" placeholder="Full Name" value="<% client.first_name %> <% client.last_name %>">
              </div>
              <div class="form-group">
                <label for="help_email">Email *</label>
                <input type="email" class="form-control" name="help_email" placeholder="Email Address" value="<% card.email %>">
              </div>
              <div class="form-group">
                <label for="help_category">Category</label>
                <select class="form-control" name="help_category">
                  <option>Display Errors</option>
                  <option>Billing</option>
                  <option>Hosting</option>
                  <option>General</option>
                </select>
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Message *</label>
                <textarea name="help_message" class="form-control" rows="5"></textarea>
              </div>
              <div class="form-group">
                <p id="help_alert" class="text-success d-none">Message sent! We will contact you shortly.</p>
              </div>
            </form>
            <button type="btn" class="btn btn-primary"  onclick="submit_help()"><i class="fa fa-paper-plane"></i> Send</button>
          </div>
          <div class="col-md-6">
            <div class="card bg-dark text-white hidden-sm-down">
              <img class="card-img img-responsive rounded" src="{{url('img/help-bg.jpg')}}"  style="width:100%;height:100%;filter:brightness(30%);">
              <div class="card-img-overlay">
                <h5 class="card-title"></h5>
                <ul class="help-contact">
                  <li><i class="fa fa-map-marker-alt"></i> <p>Nairobi, Kenya</p></li>
                  <li><i class="fa fa-phone"></i> <p>025</p></li>
                  <li><i class="fa fa-envelope"></i> <p>info@biznesskit.com</p></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!--help form ends here-->
    <div id="blog-panel" class="new-edit-panel" ng-show="edit_details==11" ng-click="edit_details=0" onclick="unblur_bg()"><!--help form starts here-->
      <div class="container" ng-click="$event.stopPropagation();">
        <button type="button" class="close mb-2" aria-label="Close" ng-click="edit_details=0" onclick="unblur_bg()">
          <span class="fa fa-window-close" aria-hidden="true"></span>
        </button>
        <h4>Post a new message</h4>
        <div class="row mt-3">
          <div class="col-md-12">
            <form id="blog_form" method="post">
              <div class="form-group">
                <label for="help_name">Title *</label>
                <input type="text" name="blog_title" class="form-control" placeholder="Title" >
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Message *</label>
                <textarea name="blog_content" class="form-control" rows="15"></textarea>
              </div>
              <div id="blog-social-icons" class="form-group d-none">
                <label for="help_name">Share on</label>
                <div class="blog-social-icons" >
                  <!--<a href="#"><i class="fab fa-facebook-square fb-icon"></i></a>-->
                  <a id="twitter-share-btn" target="_blank"><i class="fab fa-twitter-square twitter-icon"></i></a>
                  <!--<i class="fab fa-instagram ig-icon"></i>
                  <i class="fab fa-linkedin linkedin-icon"></i>-->
                </div>
              </div>
              <div class="form-group">
                <p id="blog_alert" class="text-success d-none">Your message has been posted!.</p>
              </div>
            </form>
            <button type="btn" class="btn btn-primary"  onclick="submit_blog()"><i class="fa fa-globe"></i> Post</button>
          </div>
        </div>
      </div>
    </div><!--blog form ends here-->
    <div id="new-edit-panel" class="new-edit-panel" ng-show="edit_details==2" ng-click="edit_details=0" onclick="unblur_bg()"><!--Edit form starts here-->
      <div class="container" ng-click="$event.stopPropagation();">
        <form>
          <button type="button" class="close mb-2" aria-label="Close" ng-click="edit_details=0" onclick="unblur_bg()">
            <span class="fa fa-window-close" aria-hidden="true"></span>
          </button>
          <h4>Card Details</h4>
          <div class="form-group">
            <label for="first_name"><i class="fa fa-user"></i> First name</label>
            <input type="text" id="first_name" class="form-control form-control-lg"  placeholder="" ng-model="card.first_name" onchange="update_val(this.id,this.value,'','','Card')">
            <small class="form-text text-muted"></small>
          </div>
          <div class="form-group">
            <label for="last_name"><i class="fa fa-user"></i> Last name</label>
            <input type="text" id="last_name" class="form-control form-control-lg"  placeholder="" ng-model="card.last_name" onchange="update_val(this.id,this.value,'','','Card')">
            <small class="form-text text-muted"></small>
          </div>
          <div class="form-group">
            <label for="designation"><i class="fa fa-briefcase"></i> Designation</label>
            <input type="text" id="designation" class="form-control form-control-lg"  placeholder="" ng-model="card.designation" onchange="update_val(this.id,this.value,'','','Card')">
            <small class="form-text text-muted"></small>
          </div>
          <div class="form-group">
            <label for="phone"><i class="fa fa-mobile-alt"></i> Phone</label>
            <input type="text" id="phone" class="form-control form-control-lg" placeholder="" ng-model="card.phone" onchange="update_val(this.id,this.value,'','','Card')">
            <small class="form-text text-muted"></small>
          </div>
          <div class="form-group">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="email" id="email" class="form-control form-control-lg" placeholder="" ng-model="card.email" onchange="update_val(this.id,this.value,'','','Card')">
            <small class="form-text text-muted"></small>
          </div>
          <div class="form-group">
            <label for="address"><i class="fa fa-map-marker-alt"></i> Address</label>
            <input type="text"  id="address" class="form-control form-control-lg" placeholder="" ng-model="card.address" onchange="update_val(this.id,this.value,'','','Card')">
            <small class="form-text text-muted"></small>
          </div>
          <div class="form-group">
            <label for="website"><i class="fa fa-globe-americas"></i> Website</label>
            <input type="text" id="website" class="form-control form-control-lg" placeholder="" ng-model="card.website" onchange="update_val(this.id,this.value,'','','Card')">
            <small class="form-text text-muted"></small>
          </div>
          <div class="form-group">
            <label for="qr_url"><i class="fa fa-qrcode"></i> Qr url</label>
            <input type="text" id="qr_url" class="form-control form-control-lg" placeholder="" ng-model="card.qr_url" onchange="update_val(this.id,this.value,'','','Card')">
            <small class="form-text text-muted"></small>
          </div>
          <button type="submit" class="btn btn-primary" ng-click="edit_details=0" onclick="unblur_bg()"><i class="fa fa-thumbs-up"></i> Done</button>
        </form>
      </div>
    </div><!--Edit form ends here-->
    <div id="new-edit-panel" class="new-edit-panel" ng-show="edit_details==1" ng-click="edit_details=0" onclick="unblur_bg()"><!--Edit form starts here-->
      <div class="container" ng-click="$event.stopPropagation();">
        <form class="new-edit-form">
          <button type="button" class="close mb-2" aria-label="Close" ng-click="edit_details=0" onclick="unblur_bg()">
            <span class="fa fa-window-close" aria-hidden="true"></span>
          </button>
          <dl id="title-1" onclick="toggle('panel-1',this.id)">
            <dd><h4>Basic Information</h4></dd>
            <dt><i class="fa fa-chevron-circle-up"></i></dt>
          </dl>

          <div id="panel-1">
            <div class="form-group">
              <label for="main_image"><i class="fa fa-image"></i> Main Image</label>
              <input type="file" id="main_image" class="form-control form-control-lg" onchange="update_val(this.id,this.value)">
              <small class="form-text text-muted"></small>
            </div>
            <div class="form-group">
              <label for="theme"><i class="fa fa-image"></i> Theme</label>
              <select id="theme" name="theme" class="form-control form-control-lg" onchange="update_val(this.id,this.value)">
                <option value="index.php">Dark</option>
                <option value="index-2.php">Light</option>
              </select>
              <small class="form-text text-muted"></small>
            </div>
            <div class="form-group">
              <label for="tag_line_1"><i class="fa fa-paragraph"></i> Headline 1</label>
              <input type="text" id="tag_line_1" class="form-control form-control-lg" placeholder="Headline 1" ng-model="client.tag_line_1" onchange="update_val(this.id,this.value)">
              <small class="form-text text-muted"></small>
            </div>
            <div class="form-group">
              <label for="tag_line_2"><i class="fa fa-paragraph"></i> Headline 2</label>
              <input type="text" id="tag_line_2" class="form-control form-control-lg" placeholder="Headline 2" ng-model="client.tag_line_2" onchange="update_val(this.id,this.value)">
              <small class="form-text text-muted"></small>
            </div>
          </div>
          <dl id="title-2"  onclick="toggle('panel-2',this.id)">
            <dd><h4>Self Description</h4></dd>
            <dt><i class="fa fa-chevron-circle-down"></i></dt>
          </dl>
          <div id="panel-2">
            <div class="form-group">
              <label for="about_title"><i class="fa fa-heading"></i> Section Title</label>
              <input type="text" id="about_title" class="form-control form-control-lg" placeholder="" ng-model="client.about_title" onchange="update_val(this.id,this.value)">
              <small class="form-text text-muted"></small>
            </div>
            <div class="form-group">
              <label for="about_story_title"><i class="fa fa-heading"></i> Sub Title</label>
              <input type="text" id="about_story_title" class="form-control form-control-lg" placeholder="" ng-model="client.about_story_title" onchange="update_val(this.id,this.value)">
              <small class="form-text text-muted"></small>
            </div>
            <div class="form-group">
              <label for="about_story"><i class="fa fa-paragraph"></i> Short bio..</label>
              <textarea  id="about_story" class="form-control form-control-lg" placeholder="" ng-model="client.about_story" onchange="update_val(this.id,this.value)" rows="5"></textarea>
              <small class="form-text text-muted"></small>
            </div>
          </div>
          <dl id="title-3" onclick="toggle('panel-3',this.id)">
            <dd><h4>Vision & Mission</h4></dd>
            <dt><i class="fa fa-chevron-circle-down"></i></dt>
          </dl>
          <div id="panel-3">
            <div class="form-group">
              <label for="vision_statement"><i class="fa fa-heading"></i> My Vision</label>
              <input type="text"  id="vision_statement" class="form-control form-control-lg" placeholder="" ng-model="client.vision_statement" onchange="update_val(this.id,this.value)">
              <small class="form-text text-muted"></small>
            </div>
            <div class="form-group">
              <label for="mission_statement"><i class="fa fa-heading"></i> My Mission</label>
              <input type="text"  id="mission_statement" class="form-control form-control-lg" placeholder="My Mission" ng-model="client.mission_statement" onchange="update_val(this.id,this.value)">
            </div>
          </div>
          <dl id="title-4"  onclick="toggle('panel-4',this.id)">
            <dd><h4>Social Media</h4></dd>
            <dt><i class="fa fa-chevron-circle-down"></i></dt>
          </dl>
          <div id="panel-4">
            <div class="form-group">
              <label for="facebook_link"><i class="fab fa-facebook"></i> My Facebook Account</label>
              <input type="text" id="facebook_link" class="form-control form-control-lg" placeholder="My Facebook Account" ng-model="client.facebook_link" onchange="update_val(this.id,this.value)">
            </div>
            <div class="form-group">
              <label for="twitter_link"><i class="fab fa-twitter"></i> My Twitter Account</label>
              <input type="text" id="twitter_link" class="form-control form-control-lg" placeholder="" ng-model="client.twitter_link" onchange="update_val(this.id,this.value)">
            </div>
            <div class="form-group">
              <label for="google_plus_link"><i class="fab fa-google-plus"></i> My Google plus Account</label>
              <input type="text" id="google_plus_link" class="form-control form-control-lg" placeholder="" ng-model="client.google_plus_link" onchange="update_val(this.id,this.value)">
            </div>
            <div class="form-group">
              <label for="linkedin_link"><i class="fab fa-linkedin"></i> My Linkedin Account</label>
              <input type="text" id="linkedin_link" class="form-control form-control-lg" placeholder="" ng-model="client.linkedin_link" onchange="update_val(this.id,this.value)">
            </div>
            <div class="form-group">
              <label for="instagram_link"><i class="fab fa-instagram"></i> My Instagram Account</label>
              <input type="text" id="instagram_link" class="form-control form-control-lg" placeholder="" ng-model="client.instagram_link" onchange="update_val(this.id,this.value)">
            </div>
          </div>
          <dl id="title-5"  onclick="toggle('panel-5',this.id)">
            <dd><h4>Skills & Interests</h4></dd>
            <dt><i class="fa fa-chevron-circle-down"></i></dt>
          </dl>
          <div id="panel-5">
            <div class="form-group">
              <label for="skill_title"><i class="fa fa-heading"></i> Section Title</label>
              <input type="text"  id="skill_title" class="form-control form-control-lg" placeholder="Section Title" ng-model="client.skill_title" onchange="update_val(this.id,this.value)">
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                <label for="skill_1"><i class="fa fa-user-tie"></i> Skill 1</label>
                <input type="text" id="skill_1" class="form-control form-control-lg" placeholder="" ng-model="client.skill_1" onchange="update_val(this.id,this.value)">
              </div>
              <div class="form-group col-md-6">
                <label for="skill_1_level"><i class="fa fa-percent"></i> Level</label>
                <input type="text" id="skill_1_level" class="form-control form-control-lg" placeholder="" ng-model="client.skill_1_level" onchange="update_val(this.id,this.value)">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                <label for="skill_2"><i class="fa fa-user-tie"></i> Skill 2</label>
                <input type="text" id="skill_2" class="form-control form-control-lg" placeholder="" ng-model="client.skill_2" onchange="update_val(this.id,this.value)">
              </div>
              <div class="form-group col-md-6">
                <label for="skill_2_level"><i class="fa fa-percent"></i> Level</label>
                <input type="text" id="skill_2_level" class="form-control form-control-lg" placeholder="" ng-model="client.skill_2_level" onchange="update_val(this.id,this.value)">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                <label for="skill_3"><i class="fa fa-user-tie"></i> Skill 3</label>
                <input type="text" id="skill_2" class="form-control form-control-lg" placeholder="" ng-model="client.skill_2" onchange="update_val(this.id,this.value)">
              </div>
              <div class="form-group col-md-6">
                <label for="skill_3_level"><i class="fa fa-percent"></i> Level</label>
                <input type="text" id="skill_3_level" class="form-control form-control-lg" placeholder="" ng-model="client.skill_3_level" onchange="update_val(this.id,this.value)">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                <label for="skill_4"><i class="fa fa-user-tie"></i> Skill 4</label>
                <input type="text" id="skill_4" class="form-control form-control-lg" placeholder="" ng-model="client.skill_4" onchange="update_val(this.id,this.value)">
              </div>
              <div class="form-group col-md-6">
                <label for="skill_4_level"><i class="fa fa-percent"></i> Level</label>
                <input type="text" id="skill_4_level" class="form-control form-control-lg" placeholder="" ng-model="client.skill_4_level" onchange="update_val(this.id,this.value)">
              </div>
            </div>
          </div>
          <dl id="title-6"  onclick="toggle('panel-6',this.id)">
            <dd><h4>Portfolio</h4></dd>
            <dt><i class="fa fa-chevron-circle-down"></i></dt>
          </dl>
          <div id="panel-6">
            <div class="form-group">
              <label for="speciality_title"><i class="fa fa-heading"></i> Section Title</label>
              <input type="text"  id="speciality_title" class="form-control form-control-lg" placeholder="" ng-model="client.speciality_title" onchange="update_val(this.id,this.value)">
            </div>
            <div class="form-group">
              <label for="speciality_sub_title"><i class="fa fa-heading"></i> Sub Title</label>
              <input type="text" id="speciality_sub_title" class="form-control form-control-lg" placeholder="" ng-model="client.speciality_sub_title" onchange="update_val(this.id,this.value)">
            </div>
            <div class="row">
              <div class="form-group col-md-8">
                <label for="speciality_1"><i class="fa fa-briefcase"></i> Portfolio 1</label>
                <input type="text" id="speciality_1" class="form-control form-control-lg" placeholder="Portfolio 1" ng-model="client.speciality_1" onchange="update_val(this.id,this.value)">
              </div>
              <div class="form-group col-md-4">
                <label for="speciality_1_icon"><i class="fa fa-flag"></i> Icon</label>
                <select id="speciality_1_icon" class="form-control form-control-lg" ng-model="client.speciality_1_icon" onchange="update_val(this.id,this.value)" style="width:100%;">
                  <option value="fa-facebook">Book icon</option>
                  <option value="fa-user">Person icon</option>
                  <option value="fa-globe">Globe icon</option>
                  <option value="fa-desktop">Computer icon</option>
                  <option value="fa-mobile">Mobile icon</option>
                  <option value="fa-home">Home icon</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="speciality_1_text"><i class="fa fa-paragraph"></i> Portfolio 1 Description</label>
              <textarea id="speciality_1_text" class="form-control form-control-lg" placeholder="Portfolio 1 Description" ng-model="client.speciality_1_text" onchange="update_val(this.id,this.value)" rows="7"></textarea>
            </div>
            <div class="form-group">
              <label for="speciality_1_url"><i class="fa fa-link"></i> Portfolio 1 Url</label>
              <input type="text" id="speciality_1_url" class="form-control form-control-lg" placeholder="" ng-model="client.speciality_1_url" onchange="update_val(this.id,this.value)">
            </div>
            <div class="row">
              <div class="form-group col-md-8">
                <label for="speciality_2"><i class="fa fa-briefcase"></i> Portfolio 2</label>
                <input type="text" id="speciality_2" class="form-control form-control-lg" placeholder="Portfolio 2" ng-model="client.speciality_2" onchange="update_val(this.id,this.value)">
              </div>
              <div class="form-group col-md-4">
                <label for="speciality_2_icon"><i class="fa fa-flag"></i> Icon</label>
                <select id="speciality_2_icon" class="form-control form-control-lg" ng-model="client.speciality_2_icon" onchange="update_val(this.id,this.value)" style="width:100%;">
                  <option value="fa-facebook">Book icon</option>
                  <option value="fa-user">Person icon</option>
                  <option value="fa-globe">Globe icon</option>
                  <option value="fa-desktop">Computer icon</option>
                  <option value="fa-mobile">Mobile icon</option>
                  <option value="fa-home">Home icon</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="speciality_2_text"><i class="fa fa-paragraph"></i> Portfolio 2 Description</label>
              <textarea id="speciality_2_text" class="form-control form-control-lg" placeholder="Portfolio 2 Description" ng-model="client.speciality_2_text" onchange="update_val(this.id,this.value)" rows="7"></textarea>
            </div>
            <div class="form-group">
              <label for="speciality_2_url"><i class="fa fa-link"></i> Portfolio 2 Url</label>
              <input type="text" id="speciality_2_url" class="form-control form-control-lg" placeholder="" ng-model="client.speciality_2_url" onchange="update_val(this.id,this.value)">
            </div>
            <div class="row">
              <div class="form-group col-md-8">
                <label for="speciality_3"><i class="fa fa-briefcase"></i> Portfolio 3</label>
                <input type="text" id="speciality_3" class="form-control form-control-lg" placeholder="Portfolio 3" ng-model="client.speciality_3" onchange="update_val(this.id,this.value)">
              </div>
              <div class="form-group col-md-4">
                <label for="speciality_3_icon"><i class="fa fa-flag"></i> Icon</label>
                <select id="speciality_3_icon" class="form-control form-control-lg" ng-model="client.speciality_3_icon" onchange="update_val(this.id,this.value)" style="width:100%;">
                  <option value="fa-facebook">Book icon</option>
                  <option value="fa-user">Person icon</option>
                  <option value="fa-globe">Globe icon</option>
                  <option value="fa-desktop">Computer icon</option>
                  <option value="fa-mobile">Mobile icon</option>
                  <option value="fa-home">Home icon</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="speciality_3_text"><i class="fa fa-paragraph"></i> Portfolio 3 Description</label>
              <textarea id="speciality_3_text" class="form-control form-control-lg" placeholder="Portfolio 3 Description" ng-model="client.speciality_3_text" onchange="update_val(this.id,this.value)" rows="7"></textarea>
            </div>
            <div class="form-group">
              <label for="speciality_3_url"><i class="fa fa-link"></i> Portfolio 3 Url</label>
              <input type="text" id="speciality_3_url" class="form-control form-control-lg" placeholder="" ng-model="client.speciality_3_url" onchange="update_val(this.id,this.value)">
            </div>
            <div class="row">
              <div class="form-group col-md-8">
                <label for="speciality_4"><i class="fa fa-briefcase"></i> Portfolio 4</label>
                <input type="text" id="speciality_4" class="form-control form-control-lg" placeholder="Portfolio 4" ng-model="client.speciality_4" onchange="update_val(this.id,this.value)">
              </div>
              <div class="form-group col-md-4">
                <label for="speciality_4_icon"><i class="fa fa-flag"></i> Icon</label>
                <select id="speciality_4_icon" class="form-control form-control-lg" ng-model="client.speciality_4_icon" onchange="update_val(this.id,this.value)" style="width:100%;">
                  <option value="fa-facebook">Book icon</option>
                  <option value="fa-user">Person icon</option>
                  <option value="fa-globe">Globe icon</option>
                  <option value="fa-desktop">Computer icon</option>
                  <option value="fa-mobile">Mobile icon</option>
                  <option value="fa-home">Home icon</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="speciality_4_text"><i class="fa fa-paragraph"></i> Portfolio 4 Description</label>
              <textarea id="speciality_4_text" class="form-control form-control-lg" placeholder="Portfolio 4 Description" ng-model="client.speciality_4_text" onchange="update_val(this.id,this.value)" rows="7"></textarea>
            </div>
            <div class="form-group">
              <label for="speciality_4_url"><i class="fa fa-link"></i> Portfolio 4 Url</label>
              <input type="text" id="speciality_4_url" class="form-control form-control-lg" placeholder="" ng-model="client.speciality_4_url" onchange="update_val(this.id,this.value)">
            </div>
          </div>
          <dl id="title-7"  onclick="toggle('panel-7',this.id)">
            <dd><h4>Contact Form</h4></dd>
            <dt><i class="fa fa-chevron-circle-down"></i></dt>
          </dl>
          <div id="panel-7">
            <div class="form-group">
              <label for="contact_section_title"><i class="fa fa-heading"></i> Section Title</label>
              <input type="text"  id="contact_section_title" class="form-control form-control-lg" placeholder="" ng-model="client.contact_section_title" onchange="update_val(this.id,this.value)">
            </div>
            <div class="form-group">
              <label for="contact_receiving_email"><i class="fa fa-envelope"></i> Send enquiries to</label>
              <input type="text"  id="contact_receiving_email" class="form-control form-control-lg" placeholder="" ng-model="client.contact_receiving_email" onchange="update_val(this.id,this.value)">
            </div>
          </div>
          <div class="row">
            <button type="submit" class="btn btn-primary" ng-click="edit_details=0" onclick="unblur_bg()"><i class="fa fa-thumbs-up"></i> Done</button>
          </div>
        </form>
      </div>
    </div><!--Edit form ends here-->
    <div id="site-panel" class="container-fluid <?php if(is_null($user->password) || is_null($user->email)){echo 'blur-bg';} ?>">
      <div class="row">
        <header><!--start of header section-->
          <div class="col-md-12">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-8">
                  <h1 class="text-warning"><a href="{{url('/')}}">biznessKit</a></h1>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline account-nav">
                      <li class="list-inline-item" ng-click="active_tool=7"><a href="#"><span class="fa fa-user"></span> <% client.first_name %> <% client.last_name %></a></li>
                      <li class="list-inline-item" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><a href="#"><span class="fa fa-unlink"></span> logout</a></li>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                    </ul>
                </div>
              </div>
            </div>
          </div>
        </header><!--end of header section-->
      </div>
      <div class="row">
        <div class="col-md-9 no-padding">
          @yield('main')
        </div>
        <div class="col-md-3 no-padding">
          <aside >
            <div class="panel">
               <ul class="shelf-icons">
                  <li ng-class="active_shelf==1 ? 'active' : 'inactive'" ng-click="active_shelf=1;active_tool=1;edit_details=0" ng-show="tool_A==true"><a href="#"><i class="fas fa-globe-americas"></i></a></li>
                  <li ng-class="active_shelf==2 ? 'active' : 'inactive'" ng-click="active_shelf=2"><a href="#"><i class="fa fa-bullseye"></i></a></li>
                  <li ng-class="active_shelf==3 ? 'active' : 'inactive'" ng-click="active_shelf=3;active_tool=2;edit_details=0" ng-show="tool_B==true"><a href="#"><i class="fa fa-book"></i></a></li>
                  <li ng-class="active_shelf==4 ? 'active' : 'inactive'" ng-click="active_shelf=4;active_tool=3;edit_details=0" ng-show="tool_C==true"><a href="#"><i class="fa fa-file"></i></a></li>
                  <li ng-class="active_shelf==5 ? 'active' : 'inactive'" ng-click="active_shelf=5;active_tool=4;edit_details=0" ng-show="tool_D==true"><a href="#"><i class="fa fa-envelope"></i></a></li>
                  <li ng-class="active_shelf==7 ? 'active' : 'inactive'" ng-click="active_shelf=7;edit_details=0"><a href="#"><i class="fa fa-edit"></i></a></li>
                  <li ng-class="active_shelf==6 ? 'active' : 'inactive'" ng-click="active_shelf=6;edit_details=0"><a href="#"><i class="fa 	fa-question-circle"></i></a></li>
               </ul>
                <ul class="shelves">
                  <li ng-click="active_shelf=1;active_tool=1;edit_details=0" ng-show="tool_A==true"><a href="#">Website</a></li>
                  <li ng-click="active_shelf=2" ng-show="active_tool==1 && tool_A==true">Design: <select ng-model="client.design" id="design" onchange="update_val(this.id,this.value)"><option value="1">expo</option><option value="2">Magic</option><option value="3">New</option><option value="4">Silk</option></select></li>
                  <li ng-click="active_shelf=3" ng-show="active_tool==2 && tool_B==true">Design: <select ng-model="card.card_design" id="card_design" onchange="update_val(this.id,this.value,'','','Card')"><option value="1">stylish</option><option value="2">classic</option><option value="3">elegant</option></select></li>
                  <li ng-click="active_shelf=3;active_tool=2;edit_details=0" ng-show="tool_B==true"><a href="#">Business Card</a></li>
                  <li ng-click="active_shelf=4;active_tool=3;edit_details=0" ng-show="tool_C==true"><a href="#">Curriculum Vitae</a></li>
                  <li ng-click="active_shelf=5;active_tool=4;edit_details=0" ng-show="tool_D==true"><a href="#">Letter</a></li>
                  <li ng-click="active_shelf=7;edit_details=11" onclick="blur_bg()"><a href="#"> Blog</a></li>
                  <li ng-click="active_shelf=6;edit_details=10" onclick="blur_bg()"><a href="#"> Help & Support</a></li>
                </ul>
            </div>
            <div class="panel">
              <section class="tools">
                <ul>
                  <li><input id="tool_A"  type="checkbox"  ng-model="tool_A"  ng-click="active_shelf=1;active_tool=1;edit_details=0" onchange="update_val(this.id,this.value,'','','User')" /> Website</li>
                  <li><input id="tool_B"  type="checkbox" ng-model="tool_B" ng-click="active_shelf=3;active_tool=2;edit_details=0" onchange="update_val(this.id,this.value,'','','User')" /> Card</li>
                  <!--<li><input type="checkbox" ng-model="tool_C" ng-click="active_shelf=4;active_tool=3"/> Cv</li>
                  <li><input type="checkbox" ng-model="tool_D" ng-click="active_shelf=5;active_tool=4"/> Letter</li>-->
                </ul>
              </section>
            </div>
            <hr>
            <div class="panel">
              <section class="desk" ng-show="my_tools==1" >
              <h2><i class="fa fa-briefcase" aria-hidden="true"></i> My tools</h2>
              <ul class="mb3">
                <li ng-show="tool_A==1" ng-class="active_tool==1 || active_tool==5 || active_tool==6 ? 'active' : 'inactive'" ng-click="active_shelf=1;active_tool=1;edit_details=0" class="A">
                  <a href="#"><i class="fa fa-globe-americas" aria-hidden="true"></i></a>
                </li>
                <li ng-show="tool_B==1"  ng-class="active_tool==2 ? 'active' : 'inactive'" ng-click="active_shelf=3;active_tool=2;edit_details=0" class="B">
                  <a href="#"><i class="fa fa-address-card" aria-hidden="true"></i></a>
                </li>
              </ul>
              <ul class="mb3">
                <li ng-show="tool_C==1"  ng-class="active_tool==3 ? 'active' : 'inactive'" ng-click="active_shelf=4;active_tool=3;edit_details=0" class="C">
                  <a href="#"><i class="fa fa-file" aria-hidden="true"></i></a>
                </li>
                <li ng-show="tool_D==1"  ng-class="active_tool==4 ? 'active' : 'inactive'" ng-click="active_shelf=5;active_tool=4;edit_details=0" class="D">
                  <a href="#"><i class="fa fa-list-alt" aria-hidden="true"></i></a>
                </li>
              </ul>
            </section><!--end cards shelf items-->
            </div>
            <hr ng-show="edit_details > 0">
          </aside>
        </div>

      </div>
      <div class="row">
        <footer class="bg-dark">
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <h2>&copy;{{date('Y')}} All rights reserved</h2>
              </div>
              <div class="col-md-4">
              </div>
              <div class="col-md-4">
                <h2>Lets stay connected</h2>
                <ul>
                  <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                  <li><a href="#"><span class="fab fa-twitter-square"></span></a></li>
                  <li><a href="#"><span class="fab fa-linkedin-square"></span></a></li>
                  <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div><!--end app container-->
    @extends('templates.angular-variables')
    <?php if(is_null($user->password) || is_null($user->email)) {?>
      <div class="passwordEmailPrompt" id="passwordEmailPrompt">
        <form>
          <div class="card">
            <div class="card-header text-white bg-info">
              <strong>PLEASE CHOOSE A PASSWORD</strong>
            </div>
            <div class="card-body">
              <?php if(is_null($user->email)) {?>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
            <?php }elseif(is_null($user->password)) {?>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password" onchange="update_val(this.id,this.value,'','','User')">
              </div>
            <?php }?>
              <button type="submit" class="btn btn-primary" onclick="unblur_bg('passwordEmailPrompt')">Submit</button>
            </div>
          </div>
        </form>
      </div>

    <?php }?>
    <script src="{{url('/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{url('/js/bootstrap.min.js')}}"></script>
    <script src="{{url('/js/ssi-uploader.min.js')}}"></script>
    <script src="{{url('/js/main.js')}}"></script>
  </body>
</html>
