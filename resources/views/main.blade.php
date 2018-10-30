@extends('templates.main')
@section('main')
  <main ng-show="active_tool==0">
    <h2>No active tool</h2>
  </main>
  <main ng-show="active_tool==1 && tool_A==true">
    <h1><i class="icn fas fa-globe-americas"></i> Your Website is Ready! <span class="tag pull-right text-muted hidden-xs-down"><i class="fa fa-dashboard"></i></span></h1>
    <ul class="list-inline text-center mt-2">
      <li class="list-inline-item"><a href="#" class="prev-link btn btn-primary btn-sm" target="_blank"><span class="fa fa-eye"></span> Preview</a></li>
      <li class="list-inline-item" ng-click="active_tool=5;edit_details=0"><a href="#" class="btn btn-primary btn-sm"><span class="fas fa-globe-americas"></span> Publish</a></li>
      <li class="list-inline-item" ng-click="edit_details=1" onclick="blur_bg()"><a href="#" class="btn btn-primary btn-sm"><span class="fa fa-edit"></span> Edit</a></li>
      <li ng-click="active_tool=0;edit_details=0" class="list-inline-item hidden-xs-down"><a href="#" class="btn btn-primary btn-sm"><span class="fa fa-times"></span> Close</a></li>
    </ul>

      <iframe  id="website-preview" class="hidden-xs-down">
        <p>Your browser does not support iframes.</p>
      </iframe>
      <div class="card bg-dark text-white hidden-sm-up" style="width: 18rem;margin:0 auto;">
        <img class="card-img img-thumbnail" src="<%client.main_image%>" style="filter: brightness(40%);"alt="Card image">
        <div class="card-img-overlay">
          <h5 class="card-title">Congratulations <%client.first_name%>!</h5>
          <p class="card-text">Your website has been created.</p>
          <a class="btn btn-danger prev-link" target="_blank"><i class="fa fa-external-link-alt"></i> View website</a>
        </div>
      </div>

    <ul class="list-inline text-center mt-2">
      <li class="list-inline-item"><a class="prev-link btn btn-primary btn-sm" target="_blank"><span class="fa fa-eye"></span> Preview</a></li>
      <li class="list-inline-item" ng-click="active_tool=5;edit_details=0"><a href="#" class="btn btn-primary btn-sm"><span class="fas fa-globe-americas"></span> Publish</a></li>
      <li class="list-inline-item" ng-click="edit_details=1" onclick="blur_bg()" onclick="blur_bg()"><a href="#" class="btn btn-primary btn-sm"><span class="fa fa-edit"></span> Edit</a></li>
      <li ng-click="active_tool=0" class="list-inline-item hidden-xs-down"><a href="#" class="btn btn-primary btn-sm"><span class="fa fa-close"></span> Close</a></li>
    </ul>
  </main>
  <main ng-show="active_tool==2 && tool_B==true">
    <h1><i class="icn fa fa-book"></i> Business Card Ready!<span class="tag pull-right text-muted hidden-xs-down"><i class="fa fa-dashboard"></i></span></h1>
    <ul class="list-inline text-center mt-2">
      <li class="list-inline-item"><a class="btn btn-primary btn-sm" href="{{url('/download-card')}}" target="_blank"><span class="fa fa-download"></span> Download</a></li>
      <li class="list-inline-item" ng-click="edit_details=2" onclick="blur_bg()"><a class="btn btn-primary btn-sm" href="#"><span class="fa fa-edit"></span> Edit</a></li>
      <li ng-click="active_tool=0;edit_details=0" class="list-inline-item hidden-xs-down"><a class="btn btn-primary btn-sm" href="#"><span class="fa fa-times"></span> Close</a></li>
    </ul>
    <article class="container biz-card dark-bg" ng-show="card.card_design==1">
      <h2><% card.first_name%> <span  class="text-danger"><% card.last_name%></span></h2>
      <h3><% card.designation%></h3>
      <div class="row no-padding">
          <div class="bar2 bg-danger"></div>
          <img class="qr card-qr" />
          <div class="bar1"></div>
      </div>
        <div class="card-details">
          <ul>
            <li>Phone: <% card.phone%></span></li>
            <li>Email: <% card.email%></span></li>
            <li>Address: <% card.address%></span></li>
            <li>Website: <% card.website %></span></li>
          </ul>
        </div>
    </article>
    <article class="container biz-card-design-2" ng-show="card.card_design==2">
      <div class="panel">
        <div class="content">
          <h2><% card.first_name%> <% card.last_name%></h2>
          <p><% card.designation%></p>
          <div class="line"></div>
          <dl>
            <dt>
              <ul>
                <li><i class="fa fa-phone"></i> <% card.phone%></li>
                <li><i class="fa fa-envelope"></i> <% card.email%></li>
              </ul>
            </dt>
            <dd>
              <ul>
                <li><i class="fa fa-map-marker-alt"></i> <% card.address%></li>
                <li><i class="fa fa-link"></i> <% card.website %></li>
              </ul>
            </dd>
          </dl>
          </dd>
        </div>
      </div>
    </article>
    <article class="container biz-card-design-3" ng-show="card.card_design==3">
      <dl>
        <dt style="background-image:url('<% client.main_image%>')"></dt>
        <dd>
          <h2><% card.first_name%> <% card.last_name%></h2>
          <dl class="info">
            <dt>
              <ul>
                <li><% card.designation%></li>
                <li><% card.phone%></li>
                <li><% card.address%></li>
              </ul>
            </dt>
            <dd>
              <img class="qr card-qr" />
            </dd>
          </dl>
          <ul class="dark-bg">
            <li class="pt-2"><% card.email%></li>
            <li class="pb-2"><% card.website %></li>
          </ul>
        </dd>
      </dl>
    </article>
    <!--<ul class="list-inline text-center mt-2">
      <li class="list-inline-item"><a href="{{url('/download-card')}}" style="text-decoration:none;color:inherit;" target="_blank"><span class="fa fa-download"></span> Download</a></li>
      <li class="list-inline-item" ng-click="edit_details=2" onclick="blur_bg()"><span class="fa fa-edit"></span> Edit</li>
      <li ng-click="active_tool=0;edit_details=0" class="list-inline-item"><span class="fa fa-times"></span> Close</li>
    </ul>-->
  </main>
  <main ng-show="active_tool==3">
    <h2>cvs</h2>
  </main>
  <main ng-show="active_tool==4">
    <h2>letters</h2>
  </main>
  <main ng-show="active_tool==5">
    <h1><i class="icn fas fa-globe-americas"></i> Publish Website <span class="tag pull-right text-muted hidden-xs-down"><i class="fa fa-dashboard"></i></span></h1>
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
            <!--<li class="nav-item">
              <a ng-click="publish_notes=2" class="nav-link" ng-class="publish_notes==2 ? 'active' : 'inactive'" href="#">Link</a>
            </li>-->
            <li class="nav-item">
              <a  ng-click="publish_notes=3" class="nav-link" ng-class="publish_notes==3 ? 'active' : 'inactive'" href="#">FAQs</a>
            </li>
          </ul>
        </div>
        <div ng-show="publish_notes==1" class="card-body max-height-150">
          <h5 class="card-title">Important Notice</h5>
          <p class="card-text text-left padding2">After clicking publish, it takes about <strong>24 hours</strong> before your site goes live. You will receive a confirmation email once your website is live.</p>
        </div>
        <div ng-show="publish_notes==3" class="card-body max-height-150">
          <h5 class="card-title text-left">1. When will my website be live?</h5>
          <p class="card-tex text-left">It typically takes 24 hours to publish a website after receiving the payment. A confirmation email is sent to your registered email once the process is complete</p>
          <h5 class="card-title text-left">2. Can I change my domain name after publishing?</h5>
          <p class="card-text text-left">You have to send a request to domains@biznesskit.com to request a domain change after publishing the website. Please not a changing fee is charged.</p>
        </div>
      </div>
      <div class="card mt-3">
        <h5 class="card-header dark-bg text-warning">Publishing details</h5>
        <div class="card-body">
          <table class="table table-hover table-bordered pub-table">
            <tbody>
              <tr>
                <th>Website Url</th><td class="text-lower"><p ng-show="edit_publish_url==1"><% user_details.publishing_details.website_url %></p><input id="website_url" class="form-control text-lower" type="text" ng-show="edit_publish_url==2" ng-model="user_details.publishing_details.website_url" onchange="update_val(this.id,this.value,'','','publishing_details')" autofocus/></td><td><a class="btn btn-primary btn-sm" href="#" ng-show="edit_publish_url==1" ng-click="edit_publish_url=2"><span class="fa fa-edit"></span> Edit</a><a class="btn btn-primary btn-sm" href="#" ng-show="edit_publish_url==2" ng-click="edit_publish_url=1"><span class="fa fa-thumbs-up"></span> done</a></td>
              </tr>
              <tr>
                <th>Plan</th><td><p><% user_details.publishing_details.publishing_plan %></p></td><td><select id="publishing_plan" ng-model="user_details.publishing_details.publishing_plan" onchange="update_val(this.id,this.value,'','','publishing_details')"><option>Starter ($4 p.m.)</option><option>Silver ($9 p.m.)</option><option>Gold ($19 p.m.)</option></select></td>
              </tr>
              <tr>
                <th>Billing cycle</th><td><p><% user_details.publishing_details.publishing_period %></p></td><td><select id="publishing_period" ng-model="user_details.publishing_details.publishing_period" onchange="update_val(this.id,this.value,'','','publishing_details')"><option>Monthly</option><option>Every 3 months</option><option>Every 6 months</option><option>Yearly</option><option>Every 3 years</option><option>Every 5 years</option></select></td>
              </tr>
              <tr ng-if="user_details.publishing_details.publishing_period==='Monthly'">
                <th>Cost</th><td><p>Hosting fees, support and service charge</p></td><td>$9.99</td>
              </tr>
              <tr ng-if="user_details.publishing_details.publishing_period==='Every 3 months'">
                <th>Cost</th><td><p>Hosting fees, support and service charge</p></td><td>$29.99</td>
              </tr>
              <tr ng-if="user_details.publishing_details.publishing_period==='Every 6 months'">
                <th>Cost</th><td><p>Hosting fees, support and service charge</p></td><td>$59.99</td>
              </tr>
              <tr ng-if="user_details.publishing_details.publishing_period==='Yearly'">
                <th>Cost</th><td><p>Hosting fees, support and service charge</p></td><td>$99.99</td>
              </tr>
              <tr ng-if="user_details.publishing_details.publishing_period==='Every 3 years'">
                <th>Cost</th><td><p>Hosting fees, support and service charge</p></td><td>$179.99</td>
              </tr>
              <tr ng-if="user_details.publishing_details.publishing_period==='Every 5 years'">
                <th>Cost</th><td><p>Hosting fees, support and service charge</p></td><td>$249.99</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="card mt-3">
        <h5 class="card-header dark-bg text-warning">Payment details <% publishing_cost %></h5>
        <div class="card-body">
          <table class="table table-hover table-bordered pub-table">
            <tbody>
              <tr>
                <th>Account</th><td><p><% client.first_name %> <% client.last_name %></p></td>
              </tr>
              <tr>
                <th>Balance ($)</th><td><p><span id="dynamic_acc_bal"><% user_details.payment_details[0].acc_bal %></span> <span id="sucess-top-up-badge" class="badge  badge-success no-display">Top Up Success</span></p></td>
              </tr>
              <tr>
                <th>Top up ($)</th>
                <td>
                  <div class="row">
                    <div class="col-sm-2">
                      <input class="form-control" type="number" id="pub_cost" ng-if="user_details.publishing_details.publishing_period==='Monthly'" type="text" value="9.99" />
                      <input class="form-control" type="number" id="pub_cost" ng-if="user_details.publishing_details.publishing_period==='Every 3 months'" type="text" value="29.99" />
                      <input class="form-control" type="number" id="pub_cost" ng-if="user_details.publishing_details.publishing_period==='Every 6 months'" type="text" value="59.99" />
                      <input class="form-control" type="number" id="pub_cost" ng-if="user_details.publishing_details.publishing_period==='Yearly'" type="text" value="99.99" />
                      <input class="form-control" type="number" id="pub_cost" ng-if="user_details.publishing_details.publishing_period==='Every 3 years'" type="text" value="179.99" />
                      <input class="form-control" type="number" id="pub_cost" ng-if="user_details.publishing_details.publishing_period==='Every 5 years'" type="text" value="249.99" />
                    </div>
                    <div class="col-sm-3"><div class="btn" id="pay-btn"></div></div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <a id="publish-btn" href="#" class="btn btn-danger pull-right mt-3 mb-3 <?php if($user->publishing_details->publishing_cost > $user->payment_details[0]->acc_bal){?>disabled<?php }?>" ng-click="active_tool=6;edit_details=0" onclick="publish()"><span class="fas fa-globe-americas"></span> Publish</a>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
    <script>
    paypal.Button.render({

        env: 'production', // Or 'sandbox'

        client: {
            sandbox:    'AVmtFmCtIYmW-wowsvx_G77friO7Y0kD8sHa3j1wpw-2BinKjbq1tFqUgSnPCOzp6K_h-lj8t4_DbYUe',
            production: 'AVmHEmP0XXrZ6g39PR8jQLCtkU6z3sI7g_8dAHE7Zieeh8OMO_Gam1F-IF9H51GnieOMPQxUZE_K0qxw'
        },
            style: {
            size: 'responsive',
            color: 'blue',
            shape: 'rect'
        },


        commit: true, // Show a 'Pay Now' button

        payment: function(data, actions) {
            return actions.payment.create({
                payment: {
                    transactions: [
                        {
                            amount: { total: $("#pub_cost").val(), currency: 'USD' }
                        }
                    ]
                }
            });
        },

        onAuthorize: function(data, actions) {
            return actions.payment.execute().then(function(payment) {

                // The payment is complete!
                // You can now show a confirmation message to the customer
                //call_after_paypal_payment();
                //alert('suc')
                record_payment(data.paymentID,$('#pub_cost').val(),'paypal',$('#dynamic_acc_bal').html());
                update_payment_details_value(data.paymentID,'acc_bal');
            });
        },
        onCancel: function(data, actions) {
            // Show a cancel page or return to cart
            //alert('cancel')
        }


    }, '#pay-btn');
    function update_payment_details_value(paymentID,value){
      $.get("{{url('/payment-values-update')}}",
        {
          paymentID:paymentID,
          value:value
        },
        function(data,status){
          $('#dynamic_acc_bal').html(data);
          $('#sucess-top-up-badge').removeClass('no-display');
          if(data > parseFloat($('#pub_cost').val())){$('#publish-btn').removeClass('disabled');}
      });
    }
    function record_payment(paymentID,paymentAmt,paymentProvider,prev_acc_bal){
      $.post("{{url('/record-payment')}}",
        {
          paymentID:paymentID,
          paymentAmt:paymentAmt,
          paymentProvider:paymentProvider,
          prev_acc_bal:prev_acc_bal,
          "_token": "{{ csrf_token() }}",
        },
        function(data,status){
          //$('#dynamic_acc_bal').html(data);
      });
    }
    function publish() {
      $.post("{{url('/publish')}}",
        {
          "_token": "{{ csrf_token() }}",
        },
        function(data,status){
          //alert(data)
      });
    }
    </script>
    <ul class="list-inline text-center mt-2">
      <li ng-click="active_tool=1;edit_details=0" class="list-inline-item"><< Back</li>
    </ul>
  </main>
  <main ng-show="active_tool==6">
    <h1><i class="icn fas fa-globe-americas"></i> Publish Request sent! <span class="tag pull-right text-muted hidden-xs-down"><i class="fa fa-dashboard"></i></span></h1>
    <ul class="list-inline text-center mt-2">
      <a href="/" style="text-decoration:none;color:inherit;"><< home</a>
      <li ng-click="active_tool=5;edit_details=0" class="list-inline-item">< Back</li>
    </ul>
  <div class="card text-center">
    <div class="card-header">
      Success!
    </div>
    <div class="card-body">
      <h5 class="card-title">Publishing in progress</h5>
      <p class="card-text">Thank you for publishing your personal website.</p>
      <p class="card-text">The website will be published on: <span class="text-success"><% user_details.publishing_details.website_url %></span></p>
      <p class="card-text">An email will be sent to: <strong><% card.email %></strong> once the process is complete.</p>
      <a href="/"  class="btn btn-success mb-1"><span class="fa fa-thumbs-up"></span> Done</a>
    </div>
    <div class="card-footer text-muted">
        publishing takes a maximum of 2 business days
    </div>
  </div>
  <ul class="list-inline text-center mt-2">
    <li class="list-inline-item"><a href="/" style="text-decoration:none;color:inherit;"><< home</a></li>
    <li ng-click="active_tool=5;edit_details=0" class="list-inline-item">< Back</li>
  </ul>
  </main>
  <main ng-show="active_tool==7">
    <h1><i class="icn fas fa-user"></i> Profile <span class="tag pull-right text-muted hidden-xs-down"><i class="fa fa-dashboard"></i></span></h1>
    <div class="container bootstrap snippet">
    <div class="row">
    	<div class="col-sm-3"><!--left col-->
        <div class="text-center">
          <img src="<%client.main_image%>" class="avatar img-circle img-thumbnail" alt="avatar">
        </div></hr><br>
          <div class="panel panel-default">
            <div class="panel-heading">Website <i class="fa fa-link fa-1x"></i></div>
            <div class="panel-body"><a href="<% user_details.publishing_details.website_url %>"><% user_details.publishing_details.website_url  %></a></div>
          </div>
        </div><!--/col-3-->
    	<div class="col-sm-9">
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                  <form class="form" id="profile_form">
                      <div class="form-group">
                        <div class="col-xs-6">
                          <label for="profile_name"><h4>Name</h4></label>
                          <input type="text" class="form-control" name="profile_name" id="profile_name" placeholder="Full name" title="enter your name." value="<% user_details.name %>">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-xs-6">
                          <label for="profile_email"><h4>Email</h4></label>
                            <input type="email" class="form-control" name="profile_email" id="profile_email" placeholder="Email" title="enter your email." value="<% card.email %>">
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="col-xs-6">
                            <label for="profile_phone"><h4>Phone</h4></label>
                            <input type="number" class="form-control" name="profile_phone" id="profile_phone" placeholder="enter phone" title="enter your phone number." value="<% card.phone %>">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-xs-6">
                            <label for="profile_password"><h4>Password</h4></label>
                            <input type="password" class="form-control" name="profile_password" id="profile_password" placeholder="password" title="enter your password.">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-xs-6">
                          <label for="profile_retype_password"><h4>Verify</h4></label>
                            <input type="password" class="form-control" name="profile_retype_password" id="profile_retype_password" placeholder="Re-type password" title="enter your password again.">
                        </div>
                      </div>
                      <div class="form-group">
                         <div class="col-xs-12">
                            <button class="btn btn-lg btn-primary" type="btn" onclick="update_profile()"><i class="fa fa-save"></i> Update</button>
                          </div>
                      </div>
                      <div class="form-group">
                        <p id="profile_update_alert" class="text-success d-none"><strong><i class="fa fa-thumbs-up"></i> Details saved!</strong></p>
                      </div>
                      <div class="form-group">
                         <div class="col-xs-12">
                            <button class="btn btn-lg btn-danger pull-right" type="btn"> Delete my account</button>
                          </div>
                      </div>
              	</form>
             </div><!--/tab-pane-->
          </div><!--/tab-pane-->
        </div><!--/tab-content-->
      </div><!--/col-9-->
    </div><!--/row-->
  </main>
  <div id="wait" style="display:none;width:32px;height:32px;border:1px solid black;position:absolute;top:50%;left:50%;padding:2px;"><img src='{{url("/img/loading.gif")}}' width="64" height="64" /><br>Loading..</div>
@endsection
