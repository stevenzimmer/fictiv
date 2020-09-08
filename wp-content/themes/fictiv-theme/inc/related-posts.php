<?php 

$related_args = array(
	'posts_per_page' => 2,
    'post_type' => get_queried_object()->post_type,
    'post__not_in' => array( get_the_id(), wp_get_post_parent_id( get_the_id() )  ),
    'post_parent' => 0
);

$related_posts = new WP_Query( $related_args );

if ( $related_posts->have_posts() ) : 
?>
<section class="py-10">
	<div class="container">
		
		<div class="flex justify-center">
			<div class="w-11/12 lg:w-full">
				<div class="mb-2">
					<h3 class="uppercase text-16 font-museo-500 text-grey-600">
						You might also be interested in
					</h3>
				</div>
			</div>
		</div>
		
		<div class="flex flex-wrap -mx-2">
			<?php 
				

				while ( $related_posts->have_posts() ) : 
				    $related_posts->the_post();
			?>
			<div class="w-full lg:w-1/2 px-2 mb-4 lg:mb-0">
				<div class="h-full group relative">
					<a href="<?php the_permalink(); ?>" class="absolute w-full h-full inset-0 z-50"></a>
					<?php 
						if( has_post_thumbnail() ) :
					?>
					<div class="relative h-0" style="padding-bottom: 40.25%">
						
						<img class="absolute w-full h-full inset-0 object-cover" src="<?php the_post_thumbnail_url(); ?>">
					</div>
					<?php 
						else :
					?>
					<div class="w-full h-64 bg-grey-100">
						<div class="flex justify-center items-center h-full">
							Please upload Hero graphic to this post
						</div>
					</div>
					<?php 
						endif;
					?>
					<div class="p-4">
						<h3 class="text-14 font-museo-700">
							<a class="group-hover:text-grey-600" href="<?php the_permalink(); ?>">
								<?php 
									the_title();
								?>
							</a>
							
						</h3>
					</div>
				</div>
				
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
?>