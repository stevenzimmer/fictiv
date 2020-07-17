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
        $on_demand = get_field('webinar_on-demand', $has_parent);
        $label_text = ( $on_demand ? 'On-demand' : 'upcoming' );
        $form_header_text = ( $on_demand ? 'Watch the recording' : 'Register now' );
        $hero_graphic = ( $has_parent ? get_the_post_thumbnail_url( $has_parent ) : get_the_post_thumbnail_url() );
        $webinar_title = get_the_title( $has_parent );
        $webinar_date = get_field('webinar_date', $has_parent);
        $webinar_time = get_field('webinar_time', $has_parent);
?>
<header class="relative pt-12 md:pt-20 ">
	<div class="absolute w-full h-full bg-cover bg-center inset-0"  style="background-image: url(<?php echo $hero_graphic; ?>)"></div>
	<div class="absolute w-full h-full inset-0 bg-black opacity-50"></div>
	<div class="container relative">
		<div class="flex justify-center">
			<div class="w-full lg:w-10/12">
				<div class="flex flex-wrap justify-center lg:justify-start -mx-4">
					<div class="w-11/12 lg:w-1/2 px-4 mb-6 lg:mb-0">
						<div class="pt-4 mb-2">
							<p class="text-white uppercase font-museo-700 text-grey-400 text-14">
								<?php 
									echo $label_text . ' ' . get_post_type_object( get_queried_object()->post_type )->labels->singular_name;
								?>
						
							</p>
						</div>
						<div >
							<h1 class="text-white font-museo-500 text-3 leading-tight"><?php echo $webinar_title; ?></h1>
						</div>
						<?php 
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

							if ( !$on_demand && $webinar_date ) :
							
						?>
						<div class="mt-2">
							<p class="text-white font-museo-500">
								<?php 
									echo $webinar_date . ', &nbsp;' . $webinar_time;
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
									<p class="uppercase font-museo-700 text-grey-400 text-14"><?php 

										if( get_field('form_header') ) :

											the_field('form_header');
										
										else :

											echo $form_header_text;

										endif;
									?></p>
								</div>
								<div class="">
									<form class="form-webinar h-56" id="mktoForm_<?php the_field('mkto_form_id'); ?>"></form>
								</div>
								<div class="text-center">

									<?php 
										get_template_part('partials/gdpr', 'text');
									?>
								
								</div>
							
							</div>
							
						</div>							
						
						<?php
							elseif( $has_parent && !get_field( 'webinar_youtube_id', $has_parent )  ) :
						?>
						<div class="bg-white h-full p-4 ">
							<div class="post-content">
								<?php
									the_content();
								?>
							</div>
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
					if( $has_parent && $on_demand ) :
				?>
				<div class="relative h-0 p-0 overflow-hidden mb-6" style="padding-top: 56.25%">
					<iframe class="w-full h-full absolute inset-0" src="https://www.youtube.com/embed/<?php echo get_field('webinar_youtube_id', $has_parent); ?>?rel=0&enablejsapi=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				<?php 

					else :
				?>
				<div>
					<?php 

					?>
				</div>
				<?php 
					endif;
				?>
				<div class="flex flex-wrap justify-center md:justify-start -mx-6">
				
					<div class="w-11/12 lg:w-1/2 px-6">
						
						<div class="post-content">
							<?php 
								echo get_post_field('post_content', $has_parent);
							?>
						</div>
					</div>
					<div class="w-11/12 lg:w-1/2 px-6">
						<?php 
							if( have_rows('webinar_hosts', $has_parent) ):
						?>
						<div class="mb-2">
							<p class="text-white uppercase font-museo-700 text-grey-400 text-14">
								Hosted by
							</p>
						</div>
						<?php 

							    while( have_rows('webinar_hosts', $has_parent) ) : 
							    	the_row();
						?>
						<div class="flex flex-wrap mb-6 -mx-2">
							<div class="w-1/3 px-2 mb-2 lg:mb-0">
								<img alt="<?php the_sub_field('webinar_host_name'); ?> headshot" src="<?php the_sub_field('webinar_host_headshot'); ?>">
							</div>
							<div class="w-full md:w-2/3 px-2">
								<p class="text-teal-light font-museo-500">
									<?php the_sub_field('webinar_host_name'); ?>
								</p>
								<p class="text-12 text-grey-600 font-museo-500 mb-4">
									<?php the_sub_field('webinar_host_title'); ?>
								</p>
								<p class="text-12 text-grey-600 font-museo-500">
									<?php the_sub_field('webinar_host_bio'); ?>
								</p>
							</div>
						</div>
						<?php 
							endwhile;
						endif;
						?>
					</div>
				
				</div>
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