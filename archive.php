<?php get_header(); ?>

<main>
  <article>
    <ol id="archive">

<?php
  while(have_posts()){
    the_post();
    get_template_part('template-parts/content', 'archive');
  }
?>

    </ol>
  </article>
</main>

<?php get_footer(); ?>
