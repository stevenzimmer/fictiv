<?php 

    add_action('wp_enqueue_scripts', 'fictiv_enqueue_scripts');

    function fictiv_enqueue_scripts() {
        wp_dequeue_script('jquery');
        wp_deregister_script('jquery');
        
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

    function asset_form( $header_text, $form_number ) {

?>
        <div>
            <div class="mb-2">
                <p class="uppercase font-museo-700 text-grey-400 text-14"><?php 

                    echo $header_text;

                ?></p>
            </div>
            <div class="mb-2">
                <form class="mktoForm form-underline" data-formId="<?php echo $form_number; ?>" data-formInstance="one"></form>
                <!-- <form class="form-underline " id="mktoForm_<?php echo $form_number; ?>"></form> -->
            </div>
            <div class="text-center">

                <?php 
                    get_template_part('partials/gdpr', 'text');
                ?>
            
            </div>
        
        </div> 
<?php
    }

    function lazyload_images_in_posts( $content ) {
        
        //-- Change src/srcset to data attributes.
        $content = preg_replace("/<img(.*?)(src=|srcset=)(.*?)>/i", '<img$1data-$2$3>', $content);

        //-- Add .lazyload class to each image that already has a class.
        $content = preg_replace('/<img(.*?)class=\"(.*?)\"(.*?)>/i', '<img$1class="$2 lazyload"$3>', $content);

        //-- Add .lazyload class to each image that doesn't already have a class.
        $content = preg_replace('/<img((.(?!class=))*)\/?>/i', '<img class="lazyload"$1>', $content);

        
        return $content;
    }

    add_filter('the_content', 'lazyload_images_in_posts');

    function resource_center_cpt() {

        global $resource_post_types;
        $resource_post_types = array(

            'cpt_case_study',
            'cpt_blog',
            'cpt_teardown',
            'cpt_tool',
            'cpt_webinar',
            'cpt_ebook',
            'cpt_video'            

        );

    }

    function resource_center_taxonomies() {
        $resource_center_taxonomies = array();
        foreach ( $GLOBALS['resource_post_types'] as $i => $type ) :

            foreach ( get_post_type_object( $type )->taxonomies as $j => $tax ) :
                
                if ( !in_array( $tax, $resource_center_taxonomies ) ) :
                    
                    array_push( $resource_center_taxonomies, $tax);

                endif;

            endforeach;


        endforeach;

        return $resource_center_taxonomies;
    }

    function resources_filter_title( $label ) {
?>
    <div class="flex items-center justify-between filter-title cursor-pointer py-2 px-1 border-b border-grey-200 select-none">
            <div>
                <p class="text-12 uppercase font-museo-700 text-grey-600">
                    <?php echo $label; ?>
                </p>
            </div>
            <div class="px-2 filter-arrow transform tranisition-transform duration-200 origin-center">
                <p>
                    &#9656;
                </p>
            </div>
        </div>
<?php
    }

    require get_theme_file_path('/inc/custom-rest-route.php');


?>