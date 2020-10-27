<?php 
function resources_module( $args = 0 ) {

	if ( get_field('related_resources') ) :

?>
<section class="py-10">
	<div class="container">
		
		<div class="flex justify-center">
			<div class="w-11/12 lg:w-full">
				<div class="mb-2">
					<h3 class="uppercase text-16 font-museo-500 text-grey-600">
						<?php 
							if ( get_field('related_resources_title') ) :

								the_field('related_resources_title');
							
							else :
						?>

						You might also be interested in

						<?php
							endif;
						?>

					</h3>
				</div>
			</div>
		</div>
		
		<div class="flex flex-wrap -mx-2">
			<?php 
				
				foreach ( get_field('related_resources') as $i => $resource_id ) :
					
					$arr = array(
				    	'link' => get_the_permalink( $resource_id ),
				    	'img' => get_the_post_thumbnail_url($resource_id ),
				    	'title' => get_the_title($resource_id),
				    	'excerpt' => get_the_excerpt($resource_id)
				    );

			?>
			<div class="w-full lg:w-1/2 px-2 mb-4 lg:mb-0">
				<?php 
					related_content_module( $arr );
				?>
			</div>
			<?php
				endforeach;
				
			?>
			
		</div>
	</div>
		
</section>
<?php
	else :

		if ( !empty( $args ) ) :
		
			$related = new WP_Query( $args );

			if ( $related->have_posts() ) :

?>
<section class="py-20">
	<div class="container">
		
		<div class="flex justify-center">
			<div class="w-11/12 lg:w-full">
				<div class="mb-2">
					<h3 class="uppercase text-16 font-museo-500 text-grey-600">
						<?php 
							if ( get_field('related_resources_title') ) :

								the_field('related_resources_title');
							
							else :
						?>

						YOU MIGHT ALSO BE INTERESTED IN

						<?php
							endif;
						?>
						
					</h3>
				</div>
			</div>
		</div>
		
		<div class="flex flex-wrap -mx-2">
			<?php 
				
				while ( $related->have_posts() ) : 
				    $related->the_post();

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
		endif;
	endif;
}
?>