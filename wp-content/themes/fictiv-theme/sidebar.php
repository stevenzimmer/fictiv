<?php 
include( get_template_directory() . '/inc/post-taxonomies.php');
include( get_template_directory() . '/inc/check-box-by-get.php');


?>
<div class="mb-2">
	<p class="uppercase font-museo-500 text-grey-600">filter content </p>
</div>
<div class="mb-4">
	
<?php 
	get_template_part('partials/resources', 'search');
?>
	
</div>
<div class="mb-4">
	<form method="GET" action="<?php echo home_url(); ?>/filter/" id="filter-form">

	<?php
		get_template_part('partials/filter', 'cpts');
		get_template_part('partials/filter', 'taxonomies');
		get_template_part('partials/resources', 'filter-btns');
	?>
		
	</form>
</div>

<div class="global-form-wrapper">
	<form class="mktoForm " data-formId="597" data-formInstance="two" data-form-type="global"></form>
	<div class="global-form-success hidden">
		<p>Thank you for subscribing!</p>
	</div>
</div>