<?php 
get_header();


if ( have_posts() ) : 

    while ( have_posts() ) : 
        the_post();

        // include( get_template_directory() . '/inc/post-topics.php');

        $authors = get_coauthors( get_the_id() );

        $args = array(
        	'bg' => get_the_post_thumbnail_url(),
        	'label' => get_post_type_object( get_queried_object()->post_type )->labels->singular_name,
        	'title' => get_the_title(),
        	'post_type' => get_queried_object()->post_type,

        );

        hero_section( $args );
        
?>

<section class="section">
	<div class="container">	
		<div class="flex justify-center">
			<div class="w-full px-5 lg:px-0 lg:w-11/12">
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
						
						<div class="flex flex-wrap justify-between items-center mb-4">
							<div class="w-full lg:w-1/2 ">
								<div class="flex ">
									<div class="lg:w-3/12">
										<div class="flex -mx-1">
											<?php 
												 foreach ( $authors as $i => $author ) :
											?>
											<div class="lg:w-1/2 px-1">
												<img alt="<?php echo $author->display_name; ?> headshot" width="40" src="<?php echo get_avatar_url( $author->data->ID ); ?>">
											</div>
											<?php 
												endforeach;
											?>
										</div>
										
									</div>
								
									<div class=" lg:w-9/12 px-2 text-12">
										<div>
											<p class="text-blue-dark uppercase font-museo-700">
												<?php 
													foreach ( $authors as $i => $author ) :

														if( $i > 0 ) :

															echo '<span class="text-grey-600">&</span>';

														endif;
												?>
												<?php echo $author->display_name; ?>
												<?php 
													endforeach;
												?>
											</p>
										</div>
										<div>
											<p class="font-museo-700 text-grey-600 uppercase">
												<?php the_date('m.d.Y') ?> 
												<a href="<?php echo get_post_type_archive_link( get_queried_object()->post_type ) ?>">
													<?php echo get_post_type_object( get_queried_object()->post_type )->labels->name; ?>
												</a>
											</p>
											
											
										</div>
										
									</div>
								</div>
							</div>
					
								
						</div>
						
						<div class="post-content border-b border-grey-300 mb-8">
							<?php 
								the_content();
							?>	
						</div>
							
						<div class="flex flex-wrap justify-center lg:justify-start mb-8 -mx-4">
							<?php 

								foreach ( $authors as $i => $author ) :
								
							?>
							<div class="w-full lg:w-1/2 mb-8 lg:mb-0 px-4">
								<div class="flex justify-start -mx-2">
									<div class="w-1/6 md:w-auto lg:w-1/5 xl:w-1/6 px-2">
										<img class="lazyload mx-auto" alt="<?php echo $author->display_name; ?> headshot" width="40" data-src="<?php echo get_avatar_url( $author->data->ID ); ?>">
										
									</div>
									
									<div class=" w-5/6 text-12"> 
										<span class="text-blue-dark uppercase font-museo-700"><?php echo $author->display_name; ?></span> 
										<span class="text-grey-600">
											<?php 
												echo get_the_author_meta('description',  $author->data->ID );
											?>
											<br>
											<a class="text-teal-light font-museo-500 " href="<?php echo get_author_posts_url( $author->data->ID ); ?>">Learn More »</a>
										</span>
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
		</div>
	</div>
</section>
<?php
	include( get_template_directory() . '/inc/related-posts.php');

	endwhile;
	wp_reset_postdata();
endif;
get_footer();
?>