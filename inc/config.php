<?php

/* REGISTER NAV MENUS */

function closer_studio_register_nav_menu(){
  register_nav_menus( array(
      'primary_menu' => __( 'Primary Menu', 'closer-studio' ),
      'footer_menu'  => __( 'Footer Menu', 'closer-studio' ),
  ) );
}

add_action( 'after_setup_theme', 'closer_studio_register_nav_menu', 0 );
