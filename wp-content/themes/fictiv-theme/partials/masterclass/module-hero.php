<header class="relative py-10 bg-grey-100">
	<?php 
        if ( has_post_thumbnail() ) :
    ?>
    <div class="absolute w-full h-full inset-0">
        <div class="flex md:justify-end h-full">
            <div class="w-full md:w-11/12 lg:w-6/12">
                <div class="h-full bg-cover bg-center lazyload" data-bg="url(<?php the_post_thumbnail_url(); ?>)"></div>
            </div>
        </div>
    </div>
    <?php 
        endif;
    ?>

     <div class="bg-black bg-opacity-75 md:bg-transparent md:bg-gradient-to-r via-black from-black absolute w-full inset-0 h-full"></div>

	<div class="container relative">
		<div class="flex justify-center">
	
			<div class="w-11/12 md:w-full lg:w-11/12">
				<div class="flex flex-wrap justify-center lg:justify-start">

					<div class="w-full">
						<div class="mb-2">
							<p class="uppercase font-museo-500 text-white">
								<?php 

									echo get_post_type_object( get_queried_object()->post_type )->labels->singular_name;

								?>: <?php 
									echo get_the_title( $parent_id );
								?>
							</p>
						</div>
				
						<div>
							<h1 class="text-white font-museo-500 leading-tight"><?php the_title(); ?></h1>
						</div>
						
					</div>
					
				</div>
			</div> 
	
		</div>
	</div>
</header>
