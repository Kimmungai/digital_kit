@extends('templates.main')
@section('main')
  <main ng-show="active_tool==0">
    <h2>No active tool</h2>
  </main>
  <main ng-show="active_tool==1 && tool_A==true">
    <h1><i class="icn fa fa-globe"></i> Website <span class="tag pull-right text-muted hidden-xs-down"><i class="fa fa-dashboard"></i></span></h1>
    <ul class="list-inline text-center mt-2">
      <li class="list-inline-item" ng-click="active_tool=5;edit_details=0"><span class="fa fa-globe"></span> Publish</li>
      <li class="list-inline-item" ng-click="edit_details=1"><span class="fa fa-edit"></span> Edit</li>
      <li ng-click="active_tool=0;edit_details=0" class="list-inline-item"><span class="fa fa-close"></span> Close</li>
    </ul>
    <iframe id="website-preview">
      <p>Your browser does not support iframes.</p>
    </iframe>
    <ul class="list-inline text-center mt-2">
      <li class="list-inline-item"><span class="fa fa-globe"></span> Publish</li>
      <li class="list-inline-item" ng-click="edit_details=2"><span class="fa fa-edit"></span> Edit</li>
      <li ng-click="active_tool=0" class="list-inline-item"><span class="fa fa-close"></span> Close</li>
    </ul>
  </main>
  <main ng-show="active_tool==2 && tool_B==true">
    <h1><i class="icn fa fa-book"></i> Business Card <span class="tag pull-right text-muted hidden-xs-down"><i class="fa fa-dashboard"></i></span></h1>
    <ul class="list-inline text-center mt-2">
      <li class="list-inline-item"><span class="fa fa-download"></span> Download</li>
      <li class="list-inline-item" ng-click="edit_details=2"><span class="fa fa-edit"></span> Edit</li>
      <li ng-click="active_tool=0;edit_details=0" class="list-inline-item"><span class="fa fa-close"></span> Close</li>
    </ul>
    <article class="container biz-card" ng-class="client.design==1 ? 'dark-bg' : 'light-bg'">
      <h2><% card.first_name%> <span  class="text-danger"><% card.last_name%></span></h2>
      <h3><% card.designation%></h3>
      <div class="row">
          <div class="bar2 bg-danger"></div>
          <div class="qr"></div>
          <div class="bar1"></div>
      </div>
        <div class="card-details">
          <ul>
            <li><span class="fa fa-phone-square"> <% card.phone%></span></li>
            <li><span class="fa fa-envelope"> <% card.email%></span></li>
            <li><span class="fa fa-map-marker"> <% card.address%></span></li>
            <li><span class="fa fa-globe"> <% card.website%></span></li>
          </ul>
        </div>
    </article>
    <ul class="list-inline text-center mt-2">
      <li class="list-inline-item"><span class="fa fa-download"></span> Dowload</li>
      <li class="list-inline-item" ng-click="edit_details=2"><span class="fa fa-edit"></span> Edit</li>
      <li ng-click="active_tool=0;edit_details=0" class="list-inline-item"><span class="fa fa-close"></span> Close</li>
    </ul>
  </main>
  <main ng-show="active_tool==3">
    <h2>cvs</h2>
  </main>
  <main ng-show="active_tool==4">
    <h2>letters</h2>
  </main>
  <main ng-show="active_tool==5">
    <h2>Publish</h2>
    
  </main>
  <div id="wait" style="display:none;width:32px;height:32px;border:1px solid black;position:absolute;top:50%;left:50%;padding:2px;"><img src='/img/loading.gif' width="64" height="64" /><br>Loading..</div>
@endsection
