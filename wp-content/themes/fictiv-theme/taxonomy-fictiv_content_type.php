<?php 
get_header();
print_r( get_queried_object() );

if ( have_posts() ) : 
    
?>
<section class="py-40">
	<div class="container">
		<div class="flex -mx-4">
		<?php 
			while ( have_posts() ) : 
        		the_post();
    	        $content_types = get_the_terms( get_the_id(), 'fictiv_content_type' );
		        $topics = get_the_terms( get_the_id(), 'fictiv_topic' );
		        $topic_name = $topics[0]->name;
		        $topic_link = get_category_link( $topics[0]->term_id );
		        $content_type_name = $content_types[0]->name;

		?>
			<div class="lg:w-1/3 px-4">
				<div class="relative h-0 mb-2" style="padding-bottom: 56.25%">
					 <img class="absolute inset-0 w-full h-full" src="<?php the_post_thumbnail_url(); ?>">
				</div>
				<div>
					<div>
						<a title="See more <?php echo $topic_name ?> <?php echo $content_type_name; ?>s" href="<?php echo $topic_link ?>">
							<?php echo $topic_name; ?>
						</a>
					</div>
					<a href="<?php the_permalink(); ?>">
						<?php the_title(); ?>
					</a>
				</div>
			</div>
		<?php 
			endwhile;
			wp_reset_postdata();
		?>
	</div>
</section>
<?php 
endif;
get_footer();
?>