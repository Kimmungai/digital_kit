<!DOCTYPE html>
<html lang="en" dir="ltr" ng-app="App" ng-controller="Ctrl">
  <head>
    <link  href="/css/bootstrap.min.css" rel="stylesheet">
    <link  href="/css/font-awesome.min.css" rel="stylesheet">
    <link  href="/css/new_style.css" rel="stylesheet">
    <link  href="/css/website.css" rel="stylesheet">
    <title>Digital Kit</title>
    <script src="/js/jquery-3.2.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/angular.min.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <header  ng-cloak><!--start of header section-->
          <div class="container">
            <div class="row">
              <div class="col-sm-8">
                <h1 class="text-warning"><a href="/">BiznessKit</a></h1>
              </div>
              <div class="col-sm-4">
                  <ul class="list-inline account-nav">
                    <li class="list-inline-item"><a href="#"><span class="fa fa-user"></span> <% client.first_name %> <% client.last_name %></a></li>
                    <li class="list-inline-item"><a href="#"><span class="fa fa-unlink"></span> logout</a></li>
                  </ul>
              </div>
            </div>
          </div>
        </header><!--end of header section-->
      </div>
      <div class="row">
        <div class="col-md-3 no-padding">
          <aside ng-cloak>
            <div class="panel">
               <ul class="shelf-icons">
                  <li ng-class="active_shelf==1 ? 'active' : 'inactive'" ng-click="active_shelf=1;active_tool=1" ng-show="tool_A==true"><a href="#"><i class="fa fa-globe"></i></a></li>
                  <li ng-class="active_shelf==2 ? 'active' : 'inactive'" ng-click="active_shelf=2"><a href="#"><i class="fa fa-bullseye"></i></a></li>
                  <li ng-class="active_shelf==3 ? 'active' : 'inactive'" ng-click="active_shelf=3;active_tool=2" ng-show="tool_B==true"><a href="#"><i class="fa fa-book"></i></a></li>
                  <li ng-class="active_shelf==4 ? 'active' : 'inactive'" ng-click="active_shelf=4;active_tool=3" ng-show="tool_C==true"><a href="#"><i class="fa fa-file"></i></a></li>
                  <li ng-class="active_shelf==5 ? 'active' : 'inactive'" ng-click="active_shelf=5;active_tool=4" ng-show="tool_D==true"><a href="#"><i class="fa fa-envelope"></i></a></li>
                  <li ng-class="active_shelf==6 ? 'active' : 'inactive'" ng-click="active_shelf=6"><a href="#"><i class="fa fa-question"></i></a></li>
               </ul>
                <ul class="shelves">
                  <li ng-click="active_shelf=1;active_tool=1" ng-show="tool_A==true"><a href="#">Website</a></li>
                  <li ng-click="active_shelf=2">Theme: <select><option>Light</option><option>Dark</option></select></li>
                  <li ng-click="active_shelf=3;active_tool=2" ng-show="tool_B==true"><a href="#">Business Card</a></li>
                  <li ng-click="active_shelf=4;active_tool=3" ng-show="tool_C==true"><a href="#">Curriculum Vitae</a></li>
                  <li ng-click="active_shelf=5;active_tool=4" ng-show="tool_D==true"><a href="#">Letter</a></li>
                  <li ng-click="active_shelf=6"><a href="#"> Help</a></li>
                </ul>
            </div>
            <div class="panel">
              <section class="tools">
                <ul>
                  <li><input type="checkbox"  ng-model="tool_A"  ng-click="active_shelf=1;active_tool=1" /> Website</li>
                  <li><input type="checkbox" ng-model="tool_B" ng-click="active_shelf=3;active_tool=2" /> Card</li>
                  <!--<li><input type="checkbox" ng-model="tool_C" ng-click="active_shelf=4;active_tool=3"/> Cv</li>
                  <li><input type="checkbox" ng-model="tool_D" ng-click="active_shelf=5;active_tool=4"/> Letter</li>-->
                </ul>
              </section>
            </div>
            <hr>
              <div class="panel" ng-cloak ng-show="edit_details==1"><!--edit panel starts here-->
                <section  class="desk edit-panel">
                  <span class="close" ng-click="edit_details=0"><i class="fa fa-close" aria-hidden="true"></i></span>
                  <h2><i class="fa fa-edit" aria-hidden="true"></i> Edit form</h2>
                  <dl>
                    <div class="field-title">Image</div>
                    <input type="file" class="form-control" id="main_image" placeholder="E.g. Peter" ng-model="client.main_image" onchange="update_val(this.id,this.value)">
                  </dl>
                  <dl>
                    <div class="field-title">Name</div>
                    <dt><input type="text" class="form-control" id="first_name" placeholder="E.g. Peter" ng-model="client.first_name" onblur="update_val(this.id,this.value)"></dt>
                    <dd><input type="text" class="form-control" id="last_name" placeholder="E.g. Smith" ng-model="client.last_name" onblur="update_val(this.id,this.value)"></dd>
                  </dl>
                  <dl>
                    <div class="field-title">Tagline 1</div>
                    <input type="text" class="form-control" id="tag_line_1" placeholder="E.g. Engineer" ng-model="client.tag_line_1" onblur="update_val(this.id,this.value)">
                  </dl>
                  <dl>
                    <div class="field-title">Tagline 2</div>
                    <input type="text" class="form-control" id="tag_line_2" placeholder="" ng-model="client.tag_line_2" onblur="update_val(this.id,this.value)">
                  </dl>
                  <dl>
                    <div class="field-title">Social Accounts</div>
                    <dt><span class="fa fa-facebook"></span></dt>
                    <dd><input type="text" class="form-control" id="facebook_link" placeholder="Facebook" ng-model="client.facebook_link" onblur="update_val(this.id,this.value)"></dd>
                    <dt><span class="fa fa-twitter"></span></dt>
                    <dd><input type="text" class="form-control" id="twitter_link" placeholder="Twitter" ng-model="client.twitter_link" onblur="update_val(this.id,this.value)"></dd>
                    <dt><span class="fa fa-google-plus"></span></dt>
                    <dd><input type="text" class="form-control" id="google_plus_link" placeholder="Google plus" ng-model="client.google_plus_link" onblur="update_val(this.id,this.value)"></dd>
                    <dt><span class="fa fa-linkedin"></span></dt>
                    <dd><input type="text" class="form-control" id="linkedin_link" placeholder="linked in" ng-model="client.linkedin_link" onblur="update_val(this.id,this.value)"></dd>
                    <dt><span class="fa fa-instagram"></span></dt>
                    <dd><input type="text" class="form-control" id="instagram_link" placeholder="Instagram" ng-model="client.instagram_link" onblur="update_val(this.id,this.value)"></dd>
                  </dl>
                  <dl>
                    <div class="field-title">About - title</div>
                    <input type="text" class="form-control" id="about_title" placeholder="" ng-model="client.about_title" onblur="update_val(this.id,this.value)">
                  </dl>
                  <dl>
                    <div class="field-title">About - subtitle</div>
                    <input type="text" class="form-control" id="about_story_title" placeholder="" ng-model="client.about_story_title" onblur="update_val(this.id,this.value)">
                  </dl>
                  <dl>
                    <div class="field-title">About</div>
                    <textarea  class="form-control" id="about_story" placeholder="" ng-model="client.about_story" onblur="update_val(this.id,this.value)" rows="5"></textarea>
                  </dl>
                  <dl>
                    <div class="field-title"></div>
                    <dt>Attach cv?</dt>
                    <dd>
                      <select   id="resume_downloadable" class="form-control" ng-model="client.resume_downloadable" onchange="update_val(this.id,this.value)">
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                      </select>
                    </dd>
                  </dl>
                  <dl>
                    <div class="field-title"></div>
                    <dt>CV download link</dt>
                    <dd>
                      <input type="text" class="form-control" id="resume_download_link" placeholder="" ng-model="client.resume_download_link" onblur="update_val(this.id,this.value)">
                    </dd>
                  </dl>
                  <dl>
                    <div class="field-title">Skills - title</div>
                    <input type="text"  class="form-control" id="skill_title" placeholder="Skills title" ng-model="client.skill_title" onblur="update_val(this.id,this.value)">
                  </dl>
                  <dl>
                    <dt>
                      Skill
                    </dt>
                    <dt>
                      level (%)
                    </dt>
                  </dl>
                  <dl>
                    <dt>
                      <input type="text"  class="form-control" id="skill_1" placeholder="Skill 1" ng-model="client.skill_1" onblur="update_val(this.id,this.value)">
                    </dt>
                    <dd>
                      <input type="text" class="form-control" id="skill_1_level" placeholder="" ng-model="client.skill_1_level" onblur="update_val(this.id,this.value)">
                    </dd>
                  </dl>
                  <dl>
                    <dt>
                      <input type="text"  class="form-control" id="skill_2" placeholder="" ng-model="client.skill_2" onblur="update_val(this.id,this.value)">
                    </dt>
                    <dd>
                      <input type="text" class="form-control" id="skill_2_level" placeholder="" ng-model="client.skill_2_level" onblur="update_val(this.id,this.value)">
                    </dd>
                  </dl>
                  <dl>
                    <dt>
                      <input type="text"  class="form-control" id="skill_3" placeholder="" ng-model="client.skill_3" onblur="update_val(this.id,this.value)">
                    </dt>
                    <dd>
                      <input type="text" class="form-control" id="skill_3_level" placeholder="" ng-model="client.skill_3_level" onblur="update_val(this.id,this.value)">
                    </dd>
                  </dl>
                  <dl>
                    <dt>
                      <input type="text"  class="form-control" id="skill_4" placeholder="" ng-model="client.skill_4" onblur="update_val(this.id,this.value)">
                    </dt>
                    <dd>
                      <input type="text" class="form-control" id="skill_4_level" placeholder="" ng-model="client.skill_4_level" onblur="update_val(this.id,this.value)">
                    </dd>
                  </dl>
                  <dl>
                    <div class="field-title">Vision statement</div>
                    <input type="text"  class="form-control" id="vision_statement" placeholder="Vision statement" ng-model="client.vision_statement" onblur="update_val(this.id,this.value)">
                  </dl>
                  <dl>
                    <div class="field-title">Services - title</div>
                    <input type="text"  class="form-control" id="speciality_title" placeholder="Speciality title" ng-model="client.speciality_title" onblur="update_val(this.id,this.value)">
                  </dl>
                  <dl><!--Speciality-->
                    <div class="field-title">Service 1</div>
                    <dt>
                      Service
                    </dt>
                    <dt>
                      Icon
                    </dt>
                  </dl>
                  <dl>
                    <dt>
                      <input type="text"  class="form-control" id="speciality_1" placeholder="" ng-model="client.speciality_1" onblur="update_val(this.id,this.value)">
                    </dt>
                    <dd>
                      <select  class="form-control" id="speciality_1_icon" placeholder="" ng-model="client.speciality_1_icon" onchange="update_val(this.id,this.value)">
                        <option value="fa-facebook">Book</option>
                        <option value="fa-user">Person</option>
                        <option value="fa-globe">Globe</option>
                        <option value="fa-desktop">Computer</option>
                        <option value="fa-mobile">Mobile</option>
                        <option value="fa-home">Home</option>
                      </select>
                    </dd>
                  </dl>
                  <dl>
                    <textarea  class="form-control" id="speciality_1_text" placeholder="" ng-model="client.speciality_1_text" onblur="update_val(this.id,this.value)" rows="7"></textarea>
                  </dl><!--end Speciality-->
                  <dl><!--Speciality-->
                    <div class="field-title">Service 2</div>
                    <dt>
                      Service
                    </dt>
                    <dt>
                      Icon
                    </dt>
                  </dl>
                  <dl>
                    <dt>
                      <input type="text"  class="form-control" id="speciality_2" placeholder="" ng-model="client.speciality_2" onblur="update_val(this.id,this.value)">
                    </dt>
                    <dd>
                      <select  class="form-control" id="speciality_2_icon" placeholder="" ng-model="client.speciality_2_icon" onchange="update_val(this.id,this.value)">
                        <option value="fa-facebook">Book</option>
                        <option value="fa-user">Person</option>
                        <option value="fa-globe">Globe</option>
                        <option value="fa-desktop">Computer</option>
                        <option value="fa-mobile">Mobile</option>
                        <option value="fa-home">Home</option>
                      </select>
                    </dd>
                  </dl>
                  <dl>
                    <textarea  class="form-control" id="speciality_2_text" placeholder="" ng-model="client.speciality_2_text" onblur="update_val(this.id,this.value)" rows="7"></textarea>
                  </dl><!--end Speciality-->
                  <dl><!--Speciality-->
                    <div class="field-title">Service 3</div>
                    <dt>
                      Service
                    </dt>
                    <dt>
                      Icon
                    </dt>
                  </dl>
                  <dl>
                    <dt>
                      <input type="text"  class="form-control" id="speciality_3" placeholder="" ng-model="client.speciality_3" onblur="update_val(this.id,this.value)">
                    </dt>
                    <dd>
                      <select  class="form-control" id="speciality_3_icon" placeholder="" ng-model="client.speciality_3_icon" onchange="update_val(this.id,this.value)">
                        <option value="fa-facebook">Book</option>
                        <option value="fa-user">Person</option>
                        <option value="fa-globe">Globe</option>
                        <option value="fa-desktop">Computer</option>
                        <option value="fa-mobile">Mobile</option>
                        <option value="fa-home">Home</option>
                      </select>
                    </dd>
                  </dl>
                  <dl>
                    <textarea  class="form-control" id="speciality_3_text" placeholder="" ng-model="client.speciality_3_text" onblur="update_val(this.id,this.value)" rows="7"></textarea>
                  </dl><!--end Speciality-->
                  <dl><!--Speciality-->
                    <div class="field-title">Service 4</div>
                    <dt>
                      Service
                    </dt>
                    <dt>
                      Icon
                    </dt>
                  </dl>
                  <dl>
                    <dt>
                      <input type="text"  class="form-control" id="speciality_4" placeholder="" ng-model="client.speciality_4" onblur="update_val(this.id,this.value)">
                    </dt>
                    <dd>
                      <select  class="form-control" id="speciality_4_icon" placeholder="" ng-model="client.speciality_4_icon" onchange="update_val(this.id,this.value)">
                        <option value="fa-facebook">Book</option>
                        <option value="fa-user">Person</option>
                        <option value="fa-globe">Globe</option>
                        <option value="fa-desktop">Computer</option>
                        <option value="fa-mobile">Mobile</option>
                        <option value="fa-home">Home</option>
                      </select>
                    </dd>
                  </dl>
                  <dl>
                    <textarea  class="form-control" id="speciality_4_text" placeholder="" ng-model="client.speciality_4_text" onblur="update_val(this.id,this.value)" rows="7"></textarea>
                  </dl><!--end Speciality-->
                  <dl>
                    <div class="field-title">Mission statement</div>
                    <input type="text"  class="form-control" id="mission_statement" placeholder="Mission statement" ng-model="client.mission_statement" onblur="update_val(this.id,this.value)">
                  </dl>
                  <dl>
                    <div class="field-title">Portfolio - title</div>
                    <input type="text"  class="form-control" id="portfolio_title" placeholder="" ng-model="client.portfolio_title" onblur="update_val(this.id,this.value)">
                  </dl>
                  <dl>
                    <div class="field-title">Portfolio - subtitle</div>
                    <input type="text"  class="form-control" id="portfolio_sub_title" placeholder="" ng-model="client.portfolio_sub_title" onblur="update_val(this.id,this.value)">
                  </dl>
                  <dl>
                    <div class="field-title">Portfolio - categories</div>
                    <dt>Category 1</dt>
                    <dt><input type="text"  class="form-control" id="portfolio_category_1" placeholder="" ng-model="client.portfolio_category_1" onblur="update_val(this.id,this.value)"></dt>
                  </dl>
                  <dl>
                    <dt>Category 2</dt>
                    <dt><input type="text"  class="form-control" id="portfolio_category_2" placeholder="" ng-model="client.portfolio_category_2" onblur="update_val(this.id,this.value)"></dt>
                  </dl>
                  <dl>
                    <dt>Category 3</dt>
                    <dt><input type="text"  class="form-control" id="portfolio_category_3" placeholder="" ng-model="client.portfolio_category_3" onblur="update_val(this.id,this.value)"></dt>
                  </dl>
                  <dl>
                    <dt>Category 4</dt>
                    <dt><input type="text"  class="form-control" id="portfolio_category_4" placeholder="" ng-model="client.portfolio_category_4" onblur="update_val(this.id,this.value)"></dt>
                  </dl>
                  <dl><!--portfolio-->
                    <div class="field-title">1st Portfolio</div>
                    <dt>
                      Name
                    </dt>
                    <dt>
                      <input type="text"  class="form-control" id="work_1" placeholder="" ng-model="client.work_1" onblur="update_val(this.id,this.value)">
                    </dt>
                  </dl>
                  <dl>
                    <dt>
                      Image
                    </dt>
                    <dt>
                      <input type="text"  class="form-control" id="work_1_image" placeholder="" ng-model="client.work_1_image" onblur="update_val(this.id,this.value)">
                    </dt>
                  </dl>
                  <dl>
                    <dt>
                      Category
                    </dt>
                    <dt>
                      <select class="form-control" id="work_1_category" ng-model="client.work_1_category" onchange="update_val(this.id,this.value)">
                        <option><% client.portfolio_category_1 %></option>
                        <option><% client.portfolio_category_2 %></option>
                        <option><% client.portfolio_category_3 %></option>
                        <option><% client.portfolio_category_4 %></option>
                      </select>
                    </dt>
                  </dl>
                  <dl>
                    <textarea  class="form-control" id="work_1_text" placeholder="" ng-model="client.work_1_text" onblur="update_val(this.id,this.value)" rows="7"></textarea>
                  </dl><!--portfolio end-->
                  <dl><!--portfolio-->
                    <div class="field-title">2nd Portfolio</div>
                    <dt>
                      Name
                    </dt>
                    <dt>
                      <input type="text"  class="form-control" id="work_2" placeholder="" ng-model="client.work_2" onblur="update_val(this.id,this.value)">
                    </dt>
                  </dl>
                  <dl>
                    <dt>
                      Image
                    </dt>
                    <dt>
                      <input type="text"  class="form-control" id="work_2_image" placeholder="" ng-model="client.work_2_image" onblur="update_val(this.id,this.value)">
                    </dt>
                  </dl>
                  <dl>
                    <dt>
                      Category
                    </dt>
                    <dt>
                      <select class="form-control" id="work_2_category" ng-model="client.work_2_category" onchange="update_val(this.id,this.value)">
                        <option><% client.portfolio_category_1 %></option>
                        <option><% client.portfolio_category_2 %></option>
                        <option><% client.portfolio_category_3 %></option>
                        <option><% client.portfolio_category_4 %></option>
                      </select>
                    </dt>
                  </dl>
                  <dl>
                    <textarea  class="form-control" id="work_2_text" placeholder="" ng-model="client.work_2_text" onblur="update_val(this.id,this.value)" rows="7"></textarea>
                  </dl><!--portfolio end-->
                  <dl><!--portfolio-->
                    <div class="field-title">3rd Portfolio</div>
                    <dt>
                      Name
                    </dt>
                    <dt>
                      <input type="text"  class="form-control" id="work_3" placeholder="" ng-model="client.work_3" onblur="update_val(this.id,this.value)">
                    </dt>
                  </dl>
                  <dl>
                    <dt>
                      Image
                    </dt>
                    <dt>
                      <input type="text"  class="form-control" id="work_3_image" placeholder="" ng-model="client.work_3_image" onblur="update_val(this.id,this.value)">
                    </dt>
                  </dl>
                  <dl>
                    <dt>
                      Category
                    </dt>
                    <dt>
                      <select class="form-control" id="work_3_category" ng-model="client.work_3_category" onchange="update_val(this.id,this.value)">
                        <option><% client.portfolio_category_1 %></option>
                        <option><% client.portfolio_category_2 %></option>
                        <option><% client.portfolio_category_3 %></option>
                        <option><% client.portfolio_category_4 %></option>
                      </select>
                    </dt>
                  </dl>
                  <dl>
                    <textarea  class="form-control" id="work_3_text" placeholder="" ng-model="client.work_3_text" onblur="update_val(this.id,this.value)" rows="7"></textarea>
                  </dl><!--portfolio end-->
                  <dl><!--portfolio-->
                    <div class="field-title">4th Portfolio</div>
                    <dt>
                      Name
                    </dt>
                    <dt>
                      <input type="text"  class="form-control" id="work_4" placeholder="" ng-model="client.work_4" onblur="update_val(this.id,this.value)">
                    </dt>
                  </dl>
                  <dl>
                    <dt>
                      Image
                    </dt>
                    <dt>
                      <input type="text"  class="form-control" id="work_4_image" placeholder="" ng-model="client.work_4_image" onblur="update_val(this.id,this.value)">
                    </dt>
                  </dl>
                  <dl>
                    <dt>
                      Category
                    </dt>
                    <dt>
                      <select class="form-control" id="work_4_category" ng-model="client.work_4_category" onchange="update_val(this.id,this.value)">
                        <option><% client.portfolio_category_1 %></option>
                        <option><% client.portfolio_category_2 %></option>
                        <option><% client.portfolio_category_3 %></option>
                        <option><% client.portfolio_category_4 %></option>
                      </select>
                    </dt>
                  </dl>
                  <dl>
                    <textarea  class="form-control" id="work_4_text" placeholder="" ng-model="client.work_4_text" onblur="update_val(this.id,this.value)" rows="7"></textarea>
                  </dl><!--portfolio end-->
                  <dl><!--portfolio-->
                    <div class="field-title">5th Portfolio</div>
                    <dt>
                      Name
                    </dt>
                    <dt>
                      <input type="text"  class="form-control" id="work_5" placeholder="" ng-model="client.work_5" onblur="update_val(this.id,this.value)">
                    </dt>
                  </dl>
                  <dl>
                    <dt>
                      Image
                    </dt>
                    <dt>
                      <input type="text"  class="form-control" id="work_5_image" placeholder="" ng-model="client.work_5_image" onblur="update_val(this.id,this.value)">
                    </dt>
                  </dl>
                  <dl>
                    <dt>
                      Category
                    </dt>
                    <dt>
                      <select class="form-control" id="work_5_category" ng-model="client.work_5_category" onchange="update_val(this.id,this.value)">
                        <option><% client.portfolio_category_1 %></option>
                        <option><% client.portfolio_category_2 %></option>
                        <option><% client.portfolio_category_3 %></option>
                        <option><% client.portfolio_category_4 %></option>
                      </select>
                    </dt>
                  </dl>
                  <dl>
                    <textarea  class="form-control" id="work_5_text" placeholder="" ng-model="client.work_5_text" onblur="update_val(this.id,this.value)" rows="7"></textarea>
                  </dl><!--portfolio end-->
                  <dl><!--portfolio-->
                    <div class="field-title">6th Portfolio</div>
                    <dt>
                      Name
                    </dt>
                    <dt>
                      <input type="text"  class="form-control" id="work_6" placeholder="" ng-model="client.work_6" onblur="update_val(this.id,this.value)">
                    </dt>
                  </dl>
                  <dl>
                    <dt>
                      Image
                    </dt>
                    <dt>
                      <input type="text"  class="form-control" id="work_6_image" placeholder="" ng-model="client.work_6_image" onblur="update_val(this.id,this.value)">
                    </dt>
                  </dl>
                  <dl>
                    <dt>
                      Category
                    </dt>
                    <dt>
                      <select class="form-control" id="work_6_category" ng-model="client.work_6_category" onchange="update_val(this.id,this.value)">
                        <option><% client.portfolio_category_1 %></option>
                        <option><% client.portfolio_category_2 %></option>
                        <option><% client.portfolio_category_3 %></option>
                        <option><% client.portfolio_category_4 %></option>
                      </select>
                    </dt>
                  </dl>
                  <dl>
                    <textarea  class="form-control" id="work_6_text" placeholder="" ng-model="client.work_6_text" onblur="update_val(this.id,this.value)" rows="7"></textarea>
                  </dl><!--portfolio end-->
                  <dl>
                    <div class="field-title">Contact - title</div>
                    <input type="text"  class="form-control" id="contact_section_title" placeholder="" ng-model="client.contact_section_title" onblur="update_val(this.id,this.value)">
                  </dl>
                  <dl class="mb-2">
                    <div class="field-title">Send enquiries to</div>
                    <input type="text"  class="form-control" id="contact_receiving_email" placeholder="" ng-model="client.contact_receiving_email" onblur="update_val(this.id,this.value)">
                  </dl>
                </section>

                <button ng-show="edit_details==1" ng-click="edit_details=0"  class="btn btn-sm mt-1 ml-1"><span class="fa fa-thumbs-up"></span> Done editing</button>
                <hr>
              </div><!--edit panel ends here-->
            <div class="panel">
              <section class="desk" ng-show="my_tools==1">
              <h2><i class="fa fa-briefcase" aria-hidden="true"></i> My tools</h2>
              <ul class="mb3">
                <li ng-show="tool_A==1" ng-class="active_tool==1 ? 'active' : 'inactive'" ng-click="active_shelf=1;active_tool=1" class="A">
                  <a href="#"><i class="fa fa-globe" aria-hidden="true"></i></a>
                </li>
                <li ng-show="tool_B==1"  ng-class="active_tool==2 ? 'active' : 'inactive'" ng-click="active_shelf=3;active_tool=2" class="B">
                  <a href="#"><i class="fa fa-address-card" aria-hidden="true"></i></a>
                </li>
              </ul>
              <ul class="mb3">
                <li ng-show="tool_C==1"  ng-class="active_tool==3 ? 'active' : 'inactive'" ng-click="active_shelf=4;active_tool=3" class="C">
                  <a href="#"><i class="fa fa-file" aria-hidden="true"></i></a>
                </li>
                <li ng-show="tool_D==1"  ng-class="active_tool==4 ? 'active' : 'inactive'" ng-click="active_shelf=5;active_tool=4" class="D">
                  <a href="#"><i class="fa fa-list-alt" aria-hidden="true"></i></a>
                </li>
              </ul>
            </section><!--end cards shelf items-->
            </div>
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
                  <li><a href="#"><span class="fa fa-facebook-square"></span></a></li>
                  <li><a href="#"><span class="fa fa-twitter-square"></span></a></li>
                  <li><a href="#"><span class="fa fa-linkedin-square"></span></a></li>
                  <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div><!--end app container-->
    @extends('templates.angular-variables')
  </body>
</html>
