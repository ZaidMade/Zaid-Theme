<?php get_header(); ?>

<main class="front-page">

  <section>
  <?php
  if(function_exists('the_custom_logo')):
    $custom_logo_id = get_theme_mod('custom_logo');
    $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
  ?>

    <img id="front-page-logo" src="<?php echo $logo[0]; ?>">

  <?php
  endif;
  ?>
  </section>

  <section>
    <nav class="social-nav">
      <?php
        wp_nav_menu(
          array(
            'menu' => 'social',
            'container' => '',
            'theme_location' => 'social',
            'items_wrap' => '<ul>%3$s</ul>'
          )
        );
      ?>
    </nav>
  </section>

  <section>
    <?php dynamic_sidebar('homepage-sidebar'); ?>
  </section>

  <!--<section>
    <form class="mailing-list">
      <input type="text" placeholder="Email...">
      <input type="submit" value="Subscribe">
    </form>
  </section>-->

</main>

<?php get_footer(); ?>
