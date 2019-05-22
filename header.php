<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">

    <?php wp_head(); ?>
  </head>
<body <?php body_class(); ?> >
  <div class="container">
    <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center py-5">
      <div class="col-md-6 offset-md-3 text-center align-self-center">
        <a class="blog-header-logo text-dark" href="<?php echo get_home_url(); ?>"><?php bloginfo('name'); ?></a>
      </div>
      <div class="col-3 text-right align-self-start">
        <div>
          <i class="fab fa-facebook-f px-2"></i>
          <i class="fab fa-twitter px-2"></i>
          <i class="fab fa-instagram px-2"></i>
          <i class="fas fa-search px-2"></i>
      </div>
    </div>
  </header>
    <div class="nav-scroller py-1 mb-2">
      <nav class="nav d-flex justify-content-between">
        <?php wp_nav_menu( array(
          'theme_location' => 'header-menu',
          'menu_class' => 'p-2 nav d-flex justify-content-between'
          ) ); ?>
      </nav>
    </div>
