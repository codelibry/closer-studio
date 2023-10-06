<?php
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
      <a class="shrink-text__link" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 11.871l-5-4.871v3h-19v4h19v3z"/></svg><?php _e('Read more','closer-studio');?></a>
    </p>

    <p class="shrink-text__full">
      <?php echo $full ?>
      <a class="shrink-text__link" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 11.871l-5-4.871v3h-19v4h19v3z"/></svg><?php _e('Show less','closer-studio');?></a>
    </p>


  </div>
</section>

<?php endif ?>
