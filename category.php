
<?php get_header(); ?>
<div class="container cat-header pt-3 pb-1 mb-3">
  <p class="text-center"><?php single_cat_title(); ?></p>
</div>
<div class="row">

  <div class="col-md-8 blog-main">
    <?php
    if ( have_posts() ) : while ( have_posts() ) : the_post();
      get_template_part( 'content', get_post_format() );
        endwhile; endif;
      ?>
  </div>
</div>

<div class="container footer">
  <?php get_footer(); ?>
</div>
