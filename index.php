<?php get_header(); ?>
<div class="row">
  <div class="col-md-8 blog-main">
    <?php
    if ( have_posts() ) : while ( have_posts() ) : the_post();
      get_template_part( 'content', get_post_format() );
        endwhile; endif;
      ?>
  </div>
  <div class="col-md-4 blog-main">
    <?php get_sidebar(); ?>
  </div>
</div>

<div class="container-fluid">
  <?php get_footer(); ?>
</div>
