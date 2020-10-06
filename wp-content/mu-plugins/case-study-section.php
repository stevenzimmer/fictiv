<?php 
	function case_study_section() {

    if ( get_field('case_study_quote') ) :
    
?>

<section class="bg-grey-100">

    <div class=" max-w-1600 mx-auto relative pb-10 lg:py-10">
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
                            <p class="text-blue-dark font-museo-700 text-16">
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

	}
?>