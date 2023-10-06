<?php get_header();?>

<section class="errorPage">
  <div class="container">
    <div class="errorPage__content">
      <div class="errorPage__textWrapper">
        <h1 class="errorPage__title">404</h1>
        <div class="errorPage__subtitle"><?php _e('Oops!', 'closer-studio'); ?></div>
        <div class="errorPage__text"><?php _e('The Page you are looking for doesn\'t exist', 'closer-studio'); ?></div>
        <div class="errorPage__button"><a href="<?php echo get_home_url() ?>"><?php _e('Back To Homepage', 'closer-studio'); ?></a></div>
      </div>
    </div>
  </div>
</section>

<?php get_footer();?>
