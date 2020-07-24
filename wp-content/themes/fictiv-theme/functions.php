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



// function lazyload_post_images( $content ) {

//     // $content = mb_convert_encoding($content, 'HTML-ENTITIES', "UTF-8");
//     $document = new DOMDocument('1.0', 'utf-8');

//     $document->loadHTML( mb_convert_encoding( $content, 'UTF-8', 'HTML-ENTITIES' ) );

//     $imgs = $document->getElementsByTagName('img');

//     foreach ( $imgs as $img ) :
        
//         echo '<br /><br />';

//         $orig_src = $img->getAttribute('src');
//         $orig_srcset = $img->getAttribute('srcset');
//         $existing_class = $img->getAttribute('class');

//         $img->setAttribute('src','');
//         $img->setAttribute('srcset','');

//         $img->setAttribute('class',$existing_class . ' lazyload');
//         $img->setAttribute('data-src',$orig_src);
//         $img->setAttribute('data-srcset',$orig_srcset);

//         // print_r( $img );

//         foreach ( $img->attributes as $i => $attr ) :
            
//             // print_r( $attr );

//             echo '<br /><br />';

//         endforeach;

//     endforeach;

//     $html = $document->saveHTML();
//     // print_r( $html );
//     // return $html;
// }
// add_filter ('the_content', 'lazyload_post_images');

?>