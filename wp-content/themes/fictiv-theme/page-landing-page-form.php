<?php 
/* 	Template Name: Landing page w/form
*/ 
// Template used to create landing pages with forms similar to eBook/webinar templates
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
        	'post_type' => 'cpt_ebook',
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
					endif;
				?>
			</div>
		</div>
	</div>
</section>
<?php 

	resources_module();
		
		endwhile;
	endif;
	get_footer();
?>