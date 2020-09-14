<?php

function agregar_css_js() {
      wp_enqueue_style( 'style', get_stylesheet_uri() );
     
      wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
     
      wp_enqueue_script( 'popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', array ( 'jquery' ), '1.16', true);
      wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array ( 'popper' ), '4.5', true);
    }
    add_action( 'wp_enqueue_scripts', 'agregar_css_js' );
