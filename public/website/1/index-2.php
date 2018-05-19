<?php require_once('../autoload.php');?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <title><?php echo $saved_data['first_name']; ?> <?php echo $saved_data['last_name']; ?> | <?php echo $saved_data['tag_line_2']; ?></title><!-- site title name -->
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
          <span>w</span>
          <span>e</span>
          <span>l</span>
          <span>c</span>
          <span>o</span>
          <span>m</span>
          <span>e</span>
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
                                        <li><a href="#about"><?php echo $saved_data['about_title']; ?></a></li>
                                        <li><a href="#service"><?php echo $saved_data['speciality_title']; ?></a></li>
                                        <li><a href="#portfolio"><?php echo $saved_data['portfolio_title']; ?></a></li>
                                        <li><a id="link" href="#contact"><?php echo $saved_data['contact_section_title']; ?></a></li>
                                    </ul><!-- end of /.ul -->
                                </div><!-- end of /.navbar-collapse -->

                            </div><!-- end of /.container-fluid -->
                        </nav><!-- end of /. nav section -->
                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12  column wow bounceInUp center animated">
                            <div class="shadow">
                              <img  class="img-responsive" src="<?php echo $saved_data['main_image']; ?>" alt="" />
                            </div>
                        </div><!-- end of /.column-->
                        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 profile-item wow flipInX center animated">
                            <article class="profile-caption">
                                <h2><?php echo $saved_data['tag_line_1']; ?></h2>
                                <h2><?php echo $saved_data['tag_line_2']; ?></h2>
                                <div class="social-media">
                                  <a href="<?php echo $saved_data['facebook_link']; ?>"><i class="fa fa-facebook"></i></a>
                                  <a href="<?php echo $saved_data['twitter_link']; ?>"><i class="fa fa-twitter"></i></a>
                                  <a href="<?php echo $saved_data['google_plus_link']; ?>"><i class="fa fa-google-plus"></i></a>
                                  <a href="<?php echo $saved_data['linked_link']; ?>"><i class="fa fa-linkedin"></i></a>
                                  <a href="<?php echo $saved_data['instagram_link']; ?>"><i class="fa fa-instagram"></i></a>
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
                            <h2><?php echo $saved_data['about_title']; ?></h2><!-- section title -->
                        </div>
                        <div class="col-lg-6">
                            <article class="about-me-box">
                                <h2><?php echo $saved_data['about_story_title']; ?></h2>
                                <p><?php echo $saved_data['about_story']; ?></p>
                                <?php if($saved_data['resume_downloadable']){?>
                                <a href="<?php echo $saved_data['resume_download_link']; ?>"><i class="fa fa-cloud-download"></i>Download Resume</a>
                                <?php }?>
                            </article>
                        </div>
                        <div class="col-lg-6">
                            <div class="skill-box wow bounceInRight center animated">
                                <h2><?php echo $saved_data['skill_title']; ?></h2>
                                <p><?php echo $saved_data['skill_1']; ?></p>
                                <div class="progressbar" data-perc="<?php echo $saved_data['skill_1_level']; ?>">
                                	<div class="bar"><span></span></div>
                                	<div class="label wow bounceInLeft center animated"></div>
                                </div>
                                <p><?php echo $saved_data['skill_2']; ?></p>
                                <div class="progressbar" data-perc="<?php echo $saved_data['skill_2_level']; ?>">
                                	<div class="bar color2"><span></span></div>
                                	<div class="label wow bounceInLeft center animated"></div>
                                </div>
                                <p><?php echo $saved_data['skill_3']; ?></p>
                                <div class="progressbar" data-perc="<?php echo $saved_data['skill_3_level']; ?>">
                                	<div class="bar color3"><span></span></div>
                                	<div class="label wow bounceInLeft center animated"></div>
                                </div>
                                <p><?php echo $saved_data['skill_4']; ?></p>
                                <div class="progressbar" data-perc="<?php echo $saved_data['skill_4_level']; ?>">
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
                    <h2 class="text-center" style="color:#fff;"><?php echo $saved_data['vision_statement']; ?></h2>
                </div><!-- end of /.cotainer -->
            </section><!-- end of design cover /.section -->

            <section class="work-section smoth" id="service">
                <div class="container">
                    <div class="row">
                        <div class="section-title wow bounceInUp center animated">
                            <h2><?php echo $saved_data['speciality_title']; ?></h2><!-- section title -->
                        </div>
                        <div class="col-lg-6 mobile">
                            <article class="mobile-design work-box wow bounceInDown center animated">
                                <i class="fa <?php echo $saved_data['speciality_1_icon']; ?>"></i><!-- icon -->
                                <h3><?php echo $saved_data['speciality_1']; ?></h3><!-- title -->
                                <p><?php echo $saved_data['speciality_1_text']; ?></p><!-- caption -->
                                <div class="dh-overlay"></div>
                            </article>

                        </div><!-- end of /.columns 1 -->
                        <div class="col-lg-6 template ">
                            <article class="template-design work-box wow bounceInDown center animated">
                                <i class="fa <?php echo $saved_data['speciality_2_icon']; ?>"></i><!-- icon -->
                                <h3><?php echo $saved_data['speciality_2']; ?></h3><!-- title -->
                                <p><?php echo $saved_data['speciality_2_text']; ?></p><!-- caption -->
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
                                <i class="fa <?php echo $saved_data['speciality_3_icon']; ?>"></i><!-- icon -->
                                <h3><?php echo $saved_data['speciality_3']; ?></h3><!-- title -->
                                <p><?php echo $saved_data['speciality_3_text']; ?></p><!-- caption -->
                                <div class="dh-overlay"></div>
                            </article><!-- end of /.design box -->

                        </div><!-- end columns 1 -->
                        <div class="col-lg-6 landing wow bounceInUp center animated">
                            <article class="landing-page work-box">
                                <i class="fa <?php echo $saved_data['speciality_4_icon']; ?> dh-container"></i><!-- icon -->
                                <h3><?php echo $saved_data['speciality_4']; ?></h3><!-- title -->
                                <p><?php echo $saved_data['speciality_4_text']; ?></p><!-- caption -->
                                <div class="dh-overlay"></div>
                            </article><!-- end of /.design box -->

                        </div><!-- end columns 1 -->
                    </div><!-- end of /.row -->
                </div><!-- end of /.container -->
            </section><!-- end of work/.section -->

            <section class="working-prosess">
                <div class="container">
                    <h2 class="text-center" style="color:#fff;"><?php echo $saved_data['mission_statement']; ?></h2>
                </div><!-- end of /.container -->
            </section><!-- end of working prosess /.section -->

            <section class="portfolio-section" id="portfolio">
                <div class="container">
                    <div class="row">
                        <div class="section-title portfolio-title wow bounceInUp center animated">
                            <h2><?php echo $saved_data['portfolio_title']; ?></h2>
                            <p><?php echo $saved_data['portfolio_sub_title']; ?></p>
                        </div>
                        <div class="big-demo go-wide" data-js-module="filtering-demo">
                            <div class="portfolio-menu">
                                <div class="filter-button-group button-group js-radio-button-group menu-list">
                                    <ul class="filter_menu">
                                        <li class="active" data-filter="*">All</li>
                                        <li data-filter=".<?php echo $saved_data['portfolio_category_1']; ?>"><?php echo $saved_data['portfolio_category_1']; ?></li>
                                        <li data-filter=".<?php echo $saved_data['portfolio_category_2']; ?>"><?php echo $saved_data['portfolio_category_2']; ?></li>
                                        <li data-filter=".<?php echo $saved_data['portfolio_category_3']; ?>"><?php echo $saved_data['portfolio_category_3']; ?></li>
                                        <li data-filter=".<?php echo $saved_data['portfolio_category_4']; ?>"><?php echo $saved_data['portfolio_category_4']; ?></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="portfolio-item gallery">
                                <div class="single-portfolio <?php echo $saved_data['work_1_category']; ?> col-md-4 col-sm-6 col-xs-12" data-category="transition">
                                    <div class="portfolio-single-item">
                                        <a href="<?php echo $saved_data['work_1_image']; ?>" data-gal="prettyPhoto[gallery1]">
                                            <img src="<?php echo $saved_data['work_1_image']; ?>" width="360" height="307" alt="<?php echo $saved_data['work_1']; ?>">
                                        </a>
                                    </div>
                                </div>
                                <div class="single-portfolio <?php echo $saved_data['work_2_category']; ?> col-md-4 col-sm-6 col-xs-12" data-category="metalloid">
                                    <div class="portfolio-single-item">
                                        <a href="<?php echo $saved_data['work_2_image']; ?>" data-gal="prettyPhoto[gallery1]">
                                            <img src="<?php echo $saved_data['work_2_image']; ?>" width="360" height="307" alt="<?php echo $saved_data['work_2']; ?>">
                                        </a>
                                    </div>
                                </div>
                                <div class="single-portfolio <?php echo $saved_data['work_3_category']; ?> col-md-4 col-sm-6 col-xs-12" data-category="transition">
                                    <div class="portfolio-single-item">
                                        <a href="<?php echo $saved_data['work_3_image']; ?>" data-gal="prettyPhoto[gallery1]">
                                            <img src="<?php echo $saved_data['work_3_image']; ?>" width="360" height="307" alt="<?php echo $saved_data['work_3']; ?>">
                                        </a>
                                    </div>
                                </div>
                                <div class="single-portfolio <?php echo $saved_data['work_4_category']; ?>  col-md-4 col-sm-6 col-xs-12" data-category="transition">
                                    <div class="portfolio-single-item">
                                        <a href="<?php echo $saved_data['work_4_image']; ?>" data-gal="prettyPhoto[gallery1]">
                                            <img src="<?php echo $saved_data['work_4_image']; ?>" width="360" height="307" alt="<?php echo $saved_data['work_4']; ?>">
                                        </a>
                                    </div>
                                </div>
                                <div class="single-portfolio <?php echo $saved_data['work_5_category']; ?> col-md-4 col-sm-6 col-xs-12" data-category="transition">
                                    <div class="portfolio-single-item">
                                        <a href="<?php echo $saved_data['work_5_image']; ?>" data-gal="prettyPhoto[gallery1]">
                                            <img src="<?php echo $saved_data['work_5_image']; ?>" width="360" height="307" alt=" <?php echo $saved_data['work_5']; ?>">
                                        </a>
                                    </div>

                                </div>
                                <div class="single-portfolio <?php echo $saved_data['work_6_category']; ?> col-md-4 col-sm-6 col-xs-12" data-category="transition">
                                    <div class="portfolio-single-item">
                                        <a href="<?php echo $saved_data['work_6_image']; ?>" data-gal="prettyPhoto[gallery1]">
                                            <img src="<?php echo $saved_data['work_6_image']; ?>" width="360" height="307" alt="<?php echo $saved_data['work_6']; ?>">
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- end of /.row -->
                </div><!-- end of /.container -->
            </section><!-- end of /.portfolio section -->

            <section class="contact-section" id="contact">
                <div class="container">
                    <div class="row">
                        <div class="section-title wow bounceInUp center animated">
                            <h2><?php echo $saved_data['contact_section_title']; ?></h2>
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
                            <p>Copyright <?php echo date('Y',time())?>   | All Rights Reserved |  Designed & Developed by  <a href="http://localhost.com/">Digital Kit</a> </p>
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
