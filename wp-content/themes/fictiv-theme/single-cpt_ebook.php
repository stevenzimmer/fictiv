<?php 
get_header();
// print_r( get_queried_object() );
// $post_taxonomies = get_object_taxonomies( get_queried_object()->post_type, 'objects' );

// print_r( $post_taxonomies );
if ( have_posts() ) : 

    while ( have_posts() ) : 
        the_post();
        $has_parent = wp_get_post_parent_id( get_the_id() );
        // print_r( $parent );
        $topics = get_the_terms( $has_parent, 'fictiv_topic' );
        $topic_link = get_category_link( $topics[0]->term_id );
        $topic_name = $topics[0]->name;

        $hero_graphic = ( $has_parent ? get_the_post_thumbnail_url( $has_parent ) : get_the_post_thumbnail_url() );

        $post_title = ( $has_parent ? 'Thank you for signing up for our exclusive content' : get_the_title( $has_parent ) );

?>

<header class="relative pt-12 md:pt-20 ">
	<div class="absolute w-full h-full bg-cover bg-center inset-0"  style="background-image: url(<?php echo $hero_graphic; ?>)"></div>
	<div class="absolute w-full h-full inset-0 bg-black opacity-50"></div>
	<div class="container relative">
		<div class="flex justify-center">
			<div class="w-full lg:w-10/12">
				<div class="flex flex-wrap justify-center lg:justify-start -mx-4">
					<div class="w-11/12 lg:w-1/2 px-4 mb-6 lg:mb-0">
						<?php 
							if ( get_field('hero_label', $has_parent ) ) :					
						?>
						<div class="pt-4 mb-2">
							<p class="text-white uppercase font-museo-700 text-grey-400 text-14">
								<?php 
									the_field('hero_label', $has_parent);
								?>
							</p>
						</div>
						<?php 
							endif;
						?>
						<div>
							<h1 class="text-white font-museo-500 text-3 leading-tight"><?php echo $post_title; ?></h1>
						</div>
						<?php 
							if ( get_field( 'download_asset_link' ) ) :
						?>
						<div class="mt-4">
							<a class="btn btn-download" href="<?php the_field('download_asset_link') ?>">download now</a>
						</div>
						<?php 
							endif;
							if ( get_field('hero_subparagraph', $has_parent ) ) :					
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
							
							<div>
								<div class="mb-2">
									<p class="uppercase font-museo-700 text-grey-400 text-14"><?php the_field('form_header'); ?></p>
								</div>
								<div class="">
									<form class="form-underline h-56" id="mktoForm_<?php the_field('mkto_form_id'); ?>"></form>
								</div>
								<div class="text-center">

									<?php 
										get_template_part('partials/gdpr', 'text');
									?>
								
								</div>
							
							</div>
							
						</div>							
						
						<?php
							else :
						?>
						<div class="">
							<img class="mx-auto" alt="<?php the_title(); ?> thumbnail" src="<?php 
								the_field('asset_thumbnail', $has_parent );
							?>">
						</div> 
						<?php
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
				<div class="flex justify-center">
					<div class="w-11/12 md:w-full">
						<div class="mb-6 font-museo-500 text-14 text-grey-300 ">
							<a class="hover:text-grey-600" href="#">Home</a> / <a class="hover:text-grey-600" href="<?php echo get_post_type_archive_link( get_queried_object()->post_type ); ?>"><?php 
								echo get_post_type_object( get_queried_object()->post_type )->labels->name;
							?></a>
						
						</div>
					</div>
				</div>
				
				<?php 
					if ( !$has_parent ) :
				?>
				<div class="flex flex-wrap justify-center md:justify-start -mx-6">
				
					<div class="w-11/12 lg:w-1/2 px-6">
						
						<div class="post-content ebook">
							<?php 
								echo get_post_field( 'post_content', $has_parent );
							?>
						</div>
					</div>
					<div class="w-11/12 lg:w-1/2 px-6">
						<img class="mx-auto" alt="<?php the_title(); ?> thumbnail" src="<?php 
							the_field('asset_thumbnail', $has_parent );
						?>">
					</div>
				
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