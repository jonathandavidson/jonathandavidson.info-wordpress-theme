<?php

if ( ! function_exists( 'jonathandavidson_info__support' ) ) :

function jonathandavidson_info__support() {

  // Include style.css
  wp_enqueue_style( 'style', get_stylesheet_uri() );

}

endif;

add_action( 'after_setup_theme', 'jonathandavidson_info__support' );
