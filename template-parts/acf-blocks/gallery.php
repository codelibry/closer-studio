<?php

  $images = get_sub_field('gallery');

  $gallery_layout = get_sub_field('layout');

  $smaller_image_index = $gallery_layout == 'left_image_smaller' ? 0 : 1;

?>

<?php if (count($images)): ?>

<section id="gallery" class="section gallery">
  <div class="gallery__container">

    <div class="gallery__flex">

      <?php foreach( $images as $key => $image ): ?>

        <?php $small_image_modificator = $key == $smaller_image_index ? 'gallery__box--small' : ''; ?>

        <div class="gallery__box <?php echo $small_image_modificator ?>">
          <?php image_acf($image);?>
        </div>

      <?php endforeach; ?>

    </div>

  </div>
</section>

<?php endif ?>
