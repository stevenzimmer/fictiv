<?php 
function checkBoxesByGet( $get, $slug ) {
	if ( isset( $get ) ) :

		foreach ( $get as $j => $query ) :
			// print_r( $query );

			if ( $j !== 's' ) :

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