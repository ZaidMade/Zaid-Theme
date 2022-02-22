<li>
  <?php if(has_post_thumbnail()): ?>
  <img class="mr-3 img-fluid post-preview-thumbnail d-none d-md-flex" src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="image">
  <?php endif; ?>

  <div class="post-preview-body">

    <small class="article-meta">
      <span><i class="fa fa-user"></i> <?php the_author(); ?> </span>
      <span class="date"><i class="fa fa-clock"></i> <?php the_date();?></span>
      <?php the_category(); ?>
      <?php
        the_tags(
          '<span class="tag"><i class="fa fa-tag"></i> ',
          '</span><span class="tag"><i class="fa fa-tag"></i> ',
          '</span>'
        );
      ?>
    </small>

    <h3><?php the_title(); ?></h3>

    <?php the_excerpt(); ?>

    <div class="read-more">
      <a href="<?php the_permalink(); ?>">Read more &rarr;</a>
    </div>

  </div>
</li>
