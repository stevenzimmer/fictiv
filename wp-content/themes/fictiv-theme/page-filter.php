<?php 
/* Template Name: Filter Results */

get_header();

resource_center_cpt();

$tax_query = array(
	'relation' => 'OR'
);

$content_types = array();

foreach ( $_GET as $i => $query ) :

	foreach ( $query as $j => $item ) :

		if ( $i === 'content_type' ) :
			
			array_push( $content_types, $item );

		else :
			array_push($tax_query, array(
				'taxonomy' => $i,
				'terms' => array(
					$item
				),
				'field' => 'slug'
			));
		endif;

	endforeach;

endforeach;

$post_types = ( !empty( $content_types ) ? 

			$content_types 

		: ( !empty( $_GET ) ?

				$GLOBALS['resource_post_types']
			
			:

				''

		  )
);

$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
	'posts_per_page' => 6,
	'post_parent'=> 0,
	'post_type' => $post_types,
	'tax_query' => $tax_query,
	'paged' => $paged,
);

$filtered = new WP_Query( $args );

$default_args = array(
	'posts_per_page' => 6,
	'post_parent'=> 0,
	'post_type' => $GLOBALS['resource_post_types'],
);

$default = new WP_Query( $default_args );

$max_num = ( $filtered->max_num_pages ? $filtered->max_num_pages : $default->max_num_pages );
    
?>

<section class="section ">
	<div class="container">
		
		<div class="flex justify-center">
			<div class="lg:w-10/12">
				<div class="mb-6">
					<?php 
						get_template_part('partials/single', 'breadcrumbs');
					?>
				</div>
				
				<div class="flex flex-wrap mb-12 flex-col-reverse lg:flex-row items-center lg:items-start lg:justify-start">
					<div class="hidden lg:block lg:w-3/12">
						<?php 
							get_sidebar();
						?>
						
					</div>
					<div class="w-full lg:w-9/12 lg:pl-6">
						<?php 

							if ( $filtered->have_posts() ) : 

						?>
						
						<div class="flex -mx-4 flex-wrap justify-center sm:justify-start">

							<?php

								while ( $filtered->have_posts() ) : 
							    	$filtered->the_post();
									include( get_template_directory() . '/inc/post-topics.php');


							?>
							<div class="w-full sm:w-1/2 px-4 mb-6">
								<?php 
									fictiv_post_card( $topic_name );
								?>
							
							</div>
							<?php 
								endwhile;
								wp_reset_postdata();
							?>
						</div>
						<div class="flex justify-center">
							<?php 
								
								$big = 999999999;

								echo paginate_links( array(
								    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
								    'format' => '?paged=%#%',
								    'current' => max( 1, $paged ),
								    'total' => $max_num,
								    'prev_text' => '&#9656;',
								    'next_text' => '&#9656;'
								));
							?>
						</div>
						<?php 
							else :
						?>
						<div class="flex justify-center">
							<div class="w-11/12 md:w-full">
								<div class="mb-6">
									<h3 class="font-museo-700 text-20 text-grey-600">
									Sorry, there are no results
									</h3>		
								</div>

								<div class="mb-6">
									<h3 class="font-museo-500 text-grey-600 uppercase">
									You might also be interested in this
									</h3>		
								</div>
							</div>
						</div>
						
						<div class="flex -mx-2 flex-wrap justify-center sm:justify-start">

							<?php

								while ( $default->have_posts() ) : 
							    	$default->the_post();
									include( get_template_directory() . '/inc/post-topics.php');


							?>

							<div class="w-full sm:w-1/2 xl:w-1/3 px-2 mb-4">
								<div class="border border-grey-200 relative h-full">
									<div class="relative h-0 thumbnail-ratio" >
										<img alt="<?php the_title(); ?> thumbnail" title="<?php the_title(); ?>" class="lazyload absolute inset-0 w-full h-full object-cover" data-src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( get_the_id() ), 'medium_large', false )[0]; ?>">
									</div>
									<div class="p-4 relative">
									
										<div class="h-20">
											<h2 class="text-14 font-museo-700 text-default max-lines max-lines-3"><?php 
												the_title();

											?></h2>
										</div>
									

										<div class="absolute right-0 bottom-0 p-4">
											<a href="<?php the_permalink(); ?>" class="absolute w-full h-full inset-0"></a>
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
								endwhile;
								wp_reset_postdata();
							?>
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
	get_footer();
?>