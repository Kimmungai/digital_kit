<?php require_once('../autoload.php');?>
<!DOCTYPE HTML>
<!--
	Highlights by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Highlights by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
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
	</head>
	<body class="is-preload">

		<!-- Header -->
			<section id="header">
				<header class="major">
					<h1><?php echo $saved_data['tag_line_1']; ?></h1>
					<p><?php echo $saved_data['tag_line_2']; ?></a></p>
				</header>
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
							<h2>Who I am</h2>
						</header>
						<p>Aliquam ante ac id. Adipiscing interdum lorem praesent fusce pellentesque arcu feugiat. Consequat sed ultricies rutrum. Sed adipiscing eu amet interdum lorem blandit vis ac commodo aliquet integer vulputate phasellus lorem ipsum dolor lorem magna consequat sed etiam adipiscing interdum.</p>
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
							<h2>Stuff I do</h2>
						</header>
						<p>Consequat sed ultricies rutrum. Sed adipiscing eu amet interdum lorem blandit vis ac commodo aliquet vulputate.</p>
						<ul class="icons-grid">
							<li>
								<span class="icon major fa-camera-retro"></span>
								<h3>Magna Etiam</h3>
							</li>
							<li>
								<span class="icon major fa-pencil"></span>
								<h3>Lorem Ipsum</h3>
							</li>
							<li>
								<span class="icon major fa-code"></span>
								<h3>Nulla Tempus</h3>
							</li>
							<li>
								<span class="icon major fa-coffee"></span>
								<h3>Sed Feugiat</h3>
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
						<p>Aliquam ante ac id. Adipiscing interdum lorem praesent fusce pellentesque arcu feugiat. Consequat sed ultricies rutrum. Sed adipiscing eu amet interdum lorem blandit vis ac commodo aliquet integer vulputate phasellus lorem ipsum dolor lorem magna consequat sed etiam adipiscing interdum.</p>
						<input type="button" value="Donate" class="primary">
					</div>
					<a href="#footer" class="goto-next scrolly">Next</a>
				</div>
			</section>
			<!-- Two -->
				<section id="two" class="main special">
					<div class="container">
						<span class="image fit primary"><img src="<?php echo $saved_data['main_image']; ?>" alt="" /></span>
						<div class="content">
							<header class="major">
								<h2>Bulletin board</h2>
							</header>
							<p>Consequat sed ultricies rutrum. Sed adipiscing eu amet interdum lorem blandit vis ac commodo aliquet vulputate.</p>
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
						<a href="#three" class="goto-next scrolly">Next</a>
					</div>
				</section>

		<!-- Footer -->
			<section id="footer">
				<div class="container">
					<header class="major">
						<h2>Get in touch</h2>
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
						<li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon alt fa-dribbble"><span class="label">Dribbble</span></a></li>
						<li><a href="#" class="icon alt fa-envelope"><span class="label">Email</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Untitled</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li><li>Demo Images: <a href="http://unsplash.com">Unsplash</a></li>
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

	</body>
</html>
