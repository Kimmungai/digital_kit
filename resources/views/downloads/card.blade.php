<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style type="text/css">
    main{
      background-color: #f2f2f0;
      border-top: 5px solid #df6260;
      border-left: 1px solid #d4d5d0;
      min-height: 840px;
      overflow: hidden;
    }
    main h1{
      background-color: #f7f6f2;
      border-bottom: 1px solid #d4d5d0;
      line-height: 1.5em;
      font-size: 1.6em;
    }
    main h1 .icn{
      margin-left: 1em;
      margin-right: 0.2em;
      font-size: 0.8em;
    }
    main h1 .tag{
      margin-right: 1em;
      font-size: 0.5em;
    }
    main .biz-card{
      /*width: 65%;*/
      width: 560px !important;
      margin: 0 auto;
      border-radius: 0;
    }
    main .biz-card h2{
      margin: 0;
      padding: 0;
      color: #fff;
      font-size: 2em;

      text-transform: uppercase;
    }
    main .biz-card h3{
      margin: 0;
      padding: 0;
      color: #fff;
      font-size: 0.8em;
      padding-right: 1em;
      text-transform: uppercase;
    }
    main .qr{
      width: 89px;
      height: 90px;
      background-color: #fff;
      margin: 0 auto 0 auto;
      background: url('/img/qr.png') no-repeat center;
      background-size: cover;
      background-position: 50% 50%;
    }
    main .bar1{
      width: 50px;
      height: 18px;
      background-color: #fff;
      margin:36px 1px 0 0;
    }
    main .bar2{
      width: 400px;
      height: 18px;
      margin: 36px 0 0 1px;
    }
    main .card-details ul{
      margin: 0;
      padding: 0;
      color: #fff;
      list-style: none;
      margin-bottom: 0.2em;
    }
    main .card-details li{
      opacity: 1;
      cursor: default;
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
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <main style="min-height:auto;border:0;background-color:#fff;">
            <article class="container biz-card <?php if($website->design==1){?>dark-bg<?php }else{?>light-bg<?php }?>">
              <h2>{{$card->first_name}} <span  class="text-danger">{{$card->last_name}}</span></h2>
              <h3> {{$card->designation}}</h3>
              <div class="row">
                  <div class="bar2 bg-danger"></div>
                  <div class="qr"></div>
                  <div class="bar1"></div>
              </div>
                <div class="card-details">
                  <ul>
                    <li><span class="fa fa-phone-square">  {{$card->phone}}</span></li>
                    <li><span class="fa fa-envelope">  {{$card->email}}</span></li>
                    <li><span class="fa fa-map-marker">  {{$card->address}}</span></li>
                    <li><span class="fa fa-globe">  {{$card->website}}</span></li>
                  </ul>
                </div>
            </article>
          </main>
        </div>
      </div>
    </div>
  </body>
</html>
