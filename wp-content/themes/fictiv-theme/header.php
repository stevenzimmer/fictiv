<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  	<meta charset="<?php bloginfo( 'charset' ); ?>">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<link rel="profile" href="http://gmpg.org/xfn/11">
  	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <!-- Preload Fonts -->
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/dist/assets/fonts/museo-sans/300.woff" as="font" crossorigin="anonymous">
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/dist/assets/fonts/museo-sans/300_italic.woff" as="font" crossorigin="anonymous">
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/dist/assets/fonts/museo-sans/500.woff" as="font" crossorigin="anonymous">
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/dist/assets/fonts/museo-sans/700.woff" as="font" crossorigin="anonymous">
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/dist/assets/fonts/museo-sans/900.woff" as="font" crossorigin="anonymous">
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/dist/assets/fonts/museo-slab/300.otf" as="font" crossorigin="anonymous">
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/dist/assets/fonts/museo-slab/500.otf" as="font" crossorigin="anonymous">

  	<?php
  		wp_head(); 

  		if ( is_author() ) :
  			// Canonical for Author Archive page
  	?>
  	<link rel="canonical" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" />
  	<?php
  		endif;
  	?>

  	<script>
    	window.fa=window.fa||function(){(fa.q=fa.q||[]).push(arguments)};fa.l=+new Date;
      	fa('init',{product:'dotcom'});fa('pageview');fa('tracklinks');
    </script>
    
  	<script async src='https://app.fictiv.com/analytics.js'></script>

</head><!--/head-->

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TVR9RRN');</script>
<!-- End Google Tag Manager -->

<body <?php body_class('overflow-x-hidden pt-0 lg:pt-18' ); ?>>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TVR9RRN"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php 

	// Main nav wrapper
	include get_template_directory() . '/inc/navigation/main.php';

	// Resources Filter Mobile
	if ( wp_is_mobile() ) :

		// Show mobile filter on Resource center templates
		if( 
			is_search() || 
			is_page_template('page-filter.php') || 
			is_archive() ||
			is_page_template('page-resource-center.php') ||
			is_singular('cpt_blog') ||
			is_singular('cpt_teardown') 
		) :

			include( get_template_directory() . '/inc/post-taxonomies.php');

			include( get_template_directory() . '/inc/navigation/mobile/filter.php' );

		endif;
	endif;

?>