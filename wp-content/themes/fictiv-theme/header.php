<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  	<meta charset="<?php bloginfo( 'charset' ); ?>">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<link rel="profile" href="http://gmpg.org/xfn/11">
  	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  	<?php 
  		wp_head(); 
  	?>
</head><!--/head-->

<body <?php body_class() ?>>
	
<?php 	

	// Main nav wrapper
	include get_template_directory() . '/inc/navigation/main.php';

	// Filter Mobile
	if ( wp_is_mobile() ) :
		// Show mobile filter on Resource center pages
		if( is_search() || 

			is_page_template('page-filter.php') || 
			is_archive() ||
			is_page_template('page-resource-center.php') ||
			is_singular('cpt_blog') ) :

			include( get_template_directory() . '/inc/post-taxonomies.php');

			include get_template_directory() . '/inc/navigation/mobile/filter.php';

		endif;
	endif;

?>


	

	
