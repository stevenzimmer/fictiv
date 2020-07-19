<?php 

	function fictiv_post_card( $topic ) {



?>
<div class="border border-grey-200 relative h-full">
	<div class="relative h-0 thumbnail-ratio" >
		<img class="lazyload absolute inset-0 w-full h-full object-cover" data-src="<?php echo get_the_post_thumbnail_url(); ?>">
	</div>
	<div class="p-4 relative">
		<div class="mb-1">
			<p class="text-grey-600 text-12 font-museo-700 uppercase"><?php 
				echo $topic;
			?></p>
		</div>
		<div class="h-12">
			<h2 class="text-14 font-museo-700 text-default max-lines max-lines-2"><?php 
				echo get_the_title();

			?></h2>
		</div>
		<?php 
			if( get_the_excerpt() ) :
		?>
		<div class="text-14 text-grey-600 font-museo-500 h-20">
			<p class="max-lines max-lines-3">
				
				<?php 
					echo get_the_excerpt();
				?>
				
			</p>
		</div>

		<?php 
			endif;
		?>

		<div class="absolute right-0 bottom-0 p-4">
			<a href="<?php echo get_the_permalink(); ?>" class="absolute w-full h-full inset-0"></a>
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