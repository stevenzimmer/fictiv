<?php 
get_header();
// print_r( get_queried_object() );

if ( have_posts() ) : 
    
?>
<header class="py-40">
	<div>

	</div>
</header>
<section>
	<div class="container">
		<div class="flex flex-wrap -mx-6 mb-12">
			<div class="lg:w-3/12 px-6">
				
			</div>
			<div class="lg:w-9/12 px-6">
				<div class="mb-12">
					<div>
						<p>
							Read the latest
						</p>
					</div>
					<div class="flex -mx-4 flex-wrap">
						<?php 
							while ( have_posts() ) : 
				        		the_post();
				        		// resource_card();
				        		
				        	endwhile;
						?>
					</div>
				</div>
				

				<div class="mb-12">
			<?php


						$terms = get_terms( array(
							'taxonomy' => 'fictiv_content_type',
							'hide_empty' => true
						));

						foreach ( $terms as $j => $term ) :
					?>
					<div class="mb-12" data-<?php echo $term->taxonomy ?>="<?php echo $term->slug ?>" data-count="<?php echo $term->count ?>">
						<h3 class="mb-8 font-museo-900"><?php 
							echo $term->name;
						?></h3>
						<div class="flex -mx-6 flex-wrap">
							
						
					<?php
						// print_r( $term );

						$resource_args = array(
							'posts_per_page' => 4,
						    'post_type' => get_queried_object()->name,
						    'tax_query' => array(
						        array (
						            'taxonomy' => $term->taxonomy,
						            'field' => 'slug',
						            'terms' => $term->slug,
						        )
						    ),
						);

						$resource_posts = new WP_Query( $resource_args );
								
						if ( $resource_posts->have_posts() ) : 

						    while ( $resource_posts->have_posts() ) : 
						        $resource_posts->the_post();
						       

						       ?>
						       <div class="mb-12 lg:w-1/3 px-6">
						       	<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						       </div>
								       
			<?php
							endwhile;
							wp_reset_postdata();
						endif;
			?>
						</div>
					</div>
			<?php
				endforeach;
			?>
				</div>

			</div>
		</div>
	</div>
</section>
<?php 
endif;
get_footer();
?>