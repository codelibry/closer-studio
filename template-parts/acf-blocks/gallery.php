<?php
  $images = get_sub_field('gallery');

  //print_r($images);
  
?>

<?php if (count($images)): ?>

<section id="gallery" class="section gallery">
  <div class="gallery__container">

    <div class="gallery__flex">

      <?php foreach( $images as $image ): ?>

        <div class="gallery__box">
          <!-- <img 
            src="<?php echo $image['url'] ?>" 
            alt="<?php echo $image['title'] ?>" 
            width="<?php echo $image['width'] ?>" 
            height="<?php echo $image['height'] ?>" 
          /> -->
          <?php image_acf($image);?>
        </div>

      <?php endforeach; ?>

    </div>

  </div>
</section>

<?php endif ?>
