<div class="row post-list">
  <div class="col-6">
    <?php  if( has_post_thumbnail() ):
        echo get_the_post_thumbnail();
      endif; ?>
  </div>
  <div class="col-6">
    <h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p class="blog-post-meta"><?php the_date(); ?> by <?php the_author(); ?></p>
    <?php the_excerpt('read more..') ?>
  </div>
</div>
