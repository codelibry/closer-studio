<?php

  $img_1 = get_template_directory_uri() . '/assets/img/image-1.png';
  $img_2 = get_template_directory_uri() . '/assets/img/image-2.png';

?>

<section id="gallery" class="section gallery">
  <div class="gallery__container">

    <div class="gallery__flex">

      <div class="gallery__box">
        <img src="<?php echo $img_1 ?>" alt="" />
      </div>

      <div class="gallery__box">
        <img src="<?php echo $img_2 ?>" alt="" />
      </div>

    </div>

  </div>
</section>
