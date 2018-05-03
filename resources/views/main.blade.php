@extends('templates.main')
@section('main')
  <main ng-show="active_tool==0">
    <h2>No active tool</h2>
  </main>
  <main ng-show="active_tool==1 && tool_A==true">
    <h1><i class="icn fa fa-globe"></i> Website <span class="tag pull-right text-muted hidden-xs-down"><i class="fa fa-dashboard"></i></span></h1>
    <ul class="list-inline text-center mt-2">
      <li class="list-inline-item"><a class="prev-link" target="_blank"><span class="fa fa-eye"></span> Preview</a></li>
      <li class="list-inline-item" ng-click="active_tool=5;edit_details=0"><span class="fa fa-globe"></span> Publish</li>
      <li class="list-inline-item" ng-click="edit_details=1"><span class="fa fa-edit"></span> Edit</li>
      <li ng-click="active_tool=0;edit_details=0" class="list-inline-item"><span class="fa fa-close"></span> Close</li>
    </ul>
    <iframe id="website-preview">
      <p>Your browser does not support iframes.</p>
    </iframe>
    <ul class="list-inline text-center mt-2">
      <li class="list-inline-item"><a class="prev-link" target="_blank"><span class="fa fa-eye"></span> Preview</a></li>
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
    <h1><i class="icn fa fa-globe"></i> Publish Website <span class="tag pull-right text-muted hidden-xs-down"><i class="fa fa-dashboard"></i></span></h1>
    <ul class="list-inline text-center mt-2">
      <li ng-click="active_tool=1;edit_details=0" class="list-inline-item"><< Back</li>
    </ul>
    <div class="container">
      <div class="card text-center">
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
              <a  ng-click="publish_notes=1" class="nav-link" ng-class="publish_notes==1 ? 'active' : 'inactive'" href="#">Notes</a>
            </li>
            <li class="nav-item">
              <a ng-click="publish_notes=2" class="nav-link" ng-class="publish_notes==2 ? 'active' : 'inactive'" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a  ng-click="publish_notes=3" class="nav-link" ng-class="publish_notes==3 ? 'active' : 'inactive'" href="#">FAQs</a>
            </li>
          </ul>
        </div>
        <div ng-show="publish_notes==1" class="card-body max-height-150">
          <h5 class="card-title">Important things to Note</h5>
          <p class="card-text text-left padding2">After clicking publish, it takes about <strong>24 hours</strong> before your site goes live. You will receive a confirmation email once your site goes live.</p>
        </div>
        <div ng-show="publish_notes==2" class="card-body max-height-150">
          <h5 class="card-title">Important things to Note</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        </div>
        <div ng-show="publish_notes==3" class="card-body max-height-150">
          <h5 class="card-title">1. When will my website be live?</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <h5 class="card-title">2. When will my website be live?</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <h5 class="card-title">3. When will my website be live?</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <h5 class="card-title">4. When will my website be live?</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <h5 class="card-title">5. When will my website be live?</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        </div>
      </div>
      <div class="card mt-3">
        <h5 class="card-header dark-bg text-warning">Publishing details</h5>
        <div class="card-body">
          <table class="table table-hover table-bordered">
            <tbody>
              <tr>
                <th>Website Url</th><td class="text-lower"><span ng-show="edit_publish_url==1"><% user_details.publishing_details.website_url %></span><input id="website_url" class="form-control" type="text" ng-show="edit_publish_url==2" ng-model="user_details.publishing_details.website_url" onchange="update_val(this.id,this.value,'','','publishing_details')" autofocus/></td><td><a class="btn btn-primary btn-sm" href="#" ng-show="edit_publish_url==1" ng-click="edit_publish_url=2"><span class="fa fa-edit"></span> Edit</a><a class="btn btn-primary btn-sm" href="#" ng-show="edit_publish_url==2" ng-click="edit_publish_url=1"><span class="fa fa-thumbs-up"></span> done</a></td>
              </tr>
              <tr>
                <th>Period</th><td><span><% user_details.publishing_details.publishing_period %></span></td><td><select id="publishing_period" ng-model="user_details.publishing_details.publishing_period" onchange="update_val(this.id,this.value,'','','publishing_details')"><option>1 year</option><option>3 years</option><option>5 years</option></select></td>
              </tr>
              <tr>
                <th>Cost</th><td><span>Hosting fees, support and service charge</span></td><td><% user_details.publishing_details.publishing_cost %></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="card mt-3">
        <h5 class="card-header dark-bg text-warning">Payment details</h5>
        <div class="card-body">
          <table class="table table-hover table-bordered">
            <tbody>
              <tr>
                <th>Account</th><td><span><% client.first_name %> <% client.last_name %></span></td>
              </tr>
              <tr>
                <th>Balance</th><td><span><% user_details.payment_details.acc_bal %></span></td>
              </tr>
              <tr>
                <th>Top up</th><td><a href="#" class="btn btn-sm btn-primary"><span class="fa fa-paypal"></span> Pay</a></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <a href="#" class="btn btn-danger pull-right mt-3 btn-lg"><span class="fa fa-globe"></span> Publish</a>
    </div>
  </main>
  <div id="wait" style="display:none;width:32px;height:32px;border:1px solid black;position:absolute;top:50%;left:50%;padding:2px;"><img src='/img/loading.gif' width="64" height="64" /><br>Loading..</div>
@endsection
