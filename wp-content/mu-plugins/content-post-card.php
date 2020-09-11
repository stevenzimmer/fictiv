<?php 

function fictiv_post_card( $topic ) {

	$thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_id() ), 'medium_large', false )[0];

?>
<div class="border border-grey-200 relative h-full">
	<a href="<?php echo get_the_permalink(); ?>" class="w-full h-full absolute inset-0 z-30"></a>
	<div class="relative h-0 thumbnail-ratio" >
		
		<?php 
			if( $thumbnail_src ) :
		?>
		<img title="<?php echo get_the_title(); ?>" class="lazyload absolute inset-0 w-full h-full object-cover" data-src="<?php echo $thumbnail_src; ?>">

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
		<div class="mb-1">
			<p class="text-grey-600 text-12 font-museo-700 uppercase"><?php 
				echo $topic;
			?></p>
		</div>
		<div class="h-16">
			<h2 class="text-16 font-museo-700 text-grey-700 max-lines max-lines-2"><?php 
				echo get_the_title();

			?></h2>
		</div>

		
		<div class=" text-grey-600 font-museo-500 h-24">
			<?php 
				if( get_the_excerpt() ) :
			?>
			<p class=" max-lines max-lines-3">
				
				<?php 
					echo get_the_excerpt();
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