<?php 
/**
 * Theme Setup 
 *
 */
function fictiv_custom_colors() {
	// Disable Custom Colors
	add_theme_support( 'disable-custom-colors' );
  
	// Editor Color Palette
	add_theme_support( 'editor-color-palette', array(

			array(
				'name'  => __( 'White', 'fictiv_custom_colors' ),
				'slug'  => 'white',
				'color'	=> '#ffffff',
			),

			array(
				'name'  => __( 'Red', 'fictiv_custom_colors' ),
				'slug'  => 'red-dark',
				'color'	=> '#e25e47',
			),

			array(
				'name'  => __( 'Yellow', 'fictiv_custom_colors' ),
				'slug'  => 'yellow-dark',
				'color'	=> '#fcbb47',
			),

			array(
				'name'  => __( 'Teal Lighter', 'fictiv_custom_colors' ),
				'slug'  => 'teal-lighter',
				'color'	=> '#BDEAE1',
			),

			array(
				'name'  => __( 'Teal Light', 'fictiv_custom_colors' ),
				'slug'  => 'teal-light',
				'color'	=> '#16BC9C',
			),

			array(
				'name'  => __( 'Teal Dark', 'fictiv_custom_colors' ),
				'slug'  => 'teal-dark',
				'color'	=> '#0E957B',
			),

			array(
				'name'  => __( 'Blue Light', 'fictiv_custom_colors' ),
				'slug'  => 'blue-light',
				'color'	=> '#5B87F2',
			),

			array(
				'name'  => __( 'Blue Dark', 'fictiv_custom_colors' ),
				'slug'  => 'blue-dark',
				'color'	=> '#0D0B70',
			),
			
			array(
				'name'  => __( 'Grey Lightest', 'fictiv_custom_colors' ),
				'slug'  => 'grey-100',
				'color'	=> '#F0F4F5',
			),

			array(
				'name'  => __( 'Grey Lighter', 'fictiv_custom_colors' ),
				'slug'  => 'grey-200',
				'color'	=> '#DBDCDE',
			),

			array(
				'name'  => __( 'Grey Light', 'fictiv_custom_colors' ),
				'slug'  => 'grey-300',
				'color'	=> '#C6C8CA',
			),

			array(
				'name'  => __( 'Grey', 'fictiv_custom_colors' ),
				'slug'  => 'grey-400',
				'color'	=> '#9D9FA1',
			),

			array(
				'name'  => __( 'Grey Medium', 'fictiv_custom_colors' ),
				'slug'  => 'grey-500',
				'color'	=> '#888888',
			),

			array(
				'name'  => __( 'Grey Heavy', 'fictiv_custom_colors' ),
				'slug'  => 'grey-600',
				'color'	=> '#76787A',
			),

			array(
				'name'  => __( 'Grey Dark', 'fictiv_custom_colors' ),
				'slug'  => 'grey-700',
				'color'	=> '#444444',
			),

			array(
				'name'  => __( 'Black', 'fictiv_custom_colors' ),
				'slug'  => 'black',
				'color'	=> '#000000',
			)
		) 
	);
}

 // 100: "#F0F4F5",
add_action( 'after_setup_theme', 'fictiv_custom_colors' );

?>