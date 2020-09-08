<?php 
get_header();
// print_r( get_queried_object() );

$curauth = get_queried_object();


?>
<header class="relative  py-20">
	<div class="absolute w-full h-full bg-cover bg-center inset-0"  style="background-image: url(<?php the_field( 'author_background_image', $curauth ) ?>);"></div>
	<div class="absolute w-full h-full inset-0 bg-black opacity-75"></div>
	<div class="container relative">
		<div class="lg:w-2/3">
			<div>
				<h1 class="text-white"><?php echo $curauth->display_name; ?> <?php 
					if ( get_field( 'author_title', get_queried_object() ) ) :
						echo ' | ' . get_field( 'author_title', get_queried_object() );
					endif;
				 
				?></h1>
			</div>
			<div class="mb-2">
				<p class="text-white font-museo-700 text-20">
					<?php echo $curauth->description; ?>
				</p>
			</div>
			<div class="flex -mx-2">
				
				<?php 
					if ( get_the_author_meta('twitter', $curauth->data->ID) ) :
					
				?>
				<div class="px-2">
					<a target="_blank" href="<?php the_author_meta( 'twitter', $curauth->data->ID ); ?>">
						<?php 
							echo file_get_contents( get_template_directory_uri() . '/assets/images/logos/twitter-border-white.svg');
						?>
					</a>
				</div>
				<?php 
					endif;
				
					if ( get_the_author_meta('linkedin', $curauth->data->ID) ) :
					
				?>
				<div class=" px-2">
					<a target="_blank" href="<?php the_author_meta( 'linkedin', $curauth->data->ID ); ?>">
						<?php 
							echo file_get_contents( get_template_directory_uri() . '/assets/images/logos/linkedin-border-white.svg');
						?>
					</a>
				</div>
				<?php 
					endif;
				?>
		
			
			</div>
			
		</div>
	</div>
</header>

<section class="py-20">
	<div class="container">
		<div class="mb-6">
			<p class="uppercase text-16 text-grey-600 font-museo-500">
				All articles from the author
			</p>
			
		</div>
		<div class="flex flex-wrap -mx-4">
			<?php 

		        $args = array( 
		        	'post_type' => array('cpt_blog', 'cpt_teardown'),
		        	'posts_per_page' => -1,
		  			'post_parent' => 0,
				    'tax_query' => array(
				        array(
				            'taxonomy' => 'author',
				            'terms' => $curauth->data->user_login,
				            'field' => 'name',         
				        ),
				    ),
				);

		        $author = new WP_Query( $args );
				if( $author->have_posts() ) : 

				    while ( $author->have_posts() ) : 
				        $author->the_post();
				        include( get_template_directory() . '/inc/post-topics.php');
				       
			?>
			<div class="md:w-1/2 lg:w-1/3 px-4 mb-6">
			
			<?php
				fictiv_post_card( $topic_name );
			?>
			</div>

			<?php 
					endwhile;
					wp_reset_postdata();
				endif;
			?>
		</div>
	</div>
</section>
<?php 

get_footer();
?>