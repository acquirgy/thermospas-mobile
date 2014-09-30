$(document).ready( function() {
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
            $('.step-1').hide(200);
            $('.step-2').show(200);
          } else {
            alert('There was an error processing your request. Please try again later. (#1) result: ' + result);
          }
        },
        error: function(jqXHR,error, errorThrown) {
          alert('There was an error processing your request. Please try again later (#2) ' +
            'jqXHR: ' + jqXHR + ', error: ' + error + ', errorThrown: ' + errorTrhown
          );
        }
      });
    }
  });
});
