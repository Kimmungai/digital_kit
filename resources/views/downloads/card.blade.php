<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style type="text/css">
    html,body{
    margin: 0;
    padding: 0;
  }
  .panel{
    width: 100%;
    height: 300px;
    position:absolute;top:25%;
  }
  .biz-card{
   width:336px;
   margin: 0;
  }
  .text-danger{
    color:#d9534f!important;
  }
  .biz-card h2{
    margin: 0;
    padding: 0;
    color: #fff;
    font-size: 2em;
    text-transform: uppercase;
  }
  .biz-card h3{
    margin: 0;
    padding: 0;
    color: #fff;
    font-size: 0.8em;
    padding-right: 1em;
    text-transform: uppercase;
  }
  .row{
    width: 100%;
    height: 60px;
  }
  .container{
    width: 100%;
    height: 90px;
    position: absolute;
  }
  .qr{
    width: 60px;
    height: 59px;
    background-color: #fff;
    margin: 0  5px;
    background: url('/img/qr.png') no-repeat center;
    background-size: cover;
    background-position: 50% 50%;
    float: left;
  }
  .bar1{
    width: 42px;
    height: 18px;
    background-color: #fff;
    margin:16px 1px 0 0;
    float: left;
  }
  .bar2{
    width: 220px;
    height: 18px;
    margin: 16px 0 0 1px;
    float: left;
    background-color: #d9534f;
  }
  .card-details {
    display: block;
  }
  .card-details ul{
    margin: 0;
    padding: 0;
    color: #fff;
    list-style: none;
    margin-bottom: 0.2em;
  }
  .card-details li{
    margin: 0;
    padding: 0;
    color: #fff;
  }
  .fa-phone-square{
    height: 24px;
    width: 24px;
    background: url('/img/image-fonts/phone-square.png') no-repeat center;
    background-size: cover;
    background-position: 50% 50%;
  }
.dark-bg{
    background: #212121;
  }
  .light-bg{
    background: #424242;
  }
    </style>
    <title>Card</title>
  </head>
  <body>
    <div class="panel">
      <article class="biz-card <?php if($website->design==1){?>dark-bg<?php }else{?>light-bg<?php }?>">
        <h2>{{$card->first_name}} <span  class="text-danger">{{$card->last_name}}</span></h2>
        <h3> {{$card->designation}}</h3>
        <div class="row">
          <div class="container">
            <div class="bar2 bg-danger"></div>
            <div class="qr"></div>
            <div class="bar1"></div>
          </div>
        </div>
        <div class="card-details">
          <ul>
            <li style="color:#000;">n</li>
            <li> Phone: {{$card->phone}}</li>
            <li> Email: {{$card->email}}</li>
            <li> Address: {{$card->address}}</li>
            <li> Website: {{$card->website}}</li>
          </ul>
        </div>
      </article>
    </div>
  </body>
</html>
