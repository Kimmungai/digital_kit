<?php require_once('autoload.php');include_once('db.php');
$data = new Database("127.0.0.1","root","root","personal");
$music=$data->get_table('user_items','id','DESC');?>
<!DOCTYPE HTML>
<!--
	Parallelism by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Parallelism by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="assets/css/music-shop.css" />

		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<div class="music-cart">
			<div class="music-cart-left">
				<nav class="navbar navbar-expand-lg navbar-light bg-none music-nav">
					<a class="navbar-brand" href="http://localhost:8000/website/<?php echo $saved_data['design'];?>/index.php?id=<?php echo $_GET['id'];?>" style="font-size:1.2em"><?php echo $saved_data['first_name']; ?> <?php echo $saved_data['last_name']; ?></a>
					<div class="music-cart">

					</div>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
							<?php if($saved_data['design'] ==1){ ?>
							<li class="nav-item">
								<a class="nav-link" href="http://localhost:8000/website/<?php echo $saved_data['design'];?>/index.php?id=<?php echo $_GET['id'];?>#one"><?php echo $saved_data['about_title']; ?></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="http://localhost:8000/website/<?php echo $saved_data['design'];?>/index.php?id=<?php echo $_GET['id'];?>#three"><?php echo $saved_data['speciality_title']; ?></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="http://localhost:8000/website/<?php echo $saved_data['design'];?>/index.php?id=<?php echo $_GET['id'];?>#cta"><?php echo $saved_data['contact_section_title']; ?></a>
							</li>
							<li class="nav-item active">
								<a class="nav-link" href="http://localhost:8000/website/shop.php?id=<?php echo $_GET['id'];?>">Music Store <span class="sr-only">(current)</span></a>
							</li>
						<?php }else if($saved_data['design'] == 4)  {?>
							<li class="nav-item">
								<a class="nav-link" href="http://localhost:8000/website/<?php echo $saved_data['design'];?>/index.php?id=<?php echo $_GET['id'];?>#about"><?php echo $saved_data['about_title']; ?></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="http://localhost:8000/website/<?php echo $saved_data['design'];?>/index.php?id=<?php echo $_GET['id'];?>#service"><?php echo $saved_data['speciality_title']; ?></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="http://localhost:8000/website/<?php echo $saved_data['design'];?>/index.php?id=<?php echo $_GET['id'];?>#contact"><?php echo $saved_data['contact_section_title']; ?></a>
							</li>
							<li class="nav-item active">
								<a class="nav-link" href="http://localhost:8000/website/shop.php?id=<?php echo $_GET['id'];?>">Music Store <span class="sr-only">(current)</span></a>
							</li>
						<?php }else if($saved_data['design'] == 8)  {?>
							<!--<li class="nav-item">
								<a class="nav-link" href="http://localhost:8000/website/<?php //echo $saved_data['design'];?>/index.php?id=<?php //echo $_GET['id'];?>#one"><?php //echo $saved_data['about_title']; ?></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="http://localhost:8000/website/<?php //echo $saved_data['design'];?>/index.php?id=<?php //echo $_GET['id'];?>#three"><?php //echo $saved_data['speciality_title']; ?></a>
							</li>-->
							<li class="nav-item">
								<a class="nav-link" href="http://localhost:8000/website/<?php echo $saved_data['design'];?>/index.php?id=<?php echo $_GET['id'];?>#one">Begin</a>
							</li>
							<li class="nav-item active">
								<a class="nav-link" href="http://localhost:8000/website/shop.php?id=<?php echo $_GET['id'];?>">Music Store <span class="sr-only">(current)</span></a>
							</li>
						<?php }else if($saved_data['design'] == 9)  {?>
							<li class="nav-item">
								<a class="nav-link" href="http://localhost:8000/website/<?php echo $saved_data['design'];?>/index.php?id=<?php echo $_GET['id'];?>#two"><?php echo $saved_data['about_title']; ?></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="http://localhost:8000/website/<?php echo $saved_data['design'];?>/index.php?id=<?php echo $_GET['id'];?>#four"><?php echo $saved_data['speciality_title']; ?></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="http://localhost:8000/website/<?php echo $saved_data['design'];?>/index.php?id=<?php echo $_GET['id'];?>#six"><?php echo $saved_data['contact_section_title']; ?></a>
							</li>
							<li class="nav-item active">
								<a class="nav-link" href="http://localhost:8000/website/shop.php?id=<?php echo $_GET['id'];?>">Music Store <span class="sr-only">(current)</span></a>
							</li>
						<?php } ?>
						</ul>

					</div>

				</nav>
			</div>
			<div class="music-cart-right">
				<p class="music-cart-icon" onmouseover="addCss('.music-shopping-cart','display','block')" onclick="addCss('.music-shopping-cart','display','block')"><i class="fas fa-shopping-cart"></i><span id="items-in-cart" class="badge badge-pill badge-danger"></span></p>
			</div>
		</div>
		<section class="music-shopping-cart" >
			<p class="close" onclick="addCss('.music-shopping-cart','display','none')">close: <span class="badge bagde-pill badge-danger">X</span></p>
			<h2>Shopping Cart Contents </h2>
			<form id="music-shopping-cart-form" action="http://localhost:8000/website/check-out.php" method="POST">
				<table class="table" id="music-shopping-cart-list">
				  <thead class="thead-dark">
				    <tr>
				      <!--<th scope="col">#</th>-->
				      <th scope="col">Item</th>
				      <th scope="col">Price ($)</th>
				      <th scope="col">Remove</th>
				    </tr>
				  </thead>
				  <tbody>
						<?php if (isset($_SESSION['shopping_cart'])) {
							 foreach ($_SESSION['shopping_cart'] as $key => $value) {
								 if($key === 'user' || $key === 'amount'){continue;}
								 $shopping_item=$data->get_record('user_items',$value);?>
								 <tr id="cart-song-<?php echo $shopping_item['id'];?>">
									 <th scope="col"><?php echo $shopping_item['item_name'];?></th>
									 <td scope="col" class="music-cart-song-price"><?php echo $shopping_item['item_price'];?></td>
									 <td onclick="remove_from_cart('+track+')" scope="col"><span class="badge badge-pill badge-danger remove-from-cart">X</span></td>
								 </tr>
						  <?php }
						} ?>
				  </tbody>
			</table>
			<table class="table">
			  <thead class="thead-light">
			    <tr>
			      <th scope="col">Total</th>
			      <th id="music-cart-total" scope="col"><?php if (isset($_SESSION['shopping_cart'])) { echo $_SESSION['shopping_cart']['amount'];}else{echo '$0.00';}?></th>
						<input name="user" type="hidden" value="<?php echo $_GET['id'];?>"/>
						<input name="amount" id="music-cart-total-input" type="hidden"/>
			    </tr>
			  </thead>
			</table>
		<button type="submit" class="btn btn-lg btn-danger pull-right">Check out</button>
		</form>
	</section>
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<section id="main">

						<!-- Items -->
							<div class="items">

								<div class="item intro span-2">
									<h1>My E-shop</h1>
									<p>Buy my music, tickets and other merchendise!<?php //$count=1; foreach ($music as $song ) {if($count % 2 == 0){/*continue;*/echo $count;}  $count++;} ?></p>
								</div>
								<?php $count=1;$span=1;foreach ($music as $song ) {if($count % 2 != 0){ if($span > 3){$span=1;}?>
								<article class="item thumb span-<?php echo $span;?>"   style="background: url(<?php echo $song['item_image_url']; ?>) no-repeat center;">
                  <h2><?php echo $song['item_name']; ?> <strong><span id="track-<?php echo $count;?>-current-time"></span> <span class="tilde tilde-<?php echo $count;?>">~</span> <span id="track-<?php echo $count;?>-duration"></span></strong></h2>
									<div class="cart-btn" onclick="add_to_cart(<?php echo $count;?>)"><p>Buy ($<?php echo $song['item_price']; ?>) <i class="fas fa-cart-plus"></i></p></div>
									<div class="play-btn" onclick="play(document.getElementById('track-<?php echo $count;?>'),<?php echo $count;?>)">
                    <span id="track-<?php echo $count;?>-btn" class="fa fa-play-circle"></span>
                  </div>
                  <audio id="track-<?php echo $count;?>" ontimeupdate="document.getElementById('track-<?php echo $count;?>-current-time').innerHTML=timeMgt(this.currentTime)" onended="handle_end(<?php echo $count;?>)" data-price="<?php echo $song['item_price']; ?>" data-song="<?php echo $song['item_name']; ?>">
                    <source src="<?php echo $song['item_full_url']; ?>" type="audio/mpeg">
                    Your browser does not support the audio element.
                  </audio>
								</article>
							<?php  $span++;}$count++; } ?>
								<!--<article class="item thumb span-2" >
                  <h2>Horse <strong><span id="track-2-current-time"></span> <span class="tilde tilde-2">~</span> <span id="track-2-duration"></span></strong></h2>
									<div class="cart-btn" onclick="add_to_cart(2)"><p>Buy ($0.21) <i class="fas fa-cart-plus"></i></p></div>
									<div class="play-btn" onclick="play(document.getElementById('track-2'),2)">
                    <span id="track-2-btn" class="fa fa-play-circle"></span>
                  </div>
                  <audio id="track-2" ontimeupdate="document.getElementById('track-2-current-time').innerHTML=timeMgt(this.currentTime)" onended="handle_end(2)" data-price="0.21" data-song="r wendo.">
                    <source src="horse.ogg" type="audio/mpeg">
                    Your browser does not support the audio element.
                  </audio>
								</article>

								<article class="item thumb span-1" >
									<h2>Horse <strong><span id="track-3-current-time"></span> <span class="tilde tilde-3">~</span> <span id="track-3-duration"></span></strong></h2>
									<div class="cart-btn" onclick="add_to_cart(3)"><p>Buy ($0.10) <i class="fas fa-cart-plus"></i></p></div>
									<div class="play-btn" onclick="play(document.getElementById('track-3'),3)">
										<span id="track-3-btn" class="fa fa-play-circle"></span>
									</div>
									<audio id="track-3" ontimeupdate="document.getElementById('track-3-current-time').innerHTML=timeMgt(this.currentTime)" onended="handle_end(3)" data-price="0.10" data-song="Dawendo.">
										<source src="horse.ogg" type="audio/mpeg">
										Your browser does not support the audio element.
									</audio>
								</article>

								<article class="item thumb span-1">
									<h2>Horse <strong><span id="track-4-current-time"></span> <span class="tilde tilde-4">~</span> <span id="track-4-duration"></span></strong></h2>
									<div class="cart-btn" onclick="add_to_cart(4)"><p>Buy ($0.50) <i class="fas fa-cart-plus"></i></p></div>
									<div class="play-btn" onclick="play(document.getElementById('track-4'),4)">
                    <span id="track-4-btn" class="fa fa-play-circle"></span>
                  </div>
                  <audio id="track-4" ontimeupdate="document.getElementById('track-4-current-time').innerHTML=timeMgt(this.currentTime)" onended="handle_end(4)" data-price="0.5" data-song="Dawo.">
                    <source src="horse.ogg" type="audio/mpeg">
                    Your browser does not support the audio element.
                  </audio>
								</article>

								<article class="item thumb span-3">
									<h2>Horse <strong><span id="track-5-current-time"></span> <span class="tilde tilde-5">~</span> <span id="track-5-duration"></span></strong></h2>
									<div class="cart-btn" onclick="add_to_cart(5)"><p>Buy ($0.20) <i class="fas fa-cart-plus"></i></p></div>
									<div class="play-btn" onclick="play(document.getElementById('track-5'),5)">
                    <span id="track-5-btn" class="fa fa-play-circle"></span>
                  </div>
                  <audio id="track-5" ontimeupdate="document.getElementById('track-5-current-time').innerHTML=timeMgt(this.currentTime)" onended="handle_end(5)" data-price="0.2" data-song="awendo.">
                    <source src="horse.ogg" type="audio/mpeg">
                    Your browser does not support the audio element.
                  </audio>
								</article>

								<article class="item thumb span-1">
									<h2>The Pursuit</h2>
									<a href="images/fulls/06.jpg" class="image"><img src="images/thumbs/06.jpg" alt=""></a>
								</article>

								<article class="item thumb span-2">
									<h2>Boundless</h2>
									<a href="images/fulls/07.jpg" class="image"><img src="images/thumbs/07.jpg" alt=""></a>
								</article>

								<article class="item thumb span-2">
									<h2>The Spectators</h2>
									<a href="images/fulls/08.jpg" class="image"><img src="images/thumbs/08.jpg" alt=""></a>
								</article>-->

							</div>

						<!-- Items -->
							<div class="items">
								<?php $count=1;$span=3;foreach ($music as $song ) {if($count % 2 == 0){ if($span < 1){$span=3;}?>
								<article class="item thumb span-<?php echo $span;?>"   style="background: url(<?php echo $song['item_image_url']; ?>) no-repeat center;">
                  <h2><?php echo $song['item_name']; ?> <strong><span id="track-<?php echo $count;?>-current-time"></span> <span class="tilde tilde-<?php echo $count;?>">~</span> <span id="track-<?php echo $count;?>-duration"></span></strong></h2>
									<div class="cart-btn" onclick="add_to_cart(<?php echo $count;?>)"><p>Buy ($<?php echo $song['item_price']; ?>) <i class="fas fa-cart-plus"></i></p></div>
									<div class="play-btn" onclick="play(document.getElementById('track-<?php echo $count;?>'),<?php echo $count;?>)">
                    <span id="track-<?php echo $count;?>-btn" class="fa fa-play-circle"></span>
                  </div>
                  <audio id="track-<?php echo $count;?>" ontimeupdate="document.getElementById('track-<?php echo $count;?>-current-time').innerHTML=timeMgt(this.currentTime)" onended="handle_end(<?php echo $count;?>)" data-price="<?php echo $song['item_price']; ?>" data-song="<?php echo $song['item_name']; ?>">
                    <source src="<?php echo $song['item_full_url']; ?>" type="audio/mpeg">
                    Your browser does not support the audio element.
                  </audio>
								</article>
							<?php  $span--;}$count++;} ?>
							</div>

					</section>

				<!-- Footer -->
					<section id="footer">
						<section>
						</section>
						<section>
							<ul class="icons">
								<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
								<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
								<li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
							</ul>
						</section>
					</section>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/parallel.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/shop.js"></script>
			<script src="assets/js/cart.js"></script>
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      <script>
        function play(audioPlayer,track){

          if($( '#track-'+track+'-btn' ).hasClass( "fa-play-circle" )){
            audioPlayer.play();
            $('#track-'+track+'-duration').text(timeMgt(audioPlayer.duration));

            $( '#track-'+track+'-btn' ).removeClass("fa-play-circle").addClass("fa-pause-circle");
            $('.tilde-'+track).show();

          }
          else{
            audioPlayer.pause();
            $( '#track-'+track+'-btn' ).removeClass("fa-pause-circle").addClass("fa-play-circle");
          }
        }
        function handle_end(track){
          $( '#track-'+track+'-btn' ).removeClass("fa-pause-circle").addClass("fa-play-circle");
          $('#track-'+track+'-current-time').text('00:00');
        }
         function timeMgt(seconds) {
          var min = 0;
          var sec = Math.floor(seconds);
          var time = 0;

          min = Math.floor(sec / 60);

          min = min >= 10 ? min : '0' + min;

          sec = Math.floor(sec % 60);

          sec = sec >= 10 ? sec : '0' + sec;

          time = min + ':' + sec;

          return time;
        };
      </script>
	</body>
</html>
