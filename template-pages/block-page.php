<?php 
  /*
    Template Name: Block Page
  */

  global $post;

  $page_slug = $post->post_name; 

  if(is_front_page()) $page_slug = 'home'; 
    
?>

<?php get_header(); ?>

<main class="<?php echo $page_slug ?>">

<?php if(have_rows('content')): ?>

  <?php while(have_rows('content')): the_row(); ?>

    <?php get_template_part('template-parts/acf-blocks/' . get_row_layout()); ?>

  <?php endwhile; ?>

<?php endif; ?>

</main>

<?php get_footer(); ?>
