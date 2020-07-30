<?php 
include( get_template_directory() . '/inc/post-taxonomies.php');
include( get_template_directory() . '/inc/check-box-by-get.php');


?>
<div class="mb-2">
	<p class="uppercase font-museo-500 text-grey-600">filter content </p>
</div>
<div class="mb-4">
	
<?php 
	get_template_part('partials/site', 'search');
?>
	
</div>

<form method="GET" action="<?php echo home_url(); ?>/filter/">

<?php
	get_template_part('partials/filter', 'cpts');
	get_template_part('partials/filter', 'taxonomies');
	get_template_part('partials/resources', 'filter-btns');
?>
	
</form>