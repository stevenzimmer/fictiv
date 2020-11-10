<?php 
get_header();

while ( have_posts() ) :

    the_post();

    // include( get_template_directory() . '/inc/post-topics.php');

    $parent_id = wp_get_post_parent_id( get_the_id() );

    $masterclass_modules = get_children( array(
		'posts_per_page' => -1,
		'post_parent' => get_the_id(),
		'post_status' => 'publish',
		'orderby'=>'menu_order', 
		'order' => 'ASC'
	));

    $module_ids = array();

	foreach ( $masterclass_modules as $i => $module ) :

		if( get_post_field( 'menu_order', $i ) ) :
				
			array_push( $module_ids, $i );
		
		endif;

	endforeach;

	$arr_length = count( $module_ids );


	include( get_template_directory() . '/partials/masterclass/module-hero.php');
  
?>

<section class="py-20 ">
	<div class="container">
		
		<div class="flex justify-center">
			<div class="w-11/12 lg:px-2">
			
				<div class="">
					<div class="mb-12">
						<?php 
							get_template_part('partials/single', 'breadcrumbs');
						?>
					</div>

					<div class="post-content masterclass">
						
					
					<?php 
						the_content();
					?>

					</div>
					
				</div>
			</div>
		</div>
	</div>
</section>

<section class="py-20 bg-blue-lighter">
	<div class="container">
		
		<div class="flex justify-center">
			<div class="w-11/12 lg:px-2">

				<?php 
					if ( have_rows('learning_takeaways') ) :
					
				?>
				<div class="mb-4 text-center">
					<h3 class="text-20 md:text-29 font-museo-700 text-black">You’ll walk away knowing</h3>
				</div>
				<div class="flex flex-wrap justify-center -mx-6">
					<?php 
						
						$i = 1;
						while ( have_rows('learning_takeaways') ) :
							the_row();
						
					?>
					<div class="w-full md:w-1/3 p-6">
						<div class="text-center">
							<div class="mb-6">
								<img width="60" alt="Takeaway item <?php echo $i; ?>" class="mx-auto lazyload" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/takeaway-check.png">
							</div>
							<p class="text-grey-600">
								<?php the_sub_field('ml_takeaway'); ?>
							</p>
						</div>
					</div>

					<?php 
					
						$i++;
						endwhile;

					?>
				</div>

				<?php 
					endif;
				?>
					
			</div>
		</div>
	</div>
</section>
<?php 
	if ( have_rows('promotion_sections') ) :
	
?>
<section class="py-20">
	<div class="container">
		<div class="flex justify-center">
			<div class="w-11/12">
				
			
		<?php 
			while ( have_rows('promotion_sections') ) :
				the_row();
		?>

		<div class="mb-12">

			<?php

				if ( get_sub_field('promotion_section_title') ) :
					
			?>

			<div class="mb-6">
				<h2 class="text-20 md:text-29 text-black font-museo-700"><?php 
					the_sub_field('promotion_section_title');
				?></h2>
			</div>
			<?php 
				endif;
				if ( get_sub_field('promotion_section_paragraph') ) :
					
			?>
			<div class="mb-6">
				<p class="text-grey-600"><?php 
					the_sub_field('promotion_section_paragraph');
				?></p>
			</div>
			<?php 
				endif;

				if ( have_rows('promotion_section_cards') ) :

			?>
			<div class="flex flex-wrap -mx-2">
			<?php	
				while ( have_rows('promotion_section_cards') ) :
					the_row();
			?>
				<div class="w-full lg:w-1/3 px-2 mb-12 lg:mb-0">
					<div class="border border-grey-200">
						<?php 
							if ( get_sub_field('promotion_section_card_graphic') ) :
						?>
						<div class="relative h-0" style="padding-bottom: 56.25%">
							<img class="absolute w-full h-full inset-0 object-cover lazyload" data-src="<?php echo get_sub_field('promotion_section_card_graphic')['sizes']['medium_large']; ?>">
						</div>
						<?php
							else :
						?>
						<div class="bg-grey-100 h-40 w-full"></div>
						<?php
							endif;
						?>
						<div class="px-4 pt-6 ">
							<?php 
								if ( get_sub_field('promotion_section_card_label') ) :
							?>
							<div class="mb-2">
								<p class="uppercase text-grey-400 font-museo-500 text-12">
									<?php 
										the_sub_field('promotion_section_card_label');
									?>
								</p>
							</div>

							<?php 
								endif;
							?>

							<?php 
								if ( get_sub_field('promotion_section_card_title') ) :
							?>
							<div class="h-16">
								<p class="text-20 text-black font-museo-700 ">
									<?php 
										the_sub_field('promotion_section_card_title');
									?>
								</p>
							</div>

							<?php 
								endif;
							?>

						</div>

						<?php 
							if ( get_sub_field('promotion_section_card_description') ) :
						?>
					
						<div class="border-b border-grey-200">
							<div class="px-4 pb-6">
								<div class="">
									<p class="text-grey-600 ">
										<?php 
											the_sub_field('promotion_section_card_description');
										?>
									</p>
								</div>
							</div>
						</div>

						<?php 
							endif;
						?>

						<?php 
							if ( get_sub_field('promotion_section_card_date') ) :
						?>
						<div class="px-4 pt-6 text-grey-600 mb-2">
							<div>
								<p class="">
									<?php 
										the_sub_field('promotion_section_card_date');
									?>
								</p>
							</div>
							<?php 
								if ( get_sub_field('promotion_section_card_time') ) :
							?>
							<div>
								<p>
									<?php 
										the_sub_field('promotion_section_card_time');
									?>
								</p>
							</div>

							<?php 
								endif;
							?>
						</div>

						<?php 
							endif;
						?>
						<?php 
							if ( have_rows('promotion_section_card_details') ) :
						?>
						<div class="">
							
						<?php	
							
								while ( have_rows('promotion_section_card_details') ) :
									the_row();
						
						?>

							<div class="px-4 mb-2 text-grey-600">
								<?php 
									if ( get_sub_field('promotion_section_card_detail_label') ) :
								?>
								<div>
									<p class="font-museo-500 text-12">
										<?php 
											the_sub_field('promotion_section_card_detail_label');
										?>
									</p>
								</div>

								<?php 
									endif;
								?>
								<?php 
									if ( get_sub_field('promotion_section_card_detail_text') ) :
								?>
								<div>
									<p>
										<?php 
											the_sub_field('promotion_section_card_detail_text');
										?>
									</p>
								</div>

								<?php 
									endif;
								?>
							</div>

						<?php 

								endwhile;
						
						?>
						</div>
						<?php
							endif;
						?>
						<?php 
							if ( !empty( get_sub_field('promotion_section_card_details_call_to_action') ) ) :
						?>
						<div class="border-t border-grey-200">
							<div class="p-4 text-center">
								<a class="btn btn-primary" href="<?php 
										echo get_sub_field('promotion_section_card_details_call_to_action')['url'];
									?>">
									<?php 
										echo get_sub_field('promotion_section_card_details_call_to_action')['title'];
									?></a>
									
							</div>
						</div>
						
						<?php 
							else :
						?>
						<div class="border-t border-grey-200">
							<div class="p-4 text-center">
								<p class="btn bg-grey-200 text-white cursor-not-allowed transition-colors duration-200 ease-in-out">
									coming soon
								</p>
									
							</div>
						</div>
						<?php
							endif;
						?>
					</div>
				</div>
			<?php
					endwhile
			?>
			</div>

		<?php 
				endif;
		?>
		</div>
		<?php
			endwhile;

			if ( have_rows('webinar_hosts') ) :
			
		?>

		<div class="pt-20">
			<div class="mb-12">
				<h3 class="text-20 md:text-29 font-museo-700 text-black">Our Featured Presenters</h3>
			</div>
			<div class="flex flex-wrap justify-center md:justify-start -mx-6">
				<?php 
					$i = 0;
					while ( have_rows('webinar_hosts') ) :
						the_row();
				?>
				<div class="w-11/12 md:w-1/2 px-6 mb-24">
					<div class="presenter-profile">
						<div class="flex items-center -mx-4">
							<div class="w-1/3 px-4">
								<div class="relative h-0" style="padding-bottom: 100%">
									<img class="absolute w-full h-full object-cover inset-0 lazyload" data-src="<?php the_sub_field('webinar_host_headshot') ?>">
								</div>
								
							</div>
							<div class="w-2/3 px-4">
								<div>
									<div class="mb-2">
										<p class="text-20 text-black">
											<?php the_sub_field('webinar_host_name'); ?>
										</p>
									</div>
									<div class="mb-2">
										<p class="text-grey-600 font-museo-500">
											<?php the_sub_field('webinar_host_title'); ?>
										</p>
									</div>
									<div>
										<a data-bio="<?php echo $i; ?>" class="bio-trigger text-teal-light hover:text-teal-dark transition-colors duration-200 ease-in-out font-museo-700 cursor-pointer" href="#bio-<?php echo $i; ?>">Read Bio &#9656;</a>
									</div>
								</div>
								
							</div>
						</div>
					
						<div data-bio="<?php echo $i; ?>" class="h-0 overflow-hidden bio-wrapper">
							<div class="p-6">
								<?php the_sub_field('webinar_host_bio'); ?>
							</div>
						</div>
					</div>
				</div>
				<?php 
					$i++;
					endwhile;
				?>
			</div>
		</div>

		<?php 
			endif;
		?>
		
	</div>
</section>

<?php 
	endif;
?>

<section class="py-20 bg-blue-dark">
	<div class="container">
		<div class="text-center">
			<div class="mb-6">
				<h2 class="text-24 md:text-56 font-museo-700 text-white">Let's begin!</h2>
			</div>
			<div class="flex justify-center flex-wrap">
		
				<div class="px-2 mb-6 md:mb-0">
					<a href="<?php echo get_the_permalink( $module_ids[ 0 ] ); ?>" class="btn btn-primary">Start class</a>
				</div>
			
				<div class="px-2">
					<a href="<?php echo get_the_permalink( $module_ids[ $arr_length - 1 ] ); ?>" class="btn btn-primary">Take the test</a>
				</div>
			</div>
			
		</div>
	</div>
</section>
<?php

	endwhile;
	wp_reset_postdata();
	get_footer();
?>