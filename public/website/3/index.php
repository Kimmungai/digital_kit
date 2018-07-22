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
											<li><a href="index.html">Home</a></li>
											<li><a href="generic.html">Generic</a></li>
											<li><a href="elements.html">Elements</a></li>
											<li><a href="#">Sign Up</a></li>
											<li><a href="#">Log In</a></li>
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
								<li><span class="icon fa-facebook major style1"><span class="label">Lorem</span></span></li>
								<li><span class="icon fa-twitter major style2"><span class="label">Ipsum</span></span></li>
								<li><span class="icon fa-linkedin major style3"><span class="label">Dolor</span></span></li>
							</ul>
						</div>
					</section>

				<!-- Two -->
					<section id="two" class="wrapper alt style2">
						<section class="spotlight">
							<div class="image"><img src="<?php echo $saved_data['main_image']; ?>" alt="" /></div><div class="content">
								<h2><?php echo $saved_data['about_story_title']; ?></h2>
								<p><?php echo $saved_data['about_story']; ?></p>
							</div>
						</section>
						<section class="spotlight">
							<div class="image"><img src="<?php echo $saved_data['main_image']; ?>" alt="" /></div><div class="content">
								<h2>Tortor dolore feugiat<br />
								elementum magna</h2>
								<p><?php echo $saved_data['about_story']; ?></p>
							</div>
						</section>
					</section>

				<!-- Three -->
					<section id="three" class="wrapper style3 special">
						<div class="inner">
							<header class="major">
								<h2>Accumsan mus tortor nunc aliquet</h2>
								<p>Aliquam ut ex ut augue consectetur interdum. Donec amet imperdiet eleifend<br />
								fringilla tincidunt. Nullam dui leo Aenean mi ligula, rhoncus ullamcorper.</p>
							</header>
							<ul class="features">
								<li class="icon fa-paper-plane-o">
									<h3>Arcu accumsan</h3>
									<p>Augue consectetur sed interdum imperdiet et ipsum. Mauris lorem tincidunt nullam amet leo Aenean ligula consequat consequat.</p>
								</li>
								<li class="icon fa-laptop">
									<h3>Ac Augue Eget</h3>
									<p>Augue consectetur sed interdum imperdiet et ipsum. Mauris lorem tincidunt nullam amet leo Aenean ligula consequat consequat.</p>
								</li>
								<li class="icon fa-code">
									<h3>Mus Scelerisque</h3>
									<p>Augue consectetur sed interdum imperdiet et ipsum. Mauris lorem tincidunt nullam amet leo Aenean ligula consequat consequat.</p>
								</li>
								<li class="icon fa-headphones">
									<h3>Mauris Imperdiet</h3>
									<p>Augue consectetur sed interdum imperdiet et ipsum. Mauris lorem tincidunt nullam amet leo Aenean ligula consequat consequat.</p>
								</li>
								<li class="icon fa-heart-o">
									<h3>Aenean Primis</h3>
									<p>Augue consectetur sed interdum imperdiet et ipsum. Mauris lorem tincidunt nullam amet leo Aenean ligula consequat consequat.</p>
								</li>
								<li class="icon fa-flag-o">
									<h3>Tortor Ut</h3>
									<p>Augue consectetur sed interdum imperdiet et ipsum. Mauris lorem tincidunt nullam amet leo Aenean ligula consequat consequat.</p>
								</li>
							</ul>
						</div>
					</section>

				<!-- CTA -->
					<section id="cta" class="wrapper style4">
						<div class="inner">
							<header>
								<h2><?php echo $saved_data['contact_section_title']; ?></h2>
								<p>Aliquam ut ex ut augue consectetur interdum endrerit imperdiet amet eleifend fringilla.</p>
							</header>
							<ul class="actions stacked">
								<li><a href="#" class="button fit primary">Activate</a></li>
								<li><a href="#" class="button fit">Learn More</a></li>
							</ul>
						</div>
					</section>

				<!-- Footer -->
					<footer id="footer">
						<ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
							<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
						</ul>
						<ul class="copyright">
							<li>&copy; Untitled</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
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

	</body>
</html>
