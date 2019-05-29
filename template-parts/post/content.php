<div class="row post-list">
  <div class="col-6">
    <a href="<?php the_permalink(); ?>"><?php  if( has_post_thumbnail() ):
        echo get_the_post_thumbnail();
      endif; ?></a>
  </div>
  <div class="col-6">
    <p class="blog-post-category"><?php the_category(' | '); ?></p>
    <h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php the_excerpt() ?>
  </div>
</div>
