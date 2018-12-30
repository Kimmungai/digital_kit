<?php require_once('../autoload.php');?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>HTML5 Audio Player w/ Responsive Playlist</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<link href="assets/css/jplayer.min.css" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" href="assets/css/music-shop.css">



</head>

<body>
  <header style="background: url(<?php echo $saved_data['main_image']; ?>) no-repeat center hsla(0,0%,50%,0.25);background-size: cover;">
    <!--<ul>
      <li ><a href="#" ><span class="fa fa-shopping-cart" style="font-size:1.3em;font-weight:bold;"></span><span class="badge">3</span></a></li>
      <li><a href="/#one"><?php echo $saved_data['about_title']; ?></a></li>
      <li><a href="/#three"><?php echo $saved_data['speciality_title']; ?></a></li>
      <li><a href="/#cta"><?php echo $saved_data['contact_section_title']; ?></a></li>
      <li><a href="music-store.php?id=<?php echo $_GET['id'];?>">Music Store</a></li>
    </ul>-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown link
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
    <h1>Music shop</h1>
  </header>
  <div class="container">
      <div class="row mt-5">

        <div class="container">

  <audio id="audio" preload="none" tabindex="0">
		<source src="http://jplayer.org/audio/m4a/Miaow-07-Bubble.m4a" data-track-number="1" />
		<source src="https://archive.org/download/ra2007-07-21/ra2007-07-21d1t05_64kb.mp3" data-track-number="2" />
		<source src="https://archive.org/download/slac2002-02-15/slac2002-02-15d1t07_64kb.mp3" data-track-number="3" />
		<source src="https://archive.org/download/blitzentrapper2009-02-24.flac16/blitzentrapper2009-02-24t02_64kb.mp3" data-track-number="4" />
		<source src="https://archive.org/download/samples2003-11-21.flac16/samples2003-11-21d2t04.mp3" data-track-number="5" />
		<source src="https://archive.org/download/mikedoughty2004-06-16.flac16/d1t13.mp3" data-track-number="6" />
		<source src="https://archive.org/download/glove2004-03-18.shnf/glove2004-03-18d1t05.mp3" data-track-number="7" />
		<source src="https://archive.org/download/guster2005-11-12.flac16/guster2005-11-12d2t04.mp3" data-track-number="8" />
    <source src="https://archive.org/download/oar2004-11-12.flac/oar2004-11-12d1t01.mp3" data-track-number="9" />
    <source src="https://archive.org/download/mmj2003-09-26.shnf/mmj2003-09-26d2t08.mp3" data-track-number="10" />
		Your browser does not support HTML5 audio.
 </audio>

  <div class="player">

    <div class="large-toggle-btn">
      <i class="large-play-btn"><span class="screen-reader-text">Large toggle button</span></i>
    </div>
    <!-- /.play-box -->

    <div class="info-box">
      <div class="track-info-box">
        <div class="track-title-text"></div>
        <div class="audio-time">
          <span class="current-time">00:00</span> /
          <span class="duration">00:00</span>
        </div>
      </div>
      <!-- /.info-box -->

      <div class="progress-box">
        <div class="progress-cell">
          <div class="progress">
            <div class="progress-buffer"></div>
            <div class="progress-indicator"></div>
          </div>
        </div>
      </div>

    </div>
    <!-- /.progress-box -->

    <div class="controls-box">
      <i class="previous-track-btn disabled"><span class="screen-reader-text">Previous track button</span></i>
      <i class="next-track-btn"><span class="screen-reader-text">Next track button</span></i>
    </div>
    <!-- /.controls-box -->

  </div>
  <!-- /.player -->

  <div class="play-list">

    <div class="play-list-row" data-track-row="1">
      <div class="small-toggle-btn">
        <i class="small-play-btn"><span class="screen-reader-text">Small toggle button</span></i>
      </div>
      <div class="track-number">
        1.
      </div>
      <div class="track-title">
        <a class="playlist-track" href="#" data-play-track="1">Sunshine </a> <a href="#"><small>buy now (Ksh. 5)</small></a>
      </div>
    </div>
    <div class="play-list-row" data-track-row="2">
      <div class="small-toggle-btn">
        <i class="small-play-btn"><span class="screen-reader-text">Small toggle button</span></i>
      </div>
      <div class="track-number">
        2.
      </div>
      <div class="track-title">
        <a class="playlist-track" href="#" data-play-track="2">Ryan Adams &amp; The Cardinals - Cold Roses</a>
      </div>
    </div>
    <div class="play-list-row" data-track-row="3">
      <div class="small-toggle-btn">
        <i class="small-play-btn"><span class="screen-reader-text">Small toggle button</span></i>
      </div>
      <div class="track-number">
        3.
      </div>
      <div class="track-title">
        <a class="playlist-track" href="#" data-play-track="3">The Slackers - Married Girl</a>
      </div>
    </div>
    <div class="play-list-row" data-track-row="4">
      <div class="small-toggle-btn">
        <i class="small-play-btn"><span class="screen-reader-text">Small toggle button</span></i>
      </div>
      <div class="track-number">
        4.
      </div>
      <div class="track-title">
        <a class="playlist-track" href="#" data-play-track="4">Blitzen Trapper - Saturday Night</a>
      </div>
    </div>
    <div class="play-list-row" data-track-row="5">
      <div class="small-toggle-btn">
        <i class="small-play-btn"><span class="screen-reader-text">Small toggle button</span></i>
      </div>
      <div class="track-number">
        5.
      </div>
      <div class="track-title">
        <a class="playlist-track" href="#" data-play-track="5">The Samples - Feel Us Shaking</a>
      </div>
    </div>
    <div class="play-list-row" data-track-row="6">
      <div class="small-toggle-btn">
        <i class="small-play-btn"><span class="screen-reader-text">Small toggle button</span></i>
      </div>
      <div class="track-number">
        6.
      </div>
      <div class="track-title">
        <a class="playlist-track" href="#" data-play-track="6">Mike Doughty - American Car</a>
      </div>
    </div>
    <div class="play-list-row" data-track-row="7">
      <div class="small-toggle-btn">
        <i class="small-play-btn"><span class="screen-reader-text">Small toggle button</span></i>
      </div>
      <div class="track-number">
        7.
      </div>
      <div class="track-title">
        <a class="playlist-track" href="#" data-play-track="7">G. Love &amp; Special Sauce - Dreamin'</a>
      </div>
    </div>
    <div class="play-list-row" data-track-row="8">
      <div class="small-toggle-btn">
        <i class="small-play-btn"><span class="screen-reader-text">Small toggle button</span></i>
      </div>
      <div class="track-number">
        8.
      </div>
      <div class="track-title">
        <a class="playlist-track" href="#" data-play-track="8">Guster - Amsterdam</a>
      </div>
    </div>
    <div class="play-list-row" data-track-row="9">
      <div class="small-toggle-btn">
        <i class="small-play-btn"><span class="screen-reader-text">Small toggle button</span></i>
      </div>
      <div class="track-number">
        9.
      </div>
      <div class="track-title">
        <a class="playlist-track" href="#" data-play-track="9">O.A.R. - About Mr. Brown</a>
      </div>
    </div>
    <div class="play-list-row" data-track-row="10">
      <div class="small-toggle-btn">
        <i class="small-play-btn"><span class="screen-reader-text">Small toggle button</span></i>
      </div>
      <div class="track-number">
        10.
      </div>
      <div class="track-title">
        <a class="playlist-track" href="#" data-play-track="10">My Morning Jacket - Phone Went West</a>
      </div>
    </div>

  </div>

</div>

        </div>
      </div>
<footer id="footer">
  <ul class="icons">
    <li><a href="<?php echo $saved_data['facebook_link']; ?>" class="fab fa-facebook"><span class="label">Facebook</span></a></li>
    <li><a href="<?php echo $saved_data['twitter_link']; ?>" class="fab fa-twitter"><span class="label">Twitter</span></a></li>
    <li><a href="<?php echo $saved_data['google_plus_link']; ?>" class="fab fa-google-plus"><span class="label">Google</span></a></li>
    <li><a href="<?php echo $saved_data['linkedin_link']; ?>" class="fab fa-linkedin"><span class="label">Linkedin</span></a></li>
    <li><a href="<?php echo $saved_data['instagram_link']; ?>" class="fab fa-instagram"><span class="label">Instagram</span></a></li>
  </ul>
  <ul class="copyright">
    <li>&copy; <?php echo date('Y',time())?>   | All Rights Reserved |  Designed & Developed by  <a href="http://biznesskit.com/">Digital Kit</a> </li>
  </ul>
</footer>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js'></script>
<script src='http://api.html5media.info/1.1.8/html5media.min.js'></script>

<script src="assets/js/music-shop.js"></script>
</body>
</html>
