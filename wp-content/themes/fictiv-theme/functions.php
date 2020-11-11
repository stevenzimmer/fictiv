<?php 

    add_action('wp_enqueue_scripts', 'fictiv_enqueue_scripts');

    function fictiv_enqueue_scripts() {
        wp_dequeue_script('jquery');
        wp_deregister_script('jquery');


        wp_enqueue_script( 'mkto-forms', '//app-ab20.marketo.com/js/forms2/js/forms2.min.js', [], '1.1', false );

        // wp_enqueue_script( 'mkto-forms', '//info.fictiv.com/js/forms2/js/forms2.min.js', [], '1.1', false );
        
        wp_enqueue_script('main-js', get_template_directory_uri() . '/dist/main/js/scripts.min.js', ['mkto-forms'], '1.15', true);
    

        wp_enqueue_style('style', get_template_directory_uri() . '/dist/main/css/style.min.css', [], '1.52');
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
                <form class="mktoForm underline" data-form-type="resource" data-formId="<?php echo $form_number; ?>"></form>
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
        // Lazyload images in post content
        
        //-- Change src/srcset to data attributes.
        $content = preg_replace("/<img(.*?)(src=|srcset=)(.*?)>/i", '<img$1data-$2$3>', $content);

        //-- Add .lazyload class to each image that already has a class.
        $content = preg_replace('/<img(.*?)class=\"(.*?)\"(.*?)>/i', '<img$1class="$2 lazyload"$3>', $content);

        //-- Add .lazyload class to each image that doesn't already have a class.
        $content = preg_replace('/<img((.(?!class=))*)\/?>/i', '<img class="lazyload"$1>', $content);

        return $content;

    }

    add_filter('the_content', 'lazyload_images_in_posts' );

    function resource_center_cpt() {
        // Resource Center Post Types

        global $resource_post_types;

        $resource_post_types = array(

            'cpt_masterclass',
            'cpt_blog',
            'cpt_case_study',
            'cpt_ebook',
            'cpt_teardown',
            'cpt_tool',
            // 'cpt_video',
            'cpt_webinar'
            

        );

    }

    function resource_center_taxonomies() {

        $resource_center_taxonomies = array();

        resource_center_cpt();
        
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
                <p class="text-16 font-museo-500 text-grey-600">
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

    function capabilities_table( $col_title, $cell_columns, $cell ) {
?>
       <div class="w-full flex flex-row md:flex-col capabilities-table">
            <div class="w-full p-4 bg-grey-100 flex md:flex-0 md:h-16 ">
                <p class="text-14 text-grey-700 font-museo-700">
                    <?php echo get_sub_field( $col_title ); ?>
                </p>
            </div>
            <?php 
                if( have_rows( $cell_columns ) ) :

                    $j = 0;

                    while( have_rows( $cell_columns ) ) :
                        the_row();
            ?>

            <div class="w-full p-4 border-b border-grey-100 border-r border-l border-t md:border-t-0 md:flex-1 max-w-md">
                <div class=" post-content capabilities-table-cell">
                    <?php echo get_sub_field( $cell ); ?>
                </div>
                
            </div>
            <?php 
                    $j++;
                    
                    endwhile;
                
                endif;
            ?>
        </div>

<?php
    }

    require get_theme_file_path('/inc/custom-rest-route.php');

    // Remove trailing forward slash from pagination links
    add_filter('paginate_links','untrailingslashit');

    function card_label( $text ) {
        // Label used on resource cards
?>
    <div class="ml-2">
        <div class="border border-teal-light rounded px-2 py-1 bg-teal-100 ">
            <p class="font-museo-500 text-12 text-teal-light text-center leading-3">
                <?php echo $text; ?>
            </p>
        </div>
        
    </div>
<?php
    }

?>