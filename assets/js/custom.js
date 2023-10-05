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
  var link = $('.shrink-text__link');
  var dropdown = $('.shrink-text__full');
  link.click(function (event) {
    event.preventDefault();
    dropdown.slideToggle();
  });
});