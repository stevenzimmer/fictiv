<?php 
/*  Template Name: Process 
*/ 
get_header();

if ( have_posts() ) : 

    while ( have_posts() ) : 
        the_post();
        $processes = get_the_terms( get_the_id(), 'fictiv_manufacturing_process' );
        $page_type = get_the_terms( get_the_id(), 'fictiv_page_type' );

$hero_arr = array(
    'img' => get_the_post_thumbnail_url(),
    'label' => $page_type[0]->name,
    'title' => $processes[0]->name . ' Service',
    'para' => get_field('capabilities_hero_paragraph'),
    'btn' => get_field('capabilities_hero_cta_button')
);

capabilities_hero( $hero_arr );
        
?>

<?php 
    if( have_rows('processes_advantage') ) :
?>
<section class="py-20">
    <div class="container">
        <div class="text-center mb-6">
            <h2 class="text-20 md:text-29 text-grey-700 font-museo-700">Fictiv <?php echo $processes[0]->name; ?> Advantages</h2>
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
                        
                        <div class="h-full">
                            <img class="mx-auto h-full" src="<?php the_sub_field('process_icon'); ?>">
                        </div>
                        
                    </div>
                    <?php 
                        endif;
                    ?>
                    <div class="mb-4">
                        <p class="font-museo-700 text-grey-700"><?php the_sub_field('process_title'); ?></p>
                    </div>
                    <div>
                        <p class="font-museo-500 text-grey-600">
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
            <h2 class="text-20 md:text-29 text-grey-700 font-museo-700"><?php echo $processes[0]->name; ?> Processes</h2>
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
                        <div class="mb-2 h-12">
                            <p class="font-museo-700 text-grey-700">
                                <?php 
                                    the_title();
                                ?>
                            </p>
                        </div>
                        
                        <div class="mb-4 h-18">
                            <p class="font-museo-500 text-grey-600 max-lines max-lines-3">
                                <?php 
                                    echo get_the_excerpt();
                                ?>
                            </p>
                        </div>
                        <div>
                            <p class="text-teal-light font-museo-700 group-hover:text-teal-dark">Learn more</p>
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
            <h2 class="text-20 md:text-29 text-grey-700 font-museo-700"><?php echo $processes[0]->name; ?> Materials</h2>
        </div>

               
        <div class="flex justify-center mb-4 flex-wrap">
            <?php 
                
                $i = 0;     
                while ( $cap_materials->have_posts() ) :
                    $cap_materials->the_post();
                
            ?>
            <div data-material="<?php echo $i; ?>" class="mx-1 border border-grey-200 hover:border-teal-light py-1 px-3 rounded select-none cursor-pointer group material-btn mb-2 text-center  <?php if( $i === 0 ) :
                
                echo 'active';

            endif; ?>">
                <p class="text-14 md:text-16 font-museo-700 text-grey-600 group-hover:text-teal-light whitespace-no-wrap"><?php the_title(); ?></p>
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
                <div class="flex flex-wrap flex-col-reverse lg:flex-row border border-grey-200">
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
                                
                            <div class="mb-4 post-content">
                                <?php 
                                    the_excerpt();
                                ?>  
                            </div>
                            <?php 
                                endif; 

                                if ( have_rows('at_a_glance_materials' ) ) :
                                
                            ?>
                            <div>
                                <?php 
                                    $j = 0;
                                    while( have_rows('at_a_glance_materials' ) ) :
                                        the_row();
                                ?>
                                <div class=" flex flex-wrap mb-4">
                                    
                                    <span class="text-grey-700 font-museo-700 block w-full md:w-1/3">
                                         <?php 
                                            the_sub_field('column_title');
                                        ?>:
                                    </span>
                                   <?php 
                                        
                                    ?>
                                    <div class="w-full md:w-2/3 text-grey-600 font-museo-500">
                                    <?php


                                    $k = 0;
                                    $cells_count = count( get_sub_field('column_cells' ) );

                                    while( have_rows('column_cells' ) ) :
                                        the_row();
                                        if ( $j === 0 ||  $cells_count < 2 ) :

echo get_sub_field('column_cell'); 
                                        
                                        else :
                                
echo '<span class="font-museo-700 text-grey-700">(' . get_field('at_a_glance_materials' )[0]['column_cells'][$k]['column_cell'] . ')</span> ' . get_sub_field('column_cell'); 

                                        endif;

                                        echo '<br>';
                                    $k++;
                                    endwhile;
                                ?>
                                    </div>
                                    
                                
                                </div>
                                <?php
                                    $j++;
                                    endwhile;
                                ?>
                            </div>
                            <?php 
                                endif;
                            ?>
                            <div>
                                <a class="text-teal-light font-museo-700 hover:text-teal-dark" href="<?php the_permalink(); ?>">Learn more</a>
                            </div>
                           
                        </div>
                    </div>
                    <div class="w-full lg:w-2/3">
                        <div class="relative h-64 lg:h-full">
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
</section>

<?php 
    endif;

    if ( $processes[0]->slug === 'cnc-machining' ) :

        $cap_finish_args = array(
            'posts_per_page' => -1,
            'post_type' => array('cpt_cap_finish'),
            'orderby' => 'title',
            'order' => 'ASC'
        );

        
        $cap_finishes = new WP_Query( $cap_finish_args );
       
        if ( $cap_finishes->have_posts() ) :
?>
<section class="py-20">
    <div class="container">
        <div class="text-center mb-6">
            <h2 class="text-20 md:text-29 text-grey-700 font-museo-700">CNC Surface Finishing Options</h2>
        </div>

               
        <div class="flex justify-center mb-4 flex-wrap">
            <?php 
                
                $i = 0;     
                while ( $cap_finishes->have_posts() ) :
                    $cap_finishes->the_post();
                
            ?>
            <div data-finish="<?php echo $i; ?>" class="mx-1 border border-grey-200 hover:border-teal-light py-1 px-3 rounded select-none cursor-pointer group finish-btn mb-2 text-center <?php if( $i === 0 ) :
                
                echo 'active';

            endif; ?>">
                <p class="text-14 md:text-16 font-museo-700 text-grey-600 group-hover:text-teal-light md:whitespace-no-wrap"><?php the_title(); ?></p>
            </div>
            <?php 

                $i++;
                endwhile;
                wp_reset_postdata();
            ?>
        </div>
      
        <div class="finish-content-wrapper">
            <?php 

                $i = 0;     
                while ( $cap_finishes->have_posts() ) :
                    $cap_finishes->the_post();

                    $materials = get_field('materials_section');

            ?>
            <div data-finish="<?php echo $i; ?>" class="finish-content-item <?php if( $i !== 0 ) :
                
                echo 'hidden';

            endif; ?>">
                <div class="flex flex-wrap flex-col-reverse lg:flex-row border border-grey-200">
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
                                
                            <div class="mb-4 post-content">
                                <?php 
                                    the_excerpt();
                                ?>  
                            </div>
                            <?php 
                                endif; 

                                if ( have_rows('at_a_glance_materials' ) ) :
                                
                            ?>
                            <div>
                                <?php 
                                    $j = 0;
                                    while( have_rows('at_a_glance_materials' ) ) :
                                        the_row();

                                ?>
                                <div class=" flex mb-4">
                                    
                                    <span class="text-grey-700 font-museo-700 block w-1/3">
                                        
                                         <?php 
                                            the_sub_field('column_title');
                                        ?>:
                                    </span>
                                   <?php 
                                        
                                    ?>
                                    <div class="w-2/3 text-grey-600 font-museo-500">
                                    <?php


                                    $k = 0;
                                    $cells_count = count( get_sub_field('column_cells' ) );

                                    while( have_rows('column_cells' ) ) :
                                        the_row();

                                        if ( $j === 0 ||  $cells_count < 2 ) :

                echo get_sub_field('column_cell'); 
                                        
                                        else :
                                
echo '<span class="font-museo-700 text-grey-700">(' . get_field('at_a_glance_materials' )[0]['column_cells'][$k]['column_cell'] . ')</span> ' . get_sub_field('column_cell'); 

                                        endif;

                                        echo '<br>';
                                    $k++;
                                    endwhile;
                                ?>
                                    </div>
                            
                                </div>
                                <?php
                                    $j++;
                                    endwhile;
                                ?>
                                <div class=" flex mb-4">
                                    
                                    <span class="text-grey-700 font-museo-700 block w-1/3">
                                        Applicable materials:
                                    </span>
                                    <div class="w-2/3 text-grey-600 font-museo-500">
                                        <?php 
                                        
                                        
                                            foreach ( $materials as $k => $material_id ) :
                                          
                                        ?>
                                        <span class="">
                                            <?php 
                                                echo get_the_title( $material_id ); 
                                                if ( ($k + 1) !== count( $materials ) ) :

                                                    echo ', ';
                                                
                                                endif;
                                            ?>
                                                
                                        </span>
                                              
                                        <?php 
                                            endforeach;
                                        ?>

                                    </div>
                                </div>
                            </div>
                            <?php 
                                endif;
                            ?>
                            <div>
                                <a class="text-teal-light font-museo-700 hover:text-teal-dark" href="<?php the_permalink(); ?>">Learn more</a>
                            </div>
                           
                        </div>
                    </div>
                    <div class="w-full lg:w-2/3">
                        <div class="relative h-64 lg:h-full">
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
</section>

<?php 
        endif;
    endif;
?>
<?php 

  $table = get_field( 'machining_tolerance_table' );

    if ( !empty( $table ) ) :
?>
<section class="py-20">
    <div class="container">
        <div class="flex justify-center">
            <div class="w-full md:w-11/12 lg:w-10/12">
                <div class="text-center mb-6">
                    <h2 class="text-20 md:text-29 text-grey-700 font-museo-700">Precision Machining Tolerance</h2>
                    <p class="md:text-20 text-grey-600 font-museo-500">
                        With a drawing, Fictiv can produce parts with tolerance as low as +/- 0.0002 in. Without a drawing, all parts are produced to our ISO 2768 medium standard.
                    </p>
                </div>
                
                <div class="flex justify-center mb-12">
                    
                    <table border="0" class=" border border-grey-100 table-auto w-full" cellpadding="0" cellspacing="0" valign="top">
                        <?php 
                            if( !empty( $table['header'] ) ) :
                        ?>
                        <thead>
                            <tr class="bg-grey-100 ">
                        <?php 
                                foreach ($table['header'] as $i => $th ) :
                        ?>
                                <th valign="top" class="max-w-2xl text-left text-grey-700 font-museo-900 p-2">
                                    <?php echo $th['c']; ?>
                                </th>
                        <?php
                                endforeach;
                        ?>
                            </tr>
                        </thead>
                        <?php 
                            endif;
                        ?>
                        <tbody>
                            <?php 
                                
                                foreach ( $table['body'] as $i => $tr ) :
                            
                            ?>
                            <tr class="border-b border-grey-100">
                            <?php 
                                
                                    foreach ( $tr as $j => $td ) :
                                
                            ?>
                                <td valign="top" class="max-w-md p-2 border-r border-grey-100 <?php 
                                    if( $j === 0 ) :

                                        echo 'font-museo-900 text-grey-700 ';
                                    
                                    endif;
                                ?>">
                                    <?php 
                                        echo $td['c'];
                                    ?>
                                </td>
                            <?php
                                    endforeach;
                            ?>
                            </tr>
                            <?php
                                endforeach;
                            ?>
                        </tbody>
        
                    </table>
                </div>
                <div class="text-center">
                    <a target="_blank" href="https://docsend.com/view/iaa5nip" class="btn btn-primary text-14 md:text-16">download full tolerance chart</a>
                </div>
            </div>

        </div>
        
    </div>
</section>
<?php 
    endif;
?>
<?php
    if ( get_field('case_study_quote') ) :
    
?>

<section class="py-20">
    <div class="container">
        <div class="text-center mb-6">
            <h2 class="text-20 md:text-29 text-grey-700 font-museo-700"><?php echo $processes[0]->name; ?> Case Study</h2>
        </div>
    </div>
    <div class="bg-grey-100  ">
        <div class="max-w-1600 mx-auto relative pb-10 lg:py-10">
            
        
            <div class="relative lg:absolute w-full h-full inset-0 mb-6 lg:mb-0">
                <div class="flex lg:justify-end h-full">
                    <div class="w-full lg:w-1/2 ">
                        <div class="flex flex-wrap h-full ">
                            <?php 
                                if( have_rows('case_study_graphics') ) :

                                    $i = 1;
                                    while( have_rows('case_study_graphics') ) : 
                                        the_row();
                               
                            ?>
                            <div class="relative h-64 lg:h-half w-1/2">
                                <img class="absolute inset-0 object-cover w-full h-full lazyload" alt="<?php echo get_sub_field('case_study_graphics_image')['alt']; ?>" data-src="<?php echo get_sub_field('case_study_graphics_image')['link']; ?>">
                                
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
                             <p class="text-20 md:text-29 text-blue-dark font-museo-500 leading-tight">
                                <?php the_field('case_study_quote') ?>
                            </p>
                        </div>
                        <div class="mb-6">
                            <p class=" text-grey-700 font-museo-700">
                                <?php the_field('case_study_name') ?>
                            </p>
                            <p class=" text-grey-600 font-museo-500">
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
                                <p class="text-blue-dark font-museo-700">
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
            <p class=" font-museo-700 text-grey-400 uppercase mb-4">Fictiv <?php echo $processes[0]->name; ?> Advantages</p>
            <h2 class="xl text-grey-700">From Prototype to Production</h2>
        </div>
        <div class="flex flex-wrap lg:flex-no-wrap -mx-6 justify-center lg:justify-start">
            <?php 
                while( have_rows('fpp_columns') ) : 
                    the_row();
            ?>
            <div class="w-11/12 lg:w-auto px-6 lg:flex-1">
                <div class="border-t border-grey-200 p-8">
                     <div class="font-museo-500 box-check-dark text-grey-600 fpp-col">
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
            <p class=" font-museo-700 text-grey-400 uppercase mb-4">Technology Overview</p>
            <h2 class="text-20 md:text-29 text-grey-700 font-museo-700">What is <?php echo $processes[0]->name; ?></h2>
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
                        <div class="h-full relative group">
                            <a href="<?php the_permalink(); ?>" class="absolute w-full h-full inset-0 z-50"></a>
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
                                <h3 class="font-museo-700">
                                    <a class="group-hover:text-grey-600" href="<?php the_permalink(); ?>">
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