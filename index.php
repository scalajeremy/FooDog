
<?php get_header(); ?>
<div class="container">
<div class="row">
  <div class="">

  </div>
  <div class="col-md-8 blog-main">
    <div class="block-title"><h3>Featured Posts</h3></div>
      <div class="">
        Soon...
      </div>
    <div class="block-title"><h3>Last Posts</h3></div>
    <?php
    if ( have_posts() ) : while ( have_posts() ) : the_post();
      get_template_part( 'template-parts/post/content-index-last', get_post_format() );
        endwhile;

    endif;
      ?>
      <?php if( get_next_posts_link() ) :
      next_posts_link( 'Older Articles »', 0 );
      endif; ?>
  </div>
  <div class="col-md-4 blog-main">
    <?php get_sidebar(); ?>
  </div>
</div>

<div class="container footer">
  <?php get_footer(); ?>
</div>
