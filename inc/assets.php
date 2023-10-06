<?php

$DEVELOPMENT = false; // change to false if PRODUCTION


// For Development ( Without caching )
function closer_studio_assets_dev(){
  $ASSETS = get_template_directory_uri() . '/assets'; // Dir to the assets theme folder
  $ABSOLUTE_ASSETS_PATH = get_template_directory() . '/assets'; // Absolute path to the assets folder

  $style_version = filemtime( "{$ABSOLUTE_ASSETS_PATH}/css/main.min.css" );
  $vendor_version = filemtime( "{$ABSOLUTE_ASSETS_PATH}/js/vendor.min.js" );
  $custom_version = filemtime( "{$ABSOLUTE_ASSETS_PATH}/js/custom.min.js" );

  wp_enqueue_script( 'gsap-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js', array(), false, true );
  wp_enqueue_script( 'gsap-st', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js', array('gsap-js'), false, true );

  wp_enqueue_style( 'closer-studio-main-stylesheet', "{$ASSETS}/css/main.min.css", array(), $style_version, 'all' );
  wp_enqueue_script( 'closer-studio-vendor-script', "{$ASSETS}/js/vendor.min.js", array('jquery'), $vendor_version, true );
  wp_enqueue_script( 'closer-studio-custom-script', "{$ASSETS}/js/custom.min.js", array('closer-studio-vendor-script', 'gsap-js', 'gsap-st'), $custom_version, true );
}

// For Production ( With caching )
function closer_studio_assets_prod(){
  $ASSETS = get_template_directory_uri() . '/assets'; // Dir to the assets theme folder

  wp_enqueue_script( 'gsap-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js', array(), false, true );
  wp_enqueue_script( 'gsap-st', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js', array('gsap-js'), false, true );

  wp_enqueue_style( 'closer-studio-main-stylesheet', "{$ASSETS}/css/main.min.css", array(), '1.0.0', 'all' );
  wp_enqueue_script( 'closer-studio-vendor-script', "{$ASSETS}/js/vendor.min.js", array('jquery'), '1.0.0', true );
  wp_enqueue_script( 'closer-studio-custom-script', "{$ASSETS}/js/custom.min.js", array('closer-studio-vendor-script'), '1.0.0', true );
}


if ( $DEVELOPMENT ) {
  add_action('wp_enqueue_scripts', 'closer_studio_assets_dev');
} else {
  add_action('wp_enqueue_scripts', 'closer_studio_assets_prod');
}


//ACF image
function image_acf($image,$class=''){
  if( !empty( $image ) ): ?>
    <?php
      $imgWidth = $image['width'];
      $imgHeight = $image['height'];

      if($image['mime_type'] === 'image/svg+xml') {
        $img = wp_get_attachment_image_src($image['id'], 'full');
        $imgWidth = $img[1];
        $imgHeight = $img[2];
      }

      if ($image['alt']) : 
        $alt = $image['alt'];
      elseif($image['title']) :
        $alt = $image['title'];
      elseif($image['caption']) :
        $alt = $image['caption'];
      endif;

      $imgRatio = 100*$imgHeight/$imgWidth;
      $blockPadding = 'style="padding-bottom:'.$imgRatio.'%;"';

      $attachment_id = $image['id'];
      $image_large_src = wp_get_attachment_image_src( $attachment_id, 'full' );

    ?>
    <div class="img-block" <?php echo $blockPadding; ?>>
      <img src="<?php echo $image_large_src[0]; ?>"
            srcset="<?php echo wp_get_attachment_image_srcset( $attachment_id, 'non-cropped-extra-large' ); ?>"
            sizes="(min-width: 840px) 1240px, (min-width: 720px) calc(100vw - 200px), 100vw"
            alt="<?php echo $alt; ?>" class="lazy-img <?php echo $class; ?>">
    </div>
    <noscript>
    <img src="<?php echo $image_large_src[0]; ?>"
            srcset="<?php echo wp_get_attachment_image_srcset( $attachment_id, 'non-cropped-extra-large' ); ?>"
            sizes="(min-width: 840px) 1240px, (min-width: 720px) calc(100vw - 200px), 100vw"
            alt="<?php echo $alt; ?>">
    </noscript>
  <?php endif; 
}
