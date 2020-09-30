<!doctype html>
<html <?php language_attributes(); ?>>

<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="./css/bootstrap.min.css">

     <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
     <!-- Menu -->
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container">

               <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">Logo Corporativo</a>
               <button 
                    class="navbar-toggler"
                    type="button" 
                    data-toggle="collapse"
                    data-target="#navbarSupportedContent" 
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false" 
                    aria-label="Toggle navigation"
               >
                    <span class="navbar-toggler-icon"></span>
               </button>

               <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                         <li class="nav-item active">
                                   <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                         </li>
                         <li class="nav-item">
                                   <a class="nav-link" href="#">Blog</a>
                         </li>
                         <li class="nav-item">
                                   <a class="nav-link" href="#">Contacto</a>
                         </li>
                    </ul>
               </div> -->

               <?php
                    wp_nav_menu( array(
                         'theme_location'  => 'menu-principal',
                         'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                         'container'       => 'div',
                         'container_class' => 'collapse navbar-collapse',
                         'container_id'    => 'navbarSupportedContent',
                         'menu_class'      => 'nav navbar-nav ml-auto',
                         'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                         'walker'          => new WP_Bootstrap_Navwalker(),
                    ) );
               ?>
          </div>
     </nav>

     <!-- blog -->

     <div class="container">
          <h2 class="my-5 text-center text-primary">Mi Blog Personal</h2>
          <hr>