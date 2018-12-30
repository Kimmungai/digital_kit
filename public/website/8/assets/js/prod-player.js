var $visualizers = $('.visualizer>div');
var $progressBar = $('.progress-bar');
var $progressBarRunner = $progressBar.find('.runner');
var songLength = 219; //in seconds
var percentage = 0
var $time = $('.time');
var $player = $('.player');

var playRunner = null;

function go() {
  playRunner = setInterval(function() {
    //visualizers
    $visualizers.each(function() {
      $(this).css('height', Math.random() * 90 + 10 + '%');
    });
    //progress bar
    percentage += 0.15;
    if (percentage > 100) percentage = 0;
    $progressBarRunner.css('width', percentage + '%');

    $time.text(calculateTime(songLength, percentage));
  }, 250);
};

$('.play-button').on('click', function() {
  $player.toggleClass('paused').toggleClass('playing');
  if (playRunner) {
    clearInterval(playRunner);
    playRunner = null;
    $time.text(calculateTime(songLength, 100));
  } else {
    percentage = 0;
    go();
  }
});

$('.progress-bar').on('click', function(e) {
  var posY = $(this).offset().left;
  var clickY = e.pageX - posY;
  var width = $(this).width();

  percentage = clickY / width * 100;
});

function calculateTime(songLength, percentage) {
  //time
  var currentLength = songLength / 100 * percentage;
  var minutes = Math.floor(currentLength / 60);
  var seconds = Math.floor(currentLength - (minutes * 60));
  if (seconds <= 9) {
    return (minutes + ':0' + seconds);
  } else {
    return (minutes + ':' + seconds);
  }
}

clearInterval(playRunner);
