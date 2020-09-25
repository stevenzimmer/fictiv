<?php 
get_header();

$response = array();

if ( isset ( $_GET['s'] ) && !empty( $_GET['s'] ) ) :

	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

    $response = json_decode( 
    	wp_remote_retrieve_body( 
    		wp_remote_get( 
    			home_url() . '/wp-json/fictiv/v1/search?per_page=6&page=' . $paged .'&query=' . $_GET['s']
   			)
    	)
    );

endif;

$search_title = (  $response  ? 'Search results for "' . $_GET['s'] . '"' : 'Sorry, there are no results matching “' . $_GET['s'] .'"' )

?>
<section class="py-32 lg:py-20">
	<div class="container">
		
		<div class="flex justify-center">
			<div class="w-full lg:w-10/12">
				<div class="justify-center hidden md:flex">
					<div class="w-11/12 sm:w-full">
						<div class="mb-6">
							<?php 
								get_template_part('partials/single', 'breadcrumbs');
							?>
						</div>
					</div>
				</div>
				
				
				<div class="flex flex-wrap mb-12 flex-col-reverse lg:flex-row items-center lg:items-start lg:justify-start">
					<div class="w-11/12 lg:w-3/12 hidden lg:block">
						<?php 
							get_sidebar();
						?>
						
					</div>
					<div class="w-full lg:w-9/12 lg:pl-6">
						<div class="flex justify-center">
							<div class="w-11/12 sm:w-full">
								<div class="mb-6">
									<h3 class="font-museo-700 text-20 text-grey-600">
									<?php echo $search_title; ?>
									</h3>		
								</div>
								<?php 
									if( !$response ) : 
								?>
								<div class="mb-6">
									<h3 class="font-museo-500 text-grey-600 uppercase">
									You might also be interested in this
									</h3>		
								</div>
								<?php 
									endif;
								?>
							</div>
						</div>
						
						<div class="flex -mx-1 flex-wrap justify-center sm:justify-start">
							<?php
								
								if ( $response ) :
								
									foreach ( $response as $i => $data ) :

									
							?>
							<div class="w-full sm:w-1/2 px-1 mb-2">
								<div class="border border-grey-200 relative h-full relative">
									<a href="<?php echo $data->link; ?>" class="absolute w-full h-full inset-0 z-30"></a>
									<div class="relative h-0 thumbnail-ratio" >
										<img title="<?php echo $data->title; ?>" class="lazyload absolute inset-0 w-full h-full object-cover" data-src="<?php echo $data->thumb; ?>">
									</div>
									<div class="p-4 relative">
										<div class="mb-1">
											<p class="text-grey-600 text-12 font-museo-700 uppercase"><?php 
										
											echo get_post_type_object( $data->post_type )->labels->singular_name;
											?></p>
										</div>
										<div class="h-12">
											<h2 class="text-16 font-museo-700 text-default max-lines max-lines-2"><?php 
												echo $data->title;

											?></h2>
										</div>
										
										<div class=" text-grey-600 font-museo-500 h-24">
											<?php 
												if( $data->excerpt ) :
											?>
											<p class="text-14 max-lines max-lines-3">
												
												<?php 
													echo $data->excerpt;
												?>
												
											</p>
											<?php 
												endif;
											?>
										</div>

										<div class="absolute right-0 bottom-0 p-4">
											
											<div>
												<?php 
													echo file_get_contents( get_template_directory_uri() . '/assets/images/icons/cta-arrow.svg');
												?>
											</div>
										</div>
									</div>
									
								</div>
							</div>
							
							<?php 
									endforeach;

								else :
									
									resource_center_cpt();

									$default_args = array(
										'posts_per_page' => 6,
										'post_parent'=> 0,
										'post_type' => $GLOBALS['resource_post_types']
									);

									$default = new WP_Query( $default_args );

									while ( $default->have_posts() ) : 
							    		$default->the_post();

							?>

							<div class="w-full md:w-1/2 px-1 mb-2">
								<?php 

									fictiv_post_card( get_post_type_object( get_post_type() )->labels->name );
								
								?>
							</div>
							
							<?php 
									endwhile;
									wp_reset_postdata();

								endif;
							?>
						</div>
						<div class="flex justify-center">
							<?php 
								the_posts_pagination( array(
									'prev_text' => __( '&#9656;' ),
									'next_text' => __( '&#9656;' ),
								) );
								wp_reset_query();
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php 	 
get_footer();
?>