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