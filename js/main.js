$(document).ready( function() {
  $('.form').validate();

  $('.wrapper').mousemove(function() {  $('.validate').val('valid'); });

  //$.mask.definitions['~'] = "[+-]";
  //$(".phone").mask("(999) 999-9999");
  // $(".phone").blur(function() {
  //   $("#phoneinfo").html("Unmasked value: " + $(this).mask());
  // });
});
