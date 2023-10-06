<?php

  $images = get_sub_field('gallery');

?>

<?php if (count($images)): ?>

<section id="gallery" class="section gallery">
  <div class="gallery__container">

    <div class="gallery__flex">

      <?php foreach( $images as $image ): ?>

        <div class="gallery__box">
          <?php image_acf($image);?>
        </div>

      <?php endforeach; ?>

    </div>

  </div>
</section>

<?php endif ?>
