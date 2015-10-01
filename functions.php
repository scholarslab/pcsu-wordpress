<?php

function pcsu_register_nav_menus() {
  register_nav_menus(
    array(
      'header' => __( 'Header Navigation ' )
    )
  );
}

add_action( 'init', 'pcsu_register_nav_menus' );

