<article>

  <section class="article-meta mb-3">
    <span><i class="fa fa-user"></i> <?php the_author(); ?> </span>
    <span class="date"><i class="fa fa-clock"></i> <?php the_date(); ?></span>
    <?php the_category(); ?>
    <span class="comment"><a href="#comments"><i class="fa fa-comment"></i> <?php comments_number(); ?></a></span>
  </section>

  <section class="article-title">
    <h3><?php the_title(); ?></h3>
  </section>

  <section class="article-content">
    <?php if(has_post_thumbnail()): ?>
    <div class="mt-3 mb-5" align="center">
      <img class="mr-3 img-fluid d-md-flex" src="<?php the_post_thumbnail_url(); ?>" alt="image">
    </div>
    <?php endif ?>

    <?php the_content(); ?>
  </section>

  <section class="article-meta">
    <?php
      the_tags(
        '<span class="tag"><i class="fa fa-tag"></i> ',
        '</span><span class="tag"><i class="fa fa-tag"></i> ',
        '</span>'
      );
    ?>
    <span class="share">
      <a href="#"><i class="fa fa-share"></i> Share</a>
    </span>
  </section>

  <section class="article-more">
    <a class="article-previous" href="#">
      <button>&larr; Previous</button>
    </a>
    <a class="article-next" href="#">
      <button>Next &rarr;</button>
    </a>
  </section>



  <?php comments_template(); ?>

</article>
