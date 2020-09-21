<?php 
get_header();
// print_r( get_queried_object() );
// $post_taxonomies = get_object_taxonomies( get_queried_object()->post_type, 'objects' );

// print_r( $post_taxonomies );
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
				<div class="mb-6">
					<?php 
						get_template_part('partials/single', 'breadcrumbs');
					?>
				</div>
				<?php 
				
					if ( !$has_parent ) :
				?>
				<div class="flex flex-wrap justify-center lg:justify-start -mx-6">
				
					<div class="w-full lg:w-1/2 px-6">
						
						<div class="post-content resource">
							<?php 
								echo get_post_field( 'post_content', $has_parent );
							?>
						</div>
					</div>
					<div class="w-full lg:w-1/2 px-6">
						<img class="lg:mx-auto" alt="<?php the_title(); ?> thumbnail" src="<?php 
							the_field('asset_thumbnail', $has_parent );
						?>">
					</div>
				
				</div>

				<?php 
					else :
				?>
				
				<div class="flex flex-wrap justify-center md:justify-start -mx-6">
					<div class="w-11/12 lg:w-1/2 px-6">
						
						<div class="post-content ebook mb-6">
							<p>
								You can download now, or check your inbox for a download link at your own convenience.
							</p>
						</div>

						<?php 
							if ( get_field('download_asset_link') ) :
							
						?>
						<div>
							<a target="_blank" href="<?php the_field('download_asset_link') ?>" class="btn btn-primary">download ebook</a>
						</div>
						<?php 
							endif;
						?>
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

	if ( $has_parent ) :

		include( get_template_directory() . '/inc/related-posts.php');
	
	endif;
	
		endwhile;
	endif;
	get_footer();
?>