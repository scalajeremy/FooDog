<?php get_header(); ?>
<div class="row">
  <div class="col-md-8 blog-main">
    <?php
    if ( have_posts() ) {
      while ( have_posts() ) : the_post();
        if( has_post_thumbnail() ):
          echo get_the_post_thumbnail();
        endif;
      ?>
      <div class="blog-post">
        <h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p class="blog-post-meta"><?php the_date(); ?> by <?php the_author(); ?></p>
        <?php the_content(); ?>
      </div><!-- /.blog-post -->
      <?php
    endwhile;
  }
  ?>
  </div>
  <div class="col-md-4 blog-main">
    <?php get_sidebar(); ?>
  </div>
</div>

<div class="container-fluid">
  <?php get_footer(); ?>
</div>
