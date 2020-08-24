<div class="mobile-menu-dropdown h-0 overflow-hidden bg-white" data-dropdown="<?php echo $i; ?>">
	<div class="container">
		<div class="flex justify-center">
			<div class="w-11/12">
		<?php 

			foreach ( $materials_terms as $j => $term ) :

				include get_template_directory() . '/inc/navigation/vars/materials-items.php';

				if ( $materials_posts->have_posts() ) :
				
					if ( !$term->parent ) :
				
		?>
			<div class="mb-3 last:mb-0">
				<div>
					<?php cap_menu_header( $term->name ); ?>
				</div>
				<div class="border border-grey-200 p-4">
				
					<div class="flex">
				
				<?php 
						if ( !empty( get_term_children( $term->term_id, $term->taxonomy ) )) :
				

							foreach ( get_term_children( $term->term_id, $term->taxonomy ) as $k => $mat ) :
				?>
						<div class="w-1/2">
							<div class="mb-4">
								<p class="text-12 text-black font-museo-700">
									<?php echo get_term( $mat, $term->taxonomy )->name; ?>
								</p>
								
							</div>
							<div>
								<?php 
									
									include get_template_directory() . '/inc/navigation/vars/materials-terms-children.php';

									foreach ( $materials_terms_children as $l => $tax ) :

								?>
								<a class="block text-teal-light text-12 font-museo-700" href="<?php echo get_permalink( $tax->ID ); ?>"><?php echo $tax->post_title; ?></a>
								<?php
									endforeach;
								?>
							</div>
						</div>
						
				<?php	

							endforeach;
	
						else :
				?>
						<div class="w-full">

							<div class="mb-4">
								<p class="text-12 text-black font-museo-700"><?php echo $term->name; ?> Materials</p>
							</div>
							<div class="flex flex-wrap">
								<?php 
									while ( $materials_posts->have_posts() ) :
										$materials_posts->the_post();
									
								?>
								<a class="w-1/2 block text-teal-light text-teal-light text-12 font-museo-700 mb-2" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								<?php 
									endwhile;
									wp_reset_postdata();
								?>
							</div>
						</div>
				<?php
						endif;
				?>
					</div>
				</div>
			</div>
		<?php
					endif;
				endif;
				
			endforeach;
	
		?>
			</div>
		</div>
	</div>
</div>