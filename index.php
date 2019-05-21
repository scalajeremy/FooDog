<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 */
get_header();
?>
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
        <h2 class="blog-post-title"><?php the_title(); ?></h2>
        <p class="blog-post-meta"><?php the_date(); ?> by <?php the_author(); ?></p>
        <?php the_content(); ?>
      </div><!-- /.blog-post -->
      <?php
    endwhile;
  }
  ?>
  </div>
  <div class="col-md-4 blog-main">
    <?php
    get_sidebar();
     ?>
  </div>
</div>

<?php
get_footer();
?>
