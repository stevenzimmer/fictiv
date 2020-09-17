<?php 
	get_header();
?>
<header class="pt-32">
	<div class="container">
		<div class="flex justify-center mb-12">
			<div class="lg:w-6/12">
				<div class="text-center">
					<h3 class="text-blue-dark text-20 mb-4 font-slab-500 uppercase">Fictiv Partners</h3>
					<p class="text-18">
						Meet a few of the trusted partners that power our network
					</p>
				</div>
			</div>
		</div>
		<div class="flex justify-center pb-20">
			<div class="w-11/12 lg:w-10/12">
				<div class="flex">
				<?php 

					$args = array(
                        'post_type' => array('cpt_partners'),
                        'posts_per_page' => -1,
                       
                        
                    );

                    $archive = new WP_Query( $args );

                    if ( $archive->have_posts() ) : 
               
                    	while( $archive->have_posts() ) :
                    	
                    		$archive->the_post();
                ?>
                	<div class="lg:w-1/3 px-6">
                		<div class="flex justify-center">
                			<div class="lg:w-11/12">
                				<div class="relative group hover:shadow-lg shadow rounded overflow-hidden transition-shadow duration-200">
                		
		                    		<a href="<?php the_permalink(); ?>" class="absolute w-full h-full inset-0 z-50"></a>
		                    		<div class="bg-white text-center h-24 flex items-center justify-center">
		                    			<div class="lg:px-12">
		                    				<h3 class="text-blue-light font-museo-500 text-20 group-hover:text-red-dark">
			                    				<?php
								                 	the_title();
								                ?>
			                    			</h3>
		                    			</div>
		                    			
		                    		</div>
		                    		<div class="relative h-0" style="padding-bottom: 56.25%">
		                    			
		                    			<img class="block absolute w-full h-full object-cover inset-0 lazyload" data-src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?> thumbnail">
		                    			
		                    			<div class="absolute w-40 bottom-0 bg-teal-dark py-2 text-center right-0">
		                    				<p class="uppercase text-white text-12 font-museo-500">learn more</p>
		                    			</div>
		                    		</div>
	                   			</div>
                			</div>
                		</div>
                		
                	</div>
                    <?php
                        	endwhile;
                        	wp_reset_postdata();
                    ?>
                  
                    <?php 

                        endif;

					?>
				</div>
			</div>
		</div>
	</div>
</header>

<?php 
	get_footer();
?>
