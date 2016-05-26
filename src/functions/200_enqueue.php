<?php

$tdu = get_template_directory_uri();

add_action( 'wp_enqueue_scripts', 'nunifuchisaka_enqueue_style' );
add_action( 'wp_enqueue_scripts', 'nunifuchisaka_enqueue_script' );

//add_action( 'admin_enqueue_scripts', 'nunifuchisaka_enqueue_admin_style' );

add_editor_style( $tdu . '/assets/css/editor-style.css' );


/*
## 
*/

function nunifuchisaka_enqueue_style() {
  $tdu = get_template_directory_uri();
  wp_enqueue_style( 'nunifuchisaka_webfont', '//fonts.googleapis.com/css?family=Rock+Salt' );
  wp_enqueue_style( 'nunifuchisaka_common', $tdu.'/assets/css/common.css', array('nunifuchisaka_webfont') );
}

function nunifuchisaka_enqueue_script() {
  $tdu = get_template_directory_uri();
  
  wp_enqueue_script( 'lodash', '//cdnjs.cloudflare.com/ajax/libs/lodash.js/4.11.2/lodash.min.js' );
  
  wp_deregister_script( 'jquery' );
  wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js' );
  
  wp_enqueue_script( 'backbone', '//cdnjs.cloudflare.com/ajax/libs/backbone.js/1.3.3/backbone-min.js', array('lodash', 'jquery') );
  
  wp_enqueue_script( 'nunifuchisaka_common', $tdu.'/assets/js/common.js', array('lodash', 'jquery', 'backbone') );
  
  if ( is_page('stat') ) {
    wp_enqueue_script( 'nunifuchisaka_stat', $tdu.'/assets/js/stat.min.sourcemap.js', array('backbone') );
  }
}


/*
## admin
*/

/*
function nunifuchisaka_enqueue_admin_style() {
  $tdu = get_template_directory_uri();
  wp_enqueue_style( 'nunifuchisaka_admin', $tdu.'/assets/css/admin.css', false ); 
}
*/


?>