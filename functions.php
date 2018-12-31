<?php 

// Loading in scripts
function enqueue_custom_styles() {
	wp_enqueue_style("bootstrap", "//stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css");
	wp_enqueue_style("customtheme-style", get_stylesheet_uri());
}
add_action("wp_enqueue_scripts", "enqueue_custom_styles");

function customtheme_setup() {
	// Register a custom primary navigation menu
	register_nav_menus( array(
		"primary" => __("Primary Menu", "customtheme_setup")
	));

	// Add theme support for document title tag
	add_theme_support("title-tag");
}
add_action("after_setup_theme", "customtheme_setup");

?>