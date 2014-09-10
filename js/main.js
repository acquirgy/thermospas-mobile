$(document).ready( function() {

  $('.form').validate();

  $('.wrapper').mousemove(function() {  $('.validate').val('valid'); });

  $(".phone").mask("(999) 999-9999");

  $("select").change(function () {
      if($(this).val() == null) $(this).addClass("empty");
      else $(this).removeClass("empty")
  });
  $("select").change();

});