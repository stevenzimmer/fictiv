<?php /* Template Name: Become a Partner */ ?>
<?php 
	get_header();
	// the_title();
	if ( have_posts() ) :
		while( have_posts() ) : 
			the_post();

		?>
		<div class="post-content">
			<?php the_content(); ?>
		</div>
<?php

		endwhile;
	
	if ( have_rows( 'bap_quotes' ) ) :
?>
<section class="bg-grey-100 section">
	<div class="container">
		<div class="flex flex-wrap -mx-6 justify-center lg: justify-start">
			<?php 
				while( have_rows('bap_quotes') ) :
					the_row();
			?>
			<div class="w-11/12 lg:w-1/2 px-6 mb-8 lg:mb-0">
				<div class="flex justify-between flex-wrap">
					<div class="w-full md:w-3/12 mb-8 lg:mb-0">
						
						<div class="h-24 w-24 mx-auto">
							<img alt="<?php the_sub_field('bp_quote_name') ?> headshot" class="rounded-full w-full h-full block mx-auto" src="<?php the_sub_field('bp_quote_headshot') ?>">
						</div>
					</div>
					<div class="w-full md:w-9/12">
						
						<div class="border-l-2 border-teal-dark pl-8 mb-4">
							<p class="text-blue-dark text-20 leading-tight font-museo-500"><?php the_sub_field('bp_quote_text') ?>
						</div>
						<div class="border-b border-grey-light pb-4">
							<h3 class=" font-museo-700 "><?php the_sub_field('bp_quote_name') ?></h3>
							<p class=""><?php the_sub_field('bp_quote_title') ?></p>
						</div>
						<div class="py-4">
							<p class="text-blue-dark text-12 mb-4 italic font-museo-500">
								<?php the_sub_field('bp_quote_cta_text') ?>
							</p>
							<?php 
								if ( !empty( get_sub_field('bp_quote_cta') ) ) :
									
								
							?>
							<a class="btn btn-primary" href="<?php echo get_sub_field('bp_quote_cta')['url']; ?>"><?php echo get_sub_field('bp_quote_cta')['title']; ?></a>
							<?php 
								endif;
							?>
						</div>

					</div>	
				</div>
				
			</div>
			<?php 
				endwhile;
			?>
		</div>
	</div>
</section>
<?php
	
	else :


?>
<section class="bg-grey-100 section">
	<div class="container">
		<div class="flex flex-wrap -mx-6 justify-center lg: justify-start">
			<?php 
				$quotes = array(
					array(
						'img' => '',
						'name' => 'Brian Kippen',
						'title' => 'Owner of KaD Models & Prototypes',
						'quote' => '“Since Fictiv handles the quoting for their customers, I get to dedicate more time to revenue-generating work"',
						'cta_text' => 'Learn how KaD Models & Prototypes generated over $700,000 in revenue in 18 months with Fictiv.',
						'cta_link' => '#'
					),
					array(
						'img' => '',
						'name' => 'Don Goossens',
						'title' => 'Owner of Goose Manufacturing',
						'quote' => '"With the simplicity of the online manufacturing platform, we were able to capture work regularly over the course of 12 months"',
						'cta_text' => 'How a trusted Silicon Valley machine shop uses Fictiv to fill empty production schedule gaps and generate an extra $250,000 in annual revenue.',
						'cta_link' => '#'
					),
				);
				foreach  ( $quotes as $i => $quote ) :
			?>
			<div class="w-11/12 lg:w-1/2 px-6 mb-8 lg:mb-0">
				<div class="flex justify-between flex-wrap">
					<div class="w-full md:w-3/12 mb-8 lg:mb-0">
						
						<div class="h-24 w-24 mx-auto">
							<img alt="<?php echo $quote['name'] ?> headshot" class="rounded-full w-full h-full block mx-auto" src="<?php echo get_template_directory_uri() . '/assets/images/headshots/' .  
								str_replace(' ', '-', strtolower( $quote['name'] )) . '.jpg'; ?>;
							?>">
						</div>
					</div>
					<div class="w-full md:w-9/12">
						
						<div class="border-l-2 border-teal-dark pl-8 mb-4">
							<p class="text-blue-dark text-20 leading-tight font-museo-500"><?php echo $quote['quote']; ?></p>
						</div>
						<div class="border-b border-grey-light pb-4">
							<h3 class=" font-museo-700 "><?php echo $quote['name']; ?></h3>
							<p class=""><?php echo $quote['title']; ?></p>
						</div>
						<div class="py-4">
							<p class="text-blue-dark text-12 mb-4 italic font-museo-500">
								<?php echo $quote['cta_text']; ?>
							</p>
							<!-- <a class="btn btn-primary" href="<?php // echo $quote['cta_link']; ?>">Read case study</a> -->
						</div>

					</div>	
				</div>
				
			</div>
			<?php 
				endforeach;
			?>
		</div>
	</div>
</section>

<?php 
	endif;
	if( get_field('mkto_form_id') ) :
?>

<section class="py-20" id="application-form">
	<div class="container">
		<div class="flex justify-center">
			<div class="w-11/12 sm:w-7/12 md:w-6/12 lg:w-5/12">
				<div class="bg-white shadow-lg p-8">
					<div>
						<!-- Form title set in marketo -->
			            <form class="mktoForm" data-form-type="global" data-formId="<?php the_field('mkto_form_id');  ?>"></form>

						<div class="text-center mt-2 subscribe-form-terms">

					        <?php 
					            get_template_part('partials/gdpr', 'text');
					        ?>
					    
					    </div>
						<div class="global-form-success text-center hidden">
							<?php 

								if ( get_field('form_thank_you_message') ) :
								
							?>
							<div class="font-museo-500 text-grey-400">
								<?php 
									the_field('form_thank_you_message');
								?>
							</div>

							<?php 
								else :
							?>

							<div>
								<h2 class="font-museo-700 text-grey-400">
									Thank you for your submission! 
								</h2>
								<p class="font-museo-500 text-grey-600">
									Confirmation email is on its way.
								</p>
							</div>
							<?php
								endif;
							?>
							
						</div>
		            </div>
				</div>
			</div>
		</div>
	</div>
</section>

 <?php 

	endif;
	endif;

	get_footer();
?>