<?php
  $title = get_sub_field('plain-text-title');
  $content = get_sub_field('plain-text-content');
?>

<?php if ($title and $content): ?>

<section class="section plain-text" id="plain-text">
  <div class="plain-text__container">

    <h2 class="plain-text__title"><?php echo $title ?></h2>

    <p class="plain-text__content">
      <?php echo $content ?>
    </p>

  </div>
</section>

<?php endif ?>
