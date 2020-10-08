<?php /* Template Name: Invite a friend */ ?>
<?php 
	get_header();
	if ( have_posts() ) : 

    	while ( have_posts() ) : 
       		the_post();
?>
<header class="py-32 bg-teal-lighter">
	<div class="container">
		<div class="flex flex-wrap -mx-6">
			<div class="lg:w-1/2 px-6">
				<?php 
					if ( has_post_thumbnail() ) :
					
				?>
				<div class="mb-6">
					<img class="lazyload" alt="<?php the_title() ?> thumbnail graphic" data-src="<?php the_post_thumbnail_url(); ?>">
				</div>
				<?php 
					endif;
				?>
				<div class="page-content text-blue-dark">
					<?php 
						the_content();
					?>
				</div>
			</div>
			<div class="lg:w-1/2 px-6">
				<div class="bg-white p-8">
					<?php 
						if( get_field('form_header') ) :
					?>
					<div class="text-center mb-4 text-24">
						<h3 class="text-blue-dark font-museo-700">
							<?php 
								the_field('form_header');
							?>
						</h3>
					</div>
					<?php 
						endif;
					?>
					<div class="mb-4">
						<!-- Form -->
						<form data-form-type="invite-friend" class="mktoForm " data-formId="<?php the_field('mkto_form_id'); ?>"></form>
					</div>

					<?php 
						get_template_part('partials/gdpr', 'text');
					?>
					
				</div>
			</div>
		</div>
	</div>
</header>

<?php 
		endwhile;
	endif;
	get_footer();
?>