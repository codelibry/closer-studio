jQuery(function ($) {
  $('.text__link').click(function(event){
    event.preventDefault();
    $('.text__full').slideToggle();
  });
});
