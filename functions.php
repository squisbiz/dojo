<?php

function register_my_menus() {
  register_nav_menus(
    array(
      'header-nav' => __( 'Navigation Menu' ),
      'footer-social' => __( 'Footer - Social' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

?>
