<?php 
/*  Template Name: Sub Process 
*/ 
get_header();
// print_r( get_queried_object() );
// include( get_template_directory() . '/inc/post-taxonomies.php');

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
                    <div class="w-full lg:w-5/12 xl:w-7/12 mb-6 lg:mb-0">
                        <div>
                            <p class="text-grey-400 font-museo-700 text-14 uppercase" >
                                <?php 
                                    echo $processes[0]->name;
                                ?> services
                            </p>
                            
                        </div>
                        <div class="text-black mb-2">
                            <h1><?php 
                                the_title()
                            ?></h1>

                        </div>
                        <?php 
                            if( get_field('capabilities_hero_paragraph') ) : 
                        ?>
                        <div class="text-grey-600 capabilities-hero-paragraph box-check-white mb-4">
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
    $ataglance = get_field('at_a_glance');

    if( isset( $ataglance ) ) :
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
                            foreach ( $ataglance as $i => $glance ) :
                                
                        ?>
                        <div class="w-full flex md:block ">
                            <div class="w-1/2 md:w-full p-4  bg-grey-100">
                                <p class="text-14 text-grey-700 font-museo-700">
                                    <?php echo str_replace( '_', ' ', ucfirst( $i ) ); ?>
                                </p>
                            </div>
                            <div class="w-1/2 md:w-full p-4 border-b border-grey-100 h-full border-r <?php 

                                if( $i === 0 ) :
                                    echo 'border-l border-t md:border-t-0';
                                endif;
                            ?>">
                                <p class="font-museo-500 text-14 text-grey-600">
                                    <?php 
                                        if ( gettype( $glance ) !== 'string' ) :
                                        
                                            foreach ( $glance as $j => $material ) :
                                             
                                    ?>

                                    <a class="text-teal-light font-museo-500" href="<?php echo get_permalink( $material->ID ); ?>" ><?php echo $material->post_title; ?></a>,&nbsp;
                                    
                                    <?php
                                            endforeach;

                                        else :
                                            
                                            echo $glance;

                                        endif;

                                    ?>
                                </p>
                                
                            </div>
                        </div>

                        <?php 
                            $i++;
                            endforeach;
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
    if ( have_rows('machines') ) :
?>
<section>
    <div class="container">
        <div class="flex justify-center">
            <div class="w-full lg:w-11/12">
                 <div class="text-center py-10 border-b border-grey-200">
                    <div>
                        <h2 class="text-29 text-black">Machines</h2>
                    </div>
                    
                </div>
                <div class="flex justify-center py-10">
                    <div class="w-11/12 lg:w-8/12">
                        <div class="text-center">
                            <?php 
                                the_field('machines_paragraph_text');
                            ?>
                        </div>
                    </div>
                </div>
                <div>
                    
                    <?php 
                        while( have_rows('machines') ) :
                            the_row();
                    ?>
                    <div class="mb-12 last:mb-0">
                        
                    
                        <div class="text-center mb-6">
                            <h2 class="font-museo-700 text-20">
                                <?php the_sub_field('machines_title') ?>
                            </h2>
                        </div>
                        <?php 
                                if( have_rows('machines_checks') ) :
                        ?>
                        <div class="flex justify-center mb-6 box-check box-check-dark">
                            <ul class="flex flex-wrap">
                                <?php 
                                    while( have_rows('machines_checks') ) :
                                        the_row();
                                ?>
                                <li class="w-full md:w-auto text-14 font-museo-500 text-grey-600 mx-8">
                                    <?php the_sub_field('machines_checks_text'); ?>
                                </li>
                                <?php
                                    endwhile;
                                ?>
                            </ul>
                        </div>

                        <?php 
                                endif;
                        ?>
                        <div class="flex justify-center">
                            
                        
                        <?php

                                $table = get_sub_field( 'machines_table' );

                                if ( ! empty( $table ) ) :
                                    
                        ?>
                            <table border="0" class="text-14 border border-grey-100 table-auto w-full" cellpadding="0" cellspacing="0" valign="top">
                                <?php 
                                    if( !empty( $table['header'] ) ) :
                                ?>
                                <thead>
                                    <tr class="bg-grey-100 ">
                                <?php 
                                        foreach ($table['header'] as $i => $th ) :
                                ?>
                                        <th valign="top" class="max-w-2xl text-left text-teal-light font-museo-900 p-2">
                                            <?php echo $th['c']; ?>
                                        </th>
                                <?php
                                        endforeach;
                                ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        foreach ( $table['body'] as $i => $tr ) :
                                    ?>
                                    <tr class="border-b border-grey-100">
                                    <?php 
                                            foreach ( $tr as $j => $td ) :
                                                // print_r( $td );
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

                                <?php 
                                    endif;
                                ?>
                                
                
                            </table>
                        </div>
                    </div>
                    <?php
                               
                            endif;
                            
                        endwhile;
                    ?>
                </div>
                
            </div>
        </div>
    
    </div>
</section>
<?php
    endif;

    $materials = get_field('materials_section');
    
    if ( $materials ) :
    
?>
<section>
    <div class="container">
        <div class="flex justify-center">
            <div class="w-full lg:w-11/12">
                 <div class="text-center py-10">
                    <div>
                        <h2 class="text-29 text-black"><?php echo $processes[0]->name; ?> Materials</h2>
                    </div>
                </div>
                <div class="flex justify-center mb-6">
                    <?php 
                        
                        foreach ( $materials as $i => $material_id ) :
                        
                    ?>
                    <div data-material="<?php echo $i; ?>" class="mx-2 border border-grey-200 hover:border-teal-light py-1 px-3 rounded select-none cursor-pointer group material-btn <?php if( $i === 0 ) :
                        
                        echo 'active';

                    endif; ?>">
                        <p class="text-12 font-museo-700 text-grey-600 group-hover:text-teal-light"><?php echo get_the_title( $material_id ); ?></p>
                    </div>
                    <?php 
                        endforeach;
                    ?>
                </div>
                <div class="material-content-wrapper">
                    <?php 
                        foreach ( $materials as $i => $material_id ) :
                    ?>
                    <div data-material="<?php echo $i; ?>" class="material-content-item <?php if( $i !== 0 ) :
                        
                        echo 'hidden';

                    endif; ?>">
                        <div class="flex flex-wrap border border-grey-200">
                            <div class="w-full lg:w-1/3">
                                <div class="p-4">
                                    <div class="mb-2">
                                        <p class="text-20 font-museo-700 text-grey-700">
                                            <?php echo get_the_title( $material_id ); ?>
                                        </p>
                                    </div>

                                    <?php 
                                        if ( get_field('about_the_material', $material_id )['paragraph'] ) : 
                                    ?>
                                        
                                    <div class="mb-2">
                                        <p class="text-14 font-museo-500 text-grey-600">
                                            <?php 
                                                echo get_field('about_the_material', $material_id )['paragraph'];
                                            ?>
                                        </p>    
                                    </div>
                                    <?php 
                                        endif; 
                                    ?>
                                    <div>
                                        <a class="text-12 text-teal-light font-museo-500" href="<?php echo get_the_permalink( $material_id ); ?>">Learn more</a>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="w-full lg:w-2/3">
                                <div class="relative h-0" style="padding-bottom: 65%">
                                     <img class="lazyload absolute w-full h-full object-cover inset-0" alt="<?php echo get_the_title( $material_id ); ?> thumbnail"  data-src="<?php echo get_field('material_thumbnail', $material_id )['url']; ?>">
                                </div>
                               
                            </div>
                        </div>
                    </div>

                    <?php 
                        endforeach;
                    ?>
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

     $about_the_process = get_field('about_the_process');

    if ( $about_the_process['paragraph'] ) :
        
    
?>
<section class="py-20">
    <div class="container">
        <div class="flex justify-center">
            <div class="w-full lg:w-11/12">
                <div class="text-center mb-6">
                    <h2 class="font-museo-700 text-20">About the Process</h2>
                </div>

                <div class="flex -mx-6 flex-wrap justify-center lg:justify-start">
                    <div class="w-11/12 lg:w-1/2 px-6 mb-6 lg:mb-0 post-content capabilities">
                        <p class="font-museo-500 text-grey-600 text-14">
                            <?php echo $about_the_process['paragraph']; ?>
                        </p>
                    </div>

                    <div class="w-full lg:w-1/2 px-6">
                        <?php 
                            if ( $about_the_process['youtube_id'] ) :
                            
                        ?>
                        <div class="relative h-0 p-0 overflow-hidden mb-6" style="padding-top: 56.25%">
                            
                            <iframe class="w-full h-full absolute inset-0 lazyload" data-src="https://www.youtube.com/embed/<?php echo $about_the_material['youtube_id']; ?>?rel=0&enablejsapi=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                            
                        </div>
                        <?php 
                            else :

                        ?>
                        <div class="relative h-0 p-0 overflow-hidden mb-2" style="padding-top: 56.25%">
                            <img alt="<?php the_title() ?> thumbnail graphic" class="lazyload w-full h-full absolute inset-0 object-cover" data-src="<?php echo $about_the_process['thumbnail_graphic']['url']; ?>">
                        
                        </div>
                        <div>
                            <p class="font-museo-500 text-14 text-grey-600">
                                <?php echo $about_the_process['thumbnail_graphic']['caption']; ?>
                            </p>
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

    if( have_rows('finish_module') ):
?>

<?php 
        while( have_rows('finish_module') ) : 
            the_row();
?>
<section class="py-10">
    <div class="container">
        <div class="flex justify-center">
            <div class="w-11/12">
                 <div class="text-center py-10 border-b border-grey-200">
                    <div>
                        <h2 class="text-29 text-black"><?php the_sub_field('finish_module_title'); ?></h2>
                    </div>
                    
                </div>
                <?php 
                    if( have_rows('finish_module_at_a_glance') ):
                ?>


                <div class="py-10">
                    <div class="text-center mb-6">
                        <h2 class="font-museo-700 text-20">At a glance</h2>
                    </div>
                    <div class="flex flex-wrap md:flex-no-wrap ">
                         <?php 
                            $i = 0;
                            while( have_rows('finish_module_at_a_glance') ) : 
                                    the_row();
                        ?>
                        <div class="w-full flex md:block">
                            <div class="w-1/2 md:w-full p-4  bg-grey-100">
                                <p class="text-14 text-grey-700 font-museo-700">
                                    <?php the_sub_field('finish_module_at_a_glance_column_title'); ?>
                                </p>
                            </div>
                            <div class="w-1/2 md:w-full p-4 border-b border-grey-100 h-full border-r <?php 

                                if( $i === 0 ) :
                                    echo 'border-l border-t md:border-t-0';
                                endif;
                            ?>">
                                <p class="font-museo-500 text-14 <?php 
                                    if( $i === 0 ) :

                                        echo 'text-teal-light';

                                    else :

                                        echo 'text-grey-600';

                                    endif;
                                ?>">
                                    <?php the_sub_field('finish_module_at_a_glance_column_value'); ?>
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
                    endif;
                ?>

                <?php 
                    if( have_rows('color_options') ):
                ?>


                <div class="py-10">
                    <div class="text-center mb-6">
                        <h2 class="font-museo-700 text-20">Color Options</h2>
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
                                <div>
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
                ?>

                <?php 
                    if( get_sub_field('about_the_process') ):
                ?>


                <div class="py-10">
                    <div class="text-center mb-6">
                        <h2 class="font-museo-700 text-20">About the Process</h2>
                    </div>
                    <div class="flex justify-center">
                        <div class="lg:w-8/12">
                            <div class="font-museo-500 text-14 about-process text-grey-600">
                                <?php 
                                    the_sub_field('about_the_process');
                                ?>

                            </div>
                        </div>
                    </div>
                </div>

                <?php 
                    endif;
                ?>

                <?php 
                    if( get_sub_field('design_considerations') ):
                ?>


                <div class="py-10">
                    <div class="text-center mb-6">
                        <h2 class="font-museo-700 text-20">Design considerations</h2>
                    </div>
                    <div class="flex justify-center">
                        <div class="lg:w-8/12">
                            <div class="font-museo-500 text-14 design-considerations text-grey-600">
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
?>


<?php 

// print_r( $processes );
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
?>
<?php 
    // include( get_template_directory() . '/inc/related-posts.php');
    endwhile;
endif;
get_footer();
?>