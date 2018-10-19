<?php require_once('../autoload.php');?>
<!DOCTYPE HTML>
<!--
	Strata by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title><?php echo $saved_data['first_name']; ?> <?php echo $saved_data['last_name']; ?> | <?php echo $saved_data['tag_line_2']; ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="icon" type="image/png" href="<?php echo $saved_data['main_image']; ?>" />
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header" style="background-image: url('images/overlay.png'), url('<?php echo $saved_data['bg_image']; ?>');">
				<div class="inner">
					<a href="#" class="image avatar"><img src="<?php echo $saved_data['main_image']; ?>" alt="<?php echo $saved_data['first_name']; ?> <?php echo $saved_data['last_name']; ?>" /></a>
					<h1><?php echo $saved_data['vision_statement']; ?></h1>
				</div>
			</header>

		<!-- Main -->
			<div id="main">

				<!-- One -->
					<section id="one">
						<header class="major">
							<h2><?php echo $saved_data['tag_line_1']; ?><br />
							<?php echo $saved_data['tag_line_2']; ?></h2>
						</header>
						<p><?php echo $saved_data['mission_statement']; ?></p>
						<!--<ul class="actions">
							<li><a href="#" class="button">Learn More</a></li>
						</ul>-->
					</section>

				<!-- Two -->
					<section id="two">
						<h2><?php echo $saved_data['speciality_title']; ?></h2>
						<p><?php echo $saved_data['speciality_sub_title']; ?></p>
						<div class="row">
							<article class="col-6 col-12-xsmall work-item">
								<a href="<?php echo $saved_data['speciality_1_img']; ?>" class="image fit thumb"><img src="<?php echo $saved_data['speciality_1_img']; ?>" alt="" /></a>
								<h3><a href="<?php echo $saved_data['speciality_1_url']; ?>" target="_blank"><strong><i class="icon fa <?php echo $saved_data['speciality_1_icon']; ?>"> </i> </strong><?php echo $saved_data['speciality_1']; ?></a></h3>
								<p><?php echo $saved_data['speciality_1_text']; ?></p>
							</article>
							<article class="col-6 col-12-xsmall work-item">
								<a href="<?php echo $saved_data['speciality_2_img']; ?>" class="image fit thumb"><img src="<?php echo $saved_data['speciality_2_img']; ?>" alt="" /></a>
								<h3><a href="<?php echo $saved_data['speciality_1_url']; ?>" target="_blank"><strong><i class="icon fa <?php echo $saved_data['speciality_2_icon']; ?>"> </i> </strong><?php echo $saved_data['speciality_2']; ?></a></h3>
								<p><?php echo $saved_data['speciality_2_text']; ?></p>
							</article>
							<article class="col-6 col-12-xsmall work-item">
								<a href="<?php echo $saved_data['speciality_3_img']; ?>" class="image fit thumb"><img src="<?php echo $saved_data['speciality_3_img']; ?>" alt="" /></a>
								<h3><a href="<?php echo $saved_data['speciality_1_url']; ?>" target="_blank"><strong><i class="icon fa <?php echo $saved_data['speciality_3_icon']; ?>"> </i> </strong><?php echo $saved_data['speciality_3']; ?></a></h3>
								<p><?php echo $saved_data['speciality_3_text']; ?></p>
							</article>
							<article class="col-6 col-12-xsmall work-item">
								<a href="<?php echo $saved_data['speciality_4_img']; ?>" class="image fit thumb"><img src="<?php echo $saved_data['speciality_4_img']; ?>" alt="" /></a>
								<h3><a href="<?php echo $saved_data['speciality_1_url']; ?>" target="_blank"><strong><i class="icon fa <?php echo $saved_data['speciality_4_icon']; ?>"> </i> </strong><?php echo $saved_data['speciality_4']; ?></a></h3>
								<p><?php echo $saved_data['speciality_4_text']; ?></p>
							</article>
						</div>
						<?php if($saved_data['resume_downloadable']){?>
						<ul class="actions">
							<li><a href="<?php echo $saved_data['resume_download_link']; ?>" class="button">Resume <i class="icon fa-download"></i></a></li>
						</ul>
						<?php }?>
					</section>

				<!-- Three -->
					<section id="three">
						<h2><?php echo $saved_data['contact_section_title']; ?></h2>
						<p></p>
						<div class="row">
							<div class="col-8 col-12-small">
								<form method="post" action="#">
									<div class="row gtr-uniform gtr-50">
										<div class="col-6 col-12-xsmall"><input type="text" name="name" id="name" placeholder="Name" /></div>
										<div class="col-6 col-12-xsmall"><input type="email" name="email" id="email" placeholder="Email" /></div>
										<div class="col-12"><textarea name="message" id="message" placeholder="Message" rows="4"></textarea></div>
									</div>
								</form>
								<ul class="actions">
									<li><input type="submit" value="Send Message" /></li>
								</ul>
							</div>
							<div class="col-4 col-12-small">
								<!--<ul class="labeled-icons">
									<li>
										<h3 class="icon fa-home"><span class="label">Address</span></h3>
										1234 Somewhere Rd.<br />
										Nashville, TN 00000<br />
										United States
									</li>
									<li>
										<h3 class="icon fa-mobile"><span class="label">Phone</span></h3>
										000-000-0000
									</li>
									<li>
										<h3 class="icon fa-envelope-o"><span class="label">Email</span></h3>
										<a href="#">hello@untitled.tld</a>
									</li>
								</ul>-->
							</div>
						</div>
					</section>

			</div>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<ul class="icons">
						<li><a href="<?php echo $saved_data['twitter_link']; ?>" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="<?php echo $saved_data['linkedin_link']; ?>" class="icon fa-linkedin"><span class="label">Linkedin</span></a></li>
						<li><a href="<?php echo $saved_data['facebook_link']; ?>" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="<?php echo $saved_data['instagram_link']; ?>" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; <?php echo date('Y',time())?> | All Rights Reserved | Designed & Developed by <a href="http://biznesskit.com/">Digital Kit</a></li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
