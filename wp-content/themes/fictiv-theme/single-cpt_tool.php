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

?>

<header class="relative pt-12 md:pt-24 pb-0">
	<div class="absolute w-full h-full bg-cover bg-center inset-0 lazyload"  data-bg="url(<?php echo $hero_graphic; ?>)"></div>
	<div class="absolute w-full h-full inset-0 bg-black opacity-75"></div>
	<div class="container relative">
		<div class="flex justify-center">
			<div class="w-full lg:w-10/12">
				<div class="flex flex-wrap justify-center lg:justify-start -mx-4">
					<div class="w-11/12 lg:w-1/2 px-4 mb-6 lg:mb-0">
				
						<div class="pt-4 mb-2">
							<p class=" uppercase font-museo-700 text-grey-400 text-14">
								<?php 

									if ( get_field('hero_label', $has_parent ) ) :					
						
										the_field('hero_label', $has_parent);
									
									else :

										echo get_post_type_object( get_queried_object()->post_type )->labels->singular_name;
								
									endif;
								?>
							</p>
						</div>
					
						<div>
							<h1 class="text-white font-museo-500 text-3 leading-tight"><?php echo $post_title; ?></h1>
						</div>
						<?php 
							if ( get_field( 'download_asset_link' ) ) :
						?>
						<div class="mt-4">
							<a target="_blank" class="btn btn-download" href="<?php the_field('download_asset_link') ?>">download now</a>
						</div>
						<?php 
							endif;


							if ( get_field('hero_subparagraph', $has_parent && $has_parent ) ) :					
						?>
						<div>
							<p class="text-white text-20">
								<?php 
									the_field('hero_subparagraph', $has_parent);
								?>
							</p>
						</div>
						<?php 
							endif;
						?>
				
					</div>
					<div class="w-full lg:w-1/2 px-4 lg:h-64">
						
						<?php 
							if( !$has_parent ) :
						?>
						<div class="bg-white h-full p-4 ">
						<?php


								asset_form( get_field('form_header'), get_field('mkto_form_id') );
						?>
						</div>			
						
						<?php
							else :

								if( get_field( 'asset_thumbnail', $has_parent ) ) :
				
						?>
						<div class="">
							<img class="mx-auto lazyload" alt="<?php the_title(); ?> thumbnail" data-src="<?php 
								the_field('asset_thumbnail', $has_parent );
							?>">
						</div> 
						<?php
								endif;
							endif;

						?>

					</div>
					
				</div>
			</div>
		</div>
	</div>
</header>

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
						
						<div class="post-content ebook">
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
	
	if( get_field('mkto_form_id') ) :

?>
<script type="text/javascript">
	MktoForms2.loadForm("//info.fictiv.com", "852-WGR-716", <?php the_field('mkto_form_id'); ?>);
	MktoForms2.whenReady( function( form ) {
		form.onSuccess( function( e ) {
			window.location = window.location.origin + window.location.pathname + 'thanks/';
			return false;
		});
	});
	// // MktoForms2.loadForm("//info.fictiv.com", "852-WGR-716", 937 );
 // // 	MktoForms2.whenReady( function( form ) {
 // //      if( form.getId() === 937 ) {
 // //          const subscribeHeader = document.getElementById('subscribe-header');
 // //          const formWrapper = document.getElementById('form-wrapper');
 // //          form.onSuccess( function( e ) {
 // //              subscribeHeader.innerText = "Thank you for Subscribing!"
 // //              formWrapper.style.display = 'none';
 // //              return false;
 // //          });
 // //      }
 //  });
</script>

<?php 
		endif;
		endwhile;
	endif;
	get_footer();
?>