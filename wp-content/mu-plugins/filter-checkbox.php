<?php 
	function filter_checkbox( $item ) {

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
		id="<?php echo $id_value; ?>" 
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
		?>" for="<?php echo $id_value; ?>"><?php echo $label; ?></label>
		
	</div>
<?php
	}
?>