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

	function register_fictiv_menus() {
	 register_nav_menus(
	    array(
	      'top-nav' => __( 'Top Nav' ),
	      'footer' => __( 'Footer' )
	      // 'an-extra-menu' => __( 'An Extra Menu' )
	    )
	  );
	}
	
	add_action( 'init', 'register_fictiv_menus' );

	// ************* Remove default Posts type since no blog *************

	// Remove side menu
	add_action( 'admin_menu', 'remove_default_post_type' );

	function remove_default_post_type() {
	    remove_menu_page( 'edit.php' );
	}

	// Remove +New post in top Admin Menu Bar
	add_action( 'admin_bar_menu', 'remove_default_post_type_menu_bar', 999 );

	function remove_default_post_type_menu_bar( $wp_admin_bar ) {
	    $wp_admin_bar->remove_node( 'new-post' );
	}

	// Remove Quick Draft Dashboard Widget
	add_action( 'wp_dashboard_setup', 'remove_draft_widget', 999 );

	function remove_draft_widget(){
	    remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
	}

	// End remove post type

?>