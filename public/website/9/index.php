<?php require_once('../autoload.php');?>
<!DOCTYPE HTML>
<!--
	Landed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Landed by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload landing">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1 id="logo"><a href="index.html"><?php echo $saved_data['first_name']; ?> <?php echo $saved_data['last_name']; ?></a></h1>
					<nav id="nav">
						<ul>
							<!--<li><a href="index.html">Home</a></li>
							<li>
								<a href="#">Layouts</a>
								<ul>
									<li><a href="left-sidebar.html">Left Sidebar</a></li>
									<li><a href="right-sidebar.html">Right Sidebar</a></li>
									<li><a href="no-sidebar.html">No Sidebar</a></li>
									<li>
										<a href="#">Submenu</a>
										<ul>
											<li><a href="#">Option 1</a></li>
											<li><a href="#">Option 2</a></li>
											<li><a href="#">Option 3</a></li>
											<li><a href="#">Option 4</a></li>
										</ul>
									</li>
								</ul>
							</li>-->
							<li><a href="#">Home</a></li>
							<li><a href="#one"><?php echo $saved_data['about_title']; ?></a></li>
							<li><a href="#three"><?php echo $saved_data['speciality_title']; ?></a></li>
							<li><a href="#cta"><?php echo $saved_data['contact_section_title']; ?></a></li>
						</ul>
					</nav>
				</header>

			<!-- Banner -->
				<section id="banner">
					<div class="content">
						<header>
							<h2><?php echo $saved_data['tag_line_1']; ?></h2>
							<p><?php echo $saved_data['tag_line_2']; ?></p>
						</header>
						<span class="image"><img src="<?php echo $saved_data['main_image']; ?>" alt="" /></span>
					</div>
					<a href="#one" class="goto-next scrolly">Next</a>
				</section>

			<!-- One -->
				<section id="one" class="spotlight style1 bottom">
					<span class="image fit main"><img src="<?php echo $saved_data['main_image']; ?>" alt="" /></span>
					<div class="content">
						<div class="container">
							<div class="row">
								<div class="col-4 col-12-medium">
									<header>
										<h2>Odio faucibus ipsum integer consequat</h2>
										<p>Nascetur eu nibh vestibulum amet gravida nascetur praesent</p>
									</header>
								</div>
								<div class="col-4 col-12-medium">
									<p>Feugiat accumsan lorem eu ac lorem amet sed accumsan donec.
									Blandit orci porttitor semper. Arcu phasellus tortor enim mi
									nisi praesent dolor adipiscing. Integer mi sed nascetur cep aliquet
									augue varius tempus lobortis porttitor accumsan consequat
									adipiscing lorem dolor.</p>
								</div>
								<div class="col-4 col-12-medium">
									<p>Morbi enim nascetur et placerat lorem sed iaculis neque ante
									adipiscing adipiscing metus massa. Blandit orci porttitor semper.
									Arcu phasellus tortor enim mi mi nisi praesent adipiscing. Integer
									mi sed nascetur cep aliquet augue varius tempus. Feugiat lorem
									ipsum dolor nullam.</p>
								</div>
							</div>
						</div>
					</div>
					<a href="#two" class="goto-next scrolly">Next</a>
				</section>

			<!-- Two -->
				<section id="two" class="spotlight style2 right">
					<span class="image fit main"><img src="<?php echo $saved_data['main_image']; ?>" alt="" /></span>
					<div class="content">
						<header>
							<h2>Interdum amet non magna accumsan</h2>
							<p>Nunc commodo accumsan eget id nisi eu col volutpat magna</p>
						</header>
						<p>Feugiat accumsan lorem eu ac lorem amet ac arcu phasellus tortor enim mi mi nisi praesent adipiscing. Integer mi sed nascetur cep aliquet augue varius tempus lobortis porttitor lorem et accumsan consequat adipiscing lorem.</p>
						<ul class="actions">
							<li><a href="#" class="button">Support Me</a></li>
						</ul>
					</div>
					<a href="#three" class="goto-next scrolly">Next</a>
				</section>

			<!-- Three -->
				<section id="three" class="spotlight style3 left">
					<span class="image fit main bottom"><img src="<?php echo $saved_data['main_image']; ?>" alt="" /></span>
					<div class="content">
						<header>
							<h2>Interdum felis blandit praesent sed augue</h2>
							<p>Accumsan integer ultricies aliquam vel massa sapien phasellus</p>
						</header>
						<p>Feugiat accumsan lorem eu ac lorem amet ac arcu phasellus tortor enim mi mi nisi praesent adipiscing. Integer mi sed nascetur cep aliquet augue varius tempus lobortis porttitor lorem et accumsan consequat adipiscing lorem.</p>
						<!-- Skill Area -->
						<div id="skills" class="skill-area">

								<!-- Single skill -->
								<div class="kill">
										<div class="skillbar" data-percent="<?php echo $saved_data['skill_1_level']; ?>%">
												<div class="skillbar-title"><span><?php echo $saved_data['skill_1']; ?></span></div>
												<div class="skillbar-bar"></div>
												<div class="skill-bar-percent"><?php echo $saved_data['skill_1_level']; ?>%</div>
										</div>
								</div>
								<!-- //Single skill -->

								<!-- Single skill -->
								<div class="kill">
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
						<ul class="actions">
							<li><a href="#" class="button">Check out my bulletin board</a></li>
						</ul>
					</div>
					<a href="#four" class="goto-next scrolly">Next</a>
				</section>

			<!-- Four -->
				<section id="four" class="wrapper style1 special fade-up">
					<div class="container">
						<header class="major">
							<h2>Bulletin Board</h2>
							<p>Latest News</p>
						</header>
						<div class="box alt">
							<div class="row gtr-uniform">
								<?php foreach($posts as $post) {?>
								<section class="col-4 col-6-medium col-12-xsmall">
									<span class="icon alt major fa-globe"></span>
									<a href="#"><h3><?php echo $post[2];?></h3>
									<p><?php echo $post[3];?></p></a>
								</section>
							 <?php } ?>
							</div>
						</div>
						<footer class="major">
							<ul class="actions special">
								<li><a href="#" class="button"><?php echo $saved_data['contact_section_title']; ?></a></li>
							</ul>
						</footer>
					</div>
				</section>

			<!-- Five -->
				<section id="five" class="wrapper style2 special fade">
					<div class="container">
						<header>
							<h2><?php echo $saved_data['contact_section_title']; ?></h2>
							<p>Looking forward to hearing from you!</p>
						</header>
						<form method="post" action="#" class="cta">
							<div class="row gtr-uniform gtr-50">
								<div class="col-12 col-12-xsmall"><input type="text" name="name" id="name" placeholder="Your Name" /></div>
								<div class="col-12 col-12-xsmall"><input type="email" name="email" id="email" placeholder="Your Email Address" /></div>
								<div class="col-12 col-12-xsmall"><textarea name="message" id="message" placeholder="Your Message" /></textarea></div>
								<div class="col-4 col-12-xsmall"><input type="submit" value="Send" class="fit primary" /></div>
							</div>
						</form>
					</div>
				</section>

			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
						<li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
						<li><a href="#" class="icon alt fa-envelope"><span class="label">Email</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
