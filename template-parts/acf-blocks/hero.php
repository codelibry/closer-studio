<?php
  $background = get_sub_field('hero_image');
  $title = get_sub_field('hero_title');
?>

<?php if($background and $title): ?>

<section id="hero" class="hero">

  <img class="hero__image" src="<?php echo $background['url'] ?>" alt="<?php echo $background['title'] ?>" />

  <div class="hero__container">
    <h1 class="hero__title"><?php echo $title ?></h1>
  </div>

</section>

<?php endif ?>
