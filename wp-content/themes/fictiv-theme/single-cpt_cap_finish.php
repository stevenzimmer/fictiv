<?php 
get_header();

if ( have_posts() ) : 

    while ( have_posts() ) : 
        the_post();
        $processes = get_the_terms( get_the_id(), 'fictiv_manufacturing_process' );
        $materials = get_field('materials_section');

        $hero_arr = array(
            'img' => get_the_post_thumbnail_url(),
            'label' => 'Finishing Services',
            'title' => get_the_title(),
            'para' => get_field('capabilities_hero_paragraph'),
            'btn' => get_field('capabilities_hero_cta_button')
        );

        capabilities_hero( $hero_arr );
 
    if( get_field('youtube_id') ) :
?>
<section class="pt-20">
    <div class="container">
        <div class="flex justify-center">
            <div class="w-full lg:w-10/12">
                <div class="relative h-0 p-0 overflow-hidden" style="padding-top: 56.25%">
                    <iframe class="w-full h-full absolute inset-0 lazyload" data-src="https://www.youtube.com/embed/<?php the_field('youtube_id'); ?>?rel=0&enablejsapi=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<?php 
    endif;

    if( have_rows('finish_module') ):

        while( have_rows('finish_module') ) : 

            the_row();
?>
<section class="py-10">
    <div class="container">
        <div class="flex justify-center">
            <div class="w-full lg:w-11/12">
                <?php 
                    if( get_sub_field('finish_module_title') ) :
                ?>
                 <div class="text-center py-10 border-b border-grey-200">
                    <div>
                        <h2 class="text-grey-700 font-museo-700 text-20 md:text-29"><?php the_sub_field('finish_module_title'); ?></h2>
                    </div>
                    
                </div>
                <?php 
                    endif;

                    if( have_rows('finish_module_at_a_glance') ):
                ?>


                <div class="py-10">
                    <div class="text-center mb-6">
                        <h2 class="text-grey-700 font-museo-700 text-20 md:text-29">At a glance</h2>
                    </div>
                    <div class="flex flex-wrap md:flex-no-wrap ">
                         <?php 
                            
                            $i = 0;
                            while( have_rows('finish_module_at_a_glance') ) : 
                                the_row();

                                    if ( $i === 0 && !empty( $materials ) ) :
                        ?>
                        <div class="w-full flex flex-row md:flex-col capabilities-table">
                            <div class="w-full p-4 bg-grey-100 flex md:flex-0 md:h-16 ">
                                <p class="text-14 text-grey-700 font-museo-700">
                                    Applicable Materials                
                                </p>
                            </div>
                            
                            <div class="w-full p-4 border-b border-grey-100 border-r border-l border-t md:border-t-0 md:flex-1 max-w-md">
                                <div class=" post-content capabilities-table-cell">

                            <?php 
                              
                                foreach ( $materials as $j => $material_id ) :
                              
                            ?>
                            <a href="<?php echo get_the_permalink( $material_id ); ?>"><?php echo get_the_title( $material_id ); ?></a><?php 
                                if ( ($j + 1) !== count( $materials ) ) :

                                    echo ', ';
                                
                                endif;
                            ?>
                                  
                            <?php 
                                endforeach;
                                
                            ?>
                                </div>
                                
                            </div>
                        </div>
                        <?php
                                    endif;
                                    
                                    capabilities_table('finish_module_at_a_glance_column_title','finish_module_at_a_glance_column_cells','finish_module_at_a_glance_column_cell');
                
                            
                            $i++;
                            endwhile;
                        ?>
                    </div>
                </div>

                <?php 
                    endif;
                ?>

                <?php 
                    if( have_rows('color_options') ):
                ?>


                <div class="py-10">
                    <div class="text-center mb-6">
                        <h2 class="text-grey-700 font-museo-700 text-20 md:text-29">Color Options</h2>
                    </div>
                    <div class="flex -mx-1 flex-wrap md:flex-no-wrap">
                         <?php 
                            while( have_rows('color_options') ) : 
                                    the_row();

                        ?>
                        <div class="w-full px-1 mb-6 md:mb-0">
                            <div>
                                <div class="mb-2">
                                    <img class="lazyload w-full" alt="<?php the_title(); ?> <?php echo get_sub_field('image')['caption']; ?>" data-src="<?php echo get_sub_field('image')['url'] ?>">
                                </div>
                                <div class="px-4 md:px-0">
                                    <p class="text-grey-600 font-museo-500"><?php echo get_sub_field('image')['caption']; ?></p>
                                </div>
                            </div>
                            
                        </div>
                        
                        <?php 
                            endwhile;
                        ?>
                    </div>
                </div>

                <?php 
                    endif;
              
                    if( get_sub_field('about_the_process') ):
                ?>

                <div class="py-10">
                    <div class="text-center mb-6">
                        <h2 class="text-grey-700 font-museo-700 text-20 md:text-29">About the Process</h2>
                    </div>
                    <div class="flex justify-center">
                        <div class="w-11/12 lg:w-7/12">
                            <div class="post-content">
                                <?php 
                                    the_sub_field('about_the_process');
                                ?>

                            </div>
                        </div>
                    </div>
                </div>

                <?php 
                    endif;
            
                    if( get_sub_field('design_considerations') ):
                ?>

                <div class="py-10">
                    <div class="text-center mb-6">
                        <h2 class="text-grey-700 font-museo-700 text-20 md:text-29">Design considerations</h2>
                    </div>
                    <div class="flex justify-center">
                        <div class="w-11/12 lg:w-7/12">
                            <div class="font-museo-500 box-check box-check-dark text-grey-600">
                                <?php 
                                    the_sub_field('design_considerations');
                                ?>

                            </div>
                        </div>
                    </div>
                </div>

                <?php 
                    endif;
                ?>
            </div>
        </div>
       
    </div>
</section>

<?php 
        endwhile;
    
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

    resources_module( $related_args );

    endwhile;
endif;
get_footer();
?>