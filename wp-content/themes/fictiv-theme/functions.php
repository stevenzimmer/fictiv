<?php 

    add_action('wp_enqueue_scripts', 'fictiv_enqueue_scripts');

    function fictiv_enqueue_scripts() {

        
        wp_enqueue_script( 'mkto-forms', '//info.fictiv.com/js/forms2/js/forms2.min.js', [], '1.1', false );

        wp_enqueue_script('main-js', get_template_directory_uri() . '/dist/main/js/scripts.min.js', ['mkto-forms'], '1.0', true);
    
        // wp_enqueue_style('style', get_template_directory_uri() . '/dist/main/css/style.min.css', [], '1.2');
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

    
add_filter( 'image_send_to_editor', 'add_vimeo_data_to_image', 10, 2 );

function add_vimeo_data_to_image( $html, $attachment_id ) {

    print_r( $html );

    print_r( $attachment_id );

    $document = new DOMDocument();
    $document->loadHTML($html, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

    $imgs = $document->getElementsByTagName('img');

    foreach ($imgs as $img) :
        //get the current class
        $current_image_class = $img->getAttribute('class');

        //add new class along with current class
        $img->setAttribute('class', $current_image_class . ' video-thumb');

        //add the data attribute
        $img->setAttribute('data-vimeo-id', $vimeo_id);

    endforeach;

    $html = $document->saveHTML();

    // if ($attachment_id) {
    //     //check if there is vimeo video id for the image
    //     $vimeo_id = get_post_meta($attachment_id, 'vimeo-id', true);

    //     //if there is a vimeo id set for the image, add class and data-attr
        
    // }

    return $html;
}

?>