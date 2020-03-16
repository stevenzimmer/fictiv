<?php 
get_header();
if ( have_posts() ) : 

    while ( have_posts() ) : 
        the_post();
        $hwg_cats = get_the_terms( get_the_id(), 'fictiv_hwg_category' );
        // print_r( $terms );
?>
<article>
	<div class="container">
		<div class="flex justify-center">
			<div class="w-10/12 ">
				<div>
					<p>
						Written by: <?php the_author(); ?>
					</p>
				</div>
				<div class="hwg-breadcrumbs">
					<a href="<?php echo get_post_type_archive_link( 'cpt_hwg' ); ?>">
						HWG
					</a>
					/ 
					<a href="<?php echo get_category_link( $hwg_cats[0]->term_id ); ?>">
						<?php 
							echo $hwg_cats[0]->name;
						?>
					</a>
				</div>
				<div class="post-content">
					<div>
						<h1><?php the_title(); ?></h1>
					</div>
					<div class="">
						<?php 
							the_content();
						?>
					</div>
				</div>
				
			</div>	
		</div>
	</div>
</article>

<?php
	endwhile;
endif;
get_template_part('partials/footer', 'cta');
get_footer();
?>