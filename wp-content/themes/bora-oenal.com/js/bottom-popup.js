
$(document).ready(function() {

  $(window).scroll(function() {
      if ($(window).scrollTop() >= ($(document).height() - $(window).height())) {
        $('.popup').css( "right", "10px" )
        $('.arrow').hide();
      }else{
        $('.popup').css( "right", "-390px" ); 
        $('.arrow').show();
    }
  });
  
  $('.close').click(function(){
    $('.popup').hide();
  });
  
});



