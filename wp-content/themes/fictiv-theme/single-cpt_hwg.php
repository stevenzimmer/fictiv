<?php 
get_header();
if ( have_posts() ) : 

    while ( have_posts() ) : 
        the_post();
        $hwg_cats = get_the_terms( get_the_id(), 'fictiv_hwg_category' );

		// $tax_slug = $tax_obj->slug;
		$tax_slug = $hwg_cats[0]->slug;
		$tax = $hwg_cats[0]->taxonomy;
		$tax_id = $hwg_cats[0]->term_id;

		$tax_name = $hwg_cats[0]->name;

		$tax_color = get_field( 'category_color', $tax . '_'. $hwg_cats[0]->term_id  );
		$tax_icon = get_field( 'category_icon', $tax . '_'. $hwg_cats[0]->term_id  );
		$tax_bg = get_field( 'category_background_image', $tax . '_'. $hwg_cats[0]->term_id );
?>
<header class="relative py-40">
	<div class="absolute w-full h-full inset-0 bg-cover bg-center" style="background-image: url(<?php echo $tax_bg; ?>);"></div>
	<div class="absolute w-full h-full bg-black inset-0 opacity-50"></div>
</header>
<div class="relative">
	<?php get_template_part('partials/hwg', 'menu'); ?>
	<article>
		<div class="container">
			<div class="flex justify-center">
				<div class="md:w-9/12">
					<div class="flex justify-center -mt-10">
						<div class="bg-white p-4 border border-grey-light">
							<p>
								Written by <?php 
									the_author(); ?>
							</p>
						</div>
					</div>
					
					<div class="flex justify-between flex-wrap section">
						<div class="w-2/12 px-4">
							<div>
								<img class="mx-auto" src="<?php echo $tax_icon; ?>">
							</div>
						</div>
						<div class="w-10/12">
							<div class="hwg-breadcrumbs">
								<a class="text-14 text-blue-light uppercase font-museo-700" href="<?php echo get_post_type_archive_link( 'cpt_hwg' ); ?>">
									HWG
								</a>
								/ 
								<a class="text-14 uppercase font-museo-700" href="<?php echo get_category_link( $hwg_cats[0]->term_id ); ?>" style="color: <?php echo $tax_color ?>">
									<?php 
										echo $tax_name;
									?>
								</a>
							</div>
						
							<div class="mb-4">
								<h1 class="font-slab-500 text-24 leading-tight">
									<?php the_title(); ?>
								</h1>
							</div>
							<div class="post-content border-b border-grey-light">
								<?php the_content(); ?>
							</div>
							<div class="py-6">
								<div class="mb-8 text-center ">
									<h3 class="uppercase text-24 font-bold font-slab-500">Related <?php echo $tax_name; ?> Articles</h3>
								</div>
								<div class="flex flex-wrap -mx-48">
									<?php 

										$related_args = array(
											'posts_per_page' => 3,
										    'post_type' => 'cpt_hwg',
										    'post__not_in' => array( get_the_id() ),
										    'tax_query' => array(
										        array (
										            'taxonomy' => $tax,
										            'field' => 'slug',
										            'terms' => $tax_slug,
										        )
										    ),
										);

										$related_posts = new WP_Query( $related_args );
										
										if ( $related_posts->have_posts() ) : 

										    while ( $related_posts->have_posts() ) : 
										        $related_posts->the_post();
										        
									
									?>
									<div class="w-1/3 px-2 mb-8">
										<div class="border border-grey-light relative">
											<a href="<?php the_permalink(); ?>" class="absolute top-0 left-0 w-full h-full inset-0 z-50" title="<?php the_title(); ?> HWG Post"></a>
											<div class="relative h-0" style="padding-bottom: 50%">
									            <div class="absolute top-0 left-0 w-full h-full">
									            	<img class="block w-full h-full  object-cover lazyload" data-src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?> thumbnail">
									            </div>
									           
									        </div>
											<div class="p-4">
												<div>
													<p class="text-14" style="color: <?php echo get_field( 'hwg_category_color', $tax . '_' . $tax_id ); ?>">
														<?php 
															echo $tax_name;
														?>
													</p>
												</div>
												<div class="h-12">
													<h3><?php the_title(); ?></h3>
												</div>
											
											</div>
										</div>
									</div>
									<?php
											wp_reset_postdata();
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
	</article>
</div>

<?php
	endwhile;
endif;
get_footer();
?>