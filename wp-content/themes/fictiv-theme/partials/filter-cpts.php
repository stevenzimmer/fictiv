<?php 
// resource_center_cpt();
?>
<div class="">
	<p class="text-12 uppercase font-museo-700 text-grey-600">content type</p>
</div>
<div class="pb-4 border-b border-grey-200">
		
		
	<div class="flex flex-wrap -mx-2">
	<?php

		foreach ( $GLOBALS['resource_post_types'] as $i => $type ) :

			filter_checkbox( $type, rand(10,100) );

		endforeach;
	?>
	</div>

</div>