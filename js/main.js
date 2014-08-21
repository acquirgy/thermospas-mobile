$(document).ready( function() {

  $('.step-2').hide();

  $('.form').validate();

  $('.wrapper').mousemove(function() {  $('.validate').val('valid'); });

  $(".phone").mask("(999) 999-9999");

  $(".complete-step-1").click( function(e) {
    e.preventDefault();

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



  })

});

