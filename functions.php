<?php

// Setup My Child Theme's textdomain.
// @link http://codex.wordpress.org/Child_Themes#Internationalization
function my_child_theme_setup() {

  load_child_theme_textdomain( 'kieztoolbox', get_stylesheet_directory() . '/languages' );

}
add_action( 'after_setup_theme', 'my_child_theme_setup' );

?>
