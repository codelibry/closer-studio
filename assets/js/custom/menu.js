jQuery(function ($) {
  const mobileMenuOverlay = $(".mobile-menu");
  const mobileMenuButton = $(".header__icon");

  mobileMenuButton.click(function () {
    mobileMenuOverlay.slideToggle();
  });
});
