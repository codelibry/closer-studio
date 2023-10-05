jQuery(function ($) {
  let link = $('.shrink-text__link');
  let dropdown = $('.shrink-text__full');

  link.click(function(event){
    event.preventDefault();

    dropdown.slideToggle();
  });
});
