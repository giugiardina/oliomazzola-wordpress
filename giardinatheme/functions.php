<?php

 function simple_setup() {
   // Attiva Title Tag: WP mette in automatico il Title Tag per ciascuna pagina
   add_theme_support ("title-tag");

   // Custom Header
   add_theme_support ("custom-header");

   // Attiva immagine in evidenza
   add_theme_support('post-thumbnails');

  // Custom Menu Area
  register_nav_menus( array(
    'header' => esc_html__('Header', 'slug-theme')
  ));
 }

 add_action ('after_setup_theme', 'simple_setup');

// includere css e js
function giardinatheme_script_enqueue() {
  wp_enqueue_style('giardinatheme-bootstrap', "https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css", array(), '1.0', 'all');
  wp_enqueue_style('customestyle', get_template_directory_uri() . '/css/giardinatheme.css', array(), '1.0.0', 'all');
  wp_enqueue_script('customejs', get_template_directory_uri() . '/js/giardinatheme.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'giardinatheme_script_enqueue');

function giardinatheme_register_scripts(){
  wp_enqueue_script('giardinatheme-bootstrap', "https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js", array(), '3.6.0', 'all');
}

function giardinatheme_theme_setup() {
  add_theme_support('menus');}

add_action ('init', 'giardinatheme_theme_setup');
