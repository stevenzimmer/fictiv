<header class="relative py-20">

	<?php 
        if ( has_post_thumbnail() ) :
    ?>
    
    <div class="absolute w-full h-full inset-0">
        <div class="flex md:justify-end h-full">
            <div class="w-full lg:w-7/12">
                <div class="h-full bg-cover bg-center lazyload" data-bg="url(<?php the_post_thumbnail_url(); ?>)"></div>
            </div>
        </div>
    </div>

    <?php 
        endif;
    ?>

    
    <div class="bg-black bg-opacity-75 lg:bg-transparent lg:bg-gradient-to-r via-black from-black absolute w-full lg:w-10/12 inset-0 h-full"></div>

	<div class="container relative">
		<div class="flex justify-center">
	
			<div class="w-11/12 md:w-full lg:w-10/12">
				<div class="flex flex-wrap">
					<div class="w-full lg:w-2/3 mb-6 lg:mb-0">
						<?php 

							if ( get_field( 'hero_label', $parent_id ) ) :

						?>
						<div class="mb-2">
							<p class="uppercase font-museo-700 text-grey-400">
								<?php the_field( 'hero_label', $parent_id ); ?>
							</p>
						</div>

						<?php 
							endif;
						?>
				
						<div>
							<h1 class="text-white font-museo-500 leading-tight"><?php the_title(); ?></h1>
						</div>
					</div>
				</div>
				<?php 
				
					if ( !$parent_id ) :
					
				?>
				<div class="flex flex-wrap -mx-4 mt-8">
					<div class="px-4">
						<a href="<?php echo get_the_permalink( $module_ids[0] ); ?>" class="btn btn-primary">start class</a>
					</div>
					<div class="px-4">
						<a href="<?php echo get_the_permalink( $module_ids[ $arr_length - 1 ] ); ?>" class="btn btn-primary">take quiz</a>
					</div>
				</div>

				<?php 
					endif;
				?>
			</div> 
	
		</div>
	</div>
</header>
