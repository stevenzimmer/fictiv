<?php 
    get_header();
    if ( have_posts() ) : 

        while ( have_posts() ) : 
            the_post();
?>

<header class="py-32">
    <div class="container">
        <div class="flex justify-center">
            <div class="lg:w-10/12">
                <div class="flex flex-wrap justify-center lg:justify-start -mx-6">
                    <div class="w-11/12 lg:w-1/2 px-6 mb-8 lg:mb-0">
                        <div>
                            <a href="/partners/" class="text-red-dark block mb-4 hover:text-blue-dark">← View All Partners</a>
                            <h1  class="font-museo-500 text-blue-dark mb-4"><?php 
                                the_title();
                            ?></h1>
                            <div class="mb-4">
                                <p class="text-20 italic text-grey-light">
                                    San Francisco Bay Area, California
                                </p>
                            </div>
                            <div class="partner-description">
                                <?php 
                                    the_content();
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="w-11/12 lg:w-1/2 px-6">
                        <div class="">
                            <img class="shadow-lg" src="<?php
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
    <!-- <div class="absolute w-full h-full inset-0 bg-cover bg-center" style="background-image: url(https://uploads-ssl.webflow.com/5881ca284ac19f852fa47c23/5b27ad181d6cec16522685c8_Block-Texture-1.png)"></div> -->
    <div class="container">
        <div class="flex justify-center">
            <div class="w-11/12 lg:w-10/12">
                <div class="shadow-lg">
            
                    <div class="flex">
                        <div class="w-8/12">
                            <div class=" bg-white">

                                <div class="py-12">
                                    <iframe class="inline-block w-full" src="https://free.timeanddate.com/clock/i6en544n/n224/fn14/fs20/tct/pct/ftb/th2/ts1" frameborder="0" width="157" height="26" allowTransparency="true"></iframe>
                                    <div class="weather-embed w-embed w-script">
                                        <a class="weatherwidget-io" href="https://forecast7.com/en/37d77n122d42/san-francisco/?unit=us" data-label_1="SAN FRANCISCO" data-label_2="Weather" data-mode="Current" data-theme="pure">
                                            SAN FRANCISCO Weather
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
                        <div class="w-4/12">
                            <div class="p-4 lg:p-8 h-full partner-capabilities-list bg-dark">
                                <?php 
                                    if( have_rows('partners_certifications') ):
                                ?>
                                <h3 class="">Quality Certifications:</h3>
                                <ul role="list" class="">
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
                                <?php 
                                    endif;
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-stretch">
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
                        <div class="w-1/3 border-r border-grey-light last:border-transparent">
                            <div class="bg-white p-4 lg:p-8 h-full">
                                <div class="text-blue-dark font-slab-500 text-14 uppercase"><?php echo $stat['title']; ?></div>
                                <div class="text-48 font-museo-900 text-blue-dark"><?php echo $stat['value']; ?></div>
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
            <div class="w-11/12 lg:w-10/12">
                <div class="flex -mx-2 flex-wrap justify-center lg:justify-start">
                    <?php 
                        // loop through the rows of data
                        while ( have_rows('partners_images_gallery') ) : 
                            the_row();

                    ?>
                    <div class="w-full lg:w-1/2 px-2 mb-4">
                        <img src="<?php the_sub_field('partners_gallery_image'); ?>">
                    </div>

                    <?php 
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
                <div class="flex -mx-2 flex-wrap items-stretch justify-center lg:justify-start ">
                    <?php 
                        // loop through the rows of data

                        $cols = 12 / count( get_field('partner_capabilities') ) ;
                        while ( have_rows('partner_capabilities') ) : 
                            the_row();

                    ?>
                    <div class=" w-11/12 lg:w-<?php echo $cols; ?>/12 px-2 mb-4 lg:mb-0">
                        <div class="border border-grey-light p-6 partner-capabilities-list h-full bg-light ">
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
    <div class="container mb-12">
        <div class="text-center">
            <h2 class="section-title small">Take a look inside</h2>
            <h2 class="section-title large">Partner Facility</h2>
        </div>
    </div>
    <div class="relative">
        <div class="container">
            <div class="flex justify-center">
                <div class="w-11/12 md:w-10/12 ">
                    <div class="partner-facility-carousel mb-4">
                        <?php 
                            $dots = 0;
                            // loop through the rows of data
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
        <div class="absolute left-0 top-0  w-20 h-full " >
            <div class="flex items-center h-full">
                <div class="h-40 bg-grey-400 w-full hover:bg-grey-600 transition-colors duration-200" id="partner-prev">
                    <div class="flex w-full justify-center items-center h-full">
                        <div>
                             <p class="text-white text-48">&#8249;</p>
                        </div>
                       
                    </div>
                </div>
            </div>
            
        </div>

        <div class="absolute right-0 top-0 w-20 h-full " >
            <div class="flex items-center h-full">
                <div class="h-40 bg-grey-400 w-full hover:bg-grey-600 transition-colors duration-200" id="partner-next">

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
            
    <script
            src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js?site=5881ca284ac19f852fa47c23"
            type="text/javascript"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"
        ></script>
    <script src="https://uploads-ssl.webflow.com/5881ca284ac19f852fa47c23/js/webflow.078567c83.js" type="text/javascript"></script>
<!-- [if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
     
<?php
        endwhile;
        wp_reset_postdata();
    endif; 
    get_footer();
?>
