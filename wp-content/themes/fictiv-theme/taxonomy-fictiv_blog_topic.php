<?php 
get_header();
	
$tax_obj = get_queried_object();
// print_r( $tax_obj );

// $tax_slug = $tax_obj->slug;
$tax = $tax_obj->taxonomy;
$tax_id = $tax_obj->term_id;

$tax_name = $tax_obj->name;
$tax_description = $tax_obj->description;
$tax_color = get_field( 'category_color', $tax_obj );
$tax_icon = get_field( 'category_icon', $tax_obj );
$tax_bg = get_field( 'category_background_image', $tax_obj );
?>
<header class="relative py-40">
	<div class="absolute w-full h-full inset-0 bg-cover bg-center" style="background-image: url(<?php echo $tax_bg; ?>);"></div>
	<div class="absolute w-full h-full inset-0 opacity-50" style="background-color: <?php echo $tax_color; ?>"></div>
	<div class="container relative">
		<div class="flex justify-center">
			<div class="md:w-5/12">
				<div class="text-center">
					<h1 class="text-white text-48  font-museo-700">
						<?php echo $tax_obj->name; ?>
					</h1>
					<h2 class="text-white text-24 leading-tight"><?php echo $tax_obj->description; ?></h2>
				</div>				
			</div>
		</div>
	</div>
</header>
<?php 
if ( have_posts() ) :
?>
<section class="py-32">
	<div class="container">
		<div class="flex flex-wrap -mx-6">
			<?php 
				
				while ( have_posts() ) :
					the_post();
					$blog_topics = get_the_terms( get_the_id(), 'fictiv_blog_topic' );

					$blog_topic_name = $blog_topics[0]->name;

					$blog_topic_link = get_category_link( $blog_topics[0]->term_id );
					$blog_topic_color = get_field( 'category_color', $blog_topics[0] );

			?>
			<div class="w-1/3 px-6">
				<div class="relative hover:bg-grey-100 group">
					<a href="<?php the_permalink(); ?>" class="absolute top-0 left-0 w-full h-full z-50" title="<?php the_title(); ?> Blog Post"></a>
					<div class="relative h-0 overflow-hidden " style="padding-bottom: 52%">
			            <img class="block w-full rounded object-cover lazyload" data-src="<?php the_post_thumbnail_url() ?>" alt="<?php the_title(); ?> thumbnail">
			            
			        </div>
			        <div class="p-4">
			        	<div class="mb-2">
							<p class="text-14" style="color: <?php echo $blog_topic_color; ?>"><?php echo $blog_topic_name; ?></p>
						</div>
						<div class="mb-2">
							<h3 class="text-20 font-museo-500"><?php the_title(); ?></h3>
						</div>
						<div>
							<p class="text-grey-light group-hover:text-black text-14">Keep reading &rarr;</p>
						</div>
			        </div>
					
				</div>
				
			</div>

			<?php 
				
				endwhile;
				
			?>
		</div>
	</div>
</section>
<?php 
endif;
get_footer();
?>