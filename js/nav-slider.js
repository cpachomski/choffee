jQuery(document).ready(function($){
  $navSlider = $('nav');


  $('#showPushNav').on('click', function(e){
    $navSlider.toggleClass('open');
    $('body').toggleClass('pushed');
    console.log(e);
  });


});