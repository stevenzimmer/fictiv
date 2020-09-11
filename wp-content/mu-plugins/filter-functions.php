<?php 

	function filterTaxonomies( $title, $filtersArr, $id_append ) {

?>

<div class="filter-tax-wrapper">
		
	<?php 
		resources_filter_title( $title );
	?>

	<div class="bg-grey-lighter filter-items overflow-hidden">
		<?php 

			foreach ( $filtersArr as $i => $filter ) :

				filter_checkbox( $filter, $id_append );
				
			endforeach;

		?>
	</div>
		

</div>
<?php
	}

	
	function filterContentType( $types, $id_append ) {

		if ( $id_append === 'mobile' ) :
			
?>
		<div class="filter-tax-wrapper">
				
			<?php 
				resources_filter_title( 'content type');
			?>

			<div class="bg-grey-lighter filter-items overflow-hidden">
				<?php 

					foreach ( $types as $i => $type ) :

						filter_checkbox( $type, $id_append );
						
					endforeach;
				?>
			</div>
				
		</div>
<?php
		else :
?>
			<div class="mb-2">
				<p class="uppercase font-museo-500 text-grey-600">content type</p>
			</div>
			<div class="pb-4 border-b border-grey-200">
					
					
				<div class="flex flex-wrap -mx-2">
				<?php

					foreach ( $types as $i => $type ) :

						filter_checkbox( $type, $id_append );

					endforeach;
				?>
				</div>

			</div>
<?php
		endif;
	}

	function filter_checkbox( $item, $id_append ) {

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
	<div class="flex flex-row-reverse justify-between items-center py-1 filter-item <?php 
		if ( gettype( $item ) === 'string' && $id_append !== 'mobile' ) :

			echo 'px-1';
		
		else :
		
			echo 'px-2';
		
		endif;
	?>">
		<input 
		class="filter-item-checkbox <?php 

			if( gettype( $item ) === 'string' && $id_append !== 'mobile' ) :

				echo 'filter-content-btn hidden';

			endif;

		?>"
		type="checkbox" 
		id="<?php echo $id_value; ?>-<?php echo $id_append; ?>" 
		name="<?php echo $name_value; ?>" 
		value="<?php echo $value ?>"
		<?php 

			checkBoxesByGet( $_GET, $id_value );
		
		?>
		>

		<label class="select-none cursor-pointer block  <?php 

			if( gettype( $item ) === 'string' && $id_append !== 'mobile' ) :

				echo 'text-16 border px-3 rounded py-1 border-grey-200 font-museo-700 text-grey-600';

			else :
				
				echo 'text-12 font-museo-500';

			endif;
		?>" for="<?php echo $id_value; ?>-<?php echo $id_append; ?>"><?php echo $label; ?></label>
		
	</div>
<?php
	}

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