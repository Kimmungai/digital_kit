<?php require_once('../autoload.php');?>
<!DOCTYPE HTML>
<!--
	Highlights by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title><?php echo $saved_data['first_name']; ?> <?php echo $saved_data['last_name']; ?> | <?php echo $saved_data['tag_line_2']; ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/music.css">
		<link rel="stylesheet" href="assets/css/prod-player.css" />
		<style type="text/css">
		html {
			background-color: #313a3d;
			background-attachment: fixed,						fixed;
			background-image: url("assets/css/images/overlay.png"), url("<?php echo $saved_data['main_image']; ?>");
			background-position: top left,					center center;
			background-repeat: repeat,						none;
			background-size: auto,						cover;
		}
		</style>
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

		.skill_1 {width: <?php echo $saved_data['skill_1_level'];?>%; background-color: #808080;}
		.skill_2 {width: <?php echo $saved_data['skill_2_level'];?>%; background-color: #808080;}
		.skill_3 {width: <?php echo $saved_data['skill_3_level'];?>%; background-color: #808080;}
		.skill_4 {width: <?php echo $saved_data['skill_4_level'];?>%; background-color: #808080;}
		.skills-sec p{
			text-align: left;
			padding: 0;
			margin: 0;
		}
		</style>
		<link rel="icon" type="image/png" href="<?php echo $saved_data['main_image']; ?>" />
	</head>
	<body class="is-preload">

		<!-- Header -->
			<section id="header">
				<header class="major">
					<h1><?php echo $saved_data['tag_line_1']; ?></h1>
					<p><?php echo $saved_data['tag_line_2']; ?></a></p>

				</header>
				<!--featured music-->

					<div class="wrap">

						<div class="player paused">

							<div class="progress-bar">
								<div class="runner"></div>
							</div>
							<div class="album-art">
								<div class="cover" style="background:url(<?php echo $saved_data['main_image']; ?>) center no-repeat;"></div>
							</div>

							<div class="description">
								<div class="title">Something from nothing  </div>
								<div class="sub-title">by Foo Fighters, Sonic highways</div>
							</div>

							<div class="visualizer">
								<div></div>
								<div></div>
								<div></div>
								<div></div>
								<div></div>
								<div></div>
								<div></div>
								<div></div>
								<div></div>
								<div></div>
								<div></div>
								<div></div>
								<div></div>
								<div></div>
								<div></div>
								<div></div>
								<div></div>
								<div></div>
								<div></div>
								<div></div>
								<div></div>
								<div></div>
								<div></div>
								<div></div>
								<div></div>
								<div></div>
								<div></div>
								<div></div>
								<div></div>
								<div></div>
								<div></div>
								<div></div>
								<div></div>
								<div></div>
								<div></div>
								<div></div>
								<div></div>
								<div></div>
								<div></div>
								<div></div>
								<div></div>
								<div></div>
								<div></div>
								<div></div>
								<div></div>
								<div></div>
								<div></div>
							</div>

							<div class="play-button">
								<div class="lp-background"></div>
								<i class="mdi mdi-play"></i>
								<i class="mdi mdi-pause"></i>
							</div>

							<div class="time-indicator">
								<i class="mdi mdi-clock"></i>
								<span class="time">03:39</span>
							</div>


						</div>

					</div>

						<ul style="margin-top:5px;">
							<li><a href="http://localhost:8000/website/shop.php?id=<?php echo $_GET['id'];?>" class="button primary">My Music</a></li>
						</ul>

				<!--featured music-->
				<div class="container">
					<ul class="actions special">
						<li><a href="#one" class="button primary scrolly">Begin</a></li>
					</ul>
				</div>
			</section>

		<!-- One -->
			<section id="one" class="main special">
				<div class="container">
					<span class="image fit primary"><img src="<?php echo $saved_data['main_image']; ?>" alt="" /></span>
					<div class="content">
						<header class="major">
							<h2><?php echo $saved_data['about_title']; ?></h2>
						</header>
						<p><?php echo $saved_data['about_story']; ?></p>
						<p><?php echo $saved_data['skill_title']; ?></p>
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
					</div>
					<a href="#two" class="goto-next scrolly">Next</a>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="main special">
				<div class="container">
					<span class="image fit primary"><img src="<?php echo $saved_data['main_image']; ?>" alt="" /></span>
					<div class="content">
						<header class="major">
							<h2><?php echo $saved_data['speciality_title']; ?></h2>
						</header>
						<!--<p>Consequat sed ultricies rutrum. Sed adipiscing eu amet interdum lorem blandit vis ac commodo aliquet vulputate.</p>-->
						<ul class="icons-grid">
							<li>
								<span class="icon major <?php echo $saved_data['speciality_1_icon']; ?>"></span>
								<h3><?php echo $saved_data['speciality_1']; ?></h3>
								<p><?php echo $saved_data['speciality_1_text']; ?></p>
							</li>
							<li>
								<span class="icon major <?php echo $saved_data['speciality_2_icon']; ?>"></span>
								<h3><?php echo $saved_data['speciality_2']; ?></h3>
								<p><?php echo $saved_data['speciality_2_text']; ?></p>
							</li>
							<li>
								<span class="icon major <?php echo $saved_data['speciality_3_icon']; ?>"></span>
								<h3><?php echo $saved_data['speciality_3']; ?></h3>
								<p><?php echo $saved_data['speciality_3_text']; ?></p>
							</li>
							<li>
								<span class="icon major <?php echo $saved_data['speciality_4_icon']; ?>"></span>
								<h3><?php echo $saved_data['speciality_4']; ?></h3>
								<p><?php echo $saved_data['speciality_4_text']; ?></p>
							</li>
						</ul>
					</div>
					<a href="#three" class="goto-next scrolly">Next</a>
				</div>
			</section>

		<!-- Three -->
			<section id="three" class="main special">
				<div class="container">
					<span class="image fit primary"><img src="<?php echo $saved_data['main_image']; ?>" alt="" /></span>
					<div class="content">
						<header class="major">
							<h2>One more thing</h2>
						</header>
						<p><?php echo $saved_data['vision_statement']; ?></p>
						<p><?php echo $saved_data['mission_statement']; ?></p>
						<!--<input type="button" value="Donate" class="primary">-->
					</div>
					<?php if(count($posts)){ ?>
					<a href="#four" class="goto-next scrolly">Next</a>
				  <?php }else{ ?>
						<a href="#footer" class="goto-next scrolly">Next</a>
					<?php } ?>
				</div>
			</section>
			<!-- Two -->
			<?php if(count($posts)){ ?>
				<section id="four" class="main special">
					<div class="container">
						<span class="image fit primary"><img src="<?php echo $saved_data['main_image']; ?>" alt="" /></span>
						<div class="content">
							<header class="major">
								<h2>Bulletin board</h2>
							</header>
							<p>Latest News</p>
							<ul class="icons-grid">
								<?php foreach($posts as $post) {?>
								<li>
									<span class="icon major fa-globe"></span>
									<h3><?php echo $post['title']?></h3>
									<p><?php echo $post['content']?></p>
								</li>
							<?php } ?>
							</ul>
						</div>
						<a href="#footer" class="goto-next scrolly">Next</a>
					</div>
				</section>
			<?php }?>
		<!-- Footer -->
			<section id="footer">
				<div class="container">
					<header class="major">
						<h2><?php echo $saved_data['contact_section_title']; ?></h2>
					</header>
					<form method="post" action="#">
						<div class="row gtr-uniform">
							<div class="col-6 col-12-xsmall"><input type="text" name="name" id="name" placeholder="Name" /></div>
							<div class="col-6 col-12-xsmall"><input type="email" name="email" id="email" placeholder="Email" /></div>
							<div class="col-12"><textarea name="message" id="message" placeholder="Message" rows="4"></textarea></div>
							<div class="col-12">
								<ul class="actions special">
									<li><input type="submit" value="Send Message" class="primary" /></li>
								</ul>
							</div>
						</div>
					</form>
				</div>
				<footer>
					<ul class="icons">
						<li><a href="<?php echo $saved_data['twitter_link']; ?>" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="<?php echo $saved_data['facebook_link']; ?>" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="<?php echo $saved_data['instagram_link']; ?>" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="<?php echo $saved_data['linkedin_link']; ?>" class="icon alt fa-linkedin"><span class="label">Linkedin</span></a></li>
						<li><a href="<?php echo $saved_data['google_plus_link']; ?>" class="icon alt fa-google-plus"><span class="label">Google plus</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; <?php echo date('Y',time())?>   | All Rights Reserved |  Designed & Developed by  <a href="http://biznesskit.com/">Digital Kit</a></li>
					</ul>
				</footer>
			</section>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src='http://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
	    <script src='http://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js'></script>
	    <script src='https://cdnjs.cloudflare.com/ajax/libs/howler/1.1.28/howler.min.js'></script>
	    <script src="assets/js/music.js"></script>
			<script src="assets/js/prod-player.js"></script>

	</body>
</html>
