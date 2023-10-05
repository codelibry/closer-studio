jQuery(function ($) {
  $('.shrink-text__link').click(function(event){
    event.preventDefault();
    $('.shrink-text__full').slideToggle();
  });
});
