<?php 
include( get_template_directory() . '/inc/post-taxonomies.php');

resource_center_cpt();

$taxonomies = array();

?>
<div class="mb-4">
	<div class="mb-2">
		<p class="uppercase font-museo-500 text-grey-600">filter content </p>
	</div>
	<div>
		<form role="search" method="get" id="search-form" class="" action="<?php echo home_url(); ?>">
			<div class="flex justify-between bg-grey-200 items-center px-2">
				<div class="w-full">
					<input placeholder="Search this site" class="w-full  bg-grey-200" type="text" value="" name="s" id="s">
				</div>
				<div>
					<input class="bg-grey-200" type="submit" id="searchsubmit" value="&#x1F50D;">
				</div>
				
			</div>
		</form>
	</div>
	
</div>
<div class="pb-4 border-b border-grey-200">
	<div class="">
		<div class="mb-2">
			<p class="text-12 uppercase font-museo-700 text-grey-600">content type</p>
		</div>
		<div class="flex flex-wrap -mx-2">
		<?php

			foreach ( $GLOBALS['resource_post_types'] as $i => $type ) :
			
		?>


				
			<div class="filter-content-btn border px-3 rounded py-1 border-grey-200  text-center mx-2 mb-1" data-content-type="<?php echo $type; ?>">
				
				<p class="font-museo-700 text-12 text-grey-600">
					<?php 
						print_r( get_post_type_object( $type )->label );
					?>
				</p>
			</div>
		
		<?php

			foreach ( get_post_type_object( $type )->taxonomies as $j => $tax ) :
				if ( !in_array( $tax, $taxonomies ) ) :
					
					array_push($taxonomies, $tax);

				endif;

			endforeach;


		endforeach;
		?>
		</div>
		
	</div>
</div>
<?php

foreach ( $taxonomies as $i => $tax ) :
	$labels = get_taxonomy( $tax );
	// print_r($labels);
	$filters = get_terms( array(
		'taxonomy' => $tax,
		'hide_empty' => true
	));

?>
<div class="filter-tax-wrapper" data-filter-tax="<?php echo $tax; ?>">
	<div class="py-2 px-1 border-b border-grey-200">
		<div class="flex items-center justify-between filter-title">
			<div>
				<p class="text-12 uppercase font-museo-700 text-grey-600">
					<?php echo $labels->labels->singular_name; ?>
				</p>
			</div>
			<div>
				<p>
					&#9656;
				</p>
			</div>
		</div>
		<div class="bg-grey-lighter filter-items">
			<?php 

				foreach ( $filters as $i => $filter ) :
			
			?>

			<div class="flex flex-row-reverse justify-between items-center px-2 py-1 filter-item" data-filter-tax="<?php echo $filter->taxonomy ?>">
				<input class="block text-left filter-item-checkbox" type="checkbox" id="<?php echo $filter->taxonomy; ?>-<?php echo $filter->slug ?>" name="<?php echo $filter->taxonomy ?>-<?php echo $filter->slug ?>" value="<?php echo $filter->slug ?>">

				<label class="block text-12 font-museo-500 filter-item-label" for="<?php echo $filter->taxonomy ?>-<?php echo $filter->slug ?>"><?php echo $filter->name; ?></label>
				
			</div>
			<?php
					
					
				endforeach;
			?>
		</div>
		
		
	</div>

</div>
<?php

endforeach
?>

<div class="flex -mx-2 mt-2 hidden">
	<div class="px-2 w-1/2 ">
		<div class="bg-grey-200 text-center">
			<a href="#" class="nline-block uppercase text-12 text-grey-600 font-museo-500" id="clear-all">Clear selections</a>
		</div>
	</div>
	<div class="px-2 w-1/2">
		<div class="border border-grey-200 text-center">
			<a href="#" class="inline-block uppercase text-12 text-grey-600 font-museo-500">apply</a>
		</div>
		
	</div>
	
</div>