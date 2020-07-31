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

        $tool_label = ( get_field('hero_label', $has_parent ) ? 
        		get_field('hero_label', $has_parent)

        	: 
        		get_post_type_object( get_queried_object()->post_type )->labels->singular_name
        );				
        $form_header = (get_field('form_header') ? get_field('form_header') : 'download now' );	
					
					

        $args = array(
        	'bg' => $hero_graphic,
        	'label' => $tool_label,
        	'title' => $post_title,
        	'post_type' => get_queried_object()->post_type,
        	'download_link' => get_field('download_asset_link'),
        	'subparagraph' => get_field('hero_subparagraph', $has_parent),
        	'form' => array(
        		'header' => $form_header,
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
			<div class="w-full lg:w-10/12">
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

					<?php 
						if( get_field( 'asset_thumbnail', $has_parent ) ) :
					?>
					<div class="w-full lg:w-1/2 px-6">
						<img class="lg:mx-auto" alt="<?php the_title(); ?> thumbnail" src="<?php 
							the_field('asset_thumbnail', $has_parent );
						?>">
					</div>
					<?php 
						endif;
					?>
				
				</div>
				<?php 
					else :
				?>
				<div class="flex flex-wrap justify-center md:justify-start -mx-6">
				
					<div class="w-11/12 lg:w-1/2 px-6">
						<div class="post-content ebook">
							<p>
								You can download now, or check your inbox for a download link at your own convenience.
							</p>
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

	if ( $has_parent ) :

		include( get_template_directory() . '/inc/related-posts.php');
	
	endif;
	
		endwhile;
	endif;
	get_footer();
?>