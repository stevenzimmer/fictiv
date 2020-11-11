<?php 
/*  Template Name: Sub Process 
*/ 
// Template used for child pages of page-process template pages

get_header();

if ( have_posts() ) : 

    while ( have_posts() ) : 
        the_post();
        $processes = get_the_terms( get_the_id(), 'fictiv_manufacturing_process' );
        $materials = get_field('materials_section');

$hero_arr = array(
    'img' => get_the_post_thumbnail_url(),
    'label' => $processes[0]->name . ' Services',
    'title' => get_the_title(),
    'para' => get_field('capabilities_hero_paragraph'),
    'btn' => get_field('capabilities_hero_cta_button')
);
// capabilities_hero() function located in mu-plugins/capabilities-hero.php
capabilities_hero( $hero_arr );

    if( have_rows('at_a_glance_materials') ) :
?>
<section class="pt-20">
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
                            if ( !empty( $materials ) ) :

                        ?>
                        <div class="w-full flex flex-row md:flex-col capabilities-table">
                            <div class="w-full p-4 bg-grey-100 flex md:flex-0 md:h-16 ">
                                <p class="text-14 text-grey-700 font-museo-700">
                                    Materials                
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

        <div class="text-center py-10 border-b border-grey-200">
            <div>
                <h2 class="text-grey-700 font-museo-500 text-20 md:text-29">Machines</h2>
            </div>
            
        </div>

        <div class="flex justify-center py-10">
            <div class="w-11/12 lg:w-7/12">
                <div class="post-content">
                    <?php 
                        the_field('machines_paragraph_text');
                    ?>
                </div>
            </div>
        </div>
        <div class="flex justify-center">
            <div class="w-full lg:w-11/12">
            
            <?php 
                while( have_rows('machines') ) :
                    the_row();
            ?>
                <div class="mb-12 last:mb-0">
                    
                    <?php 
                        if( get_sub_field('machines_title') ) :
                    ?>
                    <div class="text-center mb-6">
                        <h2 class="text-grey-700 font-museo-500 text-20 md:text-29">
                            <?php the_sub_field('machines_title'); ?>
                        </h2>
                    </div>
                    <?php 
                        endif;
                        if( have_rows('machines_checks') ) :
                    ?>
                    <div class="flex justify-center mb-6 box-check box-check-dark">
                        <ul class="flex flex-wrap">
                            <?php 
                                while( have_rows('machines_checks') ) :
                                    the_row();
                            ?>
                            <li class="w-full md:w-auto font-museo-500 text-grey-600 mx-8">
                                <?php the_sub_field('machines_checks_text'); ?>
                            </li>
                            <?php
                                endwhile;
                            ?>
                        </ul>
                    </div>

                    <?php 
                        endif;
                        $table = get_sub_field( 'machines_table' );

                        if ( ! empty( $table ) ) :
                    ?>
                    <div class="flex justify-center">
                        
                        <table border="0" class=" border border-grey-100 table-auto w-full" cellpadding="0" cellspacing="0" valign="top">
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
                    <?php 
                        endif;
                    ?>
                </div>
            <?php
                       
                    endif;
                endwhile;
            ?>
            </div>
        </div>
    </div>
</section>
<?php
    endif;

   
    

    if ( $materials ) :
    
?>
<section class="py-10">
    <div class="container">

        <div class="text-center mb-6">
            <div>
                <h2 class="text-grey-700 font-museo-700 text-20 md:text-29"><?php echo $processes[0]->name; ?> Materials</h2>
            </div>
        </div>
        <?php 
            if ( count( $materials ) > 1 ) :
        ?>
        <div class="flex justify-center mb-4 flex-wrap">
            <?php 
                         
                
                foreach ( $materials as $i => $material_id ) :
                
            ?>
            <div data-material="<?php echo $i; ?>" class="mx-1 border border-grey-200 hover:border-teal-light py-1 px-3 rounded select-none cursor-pointer group material-btn mb-2 <?php if( $i === 0 ) :
                
                echo 'active';

            endif; ?>">
                <p class="text-16 font-museo-700 text-grey-600 group-hover:text-teal-light whitespace-no-wrap"><?php echo get_the_title( $material_id ); ?></p>
            </div>
            <?php 
                endforeach;
                
            ?>
        </div>
        <?php 
            endif;
        ?>
        <div class="material-content-wrapper">
            <?php 
                foreach ( $materials as $i => $material_id ) :
            ?>
            <div data-material="<?php echo $i; ?>" class="material-content-item <?php if( $i !== 0 ) :
                
                echo 'hidden';

            endif; ?>">
                <div class="flex flex-wrap flex-col-reverse lg:flex-row border border-grey-200">
                    <div class="w-full lg:w-1/3">
                        <div class="p-4">
                            <div class="mb-2">
                                <p class="text-20 font-museo-700 text-grey-700">
                                    <?php echo get_the_title( $material_id ); ?>
                                </p>
                            </div>

                            <?php 
                               

                                if ( get_the_excerpt() ) : 
                            ?>
                                
                            <div class="mb-4 post-content">
                                <?php 
                                    echo get_the_excerpt( $material_id );
                                ?>  
                            </div>
                            <?php 
                                endif;

                                if ( have_rows('at_a_glance_materials', $material_id ) ) :
                                

                                    $i = 0;
                                    while( have_rows('at_a_glance_materials', $material_id ) ) :
                                        the_row();
                                        if ( get_sub_field('display_in_card') ) :


                            ?>
                            <div class=" flex mb-4">
                                
                                <div class="text-grey-700 font-museo-700 w-1/3">
                                     <?php 
                                        the_sub_field('column_title');
                                    ?>:
                                </div>
                               <?php 
                                    
                                ?>
                                <div class="w-2/3 text-grey-600 font-museo-500">
                                <?php
                                    $j = 0;
                                    $cells_count = count( get_sub_field('column_cells', $material_id ) );

                                    while( have_rows('column_cells', $material_id ) ) :
                                        the_row();
                                        if ( $i === 0 ||  $cells_count < 2 ) :

echo get_sub_field('column_cell'); 
                                        
                                        else :
                                
echo '<span class="font-museo-700 text-grey-700">(' . get_field('at_a_glance_materials', $material_id )[0]['column_cells'][$j]['column_cell'] . ')</span> ' . get_sub_field('column_cell'); 

                                        endif;

                                        echo '<br>';
                                    $j++;
                                    endwhile;
                                ?>
                                </div>
                                
                            
                            </div>
                            <?php
                                $i++;
                            endif;
                                endwhile;
                            ?>
                        
                            <?php 
                                endif;
                            ?>
                            <div>
                                <a class="text-teal-light hover:text-teal-dark font-museo-700" href="<?php echo get_the_permalink( $material_id ); ?>">Learn more</a>
                            </div>
                           
                        </div>
                    </div>
                    <div class="w-full lg:w-2/3">

                        <?php 
                        
                            if ( !empty( get_field('material_thumbnail', $material_id ) ) ) :
                            
                        ?>
                        <img class="lazyload w-full loaded object-cover" alt="<?php echo get_the_title( $material_id ); ?> thumbnail"  data-src="<?php echo get_field('material_thumbnail', $material_id )['url']; ?>">
                        
                        <?php 
                            else :
                        ?>
                        <div class="bg-grey-100 h-full"></div>
                        <?php
                            endif;
                         ?>
                   
                    </div>
                </div>
            </div>

            <?php 
                endforeach;
            ?>
        </div>
        <?php 
            if ( $processes[0]->slug === 'cnc-machining' ) :
            
        ?>
        <div class="text-center mt-12">
            <a target="_blank" class="btn btn-primary" href="https://docsend.com/view/epw522h">Download CNC Material Datasheet</a>
        </div>

        <?php 
            endif;
        ?>
           
    </div>
</section>

<?php 
    endif;
?>

<?php 
    if( have_rows('design_recomendations_table') || get_field('design_recommendations')  ) :
?>
<section class="py-20">
    <div class="container">
        <div class="text-center mb-6">
            <h2 class="text-grey-700 font-museo-700 text-20 md:text-29">Design Recommendations</h2>
        </div>
        <?php 
            if( have_rows('design_recomendations_table') ) :
        ?>
        <div class="flex justify-center mb-6">
            <div class="w-full lg:w-11/12">
                  
                <div class="flex flex-wrap md:flex-no-wrap">
                     <?php 

                        while( have_rows('design_recomendations_table') ) : 
                                the_row();

                                capabilities_table('design_recomendations_table_column_title','design_recomendations_table_column_value','design_recomendations_table_column_cell');
                        
                        endwhile;
                    ?>
                </div>
             
            </div>
        </div>
        <?php 
            endif;
        ?>
        <div class="flex justify-center">
            <div class="w-11/12 lg:w-7/12">
                <div class="post-content box-check box-check-dark post-content">
                    <?php the_field('design_recommendations'); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php 
    endif;

    $about_the_process = get_field('about_this_item');

    if ( $about_the_process['paragraph'] ) :
        
    
?>
<section class="py-20">
    <div class="container">

           
            <div class="text-center mb-6">
                <h2 class="text-grey-700 font-museo-700 text-20 md:text-29">About the Process</h2>
            </div>
            <?php 
                if ( $about_the_process['youtube_id'] || get_field('material_thumbnail') ) :
            ?>
            <div class="flex justify-center">
                <div class="w-11/12 lg:w-11/12">
                    <div class="flex -mx-6 flex-wrap justify-center lg:justify-start">
                        <div class="w-11/12 lg:w-1/2 px-6 mb-6 lg:mb-0 post-content capabilities">
                            <div class="post-content">
                                <?php echo $about_the_process['paragraph']; ?>
                            </div>
                        </div>

                        <div class="w-full lg:w-1/2 px-6">
                            <?php 
                                if ( $about_the_process['youtube_id'] ) :
                                
                            ?>
                            <div class="relative h-0 p-0 overflow-hidden mb-6" style="padding-top: 56.25%">
                                
                                <iframe class="w-full h-full absolute inset-0 lazyload" data-src="https://www.youtube.com/embed/<?php echo $about_the_process['youtube_id']; ?>?rel=0&enablejsapi=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                                
                            </div>
                            <?php 
                                else :

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
                     
                                endif;
                            ?>
                            
                        </div>
                    </div>
                </div>
            </div>
            <?php
                else :

            ?>
            <div class="flex justify-center">
                <div class="w-11/12 lg:w-7/12">
                    <div class="post-content box-check box-check-dark post-content">
                        <?php echo $about_the_process['paragraph']; ?>
                    </div>
                </div>
            </div>
            <?php
                endif;
            ?>

       
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

    resources_module( $related_args );

    endwhile;
endif;
get_footer();
?>