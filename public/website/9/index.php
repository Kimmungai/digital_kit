<?php require_once('../autoload.php');?>
<!DOCTYPE HTML>
<!--
	Landed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title><?php echo $saved_data['first_name']; ?> <?php echo $saved_data['last_name']; ?> | <?php echo $saved_data['tag_line_2']; ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<link rel="icon" type="image/png" href="<?php echo $saved_data['main_image']; ?>" />
		<style>
		* {box-sizing: border-box}

		.skill-container {
		  width: 100%;
		  background-color: #ddd;
		}

		.skills {
		  text-align: right;
		  padding: 6px;
		  color: white;
		}

		.skill_1 {width: <?php echo $saved_data['skill_1_level'];?>%; background-color: #4CAF50;}
		.skill_2 {width: <?php echo $saved_data['skill_2_level'];?>%; background-color: #2196F3;}
		.skill_3 {width: <?php echo $saved_data['skill_3_level'];?>%; background-color: #f44336;}
		.skill_4 {width: <?php echo $saved_data['skill_4_level'];?>%; background-color: #808080;margin-bottom: 1em;}
		.skills-sec p{
			text-align: left;
			padding: 0;
			margin: 0.5em 0;
		}
		</style>
	</head>
	<body class="is-preload landing">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1 id="logo"><a href="#one"><?php echo $saved_data['first_name']; ?> <?php echo $saved_data['last_name']; ?></a></h1>
					<nav id="nav">
						<ul>
							<!--<li><a href="#">Home</a></li>-->
							<li><a href="#two" class="scrolly"><?php echo $saved_data['about_title']; ?></a></li>
							<li><a href="#four" class="scrolly"><?php echo $saved_data['speciality_title']; ?></a></li>
							<li><a href="#six" class="scrolly"><?php echo $saved_data['contact_section_title']; ?></a></li>
						</ul>
					</nav>
				</header>

			<!-- Banner -->
				<section id="banner">
					<div class="content">
						<header>
							<h2><?php echo $saved_data['tag_line_1']; ?></h2>
							<p></p>
						</header>
						<span class="image"><img src="<?php echo $saved_data['main_image']; ?>" alt="" /></span>
					</div>
					<a href="#one" class="goto-next scrolly">Next</a>
				</section>

			<!-- One -->
				<section id="one" class="spotlight style1 bottom">
					<span class="image fit main"><img src="images/piano.jpg" alt="" /></span>
					<div class="content">
						<div class="container">
							<div class="row">
								<div class="col-4 col-12-medium">
									<header>
										<h2><?php echo $saved_data['tag_line_2']; ?></h2>
										<p></p>
									</header>
								</div>
								<div class="col-4 col-12-medium">
									<p><?php echo $saved_data['vision_statement']; ?></p>
								</div>
								<div class="col-4 col-12-medium">
									<p><?php echo $saved_data['mission_statement']; ?></p>
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
							<h2><?php echo $saved_data['about_title']; ?></h2>
							<p><?php echo $saved_data['about_story_title']; ?></p>
						</header>
						<p><?php echo $saved_data['about_story']; ?></p>
						<ul class="actions">
							<li><a href="#three" class="button scrolly"><?php echo $saved_data['skill_title']; ?></a></li>
						</ul>
					</div>
					<!--<a href="#three" class="goto-next scrolly">Next</a>-->
				</section>

			<!-- Three -->
				<section id="three" class="spotlight style3 left">
					<span class="image fit main bottom"><img src="<?php echo $saved_data['main_image']; ?>" alt="" /></span>
					<div class="content">
						<header>
							<h2><?php echo $saved_data['skill_title']; ?></h2>
							<p></p>
						</header>
						<p></p>
						<!--skills-->
						<div class="skills-sec">
							<p><?php echo $saved_data['skill_1']; ?></p>
							<div class="skill-container">
								<div class="skills skill_1"><?php echo $saved_data['skill_1_level']; ?>%</div>
							</div>
							<p><?php echo $saved_data['skill_2']; ?></p>
							<div class="skill-container">
								<div class="skills skill_2"><?php echo $saved_data['skill_2_level']; ?>%</div>
							</div>
							<p><?php echo $saved_data['skill_3']; ?></p>
							<div class="skill-container">
								<div class="skills skill_3"><?php echo $saved_data['skill_3_level']; ?>%</div>
							</div>
							<p><?php echo $saved_data['skill_4']; ?></p>
							<div class="skill-container">
								<div class="skills skill_4"><?php echo $saved_data['skill_4_level']; ?>%</div>
							</div>
						</div>
						<!--end skills-->
						<ul class="actions">
							<li><a href="#four" class="button scrolly"><?php echo $saved_data['speciality_title']; ?></a></li>
						</ul>
					</div>
					<!--<a href="#four" class="goto-next scrolly">Next</a>-->
				</section>

			<!-- Four -->
				<section id="four" class="wrapper style1 special fade-up">
					<div class="container">
						<header class="major">
							<h2><?php echo $saved_data['speciality_title']; ?></h2>
							<p><?php echo $saved_data['speciality_sub_title']; ?></p>
						</header>
						<div class="box alt">
							<div class="row gtr-uniform">
								<section class="col-4 col-6-medium col-12-xsmall">
									<span class="icon alt major <?php echo $saved_data['speciality_1_icon']; ?>"></span>
									<a href="#"><h3><?php echo $saved_data['speciality_1']; ?></h3>
									<p><?php echo $saved_data['speciality_1_text']; ?></p></a>
								</section>

								<section class="col-4 col-6-medium col-12-xsmall">
									<span class="icon alt major <?php echo $saved_data['speciality_2_icon']; ?>"></span>
									<a href="#"><h3><?php echo $saved_data['speciality_2']; ?></h3>
									<p><?php echo $saved_data['speciality_2_text']; ?></p></a>
								</section>

								<section class="col-4 col-6-medium col-12-xsmall">
									<span class="icon alt major <?php echo $saved_data['speciality_3_icon']; ?>"></span>
									<a href="#"><h3><?php echo $saved_data['speciality_3']; ?></h3>
									<p><?php echo $saved_data['speciality_3_text']; ?></p></a>
								</section>

								<section class="col-4 col-6-medium col-12-xsmall">
									<span class="icon alt major <?php echo $saved_data['speciality_4_icon']; ?>"></span>
									<a href="#"><h3><?php echo $saved_data['speciality_4']; ?></h3>
									<p><?php echo $saved_data['speciality_4_text']; ?></p></a>
								</section>
							</div>
						</div>
						<footer class="major">
							<ul class="actions special">
								<?php if(count($posts)){ ?>
								<li><a href="#five" class="button scrolly">My Bulletin Board</a></li>
							<?php }else{ ?>
								<li><a href="#six" class="button scrolly"><?php echo $saved_data['contact_section_title']; ?></a></li>
							<?php } ?>
							</ul>
						</footer>
					</div>
				</section>

				<!-- Four -->
				<?php if(count($posts)){ ?>
					<section id="five" class="wrapper style1 special fade-up">
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
										<a href="#"><h3><?php echo $post['title'];?></h3>
										<p><?php echo $post['content'];?></p></a>
									</section>
								 <?php } ?>
								</div>
							</div>
							<footer class="major">
								<ul class="actions special scrolly">
									<li><a href="#six" class="button"><?php echo $saved_data['contact_section_title']; ?></a></li>
								</ul>
							</footer>
						</div>
					</section>
				<?php }?>
			<!-- Five -->
				<section id="six" class="wrapper style2 special fade">
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
						<li><a href="<?php echo $saved_data['twitter_link']; ?>" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="<?php echo $saved_data['facebook_link']; ?>" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="<?php echo $saved_data['instagram_link']; ?>" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="<?php echo $saved_data['linkedin_link']; ?>" class="icon alt fa-linkedin"><span class="label">Linkedin</span></a></li>
						<li><a href="<?php echo $saved_data['google_plus_link']; ?>" class="icon alt fa-google-plus"><span class="label">Google Plus</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; <?php echo date('Y',time())?>   | All Rights Reserved |  Designed & Developed by  <a href="http://biznesskit.com/">Digital Kit</a></li>
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
