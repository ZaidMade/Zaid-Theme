<?php get_header(); ?>

<main class="front-page">

  <section>
  <?php
  if(function_exists('the_custom_logo')):
    $custom_logo_id = get_theme_mod('custom_logo');
    $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
  ?>

    <a href="<?php echo home_url( '/' ); ?>">
      <img id="front-page-logo" src="<?php echo $logo[0]; ?>">
    </a>

  <?php
  endif;
  ?>
    <h1 class="page-not-found">404: Page not Found</h1>
  </section>

  <section>
    <?php get_search_form(); ?>
  </section>

</main>

<?php get_footer(); ?>
