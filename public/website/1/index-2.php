<?php require_once('autoload.php');?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <title>Baktigoto - Responsive Resume & Portfolio HTML5 Template</title><!-- site title name -->
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon -->
        <link rel="icon" type="image/png" href="images/favicon.png" />
        <!-- start style -->
        <link rel="stylesheet" href="css/style.css">

        <!--[if lt IE 9]>
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
        <![endif]-->
    </head>
    <body class="body-box">
        <!-- preloader -->
        <div id="preloader">
           <span>B</span>
           <span>A</span>
           <span>K</span>
           <span>T</span>
           <span>I</span>
           <span>G</span>
           <span>O</span>
           <span>T</span>
           <span>O</span>
        </div><!-- end of /.pre loader -->

        <div class="wrapper" id="boxscroll">
            <div class="cover-section smoth light-cover" id="home">
                <div class="container">
                    <div class="row">
                        <nav class="navbar navbar-default">
                            <div class="container-fluid">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                  </button>
                                </div>
                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <button class="menu-btn show-btn"></button>
                                    <ul class="nav navbar-nav navbar-right">
                                        <li><a href="#home"  class="active">Home</a></li>
                                        <li><a href="#about">About Me</a></li>
                                        <li><a href="#service">My services</a></li>
                                        <li><a href="#portfolio">Portfolio</a></li>
                                        <li><a id="link" href="#contact">Contact</a></li>
                                    </ul><!-- end of /.ul -->
                                </div><!-- end of /.navbar-collapse -->

                            </div><!-- end of /.container-fluid -->
                        </nav><!-- end of /. nav section -->
                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 profile-image wow bounceInUp center animated">
                            <img  class="img-responsive" src="images/profile.png" alt="" />
                        </div><!-- end of /.column-->
                        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 profile-item wow flipInX center animated">
                            <article class="profile-caption">
                                <h2>Hello, I'm <span><?php echo $saved_data['first_name']; ?> <?php echo $saved_data['last_name']; ?></span></h2>
                                <h2>A <span>UI</span>  & <span>UX</span> Designer Based in <span>BANGLADESH</span></h2>
                                <div class="social-media">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </article>
                        </div> <!-- end of /.columns -->
                    </div><!-- end of /. row  -->
                </div><!-- end of /. cover container  -->
            </div><!-- end of /.profile-cover section -->

            <section class="about-section smoth light-about" id="about">
                <div class="container">
                    <div class="row">
                        <div class="section-title wow bounceInUp center animated">
                            <h2>About Me</h2><!-- section title -->
                        </div>
                        <div class="col-lg-6">
                            <article class="about-me-box">
                                <h2>A little brif ABOUT Me</h2>
                                <p>Ultricies nisi voluptatem, illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo nemo enim ipsam voluptatem. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo tempor dignissim at. e vitae dicta sunt explicabo nemo enim ipsam voluptatem. ipsum dolor sit amet, consectetur adipisicing elit.<br><br>
                                 sed do eiusmod temporincididunt ut labore et dolore magna aliqua. ab illo tempor dignissim at. e vitae dicta sunt explicabo nemo enim ipsam voluptatem.</p>
                                <a href="#"><i class="fa fa-cloud-download"></i>Download Resume</a>
                            </article>
                        </div>
                        <div class="col-lg-6">
                            <div class="skill-box wow bounceInRight center animated">
                                <h2>SKILLS</h2>
                                <p>Adobe Photoshop</p>
                                <div class="progressbar" data-perc="90">
                                	<div class="bar"><span></span></div>
                                	<div class="label wow bounceInLeft center animated"></div>
                                </div>
                                <p>Adobe Illastrator</p>
                                <div class="progressbar" data-perc="80">
                                	<div class="bar color2"><span></span></div>
                                	<div class="label wow bounceInLeft center animated"></div>
                                </div>
                                <p>Html & Css</p>
                                <div class="progressbar" data-perc="89">
                                	<div class="bar color3"><span></span></div>
                                	<div class="label wow bounceInLeft center animated"></div>
                                </div>
                                <p>Web Design</p>
                                <div class="progressbar" data-perc="87">
                                	<div class="bar color4"><span></span></div>
                                	<div class="label wow bounceInLeft center animated"></div>
                                </div>
                                <p>UI/UX Design</p>
                                <div class="progressbar" data-perc="95">
                                	<div class="bar color4"><span></span></div>
                                	<div class="label wow bounceInLeft center animated"></div>
                                </div>

                            </div><!-- end of /.skill bx -->
                        </div><!-- end of /.columns -->
                    </div><!-- end of /.row -->
                </div><!-- end of /.container -->
            </section><!-- end of about /.section -->

            <section class="design-cover smoth">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 design-box wow flipInX center animated">
                            <figure class="pixel-item">
                                <i class="fa fa-angellist"></i><!-- icon -->
                                <h3>PIEXEL Perfect</h3><!-- title -->
                                <p>Lorem Ipsum is simply dummy text of the printing typesetting industry. Lorem Ipsum has been the industry's standard dummy text </p><!-- caption -->
                            </figure><!-- end of pixel perfect box -->
                        </div><!-- end of /.columns 1 -->
                        <div class="col-lg-4 col-md-4  design-box wow flipInX center animated">
                            <figure class="clean-design">
                                <i class="fa fa-desktop"></i><!-- icon -->
                                <h3>CLEAN DESIGN</h3><!-- title -->
                                <p>Lorem Ipsum is simply dummy text of the printing typesetting industry. Lorem Ipsum has been the industry's standard dummy text </p><!-- caption -->
                            </figure><!-- end of clien design  box -->
                        </div><!-- end of /.columns 2 -->
                        <div class="col-lg-4 col-md-4  design-box wow flipInX center animated">
                            <figure class="pixel-item">
                                <i class="fa fa-paper-plane-o"></i><!-- icon -->
                                <h3>BEST ANALYICs</h3><!-- title -->
                                <p>Lorem Ipsum is simply dummy text of the printing typesetting industry. Lorem Ipsum has been the industry's standard dummy text </p><!-- caption -->
                            </figure><!-- end of pixel perfect box -->
                        </div><!-- end of /.columns 3 -->
                    </div><!-- end of /.row -->
                </div><!-- end of /.cotainer -->
            </section><!-- end of design cover /.section -->

            <section class="work-section smoth" id="service">
                <div class="container">
                    <div class="row">
                        <div class="section-title wow bounceInUp center animated">
                            <h2>MY WORKING AREA</h2><!-- section title -->
                        </div>
                        <div class="col-lg-6 mobile">
                            <article class="mobile-design work-box wow bounceInDown center animated">
                                <i class="fa fa-mobile"></i><!-- icon -->
                                <h3>Mobile app design</h3><!-- title -->
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text </p><!-- caption -->
                                <div class="dh-overlay"></div>
                            </article>

                        </div><!-- end of /.columns 1 -->
                        <div class="col-lg-6 template ">
                            <article class="template-design work-box wow bounceInDown center animated">
                                <i class="fa fa-laptop"></i><!-- icon -->
                                <h3>Web Template Design</h3><!-- title -->
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text </p><!-- caption -->
                                <div class="dh-overlay"></div>
                            </article>

                        </div><!-- end of /.columns 1 -->

                        <div class="col-lg-12 work-center-box">
                            <div class="main-center-item">
                                <span></span>
                            </div>
                        </div><!--end of main center columns-->
                        <div class="col-lg-6 ui">
                            <article class="ui-design work-box wow bounceInUp center animated">
                                <i class="fa fa-ils"></i><!-- icon -->
                                <h3>Ui Design</h3><!-- title -->
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text </p><!-- caption -->
                                <div class="dh-overlay"></div>
                            </article><!-- end of /.design box -->

                        </div><!-- end columns 1 -->
                        <div class="col-lg-6 landing wow bounceInUp center animated">
                            <article class="landing-page work-box">
                                <i class="fa fa-clipboard dh-container"></i><!-- icon -->
                                <h3>Landing page</h3><!-- title -->
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text </p><!-- caption -->
                                <div class="dh-overlay"></div>
                            </article><!-- end of /.design box -->

                        </div><!-- end columns 1 -->
                    </div><!-- end of /.row -->
                </div><!-- end of /.container -->
            </section><!-- end of work/.section -->

            <section class="working-prosess">
                <div class="container">
                    <div class="row">
                        <div class="working-item wow swing center animated">
                            <i class="fa fa-github-alt"></i>
                            <h2>Plan</h2>
                        </div><!-- end of /.working item 1 -->
                        <div class="working-item wow swing center animated">
                            <i class="fa fa-ioxhost"></i>
                            <h2>Idea</h2>
                        </div><!-- end of /.working item 2 -->
                        <div class="working-item wow swing center animated">
                            <i class="fa fa-pencil-square-o"></i>
                            <h2>Sketch  </h2>
                        </div><!-- end of /.working item 3 -->
                        <div class="working-item wow swing center animated">
                            <i class="fa fa-desktop"></i>
                            <h2>Design</h2>
                        </div><!-- end of /.working item 4 -->
                        <div class="working-item wow swing center animated">
                            <i class="fa fa-check"></i>
                            <h2>Launch</h2>
                        </div><!-- end of /.working item 5 -->
                    </div><!-- end of /.row -->
                </div><!-- end of /.container -->
            </section><!-- end of working prosess /.section -->

            <section class="portfolio-section" id="portfolio">
                <div class="container">
                    <div class="row">
                        <div class="section-title portfolio-title wow bounceInUp center animated">
                            <h2>MY PORTFOLIO</h2>
                            <p>Lets check most recent project I've worked on </p>
                        </div>
                        <div class="big-demo go-wide" data-js-module="filtering-demo">
                            <div class="portfolio-menu">
                                <div class="filter-button-group button-group js-radio-button-group menu-list">
                                    <ul class="filter_menu">
                                        <li class="active" data-filter="*">All</li>
                                        <li data-filter=".web">Web Design</li>
                                        <li data-filter=".mobile">Mobile App</li>
                                        <li data-filter=".landing">Landing page</li>
                                        <li data-filter=".ecommarce">Ecommarce</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="portfolio-item gallery">
                                <div class="single-portfolio web mobile col-md-4 col-sm-6 col-xs-12" data-category="transition">
                                    <div class="portfolio-single-item">
                                        <a href="images/work-1.jpg" data-gal="prettyPhoto[gallery1]">
                                            <img src="images/work-1.jpg" width="360" height="307" alt="portfolio image 1">
                                        </a>
                                    </div>
                                </div>
                                <div class="single-portfolio mobile landing col-md-4 col-sm-6 col-xs-12" data-category="metalloid">
                                    <div class="portfolio-single-item">
                                        <a href="images/work-2.jpg" data-gal="prettyPhoto[gallery1]">
                                            <img src="images/work-2.jpg" width="360" height="307" alt="Portfolio image 2">
                                        </a>
                                    </div>
                                </div>
                                <div class="single-portfolio mobile col-md-4 col-sm-6 col-xs-12" data-category="transition">
                                    <div class="portfolio-single-item">
                                        <a href="images/work-3.jpg" data-gal="prettyPhoto[gallery1]">
                                            <img src="images/work-3.jpg" width="360" height="307" alt="Portfolio Image 3">
                                        </a>
                                    </div>
                                </div>
                                <div class="single-portfolio web ecommarce landing col-md-4 col-sm-6 col-xs-12" data-category="transition">
                                    <div class="portfolio-single-item">
                                        <a href="images/work-4.jpg" data-gal="prettyPhoto[gallery1]">
                                            <img src="images/work-4.jpg" width="360" height="307" alt="Portfolio Image 4">
                                        </a>
                                    </div>
                                </div>
                                <div class="single-portfolio landing ecommarce col-md-4 col-sm-6 col-xs-12" data-category="transition">
                                    <div class="portfolio-single-item">
                                        <a href="images/work-5.jpg" data-gal="prettyPhoto[gallery1]">
                                            <img src="images/work-5.jpg" width="360" height="307" alt=" Portfolio Image 5">
                                        </a>
                                    </div>

                                </div>
                                <div class="single-portfolio web ecommarce col-md-4 col-sm-6 col-xs-12" data-category="transition">
                                    <div class="portfolio-single-item">
                                        <a href="images/work-6.jpg" data-gal="prettyPhoto[gallery1]">
                                            <img src="images/work-6.jpg" width="360" height="307" alt="Portfolio Image 6">
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- end of /.row -->
                </div><!-- end of /.container -->
            </section><!-- end of /.portfolio section -->

            <section class="social-share-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h3>Interested in more details? find me on Behance, Dribble</h3>
                            <a href="#">
                                <i class="fa fa-behance"></i>&nbsp; Behance
                            </a>
                            <a href="#">
                                <i class="fa fa-dribbble"></i>&nbsp; Dribbble
                            </a>
                        </div><!-- end of /. column -->
                    </div><!-- end of /.row -->
                </div><!-- end of /.container -->
            </section><!-- end of /.social share -->

            <section class="fun-facts-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="milestone-counter wow swing center animated">
                                <i class="fa fa-check-square-o"></i>
                                <h3 class="stat-count highlight"><b>192</b></h3>
                                <div class="milestone-details">project complate</div>
                            </div>
                        </div><!-- end of /.columns 1 -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="milestone-counter wow swing center animated">
                                <i class="fa fa-users"></i>
                                <h3 class="stat-count highlight"><b>198</b></h3>
                                <div class="milestone-details">HAPPY CLIENTS </div>
                            </div>
                        </div><!-- end of /.columns 2 -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="milestone-counter wow swing center animated">
                                <i class="fa fa-coffee"></i>
                                <h3 class="stat-count highlight"><b>950</b></h3>
                                <div class="milestone-details">CUPS OF COFFEE</div>
                            </div>
                        </div><!-- end of /.columns 3 -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="milestone-counter wow swing center animated">
                                <i class="fa fa-clock-o"></i>
                                <h3 class="stat-count highlight"><b>650</b></h3>
                                <div class="milestone-details">HOURS OF WORK</div>
                            </div>
                        </div><!-- end of /.columns 4 -->
                    </div><!-- end of /.row -->
                </div><!-- end of /.container  -->
            </section><!-- end of /.fun facts section -->

            <section class="client-section">
                <div class="container">
                    <div class="row">
                        <div class="section-title wow bounceInUp center animated">
                            <h2>clients feedback</h2><!-- title -->
                        </div>
                        <div id="client-carousel" class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="client-box">
                                    <img src="images/client-1.jpg" width="125" height="140" alt=""><!-- client profile -->
                                    <p>"Marcus is a full time Internet Marketing Analyst and Strategist. Her brain is an ocean of ideas and creativeness, and she loves expressing and sharing those ideas on her writings and artworks. Good service provider."</p>
                                    <span>
                                        <b>Raihind krowt </b><br>
                                        c.e.o,  Highown Tech. Ltd
                                    </span>
                                </div>
                            </div><!-- end of /.client item -->
                            <div class="item">
                                <div class="client-box">
                                    <img src="images/client-2.jpg" width="125" height="140" alt=""><!-- clien profile image -->
                                    <p>"Marcus is a full time Internet Marketing Analyst and Strategist. Her brain is an ocean of ideas and creativeness, and she loves expressing and sharing those ideas on her writings and artworks. Good service provider."</p>
                                    <span>
                                        <b>Porots Emmarn</b> <br>
                                        c.e.o Nahina Studio ltd
                                    </span>
                                </div>
                            </div><!-- end of /.client item -->
                            <div class="item">
                                <div class="client-box">
                                    <img src="images/client-1.jpg" width="125" height="140" alt=""><!-- client profile -->
                                    <p>"Marcus is a full time Internet Marketing Analyst and Strategist. Her brain is an ocean of ideas and creativeness, and she loves expressing and sharing those ideas on her writings and artworks. Good service provider."</p>
                                    <span>
                                        <b>Raihind krowt </b><br>
                                        c.e.o,  Highown Tech. Ltd
                                    </span>
                                </div>
                            </div><!-- end of /.client item -->
                            <div class="item">
                                <div class="client-box">
                                    <img src="images/client-2.jpg" width="125" height="140" alt=""><!-- clien profile image -->
                                    <p>"Marcus is a full time Internet Marketing Analyst and Strategist. Her brain is an ocean of ideas and creativeness, and she loves expressing and sharing those ideas on her writings and artworks. Good service provider."</p>
                                    <span>
                                        <b>Porots Emmarn</b><br>
                                        c.e.o Nahina Studio ltd
                                    </span>
                                </div>
                            </div><!-- end of /.client item -->
                        </div><!-- end of /.client carousel -->
                        <div class="customNavigation">
                            <a class="prev">
                                <i class="fa fa-angle-left"></i>
                            </a>
                            <a class="next">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div><!-- end of /.slider navigation -->
                    </div><!-- end /.row -->
                </div><!-- end of /.container -->
            </section><!-- end of /.client section -->

            <section class="contact-section" id="contact">
                <div class="container">
                    <div class="row">
                        <div class="section-title wow bounceInUp center animated">
                            <h2>GET IN TOUCH</h2>
                        </div><!-- contact title -->
                        <form>
                            <div class="form-group col-lg-6 wow bounceInUp center animated">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-user"></i> </div>
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                </div>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-envelope-o"></i> </div>
                                    <input type="text" class="form-control" id="email" placeholder="Your Email">
                                </div>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-globe"></i> </div>
                                    <input type="text" class="form-control" id="website" placeholder="Your Website">
                                </div>
                            </div>
                            <div class="form-group col-lg-6 wow bounceInUp center animated">
                                <div class="input-group">
                                    <textarea name="message" class="form-control" id="message" cols="50" placeholder="Your massage"></textarea>
                                </div>
                                <div class="input-group">
                                    <button type="submit"  class="form-submit">Send</button>
                                </div>
                            </div>
                        </form><!-- end of /.contact form -->
                    </div><!-- end of /.row -->
                </div><!-- end of /.container -->
            </section><!-- end of /.contact section -->

            <footer class="footer-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <p>Copyright 2015   | All Rights Reserved |  Design & Develop by  <a href="http://themencoder.com/">ThemeNcoder</a> </p>
                        </div><!-- coloumn -->
                    </div><!-- end of row -->
                </div><!-- end of /. container -->
            </footer><!-- end of /. footer section -->
        </div><!-- end  of /. wrapper -->

        <!-- jquery library -->
        <script src="js/vendor/jquery-1.11.2.min.js"></script>
        <!-- Bootstarp -->
        <script src="js/vendor/bootstrap.min.js"></script>
        <!-- parallax -->
        <script src="js/jquery.parallax-1.1.3.js"></script>
        <!-- owl carosuel -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- isotope -->
        <script src="js/isotope.pkgd.min.js"></script>
        <!-- placeholdem -->
        <script src="js/placeholdem.min.js"></script>
        <!-- prettyPhoto -->
        <script src="js/jquery.prettyPhoto.js"></script>
        <!-- switcher -->
        <script src="js/switcher.js"></script>
        <!-- wow js -->
        <script src="js/wow.min.js"></script>
        <!-- custom script -->
        <script src="js/jquery.nicescroll.min.js"></script>
        <!-- custom script -->
        <script src="js/custom.js"></script>

     </body>
</html>
