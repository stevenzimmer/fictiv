<?php 
	get_header();
?>
<header class="py-40 relative">
	<div class="w-full h-full absolute inset-0 bg-cover bg-center" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/images/background/404-bg.jpg'; ?>)"></div>
	<div class="w-full h-full absolute inset-0 bg-black opacity-50"></div>
	<div class="container relative">
		<div class="text-center mb-8">
			<h1 class="text-white text-h1 font-museo-500">Oops, page not found!</h1>
			<p class="text-24 text-white">We can't find what you're looking for.</p>
		</div>
		<div class="flex justify-center items-center flex-wrap">
			<div class="mr-4">
				<a href="<?php echo home_url(); ?>" class="btn btn-primary">Back to homepage</a>
			</div>
			<div>
				<p class="text-white">
					We're here to help! Give us a call at <span class="text-teal-dark">(415) 580-2509</span>.
				</p>
			</div>
		</div>
	</div>
</header>
<?php
	get_footer();
?>