<?php 

function fictiv_post_card( $id ) {

	$resource_type = get_post_type_object( get_post_type( $id ) )->labels->singular_name;

	$thumbnail_src = ( 

		get_field( 'card_thumbnail', $id ) 
		
		?
		
			get_field( 'card_thumbnail', $id ) 
		
		:
			(
				has_post_thumbnail( $id ) 

				? 
					wp_get_attachment_image_src( 
						get_post_thumbnail_id( $id ), 
						'medium_large', 
						false )[0] 

				: 
					false 
			)
		);

?>
<div class="border border-grey-200 relative h-full">
	<a <?php 
		if ( strtolower( $resource_type ) === 'webinars' && !get_field('webinar_on-demand', $id ) ) :	
		?>
		title="Upcoming webinar: <?php echo get_field('webinar_date', $id ); ?> @ <?php echo get_field('webinar_time', $id ); ?>"
	<?php
		endif;

	?> href="<?php echo get_the_permalink( $id ); ?>" class="w-full h-full absolute inset-0 z-30"></a>
	<div class="relative h-0 thumbnail-ratio" >
		
		<?php 
			if( $thumbnail_src ) :
		?>
		<img title="<?php echo get_the_title( $id ); ?>" class="lazyload absolute inset-0 w-full h-full object-cover" data-src="<?php echo $thumbnail_src; ?>">

		<?php 
			else :
		?>
		<div class="bg-grey-100 absolute inset-0 w-full h-full flex items-center justify-center">
			<div>
				<p>Upload hero image to this post</p>
			</div>
		</div>
		<?php
			endif;
		?>
	</div>
	<div class="p-4 relative">
		<div class="mb-2">
			<div class="flex items-center h-6">
				<div>
					<p class="text-grey-600 text-12 font-museo-700 uppercase leading-3"><?php
						echo $resource_type;
					?></p>
				</div>
				<?php 
					if ( strtolower( $resource_type ) === 'webinar' && !get_field('webinar_on-demand', $id ) ) :
						// card_label() function located in functions.php
						card_label( 'Upcoming' );

					elseif ( get_field( 'resource_center_new', $id ) ) :

						// card_label() function located in functions.php
						card_label( 'New' );
				
					endif;
				?>
				
			</div>
			
		</div>
		<div class="h-12 mb-2">
			<h2 class="text-16 font-museo-700 text-grey-700 max-lines max-lines-2"><?php 
				echo get_the_title( $id );

			?></h2>
		</div>

		
		<div class=" text-grey-600 font-museo-500 h-24">
			<?php 
				if( get_the_excerpt( $id ) ) :
			?>
			<p class=" max-lines max-lines-3">
				
				<?php 
					echo get_the_excerpt( $id );
				?>
				
			</p>
			<?php 
				endif;
			?>
		</div>

		<div class="absolute right-0 bottom-0 p-4">
			<div>
				<?php 
					echo file_get_contents( get_template_directory_uri() . '/assets/images/icons/cta-arrow.svg');
				?>
			</div>
		</div>
	</div>
	
</div>

<?php
	}
?>