<?php 
	function hero_section() {
?>
<header class="relative pt-24 pb-0 ">
	<div class="absolute w-full h-full bg-cover bg-center inset-0"  style="background-image: url(<?php echo $hero_graphic; ?>);"></div>
	<div class="absolute w-full h-full inset-0 bg-black opacity-75"></div>
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
							
							<?php 
								
								asset_form( $form_header_text, get_field('mkto_form_id') );
							?>
							
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
<header class="relative pt-24 pb-12 lg:pt-32 lg:pb-16 hidden">
	<div class="absolute w-full h-full bg-cover bg-center inset-0"  style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>
	<div class="absolute w-full h-full inset-0 bg-black opacity-75"></div>
	<div class="container relative">
		<div class="flex justify-center">
			<div class="w-11/12 md:w-full lg:w-10/12">
				<div>
					<p class="text-white uppercase font-museo-700 text-grey-400">
						<?php 
							echo get_post_type_object( get_queried_object()->post_type )->labels->singular_name;
						?>
				
					</p>
				</div>
				<div>
					<h1 class="text-white font-museo-500 leading-tight"><?php the_title(); ?></h1>
				</div>
			</div>
		</div>
	</div>
</header>
<?php
	}
?>