<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>REBENDESS</title>
    <?php wp_head(); ?>
</head>
<body>
<header class="header">

       <nav class="navbar navbar-expand-lg navbar-light">
           <div class="container">
                   <?php

                       $custom_logo_id = get_theme_mod( 'custom_logo' );
                       $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                       if ( has_custom_logo() ) { ?>
                        <a style="width: 115px;height: 100%;overflow: hidden;" class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                   <?php
                            echo '<img width="100%" src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                       ?>
                        </a>
                    <?php } else { ?>
                           <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                               <?php  echo '<h1>' . get_bloginfo('name') . '</h1>'; ?>
                           </a>
                    <?php   }

                   ?>



               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                   <?php
                   wp_nav_menu(
                       array(
                           'theme_location' => 'top-menu',
                           'container_class'=> 'ms-auto',
                           'menu_class'     => 'top-bar navbar-nav me-auto mb-2 mb-lg-0',
                       )
                   )
                   ?>
               </div>
           </div>
       </nav>
</header>

