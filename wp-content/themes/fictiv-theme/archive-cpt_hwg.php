<?php 
global $wp_query;
get_header();

// var_dump( $wp_query->query,get_queried_object() ); die; 
?>
<header class="section relative">
	<div class="absolute w-full h-full bg-black inset-0 bg-black opacity-50"></div>
	<div class="container relative">
		<div class="flex justify-center">
			<div class="w-8/12">
				<div class="text-center mb-4">
					<h1 class="text-white text-h1 font-slab-500 uppercase">
						<?php post_type_archive_title(); ?>				
					</h1>
				</div>
				<div class="text-20 text-white">
					<?php 
						echo get_the_post_type_description();
					?>
				</div>
			</div>
		</div>
		
	</div>
</header>
<section class="section bg-grey-100 relative">
	<div class="container">
		<div class="flex flex-wrap -mx-4 items-stretch">
			
<?php

$hwg_taxonomies = get_object_taxonomies( 'cpt_hwg', 'objects' );
$hwg_cat_tax = '';

// print_r( $hwg_taxonomies );
foreach  ( $hwg_taxonomies as $i => $tax ) :

	$hwg_terms = get_terms( $i, array(
		'hide_empty' => true,
		'hierarchical' => true,
		'parent' => 0
	));

	foreach ( $hwg_terms as $j => $hwg_term ) :
		$hwg_cat_tax = $hwg_term->taxonomy;
?>
<div class="w-1/3 mb-8 px-4">
	<div class="p-8 border-l-4 bg-white h-full" style="border-color: <?php echo get_field( 'category_color', $hwg_term ); ?>">
		<div>
			<h2 class="text-24">
				<a class="font-museo-500 uppercase" href="<?php echo get_term_link( $hwg_term ); ?>">
					<?php echo $hwg_term->name; ?>
				</a>
			</h2>
		</div>
		<div class="mb-4">
			<p>
				<?php echo get_field( 'category_subheader', $hwg_term ); ?>
			</p>
		</div>
		<div class="w-12 border-b border-grey-light mb-4"></div>
		<div>
			<?php 
				$hwg_posts = get_posts(
					array(
						'posts_per_page' => 4,
				        'post_type' => 'cpt_hwg',
				        'tax_query' => array(
				            array(
				                'taxonomy' => $hwg_cat_tax,
				                'field' => 'term_id',
				                'terms' => $hwg_term->term_id
				            )
				        )
					)
				);

			?>
			<ul class="list-disc pl-6">
				<?php 
					foreach ( $hwg_posts as $i => $post ) :
				?>
				<li class="mb-1">
					<a class="text-blue-light text-14" href="<?php echo	get_post_permalink( $post->ID ); ?>">
					<?php 
						echo $post->post_title;
					?>
					</a>
				</li>
				<?php
					wp_reset_postdata();
					endforeach;
				?>
			</ul>
			<div>
				<a class="text-blue-light text-14" href="<?php echo get_term_link( $hwg_term ); ?>">...more</a>
			</div>
		</div>
	</div>
</div>

<?php
	wp_reset_postdata();
	endforeach;
	wp_reset_postdata();
endforeach;
?>
		</div>
	</div>
</section>

<section class="section">
	<div class="container">
		<div class="mb-8">
			<h3 class="uppercase text-24 font-bold font-slab-500">Recent</h3>
		</div>
		<div class="flex flex-wrap -mx-4">
			<?php 

				$recent_args = array(
					'posts_per_page' => 3,
				    'post_type' => 'cpt_hwg'
				);

				$recent_posts = new WP_Query( $recent_args );
				
				if ( $recent_posts->have_posts() ) : 

				    while ( $recent_posts->have_posts() ) : 
				        $recent_posts->the_post();
				        $hwg_tax_term = get_the_terms( get_the_id(), $hwg_cat_tax );
			
			?>
			<div class="w-1/3 px-4 mb-8">
				<div class="border border-grey-light relative">
					<a href="<?php the_permalink(); ?>" class="absolute top-0 left-0 w-full h-full inset-0 z-50" title="<?php the_title(); ?> HWG Post"></a>
					<div class="relative h-0" style="padding-bottom: 50%">
			            <div class="absolute top-0 left-0 w-full h-full">
			            	<img class="block w-full h-full  object-cover lazyload" data-src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?> thumbnail">
			            </div>
			           
			            
			        </div>
					<div class="p-4">
						<?php 
						
							if ( $hwg_tax_term ) :
							
						?>
						<div>
							<p class="text-14" style="color: <?php echo get_field( 'hwg_category_color', $hwg_tax_term[0]->taxonomy  . '_' . $hwg_tax_term[0]->term_id ); ?>">
								<?php 
									echo $hwg_tax_term[0]->name
								?>
							</p>
						</div>
						<?php 
							endif;
						?>
						<h3><?php the_title(); ?></h3>
					</div>
				</div>
			</div>
			<?php
					wp_reset_postdata();
				    endwhile;
				endif;
			?>
			
		</div>
	</div>
</section>
<?php
	get_footer();
?>