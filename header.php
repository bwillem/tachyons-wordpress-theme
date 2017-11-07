<?php

/**
 * header.php
 *
 **/

 check_direct();

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">
  <?php wp_head(); ?>
</head>
<body id="site" <?php body_class('w-100 pa0 ma0 bg-white near-black sans-serif'); ?>>

<header id="site-header" class="w-100 img-header vh cover overlay" style="background:url('<?php header_image();?>')">
  <div id="site-header-title" class="pa2 pa6-ns vc z-1">
      <?php
        if ( is_front_page() ) {
      ?>
        <?php
          $custom_logo_id = get_theme_mod( 'custom_logo' );
          $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
          if ( has_custom_logo() ) {
            echo '<div id="site-header-custom-logo" class="w-50 img-logo-wrap">';
            echo '<img src="'. esc_url( $logo[0] ) .'" alt="Boundary Brewing Logo" class="w-50 img-logo pl1">';
            echo '</div>';
          }
        ?>
        <h2 class="f1 f-headline-ns lh-title measure-fixed nr near-white mv3 b"><?php echo get_bloginfo('description'); ?></h2>
      <?php } else { ?>
        <h1 class="f7 f6-ns lh-title measure"><a href="<?php echo get_home_url(); ?>" title="Go to the Homepage" class="near-black"><?php echo get_bloginfo('name'); ?></a></h1>
      <?php } ?>
  </div> <!-- end site-header-title -->
</header> <!-- end site-header -->
