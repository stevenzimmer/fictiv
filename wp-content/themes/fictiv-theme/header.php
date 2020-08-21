<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  	<meta charset="<?php bloginfo( 'charset' ); ?>">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<link rel="profile" href="http://gmpg.org/xfn/11">
  	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  	<?php 
  		wp_head(); 
  	?>
</head><!--/head-->

<body <?php body_class() ?>>

	<nav class="relative w-full h-12 lg:h-18 flex items-center z-50 bg-white">
	
		<div class="container relative">
			<div class="flex justify-center">
				<div class="w-11/12 md:w-full">
					<div class="flex items-center">
						<div class="flex items-center w-full">
							<div class="w-24">
								<a href="<?php echo home_url() ?>">
									<?php 
										echo file_get_contents( get_template_directory_uri() . '/assets/images/logos/fictiv-teal.svg');
									?>
								</a>
							</div>
							<div class="w-3/5 hidden lg:block">
								<ul class="flex justify-around items-center  font-museo-700 ">
									<?php 
										$main_menu_items = array(
											'Why Fictiv',
											'Capabilities',
											'Materials',
											'Industries',
											'Resources'
										);

										foreach ( $main_menu_items as $i => $item ) :
										
									?>
									<li>
										<a class="primary-menu-item text-black hover:text-teal-light flex items-center" href="#" data-menu="<?php echo str_replace(' ', '-', strtolower( $item )); ?>">
											<?php echo $item; ?>
											&nbsp;
											<?php 
												echo file_get_contents( get_template_directory_uri() . '/assets/images/icons/primary-nav-arrow-down.svg');
											?>
										</a>
									</li>

									<?php 
										endforeach;
									?>

								</ul>
							</div>
							<div class="w-1/5 px-6 hidden lg:block">
								<ul class="flex justify-between items-center  font-museo-700 text-black">
						

									<li  class="primary-menu-item text-black hover:text-teal-light">
										<a href="#">
											Request a Demo
										</a>
									</li>
									<li>
										<a class="primary-menu-item text-black hover:text-teal-light" href="https://app.fictiv.com/users/sign_in">
											Log In
										</a>
									</li>
								</ul>
							</div>
							<div class="hidden lg:block">
								<?php 
									primary_button();
								?>
							</div>
						</div>
						
						
						<div class="lg:hidden">

							<div class="mobile-toggle cursor-pointer relative w-10 h-8 border border-white rounded " id="mobile-toggle">
					            <span class="sr-only">Toggle Navigation</span>
					            <span class="nav-bar"></span>
					        </div>
						
						</div>
					</div>
				</div>
			</div>
		</div>
	</nav>
		
	<?php 
		function menu_column_header( $text ) {
	?>
		<div class="mb-4">
			<p class="uppercase font-museo-700 text-grey-600 tracking-wide text-12">
				<?php echo $text; ?>
			</p>
		</div>
	<?php
		}
		function cap_menu_item( $link, $title, $excerpt, $img ) {

	?>
		<div class="border border-grey-200 ">

			<div class=" relative">
				<a class="absolute w-full h-full inset-0" href="<?php echo $link; ?>"></a>
				<div class="flex items-center">
					<div class="lg:w-4/12">

						<img class="lazyload w-full h-full object-cover" data-src="<?php echo $img; ?>">
					</div>
					<div class="lg:w-8/12">
						<div class="flex items-center lg:pl-2">
							<div class="w-full ">
								<p class="mb-2 text-14 font-museo-700 text-black"><?php echo $title; ?></p>
								<div class="text-12 text-black"><?php echo $excerpt; ?></div>
							</div>
							<div class="px-6">
								<div class="flex justify-center">
									<div>
										<p>
						                    &#9656;
						                </p>
									</div>
								</div>
								
							</div>
							
						</div>
					</div>	
				</div>
			
			</div>
		</div>
	<?php 
		}
	
		// Show mobile filter on Resource center pages
		if( is_search() || 
			is_page_template('page-filter.php') || 
			is_page_template('page-resource-center.php') ||
			is_singular('cpt_blog') ) :

			include( get_template_directory() . '/inc/post-taxonomies.php');

 

	?>

	<nav class="relative w-full h-12 lg:hidden flex items-center border-t border-b border-white filter-content-mobile select-none" id="filter-content-mobile">
		<div class="absolute w-full h-full inset-0 bg-black opacity-50 "></div>
		<div class="container relative">
			<div class="flex justify-center">
				<div class="w-11/12 md:w-full">
					
					<div class="flex justify-between items-center">
						
						<div class="">
							<p class="uppercase text-white font-museo-700 text-12">filter content</p>
						</div>
						<div class="w-10 text-center text-white flex items-center justify-center ">
							<div class="transform transition-transform origin-center duration-200 filter-content-arrow">
							<?php 
								echo file_get_contents( get_template_directory_uri() . '/assets/images/icons/filter-arrow.svg');
							?>
							</div>
							
						</div>
					
					</div>
				</div>
			</div>

		</div>
			
		<div class="bg-white py-4 filter-content-mobile-dropdown hidden lg:hidden shadow-lg">
			<div class="container">
				<div class="flex justify-center">
					<div class="w-11/12 md:w-full">
						<div class="mb-4">

							<?php 
								get_template_part('partials/resources', 'search');
							?>
							
						</div>
						<div class="">
							<form method="GET" action="<?php echo home_url(); ?>/filter/" id="filter-form">

							<?php
								resource_center_cpt();

								filterContentType( $GLOBALS['resource_post_types'], 'mobile' );
								
								foreach ( resource_center_taxonomies() as $i => $tax ) :
									$labels = get_taxonomy( $tax );

									$filters = get_terms( array(
										'taxonomy' => $tax,
										'hide_empty' => true
									));

									filterTaxonomies( $labels->labels->singular_name, $filters, 'mobile'  );

								endforeach;

								get_template_part('partials/filter', 'btns');
							?>
								
							</form>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</nav>

	<?php 
		endif;
	?>
		
	<nav class="bg-white py-10 sub-menu absolute w-full top-0 z-50 mt-18 hidden" data-menu="why-fictiv">
		<div class="container">
			<div class="flex justify-center">
				<div class="lg:w-11/12">
					<div class="flex -mx-4">
						<div class="lg:w-8/12 px-4">
							<?php menu_column_header('our digital manufacturing ecosystem'); ?>
					
							<div class="border border-grey-200">
								<div class="flex">
									<div class="lg:w-6/12 border-r border-grey-200 flex items-center">
										<div class="relative w-full" >
											<img class="lazyload" alt="our digital manufacturing ecosystem thumbnail" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/graphics/our-digital-manufacuring-ecosystem.jpg">
										</div>
										
									</div>
									<div class="lg:w-6/12">
										<?php 
											$ecosystems = array(
												array(
													'title' => 'Quote-to-Order Platform',
													'para' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod	tempor incididunt ut labore et dolore',
													'link' => '#1'
												),

												array(
													'title' => 'Global Manufacturing Network',
													'para' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod	tempor incididunt ut labore et dolore',
													'link' => '#2'
												),

												array(
													'title' => 'Our Quality Difference',
													'para' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod	tempor incididunt ut labore et dolore',
													'link' => '#3'
												),
											);

											foreach ( $ecosystems as $i => $ecosystem ) :
											
 										?>
										<div class=" border-b border-grey-200 last:border-0 relative">
											<a class="absolute w-full h-full inset-0" href="<?php echo $ecosystem['link']; ?>"></a>
											<div class="flex items-center pl-4 py-2">
												<div class="lg:w-11/12">
													<p class="mb-2 text-black text-14 font-museo-700"><?php echo $ecosystem['title']; ?></p>
													<p class="text-12 text-black"><?php echo $ecosystem['para']; ?></p>
												</div>
												<div class="lg:w-1/12">
													<div class="flex justify-center">
														<div>
															<p>
											                    &#9656;
											                </p>
														</div>
													</div>
													
												</div>
												
											</div>
											
										</div>
										<?php 
											endforeach;
										?>
									</div>
								</div>
							</div>
						</div>
						<div class="lg:w-4/12 px-4">
							<?php menu_column_header('features'); ?>


							<?php 
								$features = array(
									array(
										'icon' => 'instant-quotes',
										'title' => 'Instant Quotes',
										'para' => 'Lorem ipsum dolor sit amet, consectetur',
										'link' => '#1'
									),

									array(
										'icon' => 'manufacturability-feedback',
										'title' => 'Manufacturability Feedback',
										'para' => 'Lorem ipsum dolor sit amet, consectetur',
										'link' => '#2'
									),

									array(
										'icon' => 'fulfillment-transparency',
										'title' => 'Fulfillment Transparency',
										'para' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
										'link' => '#3'
									),
								);

								foreach ( $features as $i => $feature ) :

						
									cap_menu_item( 
										$feature['link'], 
										$feature['title'], 
										$feature['para'],
										get_template_directory_uri() . '/assets/images/graphics/primary-nav-why-fictiv-features-' . $feature['icon'] . '.png'
									);
						
								endforeach;
							?>
								
						</div>
					</div>
				</div>
			</div>
		</div>
	</nav>

	<nav class="bg-white py-10 sub-menu absolute w-full top-0 z-50 mt-18 hidden" data-menu="capabilities">
		<div class="container">
			<div class="flex justify-center">
				<div class="w-11/12">
					<div class="flex -mx-4">
						<div class="full px-4">
							<div class="flex flex-wrap md:flex-no-wrap -mx-4">
						
							<?php 
								// }
								$cap_args = array(
									'post_type' => array(
										'page'
									),
									'order' => 'ASC',
									'posts_per_page' => -1,
									'tax_query' => array(
										array(
											'taxonomy' => 'fictiv_page_type',
											'field' => 'slug',
											'terms' => array(
												'capabilities'
											)
										)
									)
								);

								$cap_menu = new WP_Query( $cap_args );

								$finish_args = array(
									'post_type' => array(
										'cpt_cap_finish'
									),
									'posts_per_page' => -1,
									
								);

								$finish_menu = new WP_Query( $finish_args );

								$i = 0;
								while ( $cap_menu->have_posts() ) :
									$cap_menu->the_post();

									$children = get_children( array( 'post_parent' => get_the_id() ) );
									 
									if( !empty( $children ) ) :
									
							?>
								<div class="lg:w-1/3 px-4 ">

										<?php 
											cap_menu_item( get_permalink(), get_the_title(), get_the_excerpt(), wp_get_attachment_image_src( get_post_thumbnail_id( get_the_id() ), 'medium_large', false )[0] );
										?>
									
										<?php 
											if( !empty( $children ) ) :
										?>
										<div class="p-4 border-grey-200 border-l border-r border-b border-grey-200">
											<div class="">
												<div class="mb-2">
													<p class="text-12 font-museo-700 text-black">Processes Available</p>
												</div>
												<div class="">
													<?php 

														foreach ( $children as $j => $child ) :
														
													?>
													<a href="<?php echo  get_permalink( $child->ID ) ?>" class="text-12 font-museo-700 text-teal-light block mb-2 last:mb-0"><?php echo $child->post_title ?></a>
													<?php 
														endforeach;
													?>
												</div>
											</div>

										</div>
										<?php 
											if ( $i === 0 ) :
									
											
										?>
										<div class="border-grey-200 border-l border-r border-b p-4">
											<div class="mb-2">
												<p class="text-12 font-museo-700 text-black">
													Finishing Options
												</p>
											</div>
											<div class="flex flex-wrap">

										<?php 


											while ( $finish_menu->have_posts() ) :
												$finish_menu->the_post();
												
										?>
												<a href="<?php the_excerpt(); ?>" class="md:w-1/2 text-12 font-museo-700 text-teal-light block mb-2 last:mb-0"><?php the_title() ?></a>
													
										<?php 
											endwhile;
											wp_reset_postdata();
										?>
											</div>
										</div>	
									

										<?php 
												endif;
											endif;
										?>
									</div>
							
							<?php

								endif;
								$i++;
								endwhile;
								wp_reset_postdata();
		
							?>
								<div class="lg:w-1/3 px-4 ">
									<?php 
										while ( $cap_menu->have_posts() ) :
											$cap_menu->the_post();

											$children = get_children( array( 'post_parent' => get_the_id() ) );

											$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_id() ), 'medium_large', false )[0];

									 
											if( empty( $children ) ) :

											cap_menu_item( get_permalink(), get_the_title(), get_the_excerpt(), wp_get_attachment_image_src( get_post_thumbnail_id( get_the_id() ), 'medium_large', false )[0] );
									
									
									?>
									
									<div class="h-3"></div>
									<?php
											endif;
										endwhile;
										wp_reset_postdata();
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</nav>

	<nav class="bg-white py-10 sub-menu absolute w-full top-0 z-50 mt-18 hidden" data-menu="materials">
		<div class="container">
			<div class="flex justify-center">
				<div class="w-11/12">
					<div class="flex -mx-4 flex-wrap">
					<?php 

										
						$terms = get_terms( 'fictiv_manufacturing_process', array(
							'hide_empty' => true,
						));

						foreach ( $terms as $j => $term ) :

		
							$material_args = array(
								'posts_per_page' => -1,
								'post_type' => array(
									'cpt_cap_material'
								),
								'order' => 'ASC',
								'orderby' => 'name',
								'tax_query' => array(
									array(
										'taxonomy' => $term->taxonomy,
										'field' => 'id',
										'terms' => array(
											$term->term_id
										),
										'include_children' => false
									)
								)
							);

							$mat_posts = new WP_Query( $material_args );

							if ( $mat_posts->have_posts() ) :
							
								if ( !$term->parent ) :
							
					?>
						<div class="lg:w-1/3 px-4">
							<div>
								<?php menu_column_header( $term->name ); ?>
							</div>
							<div class="border border-grey-200 p-4">
								
							
								<div class="flex">
								
							
							<?php 
									if ( !empty( get_term_children( $term->term_id, $term->taxonomy ) )) :
							

										foreach ( get_term_children( $term->term_id, $term->taxonomy ) as $k => $mat ) :
							?>
									<div class="lg:w-1/2">
										<div class="mb-4">
											<p class="text-12 text-black font-museo-700">
												<?php echo get_term( $mat, $term->taxonomy )->name; ?>
											</p>
											
										</div>
										<div>
											<?php 
												$child_taxes = get_posts( array(
													'post_type' => 'cpt_cap_material',
													'numberposts' => -1,
													'tax_query' => array(
														array(
															'taxonomy' => $term->taxonomy,
															'field' => 'term_id',
															'terms' => array( $mat )
														)
													)
												));

												foreach ( $child_taxes as $l => $tax ) :

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
									<div class="lg:w-1/2">
										<div class="mb-4">
											<p class="text-12 text-black font-museo-700"><?php echo $term->name; ?> Materials</p>
										</div>
										<div>
											<?php 
												while ( $mat_posts->have_posts() ) :
													$mat_posts->the_post();
												
											?>
											<a class="block text-teal-light text-teal-light text-12 font-museo-700 mb-2" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
											<?php 
												endwhile
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
	</nav>


	<nav class="bg-white py-10 sub-menu absolute w-full top-0 z-50 mt-18 hidden" data-menu="industries">
		<div class="container">
			<div class="flex justify-center">
				<div class="lg:w-11/12">
					<div class="flex -mx-4">
							
						<?php 
							$industries = array(
								array(
									'img' => 'robotics',
									'title' => 'Robotics',
									'para' => 'Lorem ipsum dolor sit amet, consectetur',
									'link' => '#1'
								),

								array(
									'img' => 'medical',
									'title' => 'Medical',
									'para' => 'Lorem ipsum dolor sit amet, consectetur',
									'link' => '#2'
								),

								array(
									'img' => 'contract-manufacturing',
									'title' => 'Contract Manufacturing',
									'para' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
									'link' => '#3'
								),
							);

							foreach ( $industries as $i => $industry ) :

						?>
						<div class="lg:w-4/12 px-4">
							<?php 
								cap_menu_item( 
									$industry['link'], 
									$industry['title'], 
									$industry['para'], 
									get_template_directory_uri() . '/assets/images/graphics/primary-nav-' . $industry['img'] . '-industries.jpg' 
								); 
							?>
						
						</div>
						<?php 
							endforeach;
						?>
								
						
					</div>
				</div>
			</div>
		</div>
	</nav>

	<nav class="bg-white py-10 sub-menu absolute w-full top-0 z-50 mt-18 hidden" data-menu="resources">
		<div class="container">
			<div class="flex justify-center">
				<div class="w-11/12">
					<div class="flex -mx-4">
						<div class="full px-4">
							<div class="flex flex-wrap md:flex-no-wrap -mx-4">
					
								<div class="lg:w-1/3 px-4 ">

									<?php 
										menu_column_header( 'Digital Manufacturing Resources' ); 
										cap_menu_item( 
											'#', 
											'Resource Center', 
											'Vestibulum rutrum quam vitae fringilla tincidunt. Suspendisse nec tortor urna.',
											get_template_directory_uri() . '/assets/images/graphics/primary-nav-resources-center.png' 
										);
									?>
							
							
									<div class="border-grey-200 border-l border-r border-b p-4">
										<div class="mb-2">
											<p class="text-12 font-museo-700 text-black">
												Content Categories
											</p>
										</div>
										<div class="flex flex-wrap">

									<?php 

										resource_center_cpt();
										foreach ( $GLOBALS['resource_post_types']	 as $i => $resource ) :

									?>
											<a href="<?php echo get_post_type_archive_link( $resource ); ?>" class="md:w-1/2 text-12 font-museo-700 text-teal-light block mb-2 last:mb-0"><?php echo get_post_type_object( $resource )->labels->name; ?></a>
												
									<?php 
										endforeach;

									?>
										</div>
									</div>	
								
								</div>

								<div class="lg:w-1/3 px-4 ">

									<?php 
										menu_column_header( 'Learn about fictiv' ); 
										cap_menu_item( 
											'#', 
											'Help Center', 
											'Vestibulum rutrum quam vitae fringilla tincidunt. Suspendisse nec tortor urna.',
											get_template_directory_uri() . '/assets/images/graphics/primary-nav-resources-help-center.png' 
										);
									?>
							
							
									<div class="border-grey-200 border-l border-r border-b p-4">
										<div class="mb-2">
											<p class="text-12 font-museo-700 text-black">
												Topics
											</p>
										</div>
										<div class="flex flex-wrap">

									<?php 

										$help_center_topics = array(
											array(
												'name' => 'Getting Started',
												'link' => '#'
											),

											array(
												'name' => 'Uploading Your Parts',
												'link' => '#'
											),

											array(
												'name' => 'Receiving a Quote',
												'link' => '#'
											),

											array(
												'name' => 'Placing an Order',
												'link' => '#'
											),

											array(
												'name' => 'Tracking an Order',
												'link' => '#'
											),
										);

										foreach ( $help_center_topics as $i => $topic ) :		
						 
									?>
											<a href="<?php echo $topic['link']; ?>" class="md:w-1/2 text-12 font-museo-700 text-teal-light block mb-2 last:mb-0"><?php echo $topic['name']; ?></a>
												
									<?php 
										endforeach;

									?>
										</div>
									</div>
								</div>
							
								<div class="lg:w-1/3 px-4 ">
									<?php 
										menu_column_header( 'featured reads' ); 
										// while ( $cap_menu->have_posts() ) :
										// 	$cap_menu->the_post();

										// 	$children = get_children( array( 'post_parent' => get_the_id() ) );

										// 	$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_id() ), 'medium_large', false )[0];

									 
										// 	if( empty( $children ) ) :

										// 	cap_menu_item( get_permalink(), get_the_title(), get_the_excerpt(), wp_get_attachment_image_src( get_post_thumbnail_id( get_the_id() ), 'medium_large', false )[0] );
									
									
									?>
									
									<div class="h-3"></div>
									<?php
										// 	endif;
										// endwhile;
										// wp_reset_postdata();
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</nav>
