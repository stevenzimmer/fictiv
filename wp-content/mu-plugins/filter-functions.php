<?php 

	function filterTaxonomies( $title, $filtersArr, $string) {
?>
<div class="filter-tax-wrapper">
		
	<?php 
		resources_filter_title( $title );
	?>

	<div class="bg-grey-lighter filter-items overflow-hidden">
		<?php 

			foreach ( $filtersArr as $i => $filter ) :

				filter_checkbox( $filter, $string );
				
			endforeach;
		?>
	</div>
		

</div>
<?php
	}

?>


<?php 
	
	function filterContentType( $types, $string ) {
?>
		<div class="">
			<p class="text-12 uppercase font-museo-700 text-grey-600">content type</p>
		</div>
		<div class="pb-4 border-b border-grey-200">
				
				
			<div class="flex flex-wrap -mx-2">
			<?php

				foreach ( $types as $i => $type ) :

					filter_checkbox( $type, $string );

				endforeach;
			?>
			</div>

		</div>
<?php
	}
?>

<?php 
	
	function filterTaxonomy( $types, $string ) {
?>
		<div class="">
			<p class="text-12 uppercase font-museo-700 text-grey-600">content type</p>
		</div>
		<div class="pb-4 border-b border-grey-200">
				
				
			<div class="flex flex-wrap -mx-2">
			<?php

				foreach ( $types as $i => $type ) :

					filter_checkbox( $type, $string );

				endforeach;
			?>
			</div>

		</div>
<?php
	}
?>

<?php 
	function filter_checkbox( $item, $i = 0 ) {

		// print_r( gettype( $item ) );

		$id_value = ( gettype( $item ) === 'string' ? 

				'content_type-' . $item

			: 

				$item->taxonomy . '-' . $item->slug

		);

		$name_value = ( gettype( $item ) === 'string' ? 

				'content_type[]'

			: 
				$item->taxonomy . '[]'
		);

		$value = ( gettype( $item ) === 'string' ? 

				$item

			: 
				$item->slug 
		);

		$label = ( gettype( $item ) === 'string' ? 

				get_post_type_object( $item )->label

			: 
				$item->name
		);



?>
	<div class="flex flex-row-reverse justify-between items-center px-2 py-1 filter-item ">
		<input 
		class="filter-item-checkbox <?php 

			if( gettype( $item ) === 'string' ) :

				echo 'filter-content-btn hidden';

			endif;

		?>"
		type="checkbox" 
		id="<?php echo $id_value; ?>-<?php echo $i; ?>" 
		name="<?php echo $name_value; ?>" 
		value="<?php echo $value ?>"
		<?php 

			checkBoxesByGet( $_GET, $id_value );
		
		?>
		>

		<label class="select-none block text-12 <?php 

			if( gettype( $item ) === 'string' ) :

				echo 'border px-3 rounded py-1 border-grey-200 font-museo-700 text-grey-600';

			else :
				
				echo ' font-museo-500';

			endif;
		?>" for="<?php echo $id_value; ?>-<?php echo $i; ?>"><?php echo $label; ?></label>
		
	</div>
<?php
	}
?>

<?php 
function checkBoxesByGet( $get, $slug ) {
	if ( isset( $get ) ) :

		foreach ( $get as $j => $query ) :

			if ( gettype( $query ) === 'array' ) :
				
				foreach ( $query as $k => $item ) :

					if ( ( $j . '-' . $item ) === (  $slug ) ) : 

						echo 'checked="true"';

					endif; 

				endforeach;
			endif;
		endforeach;
	endif;

}
?>