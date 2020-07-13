<?php 
get_header();

$archive_name = ( is_tax() ? get_queried_object()->name : get_queried_object()->labels->name );

$resource_type = ( is_tax() ? get_queried_object()->taxonomy . '-' .get_queried_object()->slug : get_queried_object()->name );

$body_heading = ( is_tax() ? $archive_name . ' ' . get_taxonomy( get_queried_object()->taxonomy )->label : get_queried_object()->labels->name );
?>
<header class="relative py-32">
	<div class="absolute w-full h-full bg-cover bg-center inset-0"  style="background-image: url(<?php // the_post_thumbnail_url(); ?>);"></div>
	<div class="absolute w-full h-full inset-0 bg-black opacity-50"></div>
	<div class="container relative">
		<div>
			<div>
				<p class="text-white">
					<a >
						<?php 
							echo $archive_name;
						?>
					</a>
					
				</p>
			</div>
			<div>
				<h1 class="text-white">
					<?php echo get_queried_object()->description; ?>
				</h1>
			</div>
		</div>
	</div>
</header>

<?php
if ( have_posts() ) :
?>
<section>
	<div class="container">
		<div >
			<h3 class="mb-8 font-museo-900">
			Read the latest
			<?php 
				
				echo $body_heading;
		
			?></h3>		
		</div>
			
		<div class="flex" data-resource-type="<?php echo $resource_type; ?>" data-count="<?php // echo $term->count ?>">
<?php

	while( have_posts() ) :
		the_post();
?>
			<div class="mb-12 lg:w-1/3">
			    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>  
			</div>
<?php
	endwhile;
	wp_reset_postdata();
?>
		</div>
	</div>
</section>
<?php

endif;    
get_footer();
?>