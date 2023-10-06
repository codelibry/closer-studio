jQuery(function ($) {
  const mobileMenuOverlay = $(".mobile-menu");
  const mobileMenuButton = $(".header__icon");
  const body = $("body");

  mobileMenuButton.click(function (event) {
    event.stopPropagation();
    mobileMenuOverlay.slideToggle();
  });

  body.click(function(){
    mobileMenuOverlay.slideUp();
  });
});
