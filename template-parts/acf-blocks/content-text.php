<?php
  $title = get_sub_field('content-text-title');
  $content = get_sub_field('content-text-content');
?>

<?php if ($title and $content): ?>

<section class="section content-text" id="content-text">
  <div class="content-text__container">

    <h2 class="content-text__title"><?php echo $title ?></h2>

    <p class="content-text__content">
      <?php echo $content ?>
    </p>

  </div>
</section>

<?php endif ?>
