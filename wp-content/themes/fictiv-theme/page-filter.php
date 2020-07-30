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
	'paged' => $paged,
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
				
				<div class="flex flex-wrap -mx-4 mb-12 flex-col-reverse lg:flex-row items-center lg:items-start lg:justify-start">
					<div class="w-11/12 lg:w-4/12 px-4">
						<?php 
							get_sidebar();
						?>
						
					</div>
					<div class="w-full lg:w-8/12 px-4">
						<?php 

							if ( $filtered->have_posts() ) : 

						?>
						<div class="flex justify-center">
							<div class="w-11/12 md:w-full">
								<div class="mb-6">
									<h3 class="font-museo-700 text-20 text-grey-600">
								
									<?php 

									
									?></h3>		
								</div>
							</div>
						</div>
						
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
						<?php 
							else :
						?>
						<div class="flex justify-center">
							<div class="w-11/12 md:w-full">
								<div class="mb-6">
									<h3 class="font-museo-700 text-20 text-grey-600">
									The latest resources
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
							<div class="w-full sm:w-1/2 px-2 mb-6">
								<?php 
									fictiv_post_card( $topic_name );
								?>
							
							</div>
							<?php 
								endwhile;
								wp_reset_postdata();
							?>
						</div>
						
						<?php
							endif;
						?>
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
					</div>
					
				</div>
			</div>
		</div>
	</div>
</section>

<?php
	get_footer();
?>