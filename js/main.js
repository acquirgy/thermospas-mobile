// 2. This code loads the IFrame Player API code asynchronously.
var tag = document.createElement('script');

tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

// 4. The API will call this function when the video player is ready.
function onPlayerReady(event) {
  event.target.playVideo();
}

$(document).ready( function() {

  $('.play-video').hover(
    function() {
      $(this).attr("src", "/img/aquatic_video_play.jpg");
    },
    function() {
      $(this).attr("src", "/img/aquatic_video_play_hover.jpg");
    }
  );

  $('.play-video').click( function() {
    $(this).hide();
    player = new YT.Player('player', {
      height: $('.wrapper').width() * .7,
      width: $('.wrapper').width(),
      videoId: 'c7AmDccjiS4',
      playerVars: { "showinfo": 0 },
      events: {
        'onReady': onPlayerReady
      }
    });
  })

  $('.step-2').hide();

  $('.form').validate();

  $('.wrapper').mousemove(function() {  $('.validate').val('valid'); });

  $(".phone").mask("(999) 999-9999");

  $(".complete-step-1").click( function(e) {
    e.preventDefault();
    if($('.form').valid()) {
      $.ajax({
        type: 'POST',
        url: 'process_quote.php',
        data: $('.form').serialize(),
        dataType: 'json',
        success: function(result) {
          if(result == 'success') {
            $('.step-1').toggle('slide');
            $('.step-2').show();
          } else {
            alert('There was an error processing your request. Please try again later.');
          }
        },
        error: function(jqXHR,error, errorThrown) {
          if(jqXHR.status&&jqXHR.status == 400) {
            alert(jqXHR.responseText);
          } else {
            alert('There was an error processing your request. Please try again later.');
          }
        }
      });
    } else {
      validator.showErrors();
    }

  })

});

