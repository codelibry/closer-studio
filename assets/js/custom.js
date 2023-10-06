"use strict";

jQuery(function ($) {
  var mobileMenuOverlay = $(".mobile-menu");
  var mobileMenuButton = $(".header__icon");
  var body = $("body");
  var isOpen = false;
  mobileMenuButton.click(function (event) {
    event.stopPropagation();
    toggleMenu();
  });
  body.click(function (event) {
    closeMenu();
  });
  function openMenu() {
    mobileMenuButton.addClass('open');
    mobileMenuOverlay.slideDown();
    isOpen = true;
  }
  function closeMenu() {
    mobileMenuButton.removeClass('open');
    mobileMenuOverlay.slideUp();
    isOpen = false;
  }
  function toggleMenu() {
    isOpen ? closeMenu() : openMenu();
  }
});
"use strict";

jQuery(function ($) {
  var openLink = $('.shrink-text__link').eq(0);
  var closeLink = $('.shrink-text__link').eq(1);
  var dropdown = $('.shrink-text__full');
  openLink.click(function (event) {
    event.preventDefault();
    dropdown.slideDown();
    openLink.hide();
  });
  closeLink.click(function (event) {
    event.preventDefault();
    dropdown.slideUp();
    openLink.fadeIn();
  });
});