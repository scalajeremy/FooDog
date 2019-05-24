<?php get_header(); ?>
<div class="row">
  <div class="col-md-8 blog-main">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <div class="post">
          <div class="single-title"><?php the_title(); ?></div>
          <div class="single-post"><?php  if( has_post_thumbnail() ):
              echo get_the_post_thumbnail();
            endif; ?></div>
          <p class="post-info">
            Posté le <?php the_date(); ?> dans <?php the_category(', '); ?> par <?php the_author(); ?>.
          </p>
          <div class="post-content">
            <?php the_content(); ?>
          </div>
          <div class="post-comments">
            <?php comments_template(); ?>
          </div>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
  <div class="col-md-4 blog-main">
    <?php get_sidebar(); ?>
  </div>
<div class="container-fluid">
  <?php get_footer(); ?>

</div>
