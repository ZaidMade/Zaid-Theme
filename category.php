<?php get_header(); ?>

<main>
  <article>
    <?php get_search_form(); ?>
    <h3 class="article-title">Articles <?php the_category(); ?>...</h3>
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
