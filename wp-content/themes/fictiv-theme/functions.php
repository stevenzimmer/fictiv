<?php 

    add_action('wp_enqueue_scripts', 'fictiv_enqueue_scripts');

    function fictiv_enqueue_scripts() {

        
        wp_enqueue_script( 'mkto-forms', '//app-ab20.marketo.com/js/forms2/js/forms2.min.js', [], '1.1', false );

        wp_enqueue_script('main-js', get_template_directory_uri() . '/dist/main/js/scripts.min.js', ['mkto-forms'], '1.0', true);
    
        wp_enqueue_style('style', get_template_directory_uri() . '/dist/main/css/style.min.css', [], '1.2');
    }

    function primary_button( $text = 'get a quote' ) {
?>
		<a href="https://app.fictiv.com/signup" class="btn btn-primary">
			<?php 
                echo $text;
            ?>
		</a>
<?php
    }

    

?>