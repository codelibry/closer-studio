<?php

  $current_year = date('Y');
  $email = get_field('email_link', 'option');

?>

<footer id="footer" class="footer">
  <div class="footer__container">
    
    <div class="footer__flex">
      <div class="footer__col footer__col--1">

        <a class="footer__link" href="<?php echo $email['url'] ?>"><?php echo $email['title'] ?></a>

        <?php echo apply_shortcodes('[contact-form-7 id="4d8d2d1" title="Newsletter"]'); ?>

      </div>

      <div class="footer__col footer__col--2">

        <ul class="footer__social">
          <?php while(have_rows('social_links', 'option')): the_row(); ?>
            <?php $link = get_sub_field('social_link'); ?>
            <li>
              <a href="<?php echo $link['url'] ?>"><?php echo $link['title'] ?></a>
            </li>
          <?php endwhile; ?>
        </ul>

      </div>
    </div>

    <div class="footer__copyright">
        &copy;closerstudio <?php echo $current_year ?>
    </div>
  </div>
</footer>
