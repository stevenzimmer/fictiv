<?php 
/* 	Template Name: 2016 State of Hardware Report
*/ 
	get_header();
?>
<header class="pt-20">
	<div class="container">
		<div class="flex justify-center">
			<div class="lg:w-10/12">
				<img class="lazyload" alt="Platform Technology screenshot" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/graphics/2016-state-of-hardware-report-hero.png">
			</div>
		</div>
	</div>
</header>
<section class="pb-20">
	<div class="container">
		<div class="flex flex-wrap -mx-6">
			<div class="lg:w-6/12 px-6">
				<div class="page-content">
					<?php 
						the_content()
					?>
				</div>
				
			</div>
			<div class="lg:w-6/12 px-6">
				<div class="px-8 shadow-lg py-4">
					<div class="text-center mb-8">
						<h3 class="text-blue-dark font-museo-900 text-24">Download the 2016 State of Hardware Report PDF</h3>
					</div>
					<div class="mb-4">
						<!-- Form -->
						<form id="mktoForm_81"></form>
					</div>
					<div>
						<?php 
							get_template_part('partials/gdpr', 'text');
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<script type="text/javascript">
	MktoForms2.loadForm("//app-ab20.marketo.com", "852-WGR-716", 81);
</script>
<?php 

	get_footer();
?>