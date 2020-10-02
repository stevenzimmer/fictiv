<?php 
/* 	Template Name: Landing page w/form
*/ 
get_header();

if ( have_posts() ) : 

    while ( have_posts() ) : 
        the_post();

        include( get_template_directory() . '/inc/post-topics.php');
        include( get_template_directory() . '/inc/hero-vars.php');

        $args = array(
        	'bg' => $hero_graphic,
        	'label' => get_field('hero_label', $has_parent),
        	'title' => $post_title,
        	'post_type' => get_queried_object()->post_type,
        	'download_link' => get_field('download_asset_link'),
        	'subparagraph' => get_field('hero_subparagraph', $has_parent),
        	'form' => array(
        		'header' => get_field('form_header'),
        		'id' => get_field('mkto_form_id')
        	),
        	'thumbnail' => get_field('asset_thumbnail', $has_parent ),
        	'parent_id' => $has_parent,

        );

        hero_section( $args );

?>

<section class="py-10">
	<div class="container">
		<div class="flex justify-center flex-wrap">
			<div class="w-full lg:w-10/12 px-5 lg:px-0">
				
				<?php 
				
					if ( !$has_parent ) :
				
				?>
				<div class="flex flex-wrap justify-center lg:justify-start -mx-6">
				
					<div class="w-full lg:w-1/2 px-6">
						
						<div class="post-content resource">
							<?php 
								the_content();
							?>
						</div>
					</div>
					<div class="w-full lg:w-1/2 px-6">
						<?php 

							if ( get_field('asset_thumbnail', $has_parent ) ) :
							
						?>
						<img class="lg:mx-auto" alt="<?php the_title(); ?> thumbnail" src="<?php 
							the_field('asset_thumbnail', $has_parent );
						?>">
						<?php 

							endif;
						
						?>
					</div>
				
				</div>

				<?php 
					else :
				?>
				
				<div class="flex flex-wrap justify-center md:justify-start -mx-6">
					<div class="w-11/12 lg:w-1/2 px-6">
						
						<div class="post-content ebook mb-6">
							<?php 
							
								if ( !get_post_field( 'post_content' ) ) :
							
							?>
							<p>
								You can download now, or check your inbox for a download link at your own convenience.
							</p>
							<?php 
							
								else :
						
									the_content();
							
								endif;
							?>
						</div>
					</div>
				</div>
				<?php
					endif;
				?>
			</div>
		</div>
	</div>
</section>
<?php 

	if ( get_field('add_resources') ) :
?>
<section class="py-10">
	<div class="container">
		
		<div class="flex justify-center">
			<div class="w-11/12 lg:w-full">
				<div class="mb-2">
					<h3 class="uppercase text-16 font-museo-500 text-grey-600">
						You might also be interested in
					</h3>
				</div>
			</div>
		</div>
		
		<div class="flex flex-wrap -mx-2">
			<?php 
				
				foreach ( get_field('add_resources') as $i => $resource_id ) :
		
				
					
					$arr = array(
				    	'link' => get_the_permalink( $resource_id ),
				    	'img' => get_the_post_thumbnail_url($resource_id ),
				    	'title' => get_the_title($resource_id),
				    	'excerpt' => get_the_excerpt($resource_id)
				    );



			?>
			<div class="w-full lg:w-1/2 px-2 mb-4 lg:mb-0">
				<?php 
					related_content_module( $arr );
				?>
			</div>
			<?php
				endforeach;

				
			?>
			
		</div>
	</div>
		
</section>
<?php
	
	endif;
	
		endwhile;
	endif;
	get_footer();
?>