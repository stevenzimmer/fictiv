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
	    )
	  );
	}
	
	add_action( 'init', 'register_fictiv_menus' );

	// ************* Remove default Posts type *************

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

	function remove_draft_widget() {
	    remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
	}

	// End remove post type

	add_action( 'wp_print_styles', 'deregister_dashicons', 100 );

	function deregister_dashicons() { 
	   wp_deregister_style( 'dashicons' ); 

	}

	/**
	 * Disable the emoji's
	 */
	function disable_emojis() {
	 remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	 remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	 remove_action( 'wp_print_styles', 'print_emoji_styles' );
	 remove_action( 'admin_print_styles', 'print_emoji_styles' ); 
	 remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	 remove_filter( 'comment_text_rss', 'wp_staticize_emoji' ); 
	 remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	 add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
	 add_filter( 'wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2 );
	}
	add_action( 'init', 'disable_emojis' );

	/**
	 * Filter function used to remove the tinymce emoji plugin.
	 * 
	 * @param array $plugins 
	 * @return array Difference betwen the two arrays
	 */
	function disable_emojis_tinymce( $plugins ) {
	 if ( is_array( $plugins ) ) {
	 return array_diff( $plugins, array( 'wpemoji' ) );
	 } else {
	 return array();
	 }
	}

	/**
	 * Remove emoji CDN hostname from DNS prefetching hints.
	 *
	 * @param array $urls URLs to print for resource hints.
	 * @param string $relation_type The relation type the URLs are printed for.
	 * @return array Difference betwen the two arrays.
	 */
	function disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {
	 if ( 'dns-prefetch' == $relation_type ) {
	 /** This filter is documented in wp-includes/formatting.php */
	 $emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/' );

	$urls = array_diff( $urls, array( $emoji_svg_url ) );
	 }

	return $urls;
	}

	function deregister_embed(){
	 wp_dequeue_script( 'wp-embed' );
	}
	add_action( 'wp_footer', 'deregister_embed' );

	

?>