<?php 
get_header();

if ( have_posts() ) : 

    while ( have_posts() ) : 
        the_post();
        $processes = get_the_terms( get_the_id(), 'fictiv_manufacturing_process' );
        
?>
<header class="bg-grey-200 py-10 capabilities-hero relative">
    <?php 
        if ( has_post_thumbnail() ) :
    ?>
    <div class="absolute w-full h-full bg-cover bg-center inset-0 lazyload" data-bg="url(<?php the_post_thumbnail_url() ?>)"></div>
    <?php 
        endif;
    ?>
    <div class="container relative">
        <div class="flex justify-center">
            <div class="w-11/12">
                <div class="flex flex-wrap justify-center lg:justify-start">
                    <div class="w-full lg:w-5/12 xl:w-1/2 mb-6 lg:mb-0">
                        <div>
                            <p class="text-grey-400 font-museo-700 text-14 uppercase" >
                                <?php 
                                    echo $processes[0]->name;
                                ?> services
                            </p>
                            
                        </div>
                        <div class="text-grey-700">
                            <h1 class="font-museo-700 text-grey-700"><?php 
                                the_title()
                            ?></h1>

                        </div>
                        <?php 
                            if( get_field('capabilities_hero_paragraph') ) : 
                        ?>
                        <div class="text-grey-600 capabilities-hero-paragraph mb-4 mt-2 box-check-white">
                            <?php 
                                the_field('capabilities_hero_paragraph');
                            ?>
                        </div>

                        <?php 
                            endif;

                            $hero_cta_btn = get_field('capabilities_hero_cta_button');

                            if ( $hero_cta_btn['text'] ) :
                                
                        ?>
                        <div>
                            <a class="btn btn-primary" href="<?php echo $hero_cta_btn['link']; ?>"><?php echo $hero_cta_btn['text']; ?></a>  
                        </div>
                        <?php 
                            endif;
                        ?>
                    </div>
                  
                </div>
                
            </div>
        </div>
    </div>
</header>
<?php 
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
                  
                            while( have_rows('finish_module_at_a_glance') ) : 
                                    the_row();
                                    capabilities_table('finish_module_at_a_glance_column_title','finish_module_at_a_glance_column_cells','finish_module_at_a_glance_column_cell');
                
                  
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
                                    <p class="text-grey-600 text-14 font-museo-500"><?php echo get_sub_field('image')['caption']; ?></p>
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
                            <div class="font-museo-500 text-14 box-check box-check-dark text-grey-600">
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

$related_posts = new WP_Query( $related_args );

if ( $related_posts->have_posts() ) : 
?>
<section class="pb-10">
    <div class="container">
        <div class="flex justify-center">
            <div class="w-full lg:w-11/12">
                <div class="flex justify-center">
                    <div class="w-11/12 lg:w-full">
                        <div class="mb-2">
                            <h3 class="uppercase text-16 font-museo-500 text-grey-600">
                                Related resources
                            </h3>
                        </div>
                    </div>
                </div>
                
                <div class="flex flex-wrap -mx-2">
                    <?php 

                        while ( $related_posts->have_posts() ) : 
                            $related_posts->the_post();
                    ?>
                    <div class="w-full lg:w-1/2 px-2 mb-4 lg:mb-0">
                        <div class="h-full">
                            <?php 
                                if( has_post_thumbnail() ) :
                            ?>
                            <div class="relative h-0" style="padding-bottom: 40.25%">
                                <img class="absolute w-full h-full inset-0 object-cover" src="<?php the_post_thumbnail_url(); ?>">
                            </div>
                            <?php 
                                else :
                            ?>
                            <div class="w-full h-64 bg-grey-100">
                                <div class="flex justify-center items-center h-full">
                                    Please upload Hero graphic to this post
                                </div>
                            </div>
                            <?php 
                                endif;
                            ?>
                            <div class="p-4">
                                <h3 class="text-14 font-museo-700">
                                    <a class="hover:text-grey-600" href="<?php the_permalink(); ?>">
                                        <?php 
                                            the_title();
                                        ?>
                                    </a>
                                    
                                </h3>
                            </div>
                        </div>
                        
                    </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                        
                    ?>
                    
                </div>
            </div>
        </div>
    </div>
        
</section>
<?php 
    endif;
?>
<?php 
    // include( get_template_directory() . '/inc/related-posts.php');
    endwhile;
endif;
get_footer();
?>