<?php 
	if ( !wp_is_mobile() ) :
?>
	<div class="mb-2">
		<p class="uppercase font-museo-500 text-grey-400">search</p>
	</div>
	<div class="mb-4">
		
	<?php 
		get_template_part('partials/resources', 'search');
	?>
		
	</div>
	<div class="my-8">
		<form method="GET" action="<?php echo home_url(); ?>/filter/" id="filter-form">

		<div class="pb-1">
			<p class="uppercase font-museo-500 text-grey-400">content type</p>
		</div>
		<?php

			filterContentType( $GLOBALS['resource_post_types'], 'sidebar' );
		?>
		<div class="pb-2 mt-8 border-b border-grey-200">
			<p class="uppercase font-museo-500 text-grey-400">filter by</p>
		</div>
		<?php

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