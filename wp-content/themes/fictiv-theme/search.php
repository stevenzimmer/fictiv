<?php 
get_header();
// global $wp_query;
// $total_results = $wp_query->found_posts;


?>
<section class="section">
	<div class="container">
		
		<div class="flex justify-center">
			<div class="w-full lg:w-10/12">
				<div class="mb-6">
					<?php 
						get_template_part('partials/single', 'breadcrumbs');
					?>
				</div>
				
				<div class="flex flex-wrap -mx-4 mb-12 flex-col-reverse lg:flex-row items-center lg:items-start lg:justify-start">
					<div class="w-11/12 lg:w-4/12 px-4">
						<?php 
							get_sidebar();
						?>
						
					</div>
					<div class="w-full lg:w-8/12 px-4">
						<div class="flex justify-center">
							<div class="w-11/12 md:w-full">
								<div class="mb-6">
									<h3 class="font-museo-700 text-20 text-grey-600">
									Search results for "<?php echo $_GET['s'];  ?>"
									</h3>		
								</div>
							</div>
						</div>
						
						<div class="flex -mx-4 flex-wrap justify-center sm:justify-start">
							<?php
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


								foreach ( $response as $i => $data) :
									
							?>
							<div class="w-full sm:w-1/2 px-4 mb-6">
								<div class="border border-grey-200 relative h-full">
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
											<h2 class="text-14 font-museo-700 text-default max-lines max-lines-2"><?php 
												echo $data->title;

											?></h2>
										</div>
										<?php 
											if( $data->excerpt ) :
										?>
										<div class="text-14 text-grey-600 font-museo-500 h-20">
											<p class="max-lines max-lines-3">
												
												<?php 
													echo $data->excerpt;
												?>
												
											</p>
										</div>

										<?php 
											endif;
										?>

										<div class="absolute right-0 bottom-0 p-4">
											<a href="<?php echo $data->link; ?>" class="absolute w-full h-full inset-0"></a>
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