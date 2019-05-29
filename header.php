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
      <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon/apple-touch-icon.png">
      <link rel="icon" type="image/png" sizes="32x32" href"<?php echo get_stylesheet_directory_uri(); ?>/favicon/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon/favicon-16x16.png">
      <link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon/site.webmanifest">
        <header class="blog-header py-3">
        <div class="row py-5">
          <div class="col align-self-start">
          </div>
          <div class="col text-center align-self-center">
            <a class="blog-header-logo text-dark" href="<?php echo get_home_url(); ?>"><?php bloginfo('name'); ?></a>
          </div>
          <div class="col align-self-start text-right">
            <i class="fab fa-facebook-f px-2"></i>
            <i class="fab fa-twitter px-2"></i>
            <i class="fab fa-instagram px-2"></i>
            <i class="fas fa-search px-2"></i>
          </div>
        </div>
        <div class="row">
          <div class="col align-self-center text-center">
            <div class="">
              <?php wp_nav_menu( array(
              'theme_location' => 'header-menu',
              'menu_class' => 'p-2 nav d-flex justify-content-center'
              ) ); ?>
            </div>
          </div>
        </div>
        </header>
    <?php wp_head(); ?>
  </head>
<body <?php body_class(); ?> >
  <div class="container-fluid p-0">
