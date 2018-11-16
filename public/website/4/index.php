<?php require_once('../autoload.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="UTF-8">
    <title><?php echo $saved_data['first_name']; ?> <?php echo $saved_data['last_name']; ?> | <?php echo $saved_data['tag_line_2']; ?></title>

    <!-- ====== Google Fonts ====== -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" rel="stylesheet">

    <!-- ====== ALL CSS ====== -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/lightbox.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="icon" type="image/png" href="<?php echo $saved_data['main_image']; ?>" />

</head>

<body data-spy="scroll" data-target=".navbar-nav">

     <!-- Preloader -->
    <div class="preloader">
        <div class="spinner">
            <div class="cube1"></div>
            <div class="cube2"></div>
        </div>
    </div>
    <!-- // Preloader -->


    <!-- ====== Header ====== -->
    <header id="header" class="header">
        <!-- ====== Navbar ====== -->
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                <!-- Logo -->
                <a class="navbar-brand logo" href="/">
                    <img src="<?php echo $saved_data['main_image']; ?>" alt="logo">
                </a>
                <!-- // Logo -->

                <!-- Mobile Menu -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false"><span><i class="fa fa-bars"></i></span></button>
                <!-- Mobile Menu -->

                <div class="collapse navbar-collapse main-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="#home">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about"><?php echo $saved_data['about_title']; ?></a></li>
                        <li class="nav-item"><a class="nav-link" href="#service"><?php echo $saved_data['speciality_title']; ?></a></li>
                        <li class="nav-item"><a class="nav-link pr0" href="#contact"><?php echo $saved_data['contact_section_title']; ?></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- ====== // Navbar ====== -->
    </header>
    <!-- ====== // Header ====== -->

    <!-- ====== Hero Area ====== -->
    <div class="hero-aria" id="home">
        <!-- Hero Area Content -->
        <div class="container">
            <div class="hero-content h-100">
                <div class="d-table">
                    <div class="d-table-cell">
                        <h2 class="text-uppercase"><?php echo $saved_data['tag_line_1']; ?></h2>
                        <h3 class="text-uppercase"><span class="typed"></span></h3>
                        <p><?php echo $saved_data['tag_line_2']; ?></p>
                        <a href="#about" class="button smooth-scroll">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- // Hero Area Content -->
        <!-- Hero Area Slider -->
        <div class="hero-area-slids owl-carousel">
            <div class="single-slider">
                <!-- Single Background -->
                <div class="slider-bg" style="background-image: url(<?php echo $saved_data['main_image']; ?>)"></div>
                <!-- // Single Background -->
            </div>
            <div class="single-slider">
                <!-- Single Background -->
                <div class="slider-bg" style="background-image: url(<?php echo $saved_data['main_image']; ?>)"></div>
                <!-- // Single Background -->
            </div>
        </div>
        <!-- // Hero Area Slider -->
    </div>
    <!-- ====== //Hero Area ====== -->

    <!-- ====== About Area ====== -->
    <section id="about" class="section-padding about-area bg-light">
        <div class="container">
            <!-- Section Title -->
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="section-title text-center">
                        <h2><?php echo $saved_data['about_title']; ?></h2>
                        <p><?php echo $saved_data['about_story_title']; ?></p>
                    </div>
                </div>
            </div>
            <!-- //Section Title -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-bg" style="background-image:url(<?php echo $saved_data['main_image']; ?>)">
                        <!-- Social Link -->
                        <div class="social-aria">
                            <a target="_blank" href="<?php echo $saved_data['facebook_link']; ?>"><i class="fab fa-facebook-f"></i></a>
                            <a target="_blank" href="<?php echo $saved_data['twitter_link']; ?>"><i class="fab fa-twitter"></i></a>
                            <a target="_blank" href="<?php echo $saved_data['google_plus_link']; ?>"><i class="fab fa-google-plus"></i></a>
                            <a target="_blank" href="<?php echo $saved_data['linkedin_link']; ?>"><i class="fab fa-linkedin"></i></a>
                            <a target="_blank" href="<?php echo $saved_data['instagram_link']; ?>"><i class="fab fa-instagram"></i></a>
                        </div>
                        <!-- // Social Link -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <h2><?php echo $saved_data['tag_line_1']; ?></h2>
                        <h4><?php echo $saved_data['tag_line_2']; ?></h4>
                        <p><?php echo $saved_data['about_story']; ?></p>

                        <h5><?php echo $saved_data['skill_title']; ?></h5>

                        <!-- Skill Area -->
                        <div id="skills" class="skill-area">

                            <!-- Single skill -->
                            <div class="single-skill">
                                <div class="skillbar" data-percent="<?php echo $saved_data['skill_1_level']; ?>%">
                                    <div class="skillbar-title"><span><?php echo $saved_data['skill_1']; ?></span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent"><?php echo $saved_data['skill_1_level']; ?>%</div>
                                </div>
                            </div>
                            <!-- //Single skill -->

                            <!-- Single skill -->
                            <div class="single-skill">
                                <div class="skillbar" data-percent="<?php echo $saved_data['skill_2_level']; ?>%">
                                    <div class="skillbar-title"><span><?php echo $saved_data['skill_2']; ?></span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent"><?php echo $saved_data['skill_2_level']; ?>%</div>
                                </div>
                            </div>
                            <!-- //Single skill -->

                            <!-- Single skill -->
                            <div class="single-skill">
                                <div class="skillbar" data-percent="<?php echo $saved_data['skill_3_level']; ?>%">
                                    <div class="skillbar-title"><span><?php echo $saved_data['skill_3']; ?></span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent"><?php echo $saved_data['skill_3_level']; ?>%</div>
                                </div>
                            </div>
                            <!-- //Single skill -->

                            <!-- Single skill -->
                            <div class="single-skill">
                                <div class="skillbar" data-percent="<?php echo $saved_data['skill_4_level']; ?>%">
                                    <div class="skillbar-title"><span><?php echo $saved_data['skill_4']; ?></span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent"><?php echo $saved_data['skill_4_level']; ?>%</div>
                                </div>
                            </div>
                            <!-- //Single skill -->

                        </div>
                        <!-- //Skill Area -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== // About Area ====== -->


    <!-- ====== Fact Counter Section ====== -->
    <!-- ====================================================================
            NOTE: You need to change  'data-count="10"' and 'p' Eliments
        ===================================================================== -->
    <section class="section-padding pb-70 bg-img fact-counter" id="counter" style="background-image: url(assets/images/fan-fact-bg.jpg)">
        <div class="container">
            <div class="row">
                <h2 style="color:#fff;"><?php echo $saved_data['vision_statement']; ?></h2>
            </div>
        </div>
    </section>
    <!-- ====== //Fact Counter Section ====== -->

    <!-- ====== Service Section ====== -->
    <section id="service" class="section-padding pb-70 service-area bg-light">
        <div class="container">
            <!-- Section Title -->
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="section-title text-center">
                        <h2><?php echo $saved_data['speciality_title']; ?></h2>
                        <p><?php echo $saved_data['speciality_sub_title']; ?></p>
                    </div>
                </div>
            </div>
            <!-- //Section Title -->

            <div class="row">
                <!-- Single Service -->
                <div class="col-lg-3 col-md-4">
                    <div class="single-service">
                        <div class="service-icon">
                            <i class="fa <?php echo $saved_data['speciality_1_icon']; ?>"></i>
                        </div>
                        <h2><?php echo $saved_data['speciality_1']; ?></h2>
                        <p><?php echo $saved_data['speciality_1_text']; ?></p>
                        <a class="btn btn-primary btn-sm" href="<?php echo $saved_data['speciality_1_url']; ?>" target="_blank">view</a>
                    </div>
                </div>
                <!-- //Single Service -->
                <!-- Single Service -->
                <div class="col-lg-3 col-md-4">
                    <div class="single-service">
                        <div class="service-icon">
                            <i class="fa <?php echo $saved_data['speciality_2_icon']; ?>"></i>
                        </div>
                        <h2><?php echo $saved_data['speciality_2']; ?></h2>
                        <p><?php echo $saved_data['speciality_2_text']; ?></p>
                        <a class="btn btn-primary btn-sm" href="<?php echo $saved_data['speciality_2_url']; ?>" target="_blank">view</a>
                    </div>
                </div>
                <!-- //Single Service -->
                <!-- Single Service -->
                <div class="col-lg-3 col-md-4">
                    <div class="single-service">
                        <div class="service-icon">
                            <i class="fa <?php echo $saved_data['speciality_3_icon']; ?>"></i>
                        </div>
                        <h2><?php echo $saved_data['speciality_3']; ?></h2>
                        <p><?php echo $saved_data['speciality_3_text']; ?></p>
                        <a class="btn btn-primary btn-sm" href="<?php echo $saved_data['speciality_3_url']; ?>" target="_blank">view</a>
                    </div>
                </div>
                <!-- //Single Service -->
                <!-- Single Service -->
                <div class="col-lg-3 col-md-4">
                    <div class="single-service">
                        <div class="service-icon">
                            <i class="fa <?php echo $saved_data['speciality_4_icon']; ?>"></i>
                        </div>
                        <h2><?php echo $saved_data['speciality_4']; ?></h2>
                        <p><?php echo $saved_data['speciality_4_text']; ?></p>
                        <a class="btn btn-primary btn-sm" href="<?php echo $saved_data['speciality_4_url']; ?>" target="_blank">view</a>
                    </div>
                </div>
                <!-- //Single Service -->
            </div>

        </div>
    </section>
    <!-- ====== //Service Section ====== -->

    <!-- ====== Call to Action Area ====== -->

    <section class="section-padding pb-70 bg-img fact-counter" id="counter" style="background-image: url(assets/images/fan-fact-bg.jpg)">
        <div class="container">
            <div class="row">
                <h2 style="color:#fff;"><?php echo $saved_data['vision_statement']; ?></h2>
            </div>
        </div>
    </section>
    <!-- ====== // Call to Action Area ====== -->
    <!-- ====== Blog Section ====== -->
    <section id="service" class="section-padding pb-70 service-area bg-light">
        <div class="container">
            <!-- Section Title -->
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="section-title text-center">
                        <h2>Bulletin Board</h2>
                        <p>Latest News</p>
                    </div>
                </div>
            </div>
            <!-- //Section Title -->

            <div class="row">
              <?php foreach($posts as $post) {?>
                <!-- Single Service -->
                <div class="col-lg-3 col-md-4">
                    <div class="single-service">
                        <div class="service-icon">
                            <i class="fa fa-globe"></i>
                        </div>
                        <h2><?php echo $post['title']; ?>d</h2>
                        <p><?php echo $post['content']; ?></p>
                        <a class="btn btn-primary btn-sm" href="<?php echo $saved_data['speciality_1_url']; ?>" target="_blank">view</a>
                    </div>
                </div>
                <!-- //Single Service -->
                <?php  }?>
            </div>

        </div>
    </section>
    <!-- ====== //Service Section ====== -->
    <section class="section-padding call-to-action-aria bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <h2><?php echo $saved_data['mission_statement']; ?></h2>
                    <p></p>
                </div>
                <div class="col-lg-3">
                    <div class="cta-button">
                        <div class="d-table">
                            <div class="d-table-cell">
                                <a href="#contact" class="button">Donate</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Contact Area ====== -->
    <section id="contact" class="section-padding contact-section bg-light">
        <div class="container">
            <!-- Section Title -->
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="section-title text-center">
                        <h2><?php echo $saved_data['contact_section_title']; ?></h2>
                        <p>Looking forward to hearing from you!</p>
                    </div>
                </div>
            </div>
            <!-- //Section Title -->

            <!-- Contact Form -->
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <!-- Form -->
                    <form id="contact-form" action="mail.php" method="post" class="contact-form bg-white">
                        <div class="row">
                            <div class="col-lg-6 form-group">
                                <input type="text" class="form-control" name="name" required placeholder="Name">
                            </div>
                            <div class="col-lg-6 form-group">
                                <input type="email" class="form-control" name="email" required placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" required placeholder="Subject">
                        </div>

                        <div class="form-group">
                            <textarea name="message" id="" class="form-control" required placeholder="Message"></textarea>
                        </div>
                        <div class="form-btn text-center">
                            <button class="button" type="submit">Send Message</button>
                            <p class="form-message"></p>
                        </div>
                    </form>
                    <!-- // Form -->
                </div>
            </div>
            <!-- // Contact Form -->
        </div>
    </section>
    <!-- ====== // Contact Area ====== -->


    <!-- ====== Footer Area ====== -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="copyright-text">
                        <p class="text-white">&copy; <?php echo date('Y',time())?>   | All Rights Reserved |  Designed & Developed by  <a href="http://biznesskit.com/">Digital Kit</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ====== // Footer Area ====== -->






     <!-- ====== ALL JS ====== -->
   <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/lightbox.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.mixitup.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/typed.js"></script>
    <script src="assets/js/skill.bar.js"></script>
    <script src="assets/js/fact.counter.js"></script>
    <script src="assets/js/main.js"></script>
<script>
//Wow Animation
new WOW().init();
/*==========================
    Hero Title typer
============================*/
var element = $('.typed');
$(function () {
    element.typed({
        strings: ["<?php echo $saved_data['skill_1']; ?>", "<?php echo $saved_data['skill_2']; ?>","<?php echo $saved_data['skill_3']; ?>","<?php echo $saved_data['skill_4']; ?>"],
        typeSpeed: 100,
        loop: true,
        autoplay: true,
    });
});
</script>
</body>

</html>
