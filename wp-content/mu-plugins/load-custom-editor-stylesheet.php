<?php 
	
	//* Enqueue editor styles for the block editor (Gutenberg)
    function block_editor_styles() {

        wp_enqueue_script('editor-js', get_template_directory_uri() . '/dist/editor/js/scripts.min.js', [], '1.0', true);
    
        wp_enqueue_style('editor-style', get_template_directory_uri() . '/dist/editor/css/style.min.css', [], '1.2');
    }

    add_action( 'enqueue_block_editor_assets', 'block_editor_styles' );
?>