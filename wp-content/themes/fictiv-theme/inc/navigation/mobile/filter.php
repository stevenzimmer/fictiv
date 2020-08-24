<nav class="relative w-full h-12 flex items-center border-b border-grey-200 filter-content-mobile select-none relative" id="filter-content-mobile">
	<div class="container relative">
		<div class="flex justify-center">
			<div class="w-11/12 xl:w-full">
				
				<div class="flex justify-between items-center">
					
					<div class="">
						<p class="uppercase  font-museo-700 text-12">filter content</p>
					</div>
					<div class="w-6 text-center flex items-center justify-center ">
						<div class="transform transition-transform origin-center duration-200 filter-content-arrow">
						<?php 
							echo file_get_contents( get_template_directory_uri() . '/assets/images/icons/filter-arrow.svg');
						?>
						</div>
						
					</div>
				
				</div>
			</div>
		</div>

	</div>
		
	
</nav>

<div class="bg-white py-4 filter-content-mobile-dropdown absolute w-full shadow-lg z-40">
	<div class="container">
		<div class="flex justify-center">
			<div class="w-11/12 xl:w-full">
				<div class="mb-4">

					<?php 
						get_template_part('partials/resources', 'search');
					?>
					
				</div>
				<div class="">
					<form method="GET" action="<?php echo home_url(); ?>/filter/" id="filter-form">

					<?php

						filterContentType( $GLOBALS['resource_post_types'], 'mobile' );
						
						foreach ( resource_center_taxonomies() as $i => $tax ) :
							$labels = get_taxonomy( $tax );

							$filters = get_terms( array(
								'taxonomy' => $tax,
								'hide_empty' => true
							));

							filterTaxonomies( $labels->labels->singular_name, $filters, 'mobile'  );

						endforeach;

						get_template_part('partials/filter', 'btns');
					?>
						
					</form>
				</div>
			</div>
		</div>
		
	</div>
</div>