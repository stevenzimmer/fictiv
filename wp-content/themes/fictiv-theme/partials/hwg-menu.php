<aside class="absolute w-1/6 bg-grey-700 h-full top-0 left-0">
	<div class="">
		<div>
			<?php 
				global $post;

				// print_r( $post );

				$hwg_cats = get_the_terms( get_the_id(), 'fictiv_hwg_category' );
				$tax = $hwg_cats[0]->taxonomy;
				$tax_id = $hwg_cats[0]->term_id;
				$terms = get_terms([
				    'taxonomy' => $tax,
				    'hide_empty' => true,
				    'orderby' => 'term_order'
				]);
				
				foreach ( $terms as $i => $term ) :
					
			?>
		
			<div class="">

				<a class="py-4 border-b border-grey-600 px-6 inline-block uppercase hwg-menu-toggle w-full cursor-pointer h-full text-white font-slab-500 text-14 flex justify-between w-full">
					
					<span>
						<?php 
							echo $i + 1 . '. ' . $term->name;
						?>
					</span>

					<span class="text-16 font-semibold">
						&#8250;
					</span>
					
				</a>
			
				<div class="bg-grey-900 px-10 <?php 
					
					if ( $tax_id !== $term->term_id ) :
						echo 'hidden';
					endif;
											
				?>">
					<div  class="bg-grey-900">
						<?php 
							// echo get_category_link( $term->term_id );
							$hwg_posts = get_posts(
								array(
									'posts_per_page' => -1,
							        'post_type' => 'cpt_hwg',
							        'tax_query' => array(
							            array(
							                'taxonomy' => $term->taxonomy,
							                'field' => 'term_id',
							                'terms' => $term->term_id
							            )
							        )
								)
							);
							foreach ( $hwg_posts as $j => $hwg_post ) :
						?>

						<a class="hover:text-blue-light text-white py-2 inline-block <?php 

							if( $hwg_post->ID === $post->ID && is_single() ):

								echo 'text-blue-light';
							
							endif;
						
						?>" href="<?php echo get_post_permalink( $hwg_post->ID ); ?>">
							<?php 
								echo $hwg_post->post_title;
							?>
						</a>
				

						<?php
							endforeach;
						?>
					</div>
					
				</div>
			</div>
			
			<?php
				endforeach;
			?>
		</div>
	</div>
</aside>