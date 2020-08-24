<?php 
	if ( !wp_is_mobile() ) :
?>
<div class="mb-2">
	<p class="uppercase font-museo-500 text-grey-600">filter content </p>
</div>
<div class="mb-4">
	
<?php 
	get_template_part('partials/resources', 'search');
?>
	
</div>
<div class="mb-4 ">
	<form method="GET" action="<?php echo home_url(); ?>/filter/" id="filter-form">

	<?php

		filterContentType( $GLOBALS['resource_post_types'], 'sidebar' );

		foreach ( resource_center_taxonomies() as $i => $tax ) :
			$labels = get_taxonomy( $tax );

			$filters = get_terms( array(
				'taxonomy' => $tax,
				'hide_empty' => true
			));

			filterTaxonomies( $labels->labels->singular_name, $filters, 'sidebar' );

		endforeach;

		get_template_part('partials/filter', 'btns');
	?>
		
	</form>
</div>

<div class="global-form-wrapper bg-grey-100 px-2 py-4 text-center ">
	<form class="mktoForm sidebar" data-formId="597" data-form-type="global"></form>
	<div class="text-center mt-2 subscribe-form-terms">

        <?php 
            get_template_part('partials/gdpr', 'text');
        ?>
    
    </div>
	<div class="global-form-success hidden">
		<p>Thank you for subscribing!</p>
	</div>
</div>
<?php 
	endif;
?>