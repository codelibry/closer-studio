<?php
  $arrow_right_svg = get_template_directory_uri() . '/assets/img/arrow-right.svg';
  $title = get_sub_field('shrink-text-title');
  $excerpt = get_sub_field('shrink-text-excerpt');
  $full = get_sub_field('shrink-text-full');
?>

<?php if ($title and $excerpt and $full): ?>

<section id="shrink-text" class="section shrink-text">
  <div class="shrink-text__container">

    <h2 class="shrink-text__title"><?php echo $title ?></h2>

    <p class="shrink-text__excerpt">
      <?php echo $excerpt ?>
      <a class="shrink-text__link" href="#">
        <img src="<?php echo $arrow_right_svg ?>" />
        <?php _e('Read more','closer-studio');?>
      </a>
    </p>

    <p class="shrink-text__full">
      <?php echo $full ?>
      <a class="shrink-text__link" href="#">
        <img src="<?php echo $arrow_right_svg ?>" />
        <?php _e('Show less','closer-studio');?>
      </a>
    </p>


  </div>
</section>

<?php endif ?>
