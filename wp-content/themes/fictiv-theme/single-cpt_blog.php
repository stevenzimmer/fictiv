<?php 
get_header();
// print_r( get_queried_object() );
include( get_template_directory() . '/inc/post-taxonomies.php');

if ( have_posts() ) : 

    while ( have_posts() ) : 
        the_post();

        include( get_template_directory() . '/inc/post-topics.php');

        $args = array(
        	'bg' => get_the_post_thumbnail_url(),
        	'label' => get_post_type_object( get_queried_object()->post_type )->labels->singular_name,
        	'title' => $post_title,
        	'post_type' => get_queried_object()->post_type,
        	// 'download_link' => get_field('download_asset_link'),
        	// 'subparagraph' => get_field('hero_subparagraph', $has_parent),
        	// 'form_header' =>  get_field('form_header'),
        	// 'form_id' => get_field('mkto_form_id'),
        	// 'thumbnail' => get_field('asset_thumbnail', $has_parent ),
        	// 'parent_id' => $has_parent,

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
						
						<div class="flex flex-wrap justify-center md:justify-between items-center mb-4">
							<div class="w-full lg:w-1/2 ">
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