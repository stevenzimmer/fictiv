<?php 
get_header();
include( get_template_directory() . '/inc/post-type-vars.php');

if ( have_posts() ) :
?>
<section class="section">
	<div class="container">
		
		<div class="flex justify-center">
			<div class="w-11/12 xl:w-10/12">
				<div class="mb-6 hidden lg:block">
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
					<div class="w-full lg:w-9/12 lg:pl-12">
						<div class="flex justify-center">
							<div class="w-full">
								<div class="mb-6">
									<h1 class="font-museo-700 text-20 text-grey-600">Latest <?php 
										
										echo strtolower( $post_type_name );
								
									?> <?php 
										if ( strtolower($post_type_name ) ==='masterclass' ) :
											echo 'courses';
										endif;
									?></h1>		
								</div>
							</div>
						</div>
						
						<div class="flex -mx-1 flex-wrap justify-center sm:justify-start" data-resource-type="<?php echo $post_type; ?>">
							<?php

								while( have_posts() ) :

									the_post();


							?>
							<div class="w-full sm:w-1/2 px-1 mb-4">
						
								<?php 

									fictiv_post_card( get_the_id() );
								
								?>
						
							</div>
							<?php 
								endwhile;
								wp_reset_postdata();
							?>
						</div>
						<div class="flex justify-center">
							<?php 
								the_posts_pagination( array(
									// 'format'             => '',
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

endif;    
get_footer();
?>