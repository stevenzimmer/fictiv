<?php 
    get_template_part('partials/footer', 'cta');
?>
	<footer class="py-20">
		<div class="container">
			<div class="flex justify-center lg:justify-between flex-wrap">
				<div class="w-11/12 lg:w-24 mb-12 lg:mb-0">
					<!-- Icon -->
					<img alt="Fictiv logo green" src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/fictiv-green.png">
				</div>
				<div class="w-11/12 lg:w-10/12">
					<?php 
						wp_nav_menu( 
							array(
						    	'menu'              => "footer", 
						    	'menu_class'        => "flex w-full justify-between footer-nav flex-wrap", 
						    	'container_class'   => "",
							)
						);
					?>
				</div>
			</div>
		</div>
	</footer>
<?php 
    wp_footer();
?>
</body>
</html>