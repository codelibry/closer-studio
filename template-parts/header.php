<?php

  $home_url = pll_home_url();

  $logo_title = get_field('logo_text', 'option');
  $logo_image = get_field('logo_image', 'option');

?>

<header id="header" class="header">
  <div class="header__container">

    <div class="header__col header__col--1">

      <?php if ($logo_title or $logo_image): ?>

        <?php if ($logo_image): ?>
          <a class="header__logo-box" href="<?php echo $home_url ?>">
            <img src="<?php echo $logo_image['url'] ?>" alt="<?php echo $logo_image['title'] ?>" />
          </a>
        <?php else: ?>
          <a class="header__logo-text" href="<?php echo $home_url ?>">
            <?php echo $logo_title ?>
          </a>
        <?php endif ?>

      <?php endif ?>

    </div>


    <div class="header__col header__col--2">
      <nav class="header__menu">
        <?php wp_nav_menu(array('theme_location' => 'primary_menu')); ?>
      </nav>
    </div>

    <div class="header__col header__col--3">

      <ul class="lang-switcher header__lang-switcher">
        <?php pll_the_languages(array('dropdown' => 0, 'show_name' => 1)); ?>
      </ul>

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
