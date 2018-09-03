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
    <div id="new-edit-panel" class="new-edit-panel" ng-show="edit_details==2"><!--Edit form starts here-->
      <div class="container">
        <form class="new-edit-form">
          <button type="button" class="close mb-2" aria-label="Close" ng-click="edit_details=0" onclick="unblur_bg()">
            <span class="fa fa-window-close" aria-hidden="true"></span>
          </button>
          <dl id="title-card-1" class="row" onclick="toggle('panel-card-1',this.id)">
            <dd><h4>Basic Information</h4></dd>
            <dt><i class="fa fa-chevron-circle-up"></i></dt>
          </dl>
          <div id="panel-card-1" class="row">
            <div class="input-group input-group-icon">
              <div class="col-half">
                <input type="text"  id="first_name" placeholder="First Name" ng-model="card.first_name" onchange="update_val(this.id,this.value,'','','Card')">
                <div class="input-icon"><i class="fa fa-user"></i></div>
              </div>
              <div class="col-half">
                <div class="input-group">
                  <input type="text" id="last_name" placeholder="Last Name" ng-model="card.last_name" onchange="update_val(this.id,this.value,'','','Card')">
                  <div class="input-icon"><i class="fa fa-user"></i></div>
                </div>
              </div>
            </div>
            <div class="input-group input-group-icon">
              <div class="col-half">
                <input type="text" id="designation" placeholder="Designation" ng-model="card.designation" onchange="update_val(this.id,this.value,'','','Card')">
                <div class="input-icon"><i class="fa fa-briefcase"></i></div>
              </div>
              <div class="col-half">
                <div class="input-group">
                  <input type="text" id="phone" placeholder="Phone No." ng-model="card.phone" onchange="update_val(this.id,this.value,'','','Card')">
                  <div class="input-icon"><i class="fa fa-phone"></i></div>
                </div>
              </div>
            </div>
            <div class="input-group input-group-icon">
              <div class="col-half">
                <input type="email" id="email" placeholder="Email" ng-model="card.email" onchange="update_val(this.id,this.value,'','','Card')">
                <div class="input-icon"><i class="fa fa-envelope"></i></div>
              </div>
              <div class="col-half">
                <div class="input-group">
                  <input type="text"  id="address" placeholder="Address" ng-model="card.address" onchange="update_val(this.id,this.value,'','','Card')">
                  <div class="input-icon"><i class="fa fa-map-marker-alt"></i></div>
                </div>
              </div>
            </div>
            <div class="input-group input-group-icon">
              <input type="text" id="website" placeholder="Website" ng-model="card.website" onchange="update_val(this.id,this.value,'','','Card')">
              <div class="input-icon"><i class="fa fa-globe-americas"></i></div>
            </div>
            <div class="input-group input-group-icon">
              <input type="text" id="qr_url" placeholder="Qr url" ng-model="card.qr_url" onchange="update_val(this.id,this.value,'','','Card')">
              <div class="input-icon"><i class="fa fa-qrcode"></i></div>
            </div>
          </div>
          <div class="row">
            <div class="input-group" ng-click="edit_details=0" onclick="unblur_bg()">
              <input type="radio" name="gender" value="male"/>
              <label for="gender-male"><i class="fa fa-thumbs-up"></i> Done editing</label>
            </div>
          </div>
        </form>
      </div>
    </div><!--Edit form ends here-->
    <div id="new-edit-panel" class="new-edit-panel" ng-show="edit_details==1"><!--Edit form starts here-->
      <div class="container">
        <form class="new-edit-form">
          <button type="button" class="close mb-2" aria-label="Close" ng-click="edit_details=0" onclick="unblur_bg()">
            <span class="fa fa-window-close" aria-hidden="true"></span>
          </button>
          <dl id="title-1" class="row" onclick="toggle('panel-1',this.id)">
            <dd><h4>Basic Information</h4></dd>
            <dt><i class="fa fa-chevron-circle-up"></i></dt>
          </dl>
          <div id="panel-1" class="row">
            <div class="input-group input-group-icon">
              <div class="col-half">
                <input type="text"  id="first_name" placeholder="First Name" ng-model="card.first_name" onchange="update_val(this.id,this.value,'','','Card')">
                <div class="input-icon"><i class="fa fa-user"></i></div>
              </div>
              <div class="col-half">
                <div class="input-group">
                  <input type="text" id="last_name" placeholder="Last Name" ng-model="card.last_name" onchange="update_val(this.id,this.value,'','','Card')">
                  <div class="input-icon"><i class="fa fa-user"></i></div>
                </div>
              </div>
            </div>
            <div class="input-group input-group-icon">
              <div class="col-half">
                <input type="text" id="designation" placeholder="Designation" ng-model="card.designation" onchange="update_val(this.id,this.value,'','','Card')">
                <div class="input-icon"><i class="fa fa-briefcase"></i></div>
              </div>
              <div class="col-half">
                <div class="input-group">
                  <input type="text" id="phone" placeholder="Phone No." ng-model="card.phone" onchange="update_val(this.id,this.value,'','','Card')">
                  <div class="input-icon"><i class="fa fa-phone"></i></div>
                </div>
              </div>
            </div>
            <div class="input-group input-group-icon">
              <div class="col-half">
                <input type="email" id="email" placeholder="Email" ng-model="card.email" onchange="update_val(this.id,this.value,'','','Card')">
                <div class="input-icon"><i class="fa fa-envelope"></i></div>
              </div>
              <div class="col-half">
                <div class="input-group">
                  <input type="text"  id="address" placeholder="Address" ng-model="card.address" onchange="update_val(this.id,this.value,'','','Card')">
                  <div class="input-icon"><i class="fa fa-map-marker-alt"></i></div>
                </div>
              </div>
            </div>
            <div class="input-group input-group-icon">
              <input type="file"  id="main_image" name="main_image" placeholder="" onchange="update_val(this.id,this.value)">
              <div class="input-icon"><i class="fa fa-image"></i></div>
            </div>
            <div class="input-group input-group-icon">
              <input type="text" id="tag_line_1" placeholder="Headline 1" ng-model="client.tag_line_1" onchange="update_val(this.id,this.value)">
              <div class="input-icon"><i class="fa fa-heading"></i></div>
            </div>
            <div class="input-group input-group-icon">
              <input type="text" id="tag_line_2" placeholder="Headline 2" ng-model="client.tag_line_2" onchange="update_val(this.id,this.value)">
              <div class="input-icon"><i class="fa fa-paragraph"></i></div>
            </div>
            <div class="input-group input-group-icon">
              <input type="text" id="website" placeholder="Website" ng-model="card.website" onchange="update_val(this.id,this.value,'','','Card')">
              <div class="input-icon"><i class="fa fa-globe-americas"></i></div>
            </div>
            <div class="input-group input-group-icon">
              <input type="text" id="qr_url" placeholder="Qr url" ng-model="card.qr_url" onchange="update_val(this.id,this.value,'','','Card')">
              <div class="input-icon"><i class="fa fa-qrcode"></i></div>
            </div>
          </div>
          <dl id="title-2" class="row" onclick="toggle('panel-2',this.id)">
            <dd><h4>Self Description</h4></dd>
            <dt><i class="fa fa-chevron-circle-down"></i></dt>
          </dl>
          <div id="panel-2" class="row">
            <div class="input-group input-group-icon">
              <input type="text" id="about_title" placeholder="Section Title" ng-model="client.about_title" onchange="update_val(this.id,this.value)">
              <div class="input-icon"><i class="fa fa-heading"></i></div>
            </div>
            <div class="input-group input-group-icon">
              <input type="text" id="about_story_title" placeholder="Sub Title" ng-model="client.about_story_title" onchange="update_val(this.id,this.value)">
              <div class="input-icon"><i class="fa fa-paragraph"></i></div>
            </div>
            <div class="input-group">
              <textarea  id="about_story" placeholder="Short bio.." ng-model="client.about_story" onchange="update_val(this.id,this.value)" rows="5"></textarea>
            </div>
          </div>
          <dl id="title-3" class="row" onclick="toggle('panel-3',this.id)">
            <dd><h4>Vision & Mission</h4></dd>
            <dt><i class="fa fa-chevron-circle-down"></i></dt>
          </dl>
          <div id="panel-3" class="row">
            <div class="input-group input-group-icon">
              <input type="text"  id="vision_statement" placeholder="My Vision" ng-model="client.vision_statement" onchange="update_val(this.id,this.value)">
              <div class="input-icon"><i class="fa fa-heading"></i></div>
            </div>
            <div class="input-group input-group-icon">
              <input type="text"  id="mission_statement" placeholder="My Mission" ng-model="client.mission_statement" onchange="update_val(this.id,this.value)">
              <div class="input-icon"><i class="fa fa-heading"></i></div>
            </div>
          </div>
          <dl id="title-4" class="row" onclick="toggle('panel-4',this.id)">
            <dd><h4>Social Media</h4></dd>
            <dt><i class="fa fa-chevron-circle-down"></i></dt>
          </dl>
          <div id="panel-4" class="row">
            <div class="input-group input-group-icon">
              <input type="text" id="facebook_link" placeholder="My Facebook Account" ng-model="client.facebook_link" onchange="update_val(this.id,this.value)">
              <div class="input-icon"><i class="fab fa-facebook-f"></i></div>
            </div>
            <div class="input-group input-group-icon">
              <input type="text" id="twitter_link" placeholder="My Twitter Account" ng-model="client.twitter_link" onchange="update_val(this.id,this.value)">
              <div class="input-icon"><i class="fab fa-twitter"></i></div>
            </div>
            <div class="input-group input-group-icon">
              <input type="text" id="google_plus_link" placeholder="My Google plus Account" ng-model="client.google_plus_link" onchange="update_val(this.id,this.value)">
              <div class="input-icon"><i class="fab fa-google-plus"></i></div>
            </div>
            <div class="input-group input-group-icon">
              <input type="text" id="linkedin_link" placeholder="My Linkedin Account" ng-model="client.linkedin_link" onchange="update_val(this.id,this.value)">
              <div class="input-icon"><i class="fab fa-linkedin"></i></div>
            </div>
            <div class="input-group input-group-icon">
              <input type="text" id="instagram_link" placeholder="My Instagram Account" ng-model="client.instagram_link" onchange="update_val(this.id,this.value)">
              <div class="input-icon"><i class="fab fa-instagram"></i></div>
            </div>
          </div>
          <dl id="title-5" class="row" onclick="toggle('panel-5',this.id)">
            <dd><h4>Skills & Interests</h4></dd>
            <dt><i class="fa fa-chevron-circle-down"></i></dt>
          </dl>
          <div id="panel-5" class="row">
            <div class="input-group input-group-icon">
              <input type="text"  id="skill_title" placeholder="Section Title" ng-model="client.skill_title" onchange="update_val(this.id,this.value)">
              <div class="input-icon"><i class="fa fa-heading"></i></div>
            </div>
            <div class="input-group">
              <div class="col-half">
                <input type="text" id="skill_1" placeholder="Skill 1" ng-model="client.skill_1" onchange="update_val(this.id,this.value)">
              </div>
              <div class="col-half">
                <div class="input-group input-group-icon">
                  <input type="text" id="skill_1_level" placeholder="Level" ng-model="client.skill_1_level" onchange="update_val(this.id,this.value)">
                  <div class="input-icon"><i class="fa fa-percent"></i></div>
                </div>
              </div>
            </div>
            <div class="input-group">
              <div class="col-half">
                <input type="text" id="skill_2" placeholder="Skill 2" ng-model="client.skill_2" onchange="update_val(this.id,this.value)">
              </div>
              <div class="col-half">
                <div class="input-group input-group-icon">
                  <input type="text" id="skill_2_level" placeholder="Level" ng-model="client.skill_2_level" onchange="update_val(this.id,this.value)">
                  <div class="input-icon"><i class="fa fa-percent"></i></div>
                </div>
              </div>
            </div>
            <div class="input-group">
              <div class="col-half">
                <input type="text"  id="skill_3" placeholder="Skill 3" ng-model="client.skill_3" onchange="update_val(this.id,this.value)">
              </div>
              <div class="col-half">
                <div class="input-group input-group-icon">
                  <input type="text" id="skill_3_level" placeholder="Level" ng-model="client.skill_3_level" onchange="update_val(this.id,this.value)">
                  <div class="input-icon"><i class="fa fa-percent"></i></div>
                </div>
              </div>
            </div>
            <div class="input-group">
              <div class="col-half">
                <input type="text"  id="skill_4" placeholder="Skill 4" ng-model="client.skill_4" onchange="update_val(this.id,this.value)">
              </div>
              <div class="col-half">
                <div class="input-group input-group-icon">
                  <input type="text" id="skill_4_level" placeholder="Level" ng-model="client.skill_4_level" onchange="update_val(this.id,this.value)">
                  <div class="input-icon"><i class="fa fa-percent"></i></div>
                </div>
              </div>
            </div>
          </div>
          <dl id="title-6" class="row" onclick="toggle('panel-6',this.id)">
            <dd><h4>Portfolio</h4></dd>
            <dt><i class="fa fa-chevron-circle-down"></i></dt>
          </dl>
          <div id="panel-6" class="row">
            <div class="input-group input-group-icon">
              <input type="text"  id="speciality_title" placeholder="Section Title" ng-model="client.speciality_title" onchange="update_val(this.id,this.value)">
              <div class="input-icon"><i class="fa fa-heading"></i></div>
            </div>
            <div class="input-group input-group-icon">
              <input type="text" id="speciality_sub_title" placeholder="Sub Title" ng-model="client.speciality_sub_title" onchange="update_val(this.id,this.value)">
              <div class="input-icon"><i class="fa fa-paragraph"></i></div>
            </div>
            <div class="input-group">
              <div class="col-half">
                <input type="text" id="speciality_1" placeholder="Portfolio 1" ng-model="client.speciality_1" onchange="update_val(this.id,this.value)">
              </div>
              <div class="col-half input-group-icon">
                <select id="speciality_1_icon" ng-model="client.speciality_1_icon" onchange="update_val(this.id,this.value)" style="width:100%;">
                  <option value="fa-facebook">Book icon</option>
                  <option value="fa-user">Person icon</option>
                  <option value="fa-globe">Globe icon</option>
                  <option value="fa-desktop">Computer icon</option>
                  <option value="fa-mobile">Mobile icon</option>
                  <option value="fa-home">Home icon</option>
                </select>
              </div>
            </div>
            <div class="input-group input-group-icon">
              <textarea id="speciality_1_text" placeholder="Portfolio 1 Description" ng-model="client.speciality_1_text" onchange="update_val(this.id,this.value)" rows="7"></textarea>
            </div>
            <div class="input-group">
              <div class="col-half">
                <input type="text" id="speciality_2" placeholder="Portfolio 2" ng-model="client.speciality_2" onchange="update_val(this.id,this.value)">
              </div>
              <div class="col-half input-group-icon">
                <select id="speciality_2_icon" placeholder="" ng-model="client.speciality_2_icon" onchange="update_val(this.id,this.value)">
                  <option value="fa-facebook">Book icon</option>
                  <option value="fa-user">Person icon</option>
                  <option value="fa-globe">Globe icon</option>
                  <option value="fa-desktop">Computer icon</option>
                  <option value="fa-mobile">Mobile icon</option>
                  <option value="fa-home">Home icon</option>
                </select>
              </div>
            </div>
            <div class="input-group input-group-icon">
              <textarea id="speciality_2_text" placeholder="Portfolio 2 Description" ng-model="client.speciality_2_text" onchange="update_val(this.id,this.value)" rows="7"></textarea>
            </div>
            <div class="input-group">
              <div class="col-half">
                <input type="text" id="speciality_3" ng-model="client.speciality_3" onchange="update_val(this.id,this.value)">
              </div>
              <div class="col-half input-group-icon">
                <select id="speciality_3_icon" placeholder="" ng-model="client.speciality_3_icon" onchange="update_val(this.id,this.value)">
                  <option value="fa-facebook">Book icon</option>
                  <option value="fa-user">Person icon</option>
                  <option value="fa-globe">Globe icon</option>
                  <option value="fa-desktop">Computer icon</option>
                  <option value="fa-mobile">Mobile icon</option>
                  <option value="fa-home">Home icon</option>
                </select>
              </div>
            </div>
            <div class="input-group input-group-icon">
              <textarea  id="speciality_3_text" placeholder="Portfolio 3 Description" ng-model="client.speciality_3_text" onchange="update_val(this.id,this.value)" rows="7"></textarea>
            </div>
            <div class="input-group">
              <div class="col-half">
                <input type="text"  id="speciality_4" placeholder="Portfolio 4" ng-model="client.speciality_4" onchange="update_val(this.id,this.value)">
              </div>
              <div class="col-half input-group-icon">
                <select id="speciality_4_icon" placeholder="" ng-model="client.speciality_4_icon" onchange="update_val(this.id,this.value)">
                  <option value="fa-facebook">Book icon</option>
                  <option value="fa-user">Person icon</option>
                  <option value="fa-globe">Globe icon</option>
                  <option value="fa-desktop">Computer icon</option>
                  <option value="fa-mobile">Mobile icon</option>
                  <option value="fa-home">Home icon</option>
                </select>
              </div>
            </div>
            <div class="input-group input-group-icon">
              <textarea  id="speciality_4_text" placeholder="Portfolio 4 Description" ng-model="client.speciality_4_text" onchange="update_val(this.id,this.value)" rows="7"></textarea>
            </div>
          </div>
          <dl id="title-7" class="row" onclick="toggle('panel-7',this.id)">
            <dd><h4>Contact Form</h4></dd>
            <dt><i class="fa fa-chevron-circle-down"></i></dt>
          </dl>
          <div id="panel-7" class="row">
            <div class="input-group input-group-icon">
              <input type="text"  id="contact_section_title" placeholder="Section Title" ng-model="client.contact_section_title" onchange="update_val(this.id,this.value)">
              <div class="input-icon"><i class="fa fa-heading"></i></div>
            </div>
            <div class="input-group input-group-icon">
              <input type="text"  id="contact_receiving_email" placeholder="Send enquiries to" ng-model="client.contact_receiving_email" onchange="update_val(this.id,this.value)">
              <div class="input-icon"><i class="fa fa-envelope"></i></div>
            </div>
          </div>
          <div class="row">
            <div class="input-group" ng-click="edit_details=0" onclick="unblur_bg()">
              <input type="radio" name="gender" value="male"/>
              <label for="gender-male"><i class="fa fa-thumbs-up"></i> Done editing</label>
            </div>
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
                      <li class="list-inline-item"><a href="#"><span class="fa fa-user"></span> <% client.first_name %> <% client.last_name %></a></li>
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
        <div class="col-md-3 no-padding">
          <aside >
            <div class="panel">
               <ul class="shelf-icons">
                  <li ng-class="active_shelf==1 ? 'active' : 'inactive'" ng-click="active_shelf=1;active_tool=1;edit_details=0" ng-show="tool_A==true"><a href="#"><i class="fas fa-globe-americas"></i></a></li>
                  <li ng-class="active_shelf==2 ? 'active' : 'inactive'" ng-click="active_shelf=2"><a href="#"><i class="fa fa-bullseye"></i></a></li>
                  <li ng-class="active_shelf==3 ? 'active' : 'inactive'" ng-click="active_shelf=3;active_tool=2;edit_details=0" ng-show="tool_B==true"><a href="#"><i class="fa fa-book"></i></a></li>
                  <li ng-class="active_shelf==4 ? 'active' : 'inactive'" ng-click="active_shelf=4;active_tool=3;edit_details=0" ng-show="tool_C==true"><a href="#"><i class="fa fa-file"></i></a></li>
                  <li ng-class="active_shelf==5 ? 'active' : 'inactive'" ng-click="active_shelf=5;active_tool=4;edit_details=0" ng-show="tool_D==true"><a href="#"><i class="fa fa-envelope"></i></a></li>
                  <li ng-class="active_shelf==6 ? 'active' : 'inactive'" ng-click="active_shelf=6;edit_details=0"><a href="#"><i class="fa fa-question"></i></a></li>
               </ul>
                <ul class="shelves">
                  <li ng-click="active_shelf=1;active_tool=1;edit_details=0" ng-show="tool_A==true"><a href="#">Website</a></li>
                  <li ng-click="active_shelf=2">Design: <select ng-model="client.design" id="design" onchange="update_val(this.id,this.value)"><option value="1">expo</option><option value="2">Magic</option><option value="3">New</option></select></li>
                  <li ng-click="active_shelf=3;active_tool=2;edit_details=0" ng-show="tool_B==true"><a href="#">Business Card</a></li>
                  <li ng-click="active_shelf=4;active_tool=3;edit_details=0" ng-show="tool_C==true"><a href="#">Curriculum Vitae</a></li>
                  <li ng-click="active_shelf=5;active_tool=4;edit_details=0" ng-show="tool_D==true"><a href="#">Letter</a></li>
                  <li ng-click="active_shelf=6;edit_details=0"><a href="#"> Help</a></li>
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
        <div class="col-md-9 no-padding">
          @yield('main')
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
