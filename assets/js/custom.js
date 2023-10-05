"use strict";

jQuery(function ($) {
  var mobileMenuOverlay = $(".mobile-menu");
  var mobileMenuButton = $(".header__icon");
  mobileMenuButton.click(function () {
    mobileMenuOverlay.slideToggle();
  });
});
"use strict";

jQuery(function ($) {
  $('.text__link').click(function (event) {
    event.preventDefault();
    $('.text__full').slideToggle();
  });
});