<?php require_once('../autoload.php');include_once('../db.php');
$data = new Database("127.0.0.1","root","root","personal");
$music=$data->get_table('user_items','id','DESC',4);?>
<!DOCTYPE HTML>
<html>
	<head>
		<title><?php echo $saved_data['first_name']; ?> <?php echo $saved_data['last_name']; ?> | <?php echo $saved_data['tag_line_2']; ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="assets/css/music.css" />
		<link rel="stylesheet" href="assets/css/prod-player.css" />
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
		.skill_4 {width: <?php echo $saved_data['skill_4_level'];?>%; background-color: #808080;}
		.spotlight p{
			text-align: left;
			padding: 0;
			margin: 0.5em 0;
		}
		#player-container:before, #player-container:after { background-image: url('<?php echo $saved_data['main_image']; ?>');}
		</style>
		<link rel="icon" type="image/png" href="<?php echo $saved_data['main_image']; ?>" />
	</head>
	<body class="landing is-preload" style="opacity:0.8">


		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<h1><a href="index.html"><?php echo $saved_data['first_name']; ?> <?php echo $saved_data['last_name']; ?></a></h1>
						<nav id="nav">
							<ul>
								<!--<li onmouseover="addCss('.music-shopping-cart','display','block')" onclick="addCss('.music-shopping-cart','display','block')"><a href="shop.php?id=<?php echo $_GET['id'];?>" ><span class="fa fa-shopping-cart" style="font-size:1.3em;font-weight:bold;"></span><span id="items-in-cart" class="badge"></span></a></li>-->
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu">
										<ul>
											<!--<li><a href="#">Home</a></li>-->
											<li><a href="index.php?id=<?php echo $_GET['id'];?>#one"><?php echo $saved_data['about_title']; ?></a></li>
											<li><a href="index.php?id=<?php echo $_GET['id'];?>#three"><?php echo $saved_data['speciality_title']; ?></a></li>
											<li><a href="index.php?id=<?php echo $_GET['id'];?>#cta"><?php echo $saved_data['contact_section_title']; ?></a></li>
											<li><a href="http://localhost:8000/website/shop.php?id=<?php echo $_GET['id'];?>">My E-Store</a></li>
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>
					<!--<section class="music-shopping-cart" >
						<p class="close fl-right" onclick="addCss('.music-shopping-cart','display','none')">close: <span class="badge bagde-pill badge-danger">X</span></p>
						<h2>Shopping Cart Contents </h2>
						<form id="music-shopping-cart-form" action="http://localhost:8000/website/1/check-out.php" method="POST">
							<table class="table" id="music-shopping-cart-list">
							  <thead class="thead-dark">
							    <tr>-->
							      <!--<th scope="col">#</th>-->
							      <!--<th scope="col">Item</th>
							      <th scope="col">Price ($)</th>
							      <th scope="col">Remove</th>
							    </tr>
							  </thead>
							  <tbody>

							  </tbody>
						</table>
						<table class="table">
						  <thead class="thead-light">
						    <tr>
						      <th scope="col">Total</th>
						      <th id="music-cart-total" scope="col">$0.00</th>
									<input name="user" type="hidden" value="<?php echo $_GET['id'];?>"/>
									<input name="amount" id="music-cart-total-input" type="hidden"/>
						    </tr>
						  </thead>
						</table>
					<button type="submit" class="btn btn-lg btn-danger pull-right">Check out</button>
					</form>
				</section>-->
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
					<?php if(count($music)): ?>
					<!--featured music-->



  <section id="player-container">
		<h3 class="song-title text-center">song title</h3>
    <div id="timeBar">
      <div id="timePos">

      </div>
    </div>

    <div id="Bg-panel">
			<p class="song-title"><a href="#">song title</a></p>
    </div>


    <div id="form">

      <div id="circ">
        <div id="introPlay" class="playButton"> </div>

        <div id="volumeBar" class="">
          <div id="knob"></div>
        </div>
        <div id="fastForward"> </div>
        <div id="rewind"> </div>
        <div id="Xit" class="">+</div>

      </div>

    </div>

    <!--<div class="measure"></div>-->

    <div id="eqWave">
      <div class="eqBar" id="Bar1"></div>
      <div class="eqBar" id="Bar2"></div>
      <div class="eqBar" id="Bar3"></div>
      <div class="eqBar" id="Bar4"></div>
      <div class="eqBar" id="Bar5"></div>
      <div class="eqBar" id="Bar6"></div>

    </div>

  </section>



					<!--featured music-->
				<?php endif; ?>
				<!-- One -->
					<section id="one" class="wrapper style1 special">
						<div class="inner">
							<header class="major">
								<h2><?php echo $saved_data['about_title']; ?></h2>
								<p><?php echo $saved_data['about_story']; ?></p>
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
								<h2><?php echo $saved_data['about_story_title']; ?></h2>
								<p><?php echo $saved_data['vision_statement']; ?></p>
								<p><?php echo $saved_data['mission_statement']; ?></p>
							</div>
						</section>
						<!-- Blog -->
						<?php if(count($posts)){ ?>
							<section id="three" class="wrapper style3 special">
								<div class="inner">
									<header class="major">
										<h2>Bulletin Board </h2>
										<!--<p><?php echo $saved_data['speciality_sub_title']; ?></p>-->
									</header>
									<ul class="features">
										<?php foreach($posts as $post) {?>
										<li class="icon fa-globe">
											<h3><?php echo $post['title']; ?></h3>
											<p><?php echo $post['content']; ?></p>
										</li>
										<?php  } ?>
									</ul>
								</div>
							</section>
						<?php }?>
						<section class="spotlight">
							<div class="image"><img src="<?php echo $saved_data['main_image']; ?>" alt="" /></div><div class="content">
								<h2><?php echo $saved_data['skill_title']; ?></h2>
								<!--<p><?php echo $saved_data['mission_statement']; ?></p>
								<a href="#" class="button fit primary">Donate</a>-->
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
						</section>
					</section>



				<!-- Three -->
					<section id="three" class="wrapper style3 special">
						<div class="inner">
							<header class="major">
								<h2><?php echo $saved_data['speciality_title']; ?></h2>
								<p><?php echo $saved_data['speciality_sub_title']; ?></p>
							</header>
							<ul class="features">
								<li class="icon fa <?php echo $saved_data['speciality_1_icon']; ?>">
									<a href="<?php echo $saved_data['speciality_1_url']; ?>" target="_blank"><h3><?php echo $saved_data['speciality_1']; ?></h3>
									<p><?php echo $saved_data['speciality_1_text']; ?></p></a>
								</li>
								<li class="icon fa <?php echo $saved_data['speciality_2_icon']; ?>">
									<a href="<?php echo $saved_data['speciality_2_url']; ?>" target="_blank"><h3><?php echo $saved_data['speciality_2']; ?></h3>
									<p><?php echo $saved_data['speciality_2_text']; ?></p></a>
								</li>
								<li class="icon fa <?php echo $saved_data['speciality_3_icon']; ?>">
									<a href="<?php echo $saved_data['speciality_3_url']; ?>" target="_blank"><h3><?php echo $saved_data['speciality_3']; ?></h3>
									<p><?php echo $saved_data['speciality_3_text']; ?></p></a>
								</li>
								<li class="icon fa <?php echo $saved_data['speciality_4_icon']; ?>">
									<a href="<?php echo $saved_data['speciality_4_url']; ?>" target="_blank"><h3><?php echo $saved_data['speciality_4']; ?></h3>
									<p><?php echo $saved_data['speciality_4_text']; ?></p></a>
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
								<div class="cta-card">
									<div class="cta-card-body">
										<form>
										  <div class="cta-form-group">
										    <label for="formGroupExampleInput">Your Name</label>
										    <input type="text" class="cta-form-control" id="formGroupExampleInput">
										  </div>
											<div class="cta-form-group">
										    <label for="formGroupExampleInput">Your Email</label>
										    <input type="text" class="cta-form-control" id="formGroupExampleInput">
										  </div>
										  <div class="cta-form-group">
										    <label for="formGroupExampleInput2">Your Website</label>
										    <input type="text" class="cta-form-control" id="formGroupExampleInput2">
										  </div>
											<div class="cta-form-group">
										    <label for="formGroupExampleInput2">Your Message</label>
										    <textarea class="cta-form-control"></textarea>
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
							<li><a href="<?php echo $saved_data['google_plus_link']; ?>" class="icon fa-google-plus"><span class="label">Google</span></a></li>
							<li><a href="<?php echo $saved_data['linkedin_link']; ?>" class="icon fa-linkedin"><span class="label">Linkedin</span></a></li>
							<li><a href="<?php echo $saved_data['instagram_link']; ?>" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						</ul>
						<ul class="copyright">
							<li>&copy; <?php echo date('Y',time())?>   | All Rights Reserved |  Designed & Developed by  <a href="http://biznesskit.com/">Digital Kit</a> </li>
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
			<script src='http://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
			<script src='http://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js'></script>
			<script src='https://cdnjs.cloudflare.com/ajax/libs/howler/1.1.28/howler.min.js'></script>
			<script src="assets/js/music.js"></script>
			<script src="assets/js/prod-player.js"></script>
			<script src="assets/js/cart.js"></script>
			<script>
				function openLink(url) {
				    window.open(url, "_self");
				}
			</script>
	</body>
</html>
