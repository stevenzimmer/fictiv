<?php 
get_header();

if ( have_posts() ) : 

    while ( have_posts() ) : 
        the_post();
        $processes = get_the_terms( get_the_id(), 'fictiv_manufacturing_process' );

        $hero_arr = array(
            'img' => get_the_post_thumbnail_url(),
            'label' => $processes[0]->name . ' Materials',
            'title' => get_the_title(),
            'para' => get_field('capabilities_hero_paragraph'),
            'btn' => get_field('capabilities_hero_cta_button')
        );

        // capabilities_hero() function located in mu-plugins/capabilities-hero.php
        capabilities_hero( $hero_arr );

    if( have_rows('at_a_glance_materials') ) :
?>
<section class="py-20">
    <div class="container">
        <div class="text-center">
            <h2 class="text-grey-700 font-museo-700 text-20 md:text-29">At a glance</h2>
        </div>
      
        <div class="flex justify-center mb-6">
            <div class="w-full lg:w-11/12">
            
                <div class="py-10">
                  
                    <div class="flex flex-wrap md:flex-no-wrap items-stretch">
                         <?php 
                    
                            while( have_rows('at_a_glance_materials') ) : 
                                the_row();

                                capabilities_table('column_title', 'column_cells', 'column_cell' );
                            
                            endwhile;
                        ?>
                    </div>
                </div>
            </div>
        </div>
      
    </div>
</section>

<?php 
    endif;
?>
<?php 

     $about_the_material = get_field('about_this_item');

    if ( $about_the_material['paragraph'] ) :
        
    
?>
<section class="pb-20">
    <div class="container">
        <div class="flex justify-center">
            <div class="w-full lg:w-11/12">
                <div class="text-center mb-6">
                    <h2 class="text-grey-700 font-museo-700 text-20 md:text-29">About the material</h2>
                </div>

                <div class="flex -mx-6 flex-wrap justify-center lg:justify-start">
                    <div class="w-11/12 lg:w-1/2 px-6 mb-6 lg:mb-0 post-content capabilities">
                        <div class="font-museo-500 text-grey-600">
                            <?php echo $about_the_material['paragraph']; ?>
                        </div>
                    </div>

                    <div class="w-full lg:w-1/2 px-6">
                        <?php 

                            if ( $about_the_material['youtube_id'] || 
                                 $about_the_material['youtube_playlist_id'] ) :    
                        
                        ?>
                        <div class="relative h-0 p-0 overflow-hidden mb-6" style="padding-top: 56.25%">

                            <iframe class="w-full h-full absolute inset-0 lazyload" id="player" frameborder="0" allowfullscreen="1" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" title="YouTube video player" width="640" height="360" src="https://www.youtube.com/embed/<?php 
                                if( $about_the_material['youtube_playlist_id'] ) :

                                    echo '?list=' . $about_the_material['youtube_playlist_id'] .'&amp;listType=playlist';
                                else :

                                    echo $about_the_material['youtube_id'] .'/?';

                                endif;
                            ?>&amp;wmode=opaque&amp;rel=0&amp;enablejsapi=1"></iframe>
                            
                        </div>
                        <?php 
                            else :

                        ?>
                            <?php 
                                if ( get_field('material_thumbnail') ) :
                                  
                            ?>
                        <div class="relative h-0 p-0 overflow-hidden" style="padding-top: 56.25%">
                            <img alt="<?php the_title() ?> thumbnail graphic" class="lazyload w-full h-full absolute inset-0 object-cover" data-src="<?php echo get_field('material_thumbnail')['url']; ?>">
                        
                        </div>
                        <?php 
                                    if ( get_field('material_thumbnail')['caption'] ) :
                            
                        ?>
                        <div class="mt-2">
                            <p class="font-museo-500 text-grey-600">
                                <?php echo get_field('material_thumbnail')['caption']; ?>
                            </p>
                        </div>
                        <?php 
                                    endif;
                                endif; 
                        ?>
                        <?php
                            endif;
                        ?>
                        
                    </div>
                </div>
            </div>
        </div>
       
    </div>
</section>

<?php 
    endif;
?>

<?php 
    if( have_rows('material_properties_tables') ):
?>
<section class="pb-20">
    <div class="container">
        <div class="flex justify-center">
            <div class="w-full lg:w-11/12">
                
                <div class="text-center mb-6">
                    <h2 class="text-grey-700 font-museo-700 text-20 md:text-29">Material Properties</h2>
                </div>
                
                 <?php 
                    $i = 0;
                    while( have_rows('material_properties_tables') ) : 
                        the_row();
                ?>
                <div class="mb-6 last:mb-0">
                <?php 
                        if( get_sub_field('material_properties_title') ) :
                ?>
                    <div class="mb-2">
                        <p class="text-grey-600 font-museo-500">
                            <?php the_sub_field('material_properties_title'); ?>
                        </p>
                    </div>

                <?php 
                        endif;
                ?>
                    <div class="flex flex-wrap md:flex-no-wrap ">
                <?php

                        while( have_rows('material_properties_table') ) :
                            the_row();
                            capabilities_table('material_properties_column_title','material_properties_column_cells','material_properties_column_cell');
                
                        
                        endwhile;
                ?>
                    </div>
                </div>
               
                <?php
                    endwhile;
                ?>
               
            </div>
        </div>
       
    </div>
</section>

<?php 
    endif;
?>


<?php 

     $material_finish = get_field('material_finish_paragraphs');

    if ( $material_finish ) :
        
    
?>

<section class="pb-20">
    <div class="container">
        <div class="text-center mb-6">
            <h2 class="text-grey-700 font-museo-700 text-20 md:text-29">Material Finish</h2>
        </div>
        <div class="flex justify-center">
            <div class="w-11/12 lg:w-7/12">
                <div class="font-museo-500 text-grey-600 material-finish">
                    <?php echo $material_finish; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php 
    endif;
?>
 <?php 
    if( have_rows('design_recomendations_table') || get_field('design_recommendations') ) :
?>
<section class="pb-20">
    <div class="container">
        <div class="text-center">
            <h2 class="text-grey-700 font-museo-700 text-20 md:text-29">Design Recommendations</h2>
        </div>
     
        <div class="flex justify-center mb-6">
            <div class="w-full lg:w-11/12">
            
                <div class="py-10">
                  
                    <div class="flex flex-wrap md:flex-no-wrap">
                         <?php 

                            while( have_rows('design_recomendations_table') ) : 
                                    the_row();
                                    capabilities_table('design_recomendations_table_column_title', 'design_recomendations_table_column_value', 'design_recomendations_table_column_cell' ); 
                            
                            endwhile;
                        ?>
                    </div>
                </div>
         
            </div>
        </div>
       
        <div class="flex justify-center">
            <div class="w-11/12 lg:w-7/12">
                <div class="design-considerations post-content capabilities box-check box-check-dark">
                    <?php the_field('design_recommendations'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
 <?php 
 
    endif;  

    resource_center_cpt();

    $related_args = array(
        'posts_per_page' => 2,
        'post_type' => $GLOBALS['resource_post_types'],
        'post__not_in' => array( get_the_id() ),
        'post_parent' => 0,
        'tax_query' => array(
            array (
                'taxonomy' => $processes[0]->taxonomy,
                'field' => 'slug',
                'terms' => $processes[0]->slug,
            )
        ),
    );
    
    // resources_module() function located in mu-plugins/related-resources-module.php
    resources_module( $related_args );

    endwhile;
endif;

get_footer();
?>