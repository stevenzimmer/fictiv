<?php 
	
	function register_theme_support() {

		// Add featured image to new posts and pages in wp-admin
		add_theme_support( 'post-thumbnails' );

		// Adds title tag without header.php code
		add_theme_support( 'title-tag' );

        add_post_type_support('page', 'excerpt');
        
		add_theme_support('editor-styles');

		add_editor_style( 'assets/css/style-editor.css' );
	}

	add_action( 'after_setup_theme', 'register_theme_support' );
?>