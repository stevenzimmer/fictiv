<footer id="footer" class="py-10 border-t border-teal-lighter">
	<div class="container">
		<div class="flex justify-center">
			<div class="w-11/12 md:w-10/12">
				<div class="flex justify-between mb-12 flex-wrap lg:-mx-6">
					<div class="w-full sm:w-1/3 md:w-1/4 mb-12 md:mb-0 lg:px-6">
						<div class="w-24 mb-4">
							<a href="<?php echo home_url() ?>">
								<img alt="Fictiv logo green" class="lazyload" data-src="<?php echo get_template_directory_uri() . '/assets/images/logos/fictiv-teal.svg'; ?>">
								
							</a>
						</div>
						<div class="font-museo-500 text-grey-600">
							<p>
								168 Welsh Street
							</p>
							<p>
								San Francisco, CA 94107
							</p>
							<p>
								(415) 580-2509
							</p>
						</div>
					</div>
					<div class="w-full sm:w-2/3 md:w-3/4 lg:px-6">
						<?php 
							wp_nav_menu( 
								array(
							    	'menu'              => "footer", 
							    	'menu_class'        => "flex flex-wrap md:flex-no-wrap justify-between menu-footer",
							    	'container_class' => "w-full"
								)
							);
						?>
						
					</div>
				</div>
				<div class="flex justify-start flex-wrap items-center">
					<div class="w-full lg:w-1/4"></div>
					<div class="w-full lg:w-3/4">
						<div class="flex justify-center md:justify-start flex-wrap">
							<div class="w-full sm:w-7/12 lg:w-1/2 mb-6 sm:mb-0">
								<div class="global-form-wrapper">
									<form class="mktoForm horizontal" data-formId="597" data-form-type="global"></form>
									<div class=" mt-2 subscribe-form-terms px-2">

								        <?php 
								            get_template_part('partials/gdpr', 'text');
								        ?>
								    
								    </div>
									<div class="global-form-success hidden">
										<p>Thank you for subscribing!</p>
									</div>
								</div>
								
							</div>
							<div class="w-full sm:w-5/12 lg:w-1/2">
								<div class="flex justify-center sm:justify-start">
									<div class="flex justify-center flex-wrap ">
										<?php 

											$social_icons = array(
												array(
													'name' => 'Facebook',
													'link' => 'https://www.facebook.com/fictivmade'
												),

												array(
													'name' => 'Twitter',
													'link' => 'https://twitter.com/fictiv'
												),

												array(
													'name' => 'LinkedIn',
													'link' => 'https://www.linkedin.com/company/fictiv/'
												),

												array(
													'name' => 'YouTube',
													'link' => 'https://www.youtube.com/fictivmade'
												),
											);

											foreach ( $social_icons as $i => $icon ) :
												
											
										?>
										<div class=" px-1 w-1/4 h-full">
											<div class="bg-grey-100 px-4 py-2 flex items-center justify-center h-full relative">
												<a class="absolute w-full h-full inset-0 z-30" title="Connect with us on <?php echo $icon['name']; ?>" rel="noopener noreferrer" target="_blank" href="<?php echo $icon['link']; ?>"></a>
												<div class="">
												
													<img alt="<?php echo $icon['name']; ?> icon" class="lazyload" data-src="<?php echo get_template_directory_uri() . '/assets/images/icons/' . strtolower( $icon['name'] ) . '.svg' ?>">
													
												</div>
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
			</div>
		</div>
	</div>
</footer>
<div class="fixed w-full h-full inset-0 bg-black opacity-50 z-40 hidden" id="body-overlay"></div>

<?php 
    wp_footer();
?>
<script type="text/javascript">
!(function(){var q=new URLSearchParams(window.location.search).toString();q&&q.includes("utm_")&&(document.cookie=`_fictiv_utm=${q}; path=/; domain=.fictiv.com; max-age=604800; samesite=lax;`);})();
</script>
</body>
</html>