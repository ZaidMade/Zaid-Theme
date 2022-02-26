<?php get_header(); ?>

<main>
  <article>
    <?php get_search_form(); ?>
    <h3 class="article-title">Search results for '<?php the_search_query(); ?>':</h3>
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
