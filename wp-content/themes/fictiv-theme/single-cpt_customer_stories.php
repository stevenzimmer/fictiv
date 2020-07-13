<?php 
get_header();

if ( have_posts() ) : 

    while ( have_posts() ) : 
        the_post();

?>
<header class="py-32">
	<div class="container">
		<div class="flex justify-center mb-8">
			<div class="md:w-8/12">
				<p>
					<a href="<?php echo get_post_type_archive_link( get_queried_object()->post_type ); ?>" class="text-blue-light">View all Customer Stories</a>
				</p>
			</div>
		</div>
		<div class="flex justify-center ">
			<div class="md:w-6/12 text-center">
				<?php 
					if( get_field('customer_logo') ) :
				?>
				<div class="mb-8">
					<img width="200" class="mx-auto" src="<?php the_field('customer_logo'); ?>">
				</div>
				<?php 
					endif;
				?>
				<div class="mb-4">
					<p class="uppercase text-teal-dark font-museo-500">
						fictiv customer story
					</p>
				</div>
				<div class="text-20">
					<?php 
						the_excerpt();
					?>
				</div>
			</div>
			
		</div>
		<?php 
			if( get_field('youtube_id') ) :
		?>
		<div class="flex justify-center mt-8">
			<div class="md:w-8/12">
				<div class="w-full relative h-0" style="padding-bottom: 56.25%">
					<iframe class="absolute w-full h-full inset-0" src="https://www.youtube.com/embed/<?php the_field('youtube_id'); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				
			</div>
		</div>
		<?php 
			endif;
		?>
	</div>
</header>
<section>
	<div class="container">
		<div class="flex justify-center">
			<div class="md:w-8/12">
				<div class="flex">
					<div class="w-7/12">
						<div>
							<!-- Images -->
						</div>
					</div>
					<div class="w-5/12">
						<?php 
							$sidebar_boxes = array(
								array(
									'title' => 'About the team',
									'boxes' => array(
										'Industry',
										'Product',
										'Year Founded',
										'Location'
									)
								),

								array(
									'title' => 'Why Fictiv',
									'boxes' => array(
										'Reason to Try',
										'Favorite features',
										'Result'
									)
								),
							);

							foreach ( $sidebar_boxes as $i => $sidebar ) :
						?>

						<div class="border border-grey-200 p-8 mb-4 last:mb-0">

							<div class="mb-4">
								<p class="text-30"><?php echo $sidebar['title']; ?></p>
							</div>
							<?php 
								foreach ( $sidebar['boxes'] as $j => $box ) :
							
									if ( get_field( strtolower( str_replace(' ', '_', $sidebar['title'] ) ) . '_' . strtolower( str_replace(' ', '_', $box ) )) ) :
						
								?>
								<div class="mb-4 last:mb-0">
									<p> <strong><?php echo $box; ?>: </strong> <?php the_field( strtolower( str_replace(' ', '_', $sidebar['title'] ) ) . '_' . strtolower( str_replace(' ', '_', $box ) ) ); ?></p>
								</div>
								<?php 
									endif;
								
								endforeach;
							?>
						
						</div>

						<?php
							endforeach;
						?>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="relative section">
	<div class="container">
		
		<div class="post-content border-t border-grey-200 section flex flex-col items-center">
			<?php the_content(); ?>
		</div>
				
	</div>
</section>
<?php 
	endwhile;
endif;
get_footer();
?>