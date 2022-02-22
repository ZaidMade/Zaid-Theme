<?php get_header(); ?>

<main>
  <ol>

<?php
  while(have_posts()){
    the_post();
    get_template_part('template-parts/content', 'archive');
  }
?>

  </ol>
</main>

<?php get_footer(); ?>
