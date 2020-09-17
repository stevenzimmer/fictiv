<?php 
    get_header();
    if ( have_posts() ) : 

        while ( have_posts() ) : 
            the_post();
?>

<header class="py-20">
    <div class="container">
        <div class="flex justify-center">
            <div class="w-full lg:w-11/12">
                <div class="flex flex-wrap justify-center lg:justify-start -mx-6">
                    <div class="w-11/12 lg:w-1/2 px-6 mb-6 lg:mb-0">
                        <div class="lg:py-12">
                            <a href="/our-network" class="text-red-dark block mb-4 hover:text-blue-dark font-museo-500 text-14">← View All Partners</a>
                            <h1 class="text-grey-700 font-museo-700 leading-none text-29 md:text-36 mb-6"><?php 
                                the_title();
                            ?></h1>
                            <div class="mb-4">
                                <p class="text-20 text-grey-600 italic">
                                    <?php 
                                        the_field('partners_location');
                                    ?>
                                </p>
                            </div>
                            <div class="partner-description font-museo-500 text-grey-600">
                                <?php 
                                    the_content();
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/2 px-6">
                        <div class=" h-full relative">
                            <img class="lg:absolute inset-0 w-full h-full shadow-lg lazyload object-cover" data-src="<?php
                                the_post_thumbnail_url();
                            ?>">    
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</header>

<section class="bg-grey-100 relative py-20">
    <div class="container">
        <div class="flex justify-center">
            <div class="w-11/12 lg:w-10/12">
                <div class="shadow-lg bg-white">
            
                    <div class="flex flex-wrap border-b border-grey-200">
                        <div class="w-full md:w-8/12">
                            <div class=" bg-white">

                                <div class="py-8">
                                    <iframe class="inline-block w-full" src="<?php the_field('clock_widget_link'); ?>" frameborder="0" width="157" height="26" allowTransparency="true"></iframe>
                                    <div class="weather-embed w-embed w-script">
                                        <a class="weatherwidget-io" href="<?php the_field('weather_widget_link'); ?>" data-label_1="<?php 
                                                the_field('partners_location');
                                            ?>" data-label_2="Weather" data-mode="Current" data-theme="pure">
                                           <?php 
                                                the_field('partners_location');
                                            ?> Weather
                                        </a>
                                        <script>
                                            !(function (d, s, id) {
                                                var js,
                                                    fjs = d.getElementsByTagName(s)[0];
                                                if (!d.getElementById(id)) {
                                                    js = d.createElement(s);
                                                    js.id = id;
                                                    js.src = "https://weatherwidget.io/js/widget.min.js";
                                                    fjs.parentNode.insertBefore(js, fjs);
                                                }
                                            })(document, "script", "weatherwidget-io-js");
                                        </script>
                                    </div>
                                </div>
                        
                            </div>
                        </div>
                        <div class="w-full md:w-4/12">
                            <div class="p-4 lg:p-8 h-full partner-capabilities-list bg-blue-dark">
                                <?php 
                                    if( have_rows('partners_certifications') ):
                                ?>
                                <div class="h-full flex items-center">
                                    <div>
                                        <div class="mb-4">
                                            <h3 class="text-white font-slab-500">Quality Certifications:</h3>
                                        </div>
                                        
                                        <div class="text-white box-check-white">
                                            <ul role="list" class="pl-8">
                                                <?php 
                                                    // loop through the rows of data
                                                    while ( have_rows('partners_certifications') ) : 
                                                        the_row();

                                                ?>
                                                <li class="checklist-item"><?php the_sub_field('partners_certification_list'); ?></li>

                                                <?php 
                                                    endwhile;
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <?php 
                                    endif;
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-stretch flex-wrap">
                        <?php 
                            $partner_stats = array(
                                array(
                                    'title' => 'ESTABLISHED',
                                    'value' => get_field('partners_established')   
                                ),

                                array(
                                    'title' => '# OF EMPLOYEES',
                                    'value' => get_field('partners_employees')   
                                ),

                                array(
                                    'title' => '# OF Machines',
                                    'value' => get_field('partners_machines')   
                                ),
                            );

                            foreach ($partner_stats as $i => $stat ) :
             
                            
                        ?>
                        <div class="w-1/2 md:w-1/3 border-r border-b border-grey-200 ">
                            <div class="p-4 lg:p-8 h-full">
                                <div class="text-blue-dark font-slab-500 text-14 uppercase"><?php echo $stat['title']; ?></div>
                                <div class="text-36 md:text-48 font-museo-900 text-blue-dark"><?php echo $stat['value']; ?></div>
                            </div>
                        </div>
                        <?php 
                            endforeach;
                        ?>
                       
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>

<section class="py-20">
    <div class="container">
        <?php 
            if( have_rows('partners_images_gallery') ):
        ?>
        <div class="flex justify-center">
            <div class="w-full md:w-11/12 lg:w-10/12">
                <div class="flex -mx-2 flex-wrap justify-center lg:justify-start">
                    <?php 

                        $i = 0;
                        while ( have_rows('partners_images_gallery') ) : 
                            the_row();

                    ?>
                    <div class="relative w-full h-48 mb-4 <?php 

                        switch( $i ) :
                            case 2;
                                echo 'md:w-7/12';
                                break;

                            case 3;
                                echo 'md:w-5/12';
                                break;

                            default:
                                echo 'md:w-1/2';

                        endswitch;
                    ?>">
                        <img class="lazyload absolute w-full h-full inset-0 object-cover px-2" data-src="<?php the_sub_field('partners_gallery_image'); ?>">
                    </div>

                    <?php 
                        $i++;
                        endwhile;
                    ?>
                </div>
                <?php 
                    endif;
                ?>
            </div>
        </div>
        
        <?php 
            if( have_rows('partner_capabilities') ):
        ?>
        <div class="flex justify-center">
            <div class="w-11/12 lg:w-10/12">
                <div class="flex md:-mx-2 flex-wrap items-stretch justify-center md:justify-start ">
                    <?php 

                        $cols = 12 / count( get_field('partner_capabilities') ) ;
                        while ( have_rows('partner_capabilities') ) : 
                            the_row();

                    ?>
                    <div class="w-11/12 md:w-<?php echo $cols; ?>/12 md:px-2 mb-4 md:mb-0">
                        <div class="border border-grey-200 p-6 partner-capabilities-list h-full box-check-dark bg-light">
                            <?php 
                                the_sub_field('partner_capabilities_list');
                            ?>
                        </div>
                        
                    </div>
                    <?php 
                        endwhile;
                    ?>
                </div>
            </div>
            
        </div>
        <?php 
            endif;
        ?>
    </div>

</section>


<?php 
    if( have_rows('partners_facility_gallery') ):
?>
<section class="bg-grey-100 py-20">
    <div class="container mb-6">
        <div class="text-center">
            <h2 class="text-grey-700 font-museo-700 text-20 md:text-29">
                Take a look inside Partner Facility
            </h2>
        </div>
    </div>
    <div class="relative">
        <div class="container">
            <div class="flex justify-center">
                <div class="w-full md:w-11/12 lg:w-10/12">
                    <div class="partner-facility-carousel mb-4">
                        <?php 
                            $dots = 0;
                            while ( have_rows('partners_facility_gallery') ) : 
                                the_row();
                        ?>
                        <div>
                            <img src="<?php echo get_sub_field('partners_facility_gallery_image')['url'] ?>" alt="<?php echo get_sub_field('partners_facility_gallery_image')['alt']; ?>">
                        </div>
                        <?php 

                            $dots++;
                            endwhile;
                        ?>
                        
                        
                    </div>
                    <div class="flex justify-center">
                        <?php 
                            // echo $dots;
                            for ( $i = 0; $i < $dots; $i++ ) : 
                        ?>
                        <div data-carousel-index="<?php echo $i; ?>" class="w-2 h-2 rounded-full bg-grey-400 mx-2 carousel-dot cursor-pointer <?php 
                            if( $i === 0 ) :

                                echo 'active';
                            
                            endif;
                        ?>"></div>
                        <?php
                            endfor;
                        ?>

                    </div>
                </div>
            </div>
            
        </div>
        <div class="absolute left-0 top-0 w-12 md:w-20 h-full " >
            <div class="flex items-center h-full">
                <div class="h-40 bg-black bg-opacity-50 w-full hover:bg-opacity-75 transition-colors duration-200" id="partner-prev">
                    <div class="flex w-full justify-center items-center h-full">
                        <div>
                             <p class="text-white text-48">&#8249;</p>
                        </div>
                       
                    </div>
                </div>
            </div>
            
        </div>

        <div class="absolute right-0 top-0 w-12 md:w-20 h-full " >
            <div class="flex items-center h-full">
                <div class="h-40 bg-black bg-opacity-50 w-full hover:bg-opacity-75 transition-colors duration-200" id="partner-next">

                    <div class="flex w-full justify-center items-center h-full">
                        <div>
                             <p class="text-white text-48">&#8250;</p>
                        </div>
                       
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
        endwhile;
        wp_reset_postdata();
    endif; 
    get_footer();
?>