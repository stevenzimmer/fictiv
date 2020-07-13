<?php 
get_header();
print_r( get_queried_object() );
if ( have_posts() ) : 

    while ( have_posts() ) : 
        the_post();
?>
<header class="relative py-32">
	<div class="absolute w-full h-full bg-cover bg-center" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>
	<div class="container">
		<div></div>
	</div>
</header>
<?php
	endwhile;
endif;
get_footer();
?>