<?php 
get_header();
// print_r( get_queried_object() );
// include( get_template_directory() . '/inc/post-taxonomies.php');

if ( have_posts() ) : 

    while ( have_posts() ) : 
        the_post();
        $processes = get_the_terms( get_the_id(), 'fictiv_manufacturing_process' );
        
?>
<header class="bg-black py-10 capabilities-hero relative">
    <?php 
        if ( has_post_thumbnail() ) :
    ?>
    <div class="absolute w-full h-full bg-cover bg-center inset-0 lazyload" data-bg="url(<?php the_post_thumbnail_url() ?>)"></div>
    <?php 
        endif;
    ?>
    <div class="container">
        <div class="flex justify-center">
            <div class="w-11/12">
                <div class="flex flex-wrap justify-center lg:justify-start">
                    <div class="w-full lg:w-5/12 xl:w-1/2 mb-6 lg:mb-0">
                        <div>
                            <p class="text-grey-400 font-museo-700 text-14 uppercase" >
                                <?php 
                                // print_r( $processes[0]->name );
                                    echo $processes[0]->name;
                                ?> services
                            </p>
                            
                        </div>
                        <div class="text-white ">
                            <h1><?php 
                                the_title()
                            ?></h1>

                        </div>
                        <?php 
                            if( get_field('capabilities_hero_paragraph') ) : 
                        ?>
                        <div class="text-white capabilities-hero-paragraph box-check-white mb-4 mt-2">
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
                    <div class="w-1/2 lg:w-7/12 xl:w-1/2">
                        <div class="flex justify-end">
                            <div class="lg:w-7/12">
                                <?php 
                                    if( has_post_thumbnail() ) :
                                ?>
                                <div>
                                    <img class="lazyload" data-src="<?php the_post_thumbnail_url(); ?>">
                                </div>
                                <?php 
                                    endif;
                                ?>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</header>

<?php 
    if( have_rows('at_a_glance_table') ):
?>
<section class="py-20">
    <div class="container">
        <div class="flex justify-center">
            <div class="w-full lg:w-11/12">
            
                <div class="py-10">
                    <div class="text-center mb-6">
                        <h2 class="font-museo-700 text-20">At a glance</h2>
                    </div>
                    <div class="flex flex-wrap md:flex-no-wrap ">
                         <?php 
                            $i = 0;
                            while( have_rows('at_a_glance_table') ) : 
                                    the_row();
                        ?>
                        <div class="w-full flex md:block">
                            <div class="w-1/2 md:w-full p-4  bg-grey-100">
                                <p class="text-14 text-grey-700 font-museo-700">
                                    <?php the_sub_field('materials_at_a_glance_column_title'); ?>
                                </p>
                            </div>
                            <div class="w-1/2 md:w-full p-4 border-b border-grey-100 h-full border-r <?php 

                                if( $i === 0 ) :
                                
                                    echo 'border-l border-t md:border-t-0';
                                
                                endif;

                            ?>">
                                <p class="font-museo-500 text-14 text-grey-600">
                                    <?php the_sub_field('materials_at_a_glance_column_value'); ?>
                                </p>
                                
                            </div>
                        </div>
                        
                        <?php 
                            $i++;
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
<section class="py-20">
    <div class="container">
        <div class="flex justify-center">
            <div class="w-full lg:w-11/12">
                <div class="text-center mb-6">
                    <h2 class="font-museo-700 text-20">About the material</h2>
                </div>

                <div class="flex -mx-6 flex-wrap justify-center lg:justify-start">
                    <div class="w-11/12 lg:w-1/2 px-6 mb-6 lg:mb-0 post-content capabilities">
                        <div class="font-museo-500 text-grey-600 text-14">
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
                            <p class="font-museo-500 text-14 text-grey-600">
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
<section class="py-20">
    <div class="container">
        <div class="flex justify-center">
            <div class="w-full lg:w-11/12">
                
                <div class="text-center mb-6">
                    <h2 class="font-museo-700 text-20">Material Properties</h2>
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

                        $i = 0;
                        while( have_rows('material_properties_table') ) :
                            the_row();
                ?>
                    
                        <div class="w-full flex md:block ">
                            <div class="w-1/2 md:w-full p-4 bg-grey-100 h-20">
                                <p class="text-14 text-grey-700 font-museo-700">
                                    <?php the_sub_field('material_properties_column_title'); ?>
                                </p>
                            </div>
                            <div class="w-1/2 md:w-full p-4 border-b border-grey-100 lg:h-24 border-r <?php 

                                if( $i === 0 ) :
                                    echo 'border-l border-t md:border-t-0';
                                endif;
                            ?>">
                                <p class="font-museo-500 text-14 text-grey-600">
                                    <?php the_sub_field('material_properties_column_value'); ?>
                                </p>
                                
                            </div>
                        </div>
                    
                    
                <?php 
                        $i++;
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

<section class="py-20">
    <div class="container">
        <div class="text-center mb-6">
            <h2 class="font-museo-700 text-20">Material Finish</h2>
        </div>
        <div class="flex justify-center">
            <div class="w-11/12 lg:w-7/12">
                <div class="text-14 font-museo-500 text-grey-600 text-center material-finish">
                    <?php echo $material_finish; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php 
    endif;
?>

<section class="py-20">
    <div class="container">
        <div class="text-center">
            <h2 class="font-museo-700 text-20">Design Recommendations</h2>
        </div>
       <?php 
            if( have_rows('design_recomendations_table') ) :
        ?>
        <div class="flex justify-center mb-6">
            <div class="w-full lg:w-11/12">
            
                <div class="py-10">
                  
                    <div class="flex flex-wrap md:flex-no-wrap items-stretch">
                         <?php 
                            $i = 0;
                            while( have_rows('design_recomendations_table') ) : 
                                    the_row();
                        ?>
                        <div class="w-full flex md:block h-full">
                            <div class="w-1/2 md:w-full p-4 bg-grey-100 lg:h-20">
                                <p class="text-14 text-grey-700 font-museo-700">
                                    <?php the_sub_field('design_recomendations_table_column_title'); ?>
                                </p>
                            </div>
                            <?php 
                                if( have_rows('design_recomendations_table_column_value') ) :

                                    $j = 0;

                                    while( have_rows('design_recomendations_table_column_value') ) :
                                        the_row();
                            ?>

                            <div class=" w-1/2 md:w-full p-4 border-b border-grey-100 lg:h-20 border-r border-l border-t md:border-t-0' <?php 

                            

                            ?>">
                                <p class="font-museo-500 text-14 text-grey-600">
                                    <?php the_sub_field('design_recomendations_table_column_cell'); ?>
                                </p>
                                
                            </div>
                            <?php 
                                    $j++;
                                    
                                    endwhile;
                                
                                endif;
                            ?>
                        </div>
                        
                        <?php 
                            
                            $i++;
                            
                            endwhile;
                        ?>
                    </div>
                </div>
         
            </div>
        </div>
        <?php 
            endif;
        ?>
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
<section class="py-10">
    <div class="container">
        <div class="flex justify-center">
            <div class="lg:w-11/12">
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

    endwhile;
endif;
get_footer();
?>