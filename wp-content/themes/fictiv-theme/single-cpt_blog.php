<?php 
get_header();
// print_r( get_queried_object() );
include( get_template_directory() . '/inc/post-taxonomies.php');

if ( have_posts() ) : 

    while ( have_posts() ) : 
        the_post();

        include( get_template_directory() . '/inc/post-topics.php');

        
?>
<header class="relative pt-24 pb-12">
	<div class="absolute w-full h-full bg-cover bg-center inset-0 lazyload"  data-bg="url(<?php the_post_thumbnail_url() ?>)"></div>
	<div class="absolute w-full h-full inset-0 bg-black opacity-75"></div>
	<div class="container relative">
		<div class="flex justify-center">
			<div class="w-11/12 md:w-full lg:w-10/12">
				<div>
					<p class="text-white uppercase font-museo-700 text-grey-400">
						<?php 
							echo get_post_type_object( get_queried_object()->post_type )->labels->singular_name;
						?>
				
					</p>
				</div>
				<div>
					<h1 class="text-white font-museo-500 leading-tight"><?php the_title(); ?></h1>
				</div>
			</div>
		</div>
	</div>
</header>
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
						
						<div class="flex flex-wrap justify-center md:justify-between items-center mb-4">
							<div class="w-11/12 lg:w-1/2 ">
								<div class="flex ">
									<div class="lg:w-1/6">
										<img width="40" src="<?php echo get_avatar_url( get_the_author_meta('ID') ); ?>">
									</div>
								
									<div class=" w-full px-2 text-12">
										<div>
											<p class="text-blue-dark uppercase font-museo-700">
												<?php the_author(); ?>
											</p>
										</div>
										<div>
											<p class="font-museo-700 text-grey-600 uppercase">
												<?php the_date('m.d.Y') ?> <a href="<?php echo $topic_link ?>">
												<?php echo $topic_name; ?>
											</p>
											
											</a>
										</div>
										
									</div>
								</div>
							</div>
							<div class="w-full lg:w-1/2 hidden lg:block">
								<div class="flex justify-start lg:justify-end">
									<?php 
										get_template_part('partials/social', 'post');
									?>
									
								</div>
							</div>
								
						</div>
						
						<div class="post-content border-b border-grey-300 mb-8">
							<?php 
								the_content();
							?>	
						</div>
							
						<div class="flex flex-wrap justify-center lg:justify-start mb-8">
							<div class="w-11/12 lg:w-1/2 mb-8 lg:mb-0">
								<div class="flex ">
									<div class="w-1/5 lg:w-1/6 ">
										<img width="40" src="<?php echo get_avatar_url( get_the_author_meta('ID') ); ?>">
										
									</div>
									
									<div class=" w-full text-12"> 
										<span class="text-blue-dark uppercase font-museo-700"><?php the_author(); ?></span> 
										<span class="text-grey-600">
											<?php 
												echo get_the_author_meta('description', get_the_author_meta('ID') );
											?>
											<br>
											<a class="text-teal-light font-museo-500 " href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">Learn More »</a>
										</span>
									</div>
								</div>
							</div>
							<div class=" w-full lg:w-1/2">

								<div class="flex justify-center lg:justify-end">
									<?php 
									get_template_part('partials/social', 'post');
								?>
									
								</div>
							</div>
						
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
endif;
get_footer();
?>