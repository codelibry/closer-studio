<?php
  $title = get_sub_field('content-text-title');
  $content = get_sub_field('content-text-content');

  // format title as slug to use as section id
  $section_id = implode('-', explode(' ', strtolower($title)));
?>

<?php if ($title and $content): ?>

<section class="section content-text" id="<?php echo $section_id ?>">
  <div class="content-text__container">

    <h2 class="content-text__title"><?php echo $title ?></h2>

    <p class="content-text__content">
      <?php echo $content ?>
    </p>

  </div>
</section>

<?php endif ?>
