(function() {
  var trackTwo, changePosition, changeSong, changeVolume, trackThree, pauseSong, playSong, playlist, trackFour, trackOne, updatePositionSlider, updateSlider;

  trackOne = new Howl({
    urls: [$('#track-1').data('url')],
    volume: window.volume
  });

  trackTwo = new Howl({
    urls: [$('#track-2').data('url')],
    volume: window.volume
  });

  trackThree = new Howl({
    urls: [$('#track-3').data('url')],
    volume: window.volume
  });

  trackFour = new Howl({
    urls: [$('#track-4').data('url')],
    volume: window.volume
  });

  window.open = true;

  window.volume = 0.5;

  window.position = 0;

  window.duration = 40.8;

  playlist = [trackFour];

  window.currentSong = playlist[0];

  window.add = null;

  changeSong = function(song) {
    console.log(song);
    window.currentSong.stop();
    window.currentSong.pos(0);
    window.position = 0;
    $(".slider").slider("value", 0);
    window.currentSong = song;
    $(".play-song > i").removeClass('fa-play');
    $(".play-song > i").addClass('fa-pause');
    window.open = false;
    return song.play();
  };

  updatePositionSlider = function() {
    return window.position += 1;
  };

  playSong = function(song) {
    song.play();
    return window.add = setInterval(updatePositionSlider, 1000);
  };

  pauseSong = function(song) {
    song.pause();
    return clearInterval(window.add);
  };

  changeVolume = function(song) {
    return song.volume(window.volume);
  };

  changePosition = function(song) {
    return song.pos(window.position);
  };

  updateSlider = function() {
    return $(".slider").slider("value", window.position);
  };

  $(function() {
    var slideUp;
    $(".slider").slider({
      min: 0,
      range: "min",
      max: window.duration,
      value: 0,
      slide: function(event, ui) {
        window.position = ui.value;
        console.log(ui.value);
        return changePosition(window.currentSong);
      }
    });
    setInterval(updateSlider, 1000);
    $("#volume-off").click(function() {
      currentSong.volume(0);
      return $(".slider-volume").slider("value", 0);
    });
    $("#volume-up").click(function() {
      currentSong.volume(1);
      return $(".slider-volume").slider("value", 100);
    });
    $(".slider-volume").slider({
      min: 0,
      range: "min",
      max: 100,
      value: 50,
      slide: function(event, ui) {
        console.log("hey");
        window.volume = ui.value / 100;
        return changeVolume(window.currentSong);
      }
    });
    $("#play").click(function() {
      if (window.open) {
        playSong(window.currentSong);
        $(".play-song > i").removeClass('fa-play');
        $(".play-song > i").addClass('fa-pause');
        return window.open = !window.open;
      } else {
        pauseSong(window.currentSong);
        $(".play-song > i").removeClass('fa-pause');
        $(".play-song > i").addClass('fa-play');
        return window.open = !window.open;
      }
    });
    slideUp = true;
    $(".slide-up").click(function() {
      if (slideUp) {
        $(".song-list, .playlist-controls, .overlay").addClass("active");
        $(".slide-up").html("<i class='fa fa-chevron-down'></i>");
        return slideUp = !slideUp;
      } else {
        $(".song-list, .playlist-controls, .overlay").removeClass("active");
        $(".slide-up").html("<i class='fa fa-chevron-up'></i>");
        return slideUp = !slideUp;
      }
    });
    return $("tr").click(function() {
      if ($(this).attr('id') === "track-1") {

        $(".song").text($(this).data('song'));
        $("#cart-btn").html('buy ($'+$(this).data('price')+') <i class="fa fa-cart-plus"></i>');
        $("#cart-btn-group").html('<a href="#" id="cart-btn" class="btn btn-danger btn-sm" onclick="add_to_cart(1)" >buy ($1.22) <i class="fa fa-cart-plus"></i></a>');
        changeSong(trackOne);

      } else if ($(this).attr('id') === "track-2") {
        $(".song").html($(this).data('song'));
        changeSong(trackTwo);
        $("#cart-btn").html('buy ($'+$(this).data('price')+') <i class="fa fa-cart-plus"></i>');
        $("#cart-btn-group").html('<a href="#" id="cart-btn" class="btn btn-danger btn-sm" onclick="add_to_cart(2)" >buy ($1.22) <i class="fa fa-cart-plus"></i></a>');
      } else if ($(this).attr('id') === "track-3") {
        $(".song").text($(this).data('song'));
        changeSong(trackThree);
        $("#cart-btn").html('buy ($'+$(this).data('price')+') <i class="fa fa-cart-plus"></i>');
        $("#cart-btn-group").html('<a href="#" id="cart-btn" class="btn btn-danger btn-sm" onclick="add_to_cart(3)" >buy ($1.22) <i class="fa fa-cart-plus"></i></a>');


      } else if ($(this).attr('id') === "track-4") {
        changeSong(trackFour);
        $(".song").text($(this).data('song'));
        $("#cart-btn").html('buy ($'+$(this).data('price')+') <i class="fa fa-cart-plus"></i>');
        $("#cart-btn-group").html('<a href="#" id="cart-btn" class="btn btn-danger btn-sm" onclick="add_to_cart(4)" >buy ($1.22) <i class="fa fa-cart-plus"></i></a>');

      }
      $(".song-list, .playlist-controls, .overlay").removeClass("active");
      $(".slide-up").html("<i class='fa fa-chevron-up'></i>");
      return slideUp = !slideUp;
    });
  });

}).call(this);
