<section>
	<div class="flex items-stretch">
		<div class="md:w-6/12">
			<img class="lazyload" alt="Our Quality Promise" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/graphics/our-quality-promise-left.jpg">
		</div>
		<div class="md:w-6/12 relative">
			<div class="w-full h-full absolute inset-0 bg-cover bg-center" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/images/graphics/our-quality-promise-right.jpg' ?>)"></div>
			<div class="flex justify-center w-full relative items-center h-full">
				<div class="md:w-8/12">
					<div class="w-full">
						<div class="mb-4">
							<h3 class="text-36 font-museo-900 text-white uppercase">
								OUR QUALITY PROMISE
							</h3>
						</div>
						<div>
							<?php 
								$promises = array(
									'Inspection reports included with every order',
									'All parts inspected using hand metrology, CMM or laser scanners',
									'All manufacturing partners are highly vetted and managed',
									'ISO 9001 certified, AS 9100 & ISO 13485 compliant',
									'Quality guaranteed. If a part is not made to spec, we\'ll make it right.',
								);

								foreach ( $promises as $i => $promise ) :
								
							?>
							<div class="flex  mb-4">
								<div class="w-8 ">
									<div class="w-6">
										<?php 
											echo file_get_contents( get_template_directory_uri() . '/assets/images/icons/check-circle-white.svg');
										?>
									</div>
								</div>
								<div class="w-full">
									<p class="text-white font-museo-700">
										<?php echo $promise; ?>
									</p>
								</div>
							</div>
							<?php 
								endforeach;
							?>
							
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</section>