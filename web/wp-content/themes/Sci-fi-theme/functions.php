<?php

function css_js_enqueue(){
  // Including js files on header
  wp_enqueue_script('core', get_theme_file_uri('/site/js/core.min.js'));
  wp_enqueue_script('html5shiv', get_theme_file_uri('/site/js/html5shiv.min.js'));
  wp_enqueue_script('pointer-events', get_theme_file_uri('/site/js/pointer-events.min.js'));
  wp_enqueue_script('jquery','https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js');
  //Including js files on footer
  wp_enqueue_script('script',get_template_directory_uri().'/site/js/script.js',array(),'',true);
  
  //Including css files
  wp_enqueue_style('minor-style-css', get_theme_file_uri('/site/css/minor-style.css'),array(),'1.0.0', 'all');
  wp_enqueue_style('bootstrap', get_theme_file_uri('/site/css/bootstrap.css'),array(),'1.0.0', 'all');
  wp_enqueue_style('fonts', get_theme_file_uri('/site/css/fonts.css'),array(),'1.0.0', 'all');
  wp_enqueue_style('Yanone+Kaffeesatz', 'https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700,700i%7CYanone+Kaffeesatz:300,700%7CNova+Mono',array(),'1.0.0', 'all');
  // Including the main stylesheet last so that it doesn't get over written
  wp_enqueue_style('main_style',get_stylesheet_directory_uri().'/style.css',array(),'1.0.0', 'all');
  // This is an alternative main style.css including it here if in future we decide to use it
  //wp_enqueue_style('style_1',get_theme_file_uri('/site/css/style-1.css'),array(),'1.0.0', 'all');
}

add_action('wp_enqueue_scripts','css_js_enqueue');

function page_titles(){
  add_theme_support( 'post-thumbnails' );
  add_theme_support('title-tag');
}

add_action('after_setup_theme','page_titles');





?>