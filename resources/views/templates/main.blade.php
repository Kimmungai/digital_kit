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
                    <li class="list-inline-item"><a href="#"><span class="fa fa-user"></span> @{{client.first_name}} @{{client.last_name}}</a></li>
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
                  <li><input type="checkbox" ng-model="tool_C" ng-click="active_shelf=4;active_tool=3"/> Cv</li>
                  <li><input type="checkbox" ng-model="tool_D" ng-click="active_shelf=5;active_tool=4"/> Letter</li>
                </ul>
              </section>
            </div>
            <hr>
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
