<?php get_header(); ?>

<main class="home">


<?php if(have_rows('content')): ?>

  <?php while(have_rows('content')): the_row(); ?>

    <?php get_template_part('template-parts/acf-blocks/' . get_row_layout()); ?>

  <?php endwhile; ?>

<?php endif; ?>


</main>

<?php get_footer(); ?>
