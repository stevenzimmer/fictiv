<?php 

    add_action('wp_enqueue_scripts', 'fictiv_enqueue_scripts');

    function fictiv_enqueue_scripts() {

        
        wp_enqueue_script( 'mkto-forms', '//info.fictiv.com/js/forms2/js/forms2.min.js', [], '1.1', false );

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
                <form class="form-underline " id="mktoForm_<?php echo $form_number; ?>"></form>
            </div>
            <div class="text-center">

                <?php 
                    get_template_part('partials/gdpr', 'text');
                ?>
            
            </div>
        
        </div> 
<?php
    }

    function exclude_child_posts_in_loop( $query ) {
    
        if( $query->is_post_type_archive && $query->is_archive && !$query->is_admin  ) :

            $query->set( 'post_parent', 0 );
        
        endif;
    }


    add_action( 'pre_get_posts', 'exclude_child_posts_in_loop' );


    //* Load cusomt editor styles for the block editor (Gutenberg)
    function block_editor_styles() {
        // wp_enqueue_style( 'site-block-editor-styles', get_theme_file_uri( '/style-editor.css' ), false, '1.0', 'all' );

        wp_enqueue_script('editor-js', get_template_directory_uri() . '/dist/editor/js/scripts.min.js', [], '1.0', true);
    
        wp_enqueue_style('editor-style', get_template_directory_uri() . '/dist/editor/css/style.min.css', [], '1.2');
    }

    add_action( 'enqueue_block_editor_assets', 'block_editor_styles' );

    function add_body_class_to_block_editor( $classes ) {
        //get current page
        global $pagenow;

        //check if the current page is post.php and if the post parameteris set
        if ( $pagenow ==='post.php' && isset($_GET['post']) ) :
            //get the post type via the post id from the URL
            $postType = get_post_type( $_GET['post']);
            //append the new class
            $classes .= ' single-' . $postType;

        //next check if this is a new post
        elseif ( $pagenow ==='post-new.php' )  :
            
            //check if the post_type parameter is set
            if( isset($_GET['post_type']) ) :
            
                //in this case you can get the post_type directly from the URL
                $classes .= ' single-' . urldecode($_GET['post_type']);
            
            else :
            
                //if post_type is not set, a 'post' is being created
                $classes .= ' single-post';
            
            endif;


        endif;
    
        return $classes;
    } 

    add_filter('admin_body_class', 'add_body_class_to_block_editor'); 
     
?>