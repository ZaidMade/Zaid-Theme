<?php get_header(); ?>

<main>
  <article>

    <?php get_search_form(); ?>

    <ol id="archive">

<?php
  while(have_posts()){
    the_post();
    get_template_part('template-parts/content', 'archive');
  }
?>

    </ol>

  <?php
    the_posts_pagination();
  ?>

  </article>
</main>

<?php get_footer(); ?>
