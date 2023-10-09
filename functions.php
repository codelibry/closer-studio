<?php

require_once('inc/acf.php');
require_once('inc/assets.php');
require_once('inc/config.php');


// register static strings

add_action('init', function(){
  pll_register_string( 'closer-studio-read-more', 'Read more', 'static text' );
  pll_register_string( 'closer-studio-show-less', 'Show less', 'static text' );
});
