<?php require_once('../autoload.php');?>
<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Spectral by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<style type="text/css">
		body.landing #page-wrapper {
			background-image: -moz-linear-gradient(top, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("<?php echo $saved_data['main_image']; ?>");
			background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("<?php echo $saved_data['main_image']; ?>");
			background-image: -ms-linear-gradient(top, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("<?php echo $saved_data['main_image']; ?>");
			background-image: linear-gradient(top, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("<?php echo $saved_data['main_image']; ?>");
			background-attachment: fixed;
			background-position: center center;
			background-repeat: no-repeat;
			background-size: cover;
			padding-top: 0;
		}
		body.is-mobile.landing #banner,
		body.is-mobile.landing .wrapper.style4 {
			background-image: -moz-linear-gradient(top, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("<?php echo $saved_data['main_image']; ?>");
			background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("<?php echo $saved_data['main_image']; ?>");
			background-image: -ms-linear-gradient(top, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("<?php echo $saved_data['main_image']; ?>");
			background-image: linear-gradient(top, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("<?php echo $saved_data['main_image']; ?>");
			background-position: center center;
			background-repeat: no-repeat;
			background-size: cover;
		}
		</style>
	</head>
	<body class="landing is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<h1><a href="index.html">Spectral</a></h1>
						<nav id="nav">
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu">
										<ul>
											<li><a href="#">Home</a></li>
											<li><a href="#one"><?php echo $saved_data['about_title']; ?></a></li>
											<li><a href="#three"><?php echo $saved_data['speciality_title']; ?></a></li>
											<li><a href="#cta"><?php echo $saved_data['contact_section_title']; ?></a></li>
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Banner -->
					<section id="banner">
						<div class="inner">
							<h2><?php echo $saved_data['tag_line_1']; ?></h2>
							<p><?php echo $saved_data['tag_line_2']; ?></p>
							<?php if($saved_data['resume_downloadable']){?>
								<ul class="actions special">
									<li><a href="<?php echo $saved_data['resume_download_link']; ?>" class="button primary"><i class="fa fa-cloud-download"></i> Resume</a></li>
								</ul>
							<?php }?>
						</div>
						<a href="#one" class="more scrolly">Learn More</a>
					</section>

				<!-- One -->
					<section id="one" class="wrapper style1 special">
						<div class="inner">
							<header class="major">
								<h2><?php echo $saved_data['about_title']; ?></h2>
								<p></p>
							</header>
							<ul class="icons major">
								<li onclick="openLink('<?php echo $saved_data['facebook_link']; ?>')"><span class="icon fa-facebook major style1"></span></li>
								<li onclick="openLink('<?php echo $saved_data['twitter_link']; ?>')"><span class="icon fa-twitter major style2"></span></li>
								<li onclick="openLink('<?php echo $saved_data['google_plus_link']; ?>')"><span class="icon fa-google-plus major style3"></span></li>
								<li onclick="openLink('<?php echo $saved_data['linkedin_link']; ?>')"><span class="icon fa-linkedin major style3"></span></li>
								<li onclick="openLink('<?php echo $saved_data['instagram_link']; ?>')"><span class="icon fa-instagram major style3"></span></li>
							</ul>
						</div>
					</section>

				<!-- Two -->
					<section id="two" class="wrapper alt style2">
						<section class="spotlight">
							<div class="image"><img src="<?php echo $saved_data['main_image']; ?>" alt="" /></div><div class="content">
								<h2><?php echo $saved_data['vision_statement']; ?></h2>
							</div>
						</section>
						<section class="spotlight">
							<div class="image"><img src="<?php echo $saved_data['main_image']; ?>" alt="" /></div><div class="content">
								<h2><?php echo $saved_data['about_story_title']; ?></h2>
								<p><?php echo $saved_data['about_story']; ?></p>
							</div>
						</section>
					</section>

				<!-- Three -->
					<section id="three" class="wrapper style3 special">
						<div class="inner">
							<header class="major">
								<h2><?php echo $saved_data['speciality_title']; ?></h2>
								<p><?php echo $saved_data['mission_statement']; ?></p>
							</header>
							<ul class="features">
								<li class="icon fa <?php echo $saved_data['speciality_1_icon']; ?>">
									<h3><?php echo $saved_data['speciality_1']; ?></h3>
									<p><?php echo $saved_data['speciality_1_text']; ?></p>
								</li>
								<li class="icon fa <?php echo $saved_data['speciality_2_icon']; ?>">
									<h3><?php echo $saved_data['speciality_2']; ?></h3>
									<p><?php echo $saved_data['speciality_2_text']; ?></p>
								</li>
								<li class="icon fa <?php echo $saved_data['speciality_3_icon']; ?>">
									<h3><?php echo $saved_data['speciality_3']; ?></h3>
									<p><?php echo $saved_data['speciality_3']; ?></p>
								</li>
								<li class="icon fa <?php echo $saved_data['speciality_4_icon']; ?>">
									<h3><?php echo $saved_data['speciality_4']; ?></h3>
									<p><?php echo $saved_data['speciality_4']; ?></p>
								</li>
							</ul>
						</div>
					</section>

				<!-- CTA -->
					<section id="cta" class="wrapper style4">
						<div class="inner">
							<header>
								<h2><?php echo $saved_data['contact_section_title']; ?></h2>
								<p>Looking forward to hearing from you!</p>
							</header>
							<ul class="actions stacked">
								<div class="card">
									<div class="card-body">
										<form>
										  <div class="form-group">
										    <label for="formGroupExampleInput">Your Name</label>
										    <input type="text" class="form-control" id="formGroupExampleInput">
										  </div>
											<div class="form-group">
										    <label for="formGroupExampleInput">Your Email</label>
										    <input type="text" class="form-control" id="formGroupExampleInput">
										  </div>
										  <div class="form-group">
										    <label for="formGroupExampleInput2">Your Website</label>
										    <input type="text" class="form-control" id="formGroupExampleInput2">
										  </div>
											<div class="form-group">
										    <label for="formGroupExampleInput2">Your Message</label>
										    <textarea class="form-control"></textarea>
										  </div>
										</form>
									</div>
								</div>
								<li><a href="#" class="button fit primary">SEND</a></li>
							</ul>
						</div>
					</section>

				<!-- Footer -->
					<footer id="footer">
						<ul class="icons">
							<li><a href="<?php echo $saved_data['facebook_link']; ?>" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="<?php echo $saved_data['twitter_link']; ?>" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="<?php echo $saved_data['google_plus_link']; ?>" class="icon fa-google-plus"><span class="label">Instagram</span></a></li>
							<li><a href="<?php echo $saved_data['linkedin_link']; ?>" class="icon fa-linkedin"><span class="label">Dribbble</span></a></li>
							<li><a href="<?php echo $saved_data['instagram_link']; ?>" class="icon fa-instagram"><span class="label">Email</span></a></li>
						</ul>
						<ul class="copyright">
							<li>Copyright <?php echo date('Y',time())?>   | All Rights Reserved |  Designed & Developed by  <a href="http://localhost.com/">Digital Kit</a> </li>
						</ul>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script>
				function openLink(url) {
				    window.open(url, "_self");
				}
			</script>
	</body>
</html>
