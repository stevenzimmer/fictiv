<?php 
	foreach ( resource_center_taxonomies() as $i => $tax ) :
		$labels = get_taxonomy( $tax );

		$filters = get_terms( array(
			'taxonomy' => $tax,
			'hide_empty' => true
		));

?>
	<div class="filter-tax-wrapper">
		
		<?php 
			resources_filter_title( $labels->labels->singular_name );
		?>

		<div class="bg-grey-lighter filter-items overflow-hidden">
			<?php 

				foreach ( $filters as $i => $filter ) :

					filter_checkbox( $filter );
					
				endforeach;
			?>
		</div>
			
	
	</div>
<?php

	endforeach;
?>