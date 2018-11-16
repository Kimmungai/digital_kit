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
  <body>
    <div id="site-panel" class="container-fluid">
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

        </div>
        <div class="col-md-3 no-padding">
          <aside >
            <div class="panel">
               <ul class="shelf-icons">
                  <li ng-class="active_shelf==1 ? 'active' : 'inactive'" ng-click="active_shelf=1;active_tool=1;edit_details=0" ng-show="tool_A==true"><a href="#"><i class="fas fa-globe-americas"></i></a></li>
                  <li ng-class="active_shelf==2 ? 'active' : 'inactive'" ng-click="active_shelf=2" ng-show="active_tool==1 && tool_A==true || active_tool==2 && tool_B==true"><a href="#"><i class="fa fa-bullseye"></i></a></li>
                  <li ng-class="active_shelf==4 ? 'active' : 'inactive'" ng-click="active_shelf=4;active_tool=3;edit_details=0" ng-show="tool_C==true"><a href="#"><i class="fa fa-comment"></i></a></li>
                  <li ng-class="active_shelf==3 ? 'active' : 'inactive'" ng-click="active_shelf=3;active_tool=2;edit_details=0" ng-show="tool_B==true"><a href="#"><i class="fa fa-book"></i></a></li>
                  <li ng-class="active_shelf==5 ? 'active' : 'inactive'" ng-click="active_shelf=5;active_tool=4;edit_details=0" ng-show="tool_D==true"><a href="#"><i class="fa fa-envelope"></i></a></li>
                  <!--<li ng-class="active_shelf==7 ? 'active' : 'inactive'" ng-click="active_shelf=7;edit_details=0"><a href="#"><i class="fa fa-edit"></i></a></li>-->
                  <li ng-class="active_shelf==6 ? 'active' : 'inactive'" ng-click="active_shelf=6;edit_details=0"><a href="#"><i class="fa 	fa-question-circle"></i></a></li>
               </ul>
                <ul class="shelves">
                  <li ng-click="active_shelf=1;active_tool=1;edit_details=0" ng-show="tool_A==true"><a href="#">Website</a></li>
                  <li ng-click="active_shelf=2" ng-show="active_tool==1 && tool_A==true">Theme: <select ng-model="client.design" id="design" onchange="update_val(this.id,this.value)">
                    <option value="1">expo</option>
                    <!--<option value="2">Magic</option>
                    <option value="3">New</option>-->
                    <option value="4">Silk</option>
                    <!--<option value="5">Silk</option>
                    <option value="6">Silk</option>
                    <option value="7">Silk</option>-->
                    <option value="8">Magic</option>
                    <option value="9">Fancy</option>
                    <!--<option value="10">Silk</option>-->
                  </select></li>
                  <li ng-click="active_shelf=3" ng-show="active_tool==2 && tool_B==true">Design: <select ng-model="card.card_design" id="card_design" onchange="update_val(this.id,this.value,'','','Card')"><option value="1">stylish</option><option value="2">classic</option><option value="3">elegant</option></select></li>
                  <li ng-click="active_shelf=4;active_tool=3;edit_details=0" ng-show="tool_C==true"><a href="#">Blog</a></li>
                  <li ng-click="active_shelf=3;active_tool=2;edit_details=0" ng-show="tool_B==true"><a href="#">Business Card</a></li>
                  <li ng-click="active_shelf=5;active_tool=4;edit_details=0" ng-show="tool_D==true"><a href="#">Letter</a></li>
                  <!--<li ng-click="active_shelf=7;edit_details=11" onclick="blur_bg()"><a href="#"> Blog</a></li>-->
                  <li ng-click="active_shelf=6;edit_details=10" onclick="blur_bg()"><a href="#"> Help & Support</a></li>
                </ul>
            </div>
            <div class="panel">
              <section class="tools">
                <ul>
                  <li><input id="tool_A"  type="checkbox"  ng-model="tool_A"  ng-click="active_shelf=1;active_tool=1;edit_details=0" onchange="update_val(this.id,this.value,'','','User')" /> Website</li>
                  <li><input id="tool_C"  type="checkbox" ng-model="tool_C" ng-click="active_shelf=4;active_tool=3;edit_details=0" onchange="update_val(this.id,this.value,'','','User')" /> Blog</li>
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
                <li ng-show="tool_B==1"  ng-class="active_tool==2  ? 'active' : 'inactive'" ng-click="active_shelf=3;active_tool=2;edit_details=0" class="B">
                  <a href="#"><i class="fa fa-address-card" aria-hidden="true"></i></a>
                </li>
              </ul>
              <ul class="mb3">
                <li ng-show="tool_C==1"  ng-class="active_tool==3 || active_tool==20 ? 'active' : 'inactive'" ng-click="active_shelf=4;active_tool=3;edit_details=0" class="C">
                  <a href="#"><i class="fa fa-comment" aria-hidden="true"></i></a>
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
    @extends('templates.angular-blog-variables')
  </body>
</html>
