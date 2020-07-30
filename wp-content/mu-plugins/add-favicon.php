<?php 

	function add_favicon() { 

?>
        <!-- Custom Favicon -->
        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri();?>/assets/images/icons/favicon.png"/>
     
<?php 

	}

    add_action('wp_head','add_favicon');

?>