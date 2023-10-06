jQuery(function ($) {
  const mobileMenuOverlay = $(".mobile-menu");
  const mobileMenuButton = $(".header__icon");
  const body = $("body");

  let isOpen = false;

  mobileMenuButton.click(function (event) {
    event.stopPropagation();
    toggleMenu();
  });

  body.click(function(event) {
    closeMenu();
  });

  function openMenu(){
    mobileMenuButton.addClass('open');
    mobileMenuOverlay.slideDown();
    isOpen = true;
  }

  function closeMenu(){
    mobileMenuButton.removeClass('open');
    mobileMenuOverlay.slideUp();
    isOpen = false;
  }

  function toggleMenu(){
    isOpen 
      ? closeMenu()
      : openMenu()
  }
});
