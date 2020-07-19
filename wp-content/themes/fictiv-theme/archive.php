<?php 
get_header();
include( get_template_directory() . '/inc/post-type-vars.php');


?>
<header class="relative py-32 hidden">
	<div class="absolute w-full h-full bg-cover bg-center inset-0"  style="background-image: url(<?php // the_post_thumbnail_url(); ?>);"></div>
	<div class="absolute w-full h-full inset-0 bg-black opacity-50"></div>
	<div class="container relative">
		<div>
			<div>
				<p class="text-white">
					<a >
						<?php 
							echo $post_type_name;
						?>
					</a>
					
				</p>
			</div>
			<div>
				<h1 class="text-white">
					<?php echo $post_description; ?>
				</h1>
			</div>
		</div>
	</div>
</header>

<?php
if ( have_posts() ) :
?>
<section class="section">
	<div class="container">
		
		<div class="flex justify-center">
			<div class="lg:w-11/12">
				<?php 
					get_template_part('partials/single', 'breadcrumbs');
				?>
				<div class="flex flex-wrap -mx-4 mb-12 flex-col-reverse lg:flex-row items-center lg:items-start lg:justify-start">
					<div class="w-11/12 lg:w-4/12 px-4">
						<?php 
							get_sidebar();
						?>
						
					</div>
					<div class="w-full lg:w-8/12 px-4">
						<div class="flex justify-center">
							<div class="w-11/12 md:w-full">
								<div class="mb-6">
									<h3 class="font-museo-700 text-20 text-grey-600">
									Latest 
									<?php 
										
										echo strtolower( $post_type_name );
								
									?></h3>		
								</div>
							</div>
						</div>
						
						<div class="flex -mx-4 flex-wrap justify-center sm:justify-start" data-resource-type="<?php echo $post_type; ?>">
							<?php

								while( have_posts() ) :

									the_post();

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