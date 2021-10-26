<?php
add_theme_support( 'post-thumbnails' );
function wpb_custom_new_menu() {
    register_nav_menu('header-menu',__( 'Header menu' ));
}
add_action( 'init', 'wpb_custom_new_menu' );