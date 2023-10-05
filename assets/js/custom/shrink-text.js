jQuery(function ($) {
  let openLink = $('.shrink-text__link').eq(0);
  let closeLink = $('.shrink-text__link').eq(1);
  let dropdown = $('.shrink-text__full');

  openLink.click(function(event){
    event.preventDefault();

    dropdown.slideDown();
    openLink.hide();
  });

  closeLink.click(function(event){
    event.preventDefault();

    dropdown.slideUp();
    openLink.fadeIn();
  });

});
