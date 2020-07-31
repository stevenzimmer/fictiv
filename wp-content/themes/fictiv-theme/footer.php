<?php 
    // get_template_part('partials/footer', 'cta');
?>
	<footer class="py-10 border-t border-teal-lighter">
		<div class="container">
			<div class="flex justify-center">
				<div class="w-11/12 md:w-10/12">
					<div class="flex justify-between mb-12 flex-wrap -mx-6">
						<div class="w-full sm:w-1/3 md:w-1/4 mb-12 md:mb-0 px-6">
							<div class="w-24 mb-4">
								<a href="<?php echo home_url() ?>">
									<?php 
										echo file_get_contents( get_template_directory_uri() . '/assets/images/logos/fictiv-teal.svg');
									?>
								</a>
							</div>
							<div class="font-museo-500 text-grey-600">
								<p>
									168 Welsh Streets
								</p>
								<p>
									San Francisco, CA 94107
								</p>
								<p>
									(415) 580-2509
								</p>
							</div>
						</div>
						<div class="w-full sm:w-2/3 md:w-3/4 px-6">
							<div class="flex justify-between flex-wrap">
								<?php 
									$footer_items = array(
										array(
											'title' => 'Why Fictiv',
											'links' => array(
												'Loremipsum dolor',
												'Sitamet, consectur ',
												'tempaliquam',
												'Adipiscing elitdo',
												'Rhoncus ellensque ',
												'Ullamcorper gnis',
											)
										),

										array(
											'title' => 'Solutions',
											'links' => array(
												'Loremipsum dolor',
												'Sitamet, consectur ',
												'tempaliquam',
												'Adipiscing elitdo',
												'Rhoncus ellensque ',
							
											)
										),

										array(
											'title' => 'Capabilities',
											'links' => array(
												'Loremipsum dolor',
												'Sitamet, consectur ',
												'tempaliquam',
												'Adipiscing elitdo',
												'Rhoncus ellensque ',
						
											)
										),

										array(
											'title' => 'Resources Center',
											'links' => array(
												'Loremipsum dolor',
												'Sitamet, consectur ',
												'tempaliquam',
											
											)
										),

										array(
											'title' => 'Help Center',
											'links' => array(
												'Loremipsum dolor',
												'Sitamet, consectur ',
												'tempaliquam',
												'Adipiscing elitdo',
												'Rhoncus ellensque ',
												
											)
										),
									);

									foreach ( $footer_items as $i => $item ) :
									
								?>
								<div class="w-1/2 md:w-1/3 lg:w-1/5 mb-12 lg:mb-0">
									<p class="font-museo-700 mb-4">
										<?php 
											echo $item['title'];
										?>
									</p>

									<?php 
										foreach ($item['links'] as $j => $link ) :
										
									?>
									<p class="text-black text-12 mb-2 last:mb-0">
										<?php 
											echo $link;
										?>
									</p>
									<?php 
										endforeach;
									?>

								
								</div>
								<?php 
									endforeach;
								?>
							</div>
						</div>
					</div>
					<div class="flex justify-center">
						<div class="w-full md:w-7/12 ">
				
							<div class="flex items-end">
								<div class="global-form-wrapper">
									<form class="mktoForm " data-formId="597" data-formInstance="one" data-form-type="global"></form>
									<div class="global-form-success hidden">
										<p>Thank you for subscribing!</p>
									</div>
								</div>
								<div class="border-2 border-teal-light py-2 px-4 hidden">
									<p>
										Subscribe to our newsletter
									</p>
								</div>
								<div class="bg-teal-light flex items-center justify-center px-4 hidden">
									<p class="text-white">
										Submit
									</p>
								</div>
								<div class="flex justify-center px-2 flex-wrap ">
									<div class=" px-2 w-1/3">
										<div class="bg-grey-100 p-4 flex items-center justify-center">
											<div class="">
												<a title="Connect with us on Twitter" rel="noopener noreferrer" target="_blank" href="#">
													<?php 
														echo file_get_contents( get_template_directory_uri() . '/assets/images/icons/twitter.svg');
													?>
														
													</a>
														
											</div>
										</div>
									</div>
									<div class=" px-2 w-1/3">
										<div class="bg-grey-100 p-4 flex items-center justify-center">
											<div class="">
												<a title="Connect with us on Facebook" rel="noopener noreferrer" target="_blank" href="#">
															<?php 
															echo file_get_contents( get_template_directory_uri() . '/assets/images/icons/facebook.svg');
														?>
												
													</a>
													
											</div>
										</div>
									</div>
									<div class=" px-2 w-1/3">
										<div class="bg-grey-100 p-4 flex items-center justify-center">
											<div class="">
												<a title="Connect with us on LinkedIn" rel="noopener noreferrer" target="_blank" class="#" href=""><?php 
														echo file_get_contents( get_template_directory_uri() . '/assets/images/icons/linkedin.svg');
													?></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</footer>

<?php 
    wp_footer();
?>
</body>
</html>