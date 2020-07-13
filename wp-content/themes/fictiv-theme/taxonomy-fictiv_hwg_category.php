<?php 
	get_header();
	$archive_id = $post->ID;
	
	$tax_obj = get_queried_object();
	// print_r( $tax_obj );

	// $tax_slug = $tax_obj->slug;
	$tax = $tax_obj->taxonomy;
	$tax_id = $tax_obj->term_id;

	$tax_name = $tax_obj->name;
	$tax_description = $tax_obj->description;
	$tax_color = get_field( 'category_color', $tax_obj );
	$tax_icon = get_field( 'category_icon', $tax_obj );
	$tax_bg = get_field( 'category_background_image', $tax_obj );

?>
<header class="relative py-40">
	<div class="absolute w-full h-full inset-0 bg-cover bg-center" style="background-image: url(<?php echo $tax_bg; ?>);"></div>
	<div class="absolute w-full h-full bg-black inset-0 opacity-50"></div>
</header>
<div class="relative">
	<?php get_template_part('partials/hwg', 'menu'); ?>
	<section class="section border-b">
		<div class="container">
			<div class="flex justify-center">
				<div class="w-1/2">
					<div class="relative">
						<div class="flex justify-start relative">
							<?php 
								$terms = get_terms([
								    'taxonomy' => $tax,
								    'hide_empty' => true,
								]);
								
								foreach ( $terms as $i => $term ) :
							?>
							<div class="relative">
							
								<div class="flex items-center justify-between">
									
									<div class=" h-6">
										<div class="w-6 mx-auto h-full rounded-full border relative mb-2"  style="background-color: <?php 

											if ( $tax_id === $term->term_id ) :
											
												echo get_field( 'category_color', $term );

											else : 
												echo '#fff';
											endif;

										?>">
											<?php 
												if ( $tax_id !== $term->term_id ) :
											?>
											<a class="absolute w-full h-full inset-0 z-50" href="<?php echo get_category_link( $term->term_id ); ?>"></a>
											<?php
												endif;
											?>
										</div>
										<div class="text-center">
											<p class="text-uppercase text-14 font-sembild text-blue-light uppercase font-museo-500 <?php 
												if ( $tax_id === $term->term_id ) :
													
													echo 'font-semibold';
												
												endif;
											?>">
												<?php 
													if ( $tax_id !== $term->term_id ) :
												?>
												<a class="" href="<?php echo get_category_link( $term->term_id ); ?>">
												<?php 
													endif;
												?>
													<?php 
														echo $term->name;
													?>
												<?php 
													if ( $tax_id !== $term->term_id ) :
												?>
												</a>
												<?php 
													endif;
												?>
											</p>
										</div>
						
									</div>
									<?php 
										if ( ( $i + 1 ) !== count( $terms) ) :
										
									?>

									<div class="w-24 -mx-6 border-b-2 mx-auto"></div>

									<?php 
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
			
		</div>
	</section>
	<section class="">
		<div class="container">
			<div class="flex justify-center">
				<div class="md:w-9/12">
					<div class="flex justify-between flex-wrap section">
						<div class="w-2/12 px-4">
							<div>
								<img class="mx-auto" src="<?php echo $tax_icon; ?>">
							</div>
						</div>
						<div class="w-10/12">
						
							<div class="mb-4">
								<h1 class="text-36 font-slab-500 font-semibold">
									<?php 
										echo $tax_name;
									?>
								</h1>
							</div>
							<div class="border-b pb-10">
								<?php 
									echo $tax_description;
								?>
							</div>
							<div class="py-12">
								<div class="">
									<h3 class="text-24 font-slab-500 uppercase">Table of Contents</h3>
								</div>
								<div>
									<?php 
										if ( have_posts() ) : 
										    while ( have_posts() ) : 
										        the_post();
									?>
									<div class="flex justify-between py-4">
										<div class="w-1/6">
											<a href="<?php the_permalink(); ?>">
												<img src="<?php the_post_thumbnail_url(); ?>">
											</a>
										</div>
										<div class="w-4/5">
											<h3 class="mb-2">
												<a class="text-blue-light font-museo-700" href="<?php the_permalink(); ?>">
													<?php the_title(); ?>
												</a>
											</h3>
											<p class="text-14">
												<?php echo get_the_excerpt(); ?>
											</p>
										</div>
										
									</div>
						

									<?php 
											endwhile;
										endif;
									?>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</section>
</div>


<?php
	get_footer();
?>