<?php 
	// Default page template 
	get_header();
	if ( have_posts() ) : 

    	while ( have_posts() ) : 
       		the_post();
?>
<section class="py-32">
	<div class="container">

		<div class="page-content">
			<?php 
				the_content();
			?>
		</div>
	</div>
</section>
<?php 
		endwhile;
	endif;
	get_footer();
?>