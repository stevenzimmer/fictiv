<?php 
    function options_page_init() {
        // Options page for editing Promotion Banner
        if( function_exists('acf_add_options_page') ) :
            
            acf_add_options_page(
                array(
                    'page_title'    => 'Navigation',
                    'menu_title'    => 'Navigation',
                    'menu_slug'     => 'navigation',
                    'capability'    => 'edit_posts',
                    'position'      => 10,
                    'icon_url'      => 'dashicons-admin-site-alt2',
                    'redirect'      => true,
                    'update_button' => __('Update Navigation'),
                    'updated_message' => __('Navigation Updated')
                )
            );
            
        endif;
    }
    add_action( 'init', 'options_page_init' );
?>