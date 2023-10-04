"use strict";

jQuery(function ($) {
  var mobileMenuOverlay = $(".mobile-menu");
  var mobileMenuButton = $(".header__icon");
  mobileMenuButton.click(function () {
    mobileMenuOverlay.slideToggle();
  });
});