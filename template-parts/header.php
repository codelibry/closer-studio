<header id="header" class="header">
  <div class="header__container">

    <div class="header__col header__col--1">
      <a class="header__logo" href="<?php echo get_home_url() ?>">
        Closer Studio
      </a>
    </div>


    <div class="header__col header__col--2">
      <nav class="header__menu">
        <?php wp_nav_menu(array('theme_location' => 'primary_menu')); ?>
      </nav>
    </div>

    <div class="header__col header__col--3">
      <a href="#" class="header__icon">
        <div></div>
        <div></div>
        <div></div>
      </a>
    </div>
  </div>

  <!-- Mobile Menu Overlay -->
  <div class="mobile-menu header__mobile-menu mobile-menu__container">
    <?php wp_nav_menu(array('theme_location' => 'primary_menu')); ?>
  </div>

</header>
