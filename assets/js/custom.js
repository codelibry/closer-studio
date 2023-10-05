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
  $('.shrink-text__link').click(function (event) {
    event.preventDefault();
    $('.shrink-text__full').slideToggle();
  });
});