<?php 
include( get_template_directory() . '/inc/post-taxonomies.php');
?>

<div class="hidden lg:block">
<div class="bg-grey-200 h-64 flex items-center justify-center mb-12">
	<div>
		In Progress
	</div>
</div>
<div class="hidden">
	

	<div>
		<p class="uppercase">filter content</p>
	</div>
	<div>
		<?php 
			foreach ( $post_taxonomies as $i => $tax ) :
	?>
		<div>
	<?php
				echo $tax->label;

				$terms = get_terms( array(
					'taxonomy' => $tax->name,
					'hide_empty' => true
				));

				foreach ( $terms as $j => $term ) :
	?>
			<div class="pl-4" data-<?php echo str_replace(' ', '-', 	strtolower( $tax->label ) ); ?>="<?php echo $term->slug; ?>">
			<?php echo $term->name ?>
			</div>
	<?php
				endforeach;
	?>
		</div>
	<?php
			endforeach;
		?>
	</div>
</div>
<div class="flex justify-center -mx-2 mb-12">
	<div class=" px-2 w-1/3">
		<div class="bg-grey-100 p-4 flex items-center justify-center">
			<div class="">
				<a title="Connect with us on Twitter" rel="noopener noreferrer" target="_blank" href="#">
					<?php 
						echo file_get_contents( get_template_directory_uri() . '/assets/images/icons/twitter.svg');
					?>
						
					</a>
						
			</div>
		</div>
	</div>
	<div class=" px-2 w-1/3">
		<div class="bg-grey-100 p-4 flex items-center justify-center">
			<div class="">
				<a title="Connect with us on Facebook" rel="noopener noreferrer" target="_blank" href="#">
							<?php 
							echo file_get_contents( get_template_directory_uri() . '/assets/images/icons/facebook.svg');
						?>
				
					</a>
					
			</div>
		</div>
	</div>
	<div class=" px-2 w-1/3">
		<div class="bg-grey-100 p-4 flex items-center justify-center">
			<div class="">
				<a title="Connect with us on LinkedIn" rel="noopener noreferrer" target="_blank" class="#" href=""><?php 
						echo file_get_contents( get_template_directory_uri() . '/assets/images/icons/linkedin.svg');
					?></a>
			</div>
		</div>
	</div>
</div>
<div class="bg-grey-100 py-6 px-4">
	<div class="text-center mb-2">
		<h3 class="text-blue-dark text-16 font-museo-500">
			Get the latest news and strategies to your inbox
		</h3>
	</div>
	<div class="p-2 bg-white mb-4 text-grey-300">
	    	Enter your email
	</div>
    <div class="p-2 bg-teal-light text-white text-center uppercase font-museo-700 text-16">
    	submit
    </div>
</div>
</div>