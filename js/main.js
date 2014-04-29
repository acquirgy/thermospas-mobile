$(document).ready( function() {
  $('.form').validate();

  $('.wrapper').mousemove(function() {  $('.validate').val('valid'); });

  $(".phone").mask("(999) 999-9999");

});
