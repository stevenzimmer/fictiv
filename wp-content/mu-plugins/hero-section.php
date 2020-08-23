<?php 
	function hero_section( $args ) {
?>
<header class="relative py-20 section-hero">
	<div class="absolute w-full h-full bg-cover bg-center inset-0"  style="background-image: url(<?php echo $args['bg']; ?>);"></div>
	<div class="absolute w-full h-full inset-0 bg-black opacity-75"></div>
	<div class="container relative">
		<div class="flex justify-center">
			<?php 
				if( $args['post_type'] === 'cpt_case_study') :
			?>
			<div class="w-11/12 md:w-11/12 lg:w-10/12">
				<div class="flex flex-wrap">
					<div class="w-full lg:w-2/3 mb-6 lg:mb-0">
						<div>
							<p class="text-white uppercase font-museo-700 text-grey-400">
								<?php 
									echo $args['label'];
								?>
						
							</p>
						</div>
						<div>
							<h1 class="text-white font-museo-500 leading-tight"><?php echo $args['title']; ?></h1>
						</div>
					</div>
					<?php 
						if ( !empty( $args['logo'] ) ) :
					?>
					<div class="w-1/3">
						<div class="flex lg:justify-end">
							<div class="w-full sm:w-7/12">
								<img class="lazyload" data-src="<?php echo $args['logo']; ?>">
							</div>
						</div>
						
					</div>
					<?php 
						endif;
					?>
				</div>
				
				
			</div>
			<?php 
				elseif( $args['post_type'] === 'cpt_webinar' || 
						$args['post_type'] === 'cpt_ebook' || 
						$args['post_type'] === 'cpt_tool'
					) :			
			?>
			<div class="w-full lg:w-10/12">
				<div class="flex flex-wrap justify-center lg:justify-start -mx-4">

					<div class="w-11/12 lg:w-1/2 px-4 mb-6 lg:mb-0">
						<div class="pt-4 mb-2">
							<p class="text-white uppercase font-museo-700 text-grey-400 text-14">
								<?php 

									echo $args['label'];
								
								?>
						
							</p>
						</div>
						<div >
							<h1 class="text-white font-museo-500 text-3 leading-tight"><?php echo $args['title']; ?></h1>
						</div>
						<?php 

							if ( $args['subparagraph'] && !$args['parent_id'] && empty( $args['download_link'] ) ) :					
						?>
						<div>
							<p class="text-white text-20">
								<?php 
									echo $args['subparagraph'];
								?>
							</p>
						</div>
						<?php 
							endif;

							if ( !empty( $args['webinar'] ) ) :
							
		
								if ( !$args['webinar']['on_demand'] && $args['webinar']['date'] ) :
							
						?>
						<div class="mt-2">
							<p class="text-white font-museo-500">
								<?php 
									echo $args['webinar']['date'] . ', &nbsp;' . $args['webinar']['time'];
								?>
							</p>

						</div>
						<?php 
								endif;
							endif;
						?>
					
					</div>
					
					<div class="w-full lg:w-1/2 px-4">
						
						
						<?php 
							if( !$args['parent_id'] ) :
						?>
					
						<div class="bg-white h-full p-4 ">
							
							<?php 
								
								asset_form( 
									$args['form']['header'], 
									$args['form']['id']
								);
					
							?>
							
						</div>							
						
						<?php
							elseif( $args['parent_id'] && !empty( $args['webinar'] )  ) :

								if ( !$args['webinar']['yt_id']  ) :
								
						?>
						<div class="bg-white h-full p-4 ">
							<div class="post-content">
								<?php
									the_content();
								?>
							</div>
						</div> 
						<?php
								endif;

							else :

								if ( $args['thumbnail'] ) :
						?>
						<div class="">
							<img class="mx-auto lazyload" alt="<?php echo $args['title']; ?> thumbnail" data-src="<?php echo $args['thumbnail'];
							?>">
						</div> 
						<?php
								endif;
							endif;


						?>

					</div>
					
				</div>
			</div> 

			<?php
				else :
			?>
			<div class="w-full px-5 lg:px-0 lg:w-10/12">
				<div>
					<p class="text-white uppercase font-museo-700 text-grey-400">
						<?php 
							echo $args['label'];
						?>
				
					</p>
				</div>
				<?php 
					if( $args['post_type'] === 'page' ) :
				?>
				<div class="lg:w-1/2">
					<h1 class="text-white font-museo-500 leading-tight"><?php echo $args['title']; ?></h1>
				</div>
				<?php

					else :
				?>
				<div>
					<h1 class="text-white font-museo-500 leading-tight"><?php echo $args['title']; ?></h1>
				</div>
				<?php
					endif;
				?>
				
			</div>
			<?php 
				endif;
			?>
		</div>
	</div>
</header>

<?php
	}
?>