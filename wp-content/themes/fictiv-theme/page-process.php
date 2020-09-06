<?php 
/*  Template Name: Process 
*/ 
get_header();

if ( have_posts() ) : 

    while ( have_posts() ) : 
        the_post();
        $processes = get_the_terms( get_the_id(), 'fictiv_manufacturing_process' );
        $page_type = get_the_terms( get_the_id(), 'fictiv_page_type' );

        
?>
<header class="py-12 capabilities-hero relative">
    <?php 
        if ( has_post_thumbnail() ) :
    ?>
    <div class="absolute w-full h-full inset-0">
        <div class="flex lg:justify-end h-full">
            <div class="w-full lg:w-9/12">
                <div class="h-full bg-cover bg-center inset-0 lazyload" data-bg="url(<?php the_post_thumbnail_url() ?>)"></div>
            </div>
        </div>
        
    </div>
    
    <?php 
        endif;
    ?>
    <div class="bg-white bg-opacity-75 md:bg-transparent bg-gradient-to-r from-white to-transparent absolute w-full inset-0 h-full"></div>

    <div class="container relative">
        <div class="flex justify-center">
            <div class="w-11/12">
                <div class="flex flex-wrap justify-center lg:justify-start">
                    <div class="w-full lg:w-5/12 xl:w-7/12 mb-6 lg:mb-0">
                        <div>
                            <p class="text-grey-400 font-museo-700 text-14 uppercase" >
                                <?php 
                                    echo $page_type[0]->name;
                                ?>
                            </p>
                            
                        </div>
                        <div >
                            <h1 class="text-black"><?php 
                               echo $processes[0]->name;
                            ?> Services</h1>

                        </div>
                        <?php 
                            if( get_field('capabilities_hero_paragraph') ) : 
                        ?>
                        <div class="text-grey-600 capabilities-hero-paragraph box-check-dark mb-4 mt-2">
                            <?php 
                                the_field('capabilities_hero_paragraph');
                            ?>
                        </div>

                        <?php 
                            endif;

                            $hero_cta_btn = get_field('capabilities_hero_cta_button');

                            if ( $hero_cta_btn ) :
                                
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
    if( have_rows('processes_advantage') ) :
?>
<section class="py-20">
    <div class="container">
        <div class="text-center mb-6">
            <h2 class="text-29 text-black font-museo-500">Fictiv <?php echo $processes[0]->name; ?> Advantages</h2>
        </div>
        <div class="border-grey-200 border flex flex-wrap justify-center lg:justify-start">
            <?php 
     
                while( have_rows('processes_advantage') ) : 
                    the_row();
                   
            ?>
            <div class="w-full lg:w-1/3 border-b lg:border-b-0 lg:border-r border-grey-200 last:border-transparent">
                <div class="px-12 pt-8 pb-12 text-center">
                    <?php 
                        if( get_sub_field('process_icon') ) :
                    ?>
                    <div class="h-20 flex justify-center items-center mb-4">
                        
                        <div class="">
                            <img class="mx-auto" src="<?php the_sub_field('process_icon'); ?>">
                        </div>
                        
                    </div>
                    <?php 
                        endif;
                    ?>
                    <div class="mb-4">
                        <p class="font-museo-700 text-14 text-grey-700"><?php the_sub_field('process_title'); ?></p>
                    </div>
                    <div>
                        <p class="font-museo-500 text-14 text-grey-600">
                            <?php the_sub_field('process_paragraph'); ?>
                        </p>
                    </div>
                </div>
            </div>
            <?php 
                endwhile;
                reset_rows();
            ?>
        </div>
    </div>
</section>
<?php 
    endif;

    $cap_process_args = array(
        'posts_per_page' => -1,
        'post_type' => array('page'),
        'orderby' => 'title',
        'order' => 'DESC',
        'tax_query' => array(
            'relation' => 'AND',
            array(
                'taxonomy' => 'fictiv_manufacturing_process',
                'field' => 'slug',
                'terms' => $processes[0]->slug
            ),
            array(
                'taxonomy' => 'fictiv_page_type',
                'field' => 'slug',
                'terms' => 'subprocess'
            )
        )     
    );

    $cap_processes = new WP_Query( $cap_process_args );

    if ( $cap_processes->have_posts() ) :
?>
<section class="py-20">
    <div class="container">
        <div class="text-center mb-6">
            <h2 class="text-29 text-black font-museo-500"><?php echo $processes[0]->name; ?> Processes</h2>
        </div>
 
        <div class="flex flex-wrap justify-center -mx-2 relative items-stretch">

            <?php 

                while ( $cap_processes->have_posts() ) :
                    $cap_processes->the_post();

            ?>
            <div class="w-11/12 sm:w-1/2 md:w-1/3 lg:w-1/5 block-link px-2 h-full mb-4">
                <div class="relative group border border-grey-200">
                    <a href="<?php the_permalink(); ?>" class="w-full h-full absolute inset-0"></a>
                    <div class="relative h-0" style="padding-bottom: 65.25%">

                        <img alt="<?php the_title() ?> thumbnail" class="lazyload w-full absolute  inset-0 h-full object-cover" data-src="<?php echo get_field('material_thumbnail')['sizes']['medium_large']; ?>">
                    </div>
                    <div class="p-4">
                        <div class="mb-2 h-8">
                            <p class="font-museo-700 text-14 text-grey-700 uppercase">
                                <?php 
                                    the_title();
                                ?>
                            </p>
                        </div>
                        
                        <div class="mb-2 h-20">
                            <p class="font-museo-500 text-14 text-grey-600">
                                <?php 
                                    echo get_the_excerpt();
                                ?>
                            </p>
                        </div>
                        <div>
                            <p class="text-teal-light text-12 font-museo-500 group-hover:text-red-dark">Learn more</p>
                        </div>
                    </div>
                </div>
            </div>

            <?php 
                endwhile;
                wp_reset_postdata();
            ?>

        </div>

    </div>
</section>

<?php 
    endif;

    $cap_mats_args = array(
        'posts_per_page' => -1,
        'post_type' => array('cpt_cap_material'),
        'orderby' => 'title',
        'order' => 'ASC',
        'tax_query' => array(
            array(
                'taxonomy' => 'fictiv_manufacturing_process',
                'field' => 'slug',
                'terms' => $processes[0]->slug
            )
        )     
    );

    
    $cap_materials = new WP_Query( $cap_mats_args );
   
    if ( $cap_materials->have_posts() ) :
?>
<section class="py-20">
    <div class="container">
        <div class="text-center mb-6">
            <h2 class="text-29 text-black font-museo-500"><?php echo $processes[0]->name; ?> Materials</h2>
        </div>

        <div class="flex justify-center">
            <div class="w-full lg:w-11/12">
               

                <div class="flex justify-center mb-4 flex-wrap">
                    <?php 
                        
                        $i = 0;     
                        while ( $cap_materials->have_posts() ) :
                            $cap_materials->the_post();
                        
                    ?>
                    <div data-material="<?php echo $i; ?>" class="mx-1 border border-grey-200 hover:border-teal-light py-1 px-3 rounded select-none cursor-pointer group material-btn mb-2 <?php if( $i === 0 ) :
                        
                        echo 'active';

                    endif; ?>">
                        <p class="text-12 font-museo-700 text-grey-600 group-hover:text-teal-light whitespace-no-wrap"><?php the_title(); ?></p>
                    </div>
                    <?php 

                        $i++;
                        endwhile;
                        wp_reset_postdata();
                    ?>
                </div>
              
                <div class="material-content-wrapper">
                    <?php 

                        $i = 0;     
                        while ( $cap_materials->have_posts() ) :
                            $cap_materials->the_post();
                    ?>
                    <div data-material="<?php echo $i; ?>" class="material-content-item <?php if( $i !== 0 ) :
                        
                        echo 'hidden';

                    endif; ?>">
                        <div class="flex flex-wrap border border-grey-200">
                            <div class="w-full lg:w-1/3">
                                <div class="p-4">
                                    <div class="mb-2">
                                        <p class="text-20 font-museo-700 text-grey-700">
                                            <?php the_title(); ?>
                                        </p>
                                    </div>

                                    <?php 
                                       

                                        if ( get_the_excerpt() ) : 
                                    ?>
                                        
                                    <div class="mb-2 post-content">
                                        <?php 
                                            the_excerpt();
                                        ?>  
                                    </div>
                                    <?php 
                                        endif; 
                                    ?>
                                    <div>
                                        <a class="text-12 text-teal-light font-museo-500" href="<?php the_permalink(); ?>">Learn more</a>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="w-full lg:w-2/3">
                                <div class="relative h-0" style="padding-bottom: 65%">
                                     <img class="lazyload absolute w-full h-full object-cover inset-0" alt="<?php the_title(); ?> thumbnail"  data-src="<?php echo get_field('material_thumbnail')['url']; ?>">
                                </div>
                               
                            </div>
                        </div>
                    </div>

                    <?php 
                        $i++;
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
    if ( get_field('case_study_quote') ) :
    
?>
<section class="py-20">
    <div class="container">
        <div class="text-center mb-6">
            <h2 class="text-29 text-black font-museo-500"><?php echo $processes[0]->name; ?> Case Study</h2>
        </div>
    </div>
    <div class="bg-grey-100 max-w-1600 mx-auto relative pb-10 lg:py-10">
        <div class="relative lg:absolute w-full h-full inset-0 mb-6 lg:mb-0">
            <div class="flex lg:justify-end h-full">
                <div class="w-full lg:w-1/2 ">
                    <div class="flex flex-wrap flex-row lg:flex-col h-full lg:max-w-screen-sm w-full mx-auto">
                        <?php 
                            if( have_rows('case_study_graphics') ) :

                                $i = 1;
                                while( have_rows('case_study_graphics') ) : 
                                    the_row();
                           
                        ?>
                        <div class="md:mx-auto lg:h-half w-1/2 lg:w-auto" style="">
                            <img alt="<?php echo get_sub_field('case_study_graphics_image')['alt']; ?>" class="lazyload lg:h-full" data-src="<?php echo get_sub_field('case_study_graphics_image')['link']; ?>">
                            
                        </div>
                        <?php 
                                $i++;
                                endwhile;
                                reset_rows();
                            endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container relative ">
            <div class="flex justify-center lg:justify-start">
                
           
                <div class="w-11/12 lg:w-5/12">
                    <div class="mb-4">
                         <p class="text-29 text-blue-dark font-museo-500 leading-tight">
                            <?php the_field('case_study_quote') ?>
                        </p>
                    </div>
                    <div class="mb-6">
                        <p class="text-14 text-grey-700 font-museo-700">
                            <?php the_field('case_study_name') ?>
                        </p>
                        <p class="text-14 text-grey-600 font-museo-500">
                            <?php the_field('case_study_title') ?>
                        </p>
                    </div>
                    <?php

                        if( have_rows('case_study_details') ) :

                            while( have_rows('case_study_details') ) : 
                                the_row();
                       
                    ?>
                    <div class="flex items-center mb-4">
                        <div class="mr-2">
                            <!-- Icon -->
                            <img class="lazyload" width="30" alt="<?php the_sub_field('case_study_details_text'); ?> icon" data-src="<?php the_sub_field('case_study_details_icon'); ?>">
                        </div>
                        <div>
                            <p class="text-grey-600 font-museo-500 text-16">
                                <?php the_sub_field('case_study_details_text'); ?>
                            </p>
                        </div>
                    </div>
                    <?php 
                            endwhile;
                            reset_rows();
                        endif;

                        if ( get_field('case_study_cta') ) :
                        
                    ?>

                    <div>
                        <a href="<?php 
                            echo get_field('case_study_cta')['url'];
                        ?>" class="btn btn-primary"><?php 
                            echo get_field('case_study_cta')['title'];
                        ?></a>
                    </div>

                    <?php 
                        endif;
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
    if( have_rows('fpp_columns') ) :
?>
<section class="py-20">
    <div class="container">
        <div class="text-center mb-6">
            <p class="text-14 font-museo-700 text-grey-400 uppercase mb-4">Fictiv <?php echo $processes[0]->name; ?> Advantages</p>
            <h2 class="text-29 text-black font-museo-500">From Prototype to Production</h2>
        </div>
        <div class="flex flex-wrap lg:flex-no-wrap -mx-6 justify-center lg:justify-start">
            <?php 
                while( have_rows('fpp_columns') ) : 
                    the_row();
            ?>
            <div class="w-11/12 lg:w-auto px-6 lg:flex-1">
                <div class="border-t border-grey-200 p-8">
                     <div class="font-museo-500 box-check-dark text-grey-600 text-14 fpp-col">
                         <?php the_sub_field('fpp_column'); ?>
                    </div>
                </div>
               
            </div>
            <?php 
                endwhile;
                reset_rows();
            ?>
            
        </div>
    </div>
</section>
<?php
    endif;

    if ( get_field('oqp_text') ) :
    
?>
<section class="relative py-20 lg:py-40 max-w-1600 mx-auto">
    <div class="absolute w-full h-full inset-0 bg-cover bg-center lazyload" data-bg="url(<?php echo get_field('oqp_background_image')['url']; ?>)"></div>
    <div class="flex h-full lg:justify-end relative">
        <div class=" w-full lg:w-6/12">
            <div class="w-full bg-black bg-opacity-75 p-8 oqp-section font-museo-500 text-white">
                <?php 
                    the_field('oqp_text');
                ?> 
            </div>
            
        </div>
    </div>
</section>
<?php 
    
    endif;
?>
<section class="py-20">
    <div class="container">
        <div class="text-center mb-6">
            <p class="text-14 font-museo-700 text-grey-400 uppercase mb-4">Technology Overview</p>
            <h2 class="text-29 text-black font-museo-500">What is <?php echo $processes[0]->name; ?></h2>
        </div>
        <div class="flex justify-center">
            <div class="w-11/12 lg:w-8/12">
                <div class="post-content">
                    <?php echo get_the_content(); ?>
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
<section class="py-20">
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
    endwhile;
    wp_reset_postdata();
endif;
get_footer();
?>