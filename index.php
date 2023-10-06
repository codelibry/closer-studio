<?php 

  global $post;

  $page_slug = $post->post_name; 

  if(is_front_page()) $page_slug = 'home'; 
    
?>

<?php get_header(); ?>

<main class="<?php echo $page_slug ?>">

<section class="section content-text">
  <div class="content-text__container">

    <h2 class="content-text__title"><?php the_title() ?></h2>

    <p class="content-text__content">
      <?php the_content() ?>
    </p>

  </div>
</section>

</main>

<?php get_footer(); ?>
