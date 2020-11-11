<?php 
// Search results page template

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
					<div class="w-full lg:w-9/12 lg:pl-12">
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
								<?php 
									fictiv_post_card( $data->id );
								?>
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

									fictiv_post_card( get_the_id() );
								
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