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
					
					$arr = array(
				    	'link' => get_the_permalink(),
				    	'img' => get_the_post_thumbnail_url(),
				    	'title' => get_the_title(),
				    	'excerpt' => get_the_excerpt()
				    );



			?>
			<div class="w-full lg:w-1/2 px-2 mb-4 lg:mb-0">
				<?php 
					related_content_module( $arr );
				?>
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