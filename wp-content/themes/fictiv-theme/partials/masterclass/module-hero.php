<header class="relative py-10 bg-grey-100">

	<div class="container relative">
		<div class="flex justify-center">
	
			<div class="w-full lg:w-10/12">
				<div class="flex flex-wrap justify-center lg:justify-start -mx-4">

					<div class="w-11/12 px-4">
						<div class="mb-2">
							<?php 
								get_template_part('partials/single', 'breadcrumbs');
							?>
						</div>
				
						<div>
							<h1 class="text-grey-700 font-museo-700 leading-tight text-24 md:text-36"><?php echo get_the_title( $parent_id ); ?> <?php echo get_post_type_object( get_queried_object()->post_type )->labels->singular_name; ?></h1>
						</div>
						
					</div>
					
				</div>
			</div> 
	
		</div>
	</div>
</header>
