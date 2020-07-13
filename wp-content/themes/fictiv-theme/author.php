<?php 
get_header();
// print_r( get_queried_object() );
$curauth = get_queried_object();

print_r( $curauth )
// print_r( get_queried_object() );
// $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));

// print_r( $curauth );
?>
<header class="relative py-32">
	<div class="absolute w-full h-full bg-cover bg-center inset-0"  style="background-image: url(<?php the_field( 'author_background_image', get_queried_object() ) ?>);"></div>
	<div class="absolute w-full h-full inset-0 bg-black opacity-50"></div>
	<div class="container relative">
		<div>
			<div>
				<h1 class="text-white"><?php echo $curauth->display_name; ?></h1>
			</div>
			<div class="mb-2">
				<p class="text-white">
					<?php echo $curauth->description; ?>
				</p>
			</div>
			<div class="flex -mx-2">
				<div class=" px-2 ">
					<div class="border border-white p-4 flex items-center justify-center">
						<div class="w-2 h-2 bg-white rounded-full"></div>
					</div>
				</div>
				<div class=" px-2 ">
					<div class="border border-white p-4 flex items-center justify-center">
						<div class="w-2 h-2 bg-white rounded-full"></div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</header>

<section>
	<div class="container">
		<div>
			<p class="uppercase">
				All articles from the author
			</p>
			
		</div>
		<div class="flex flex-wrap -mx-4">
			<?php 
				// print_r($curauth->ID);
				$args = array(
					'post_type' => array('cpt_blog', 'cpt_teardown'),
		            'author__in' => array( $curauth->data->ID ),
		            'posts_per_page' => -1
		        );

		        $author = new WP_Query( $args );
				if( $author->have_posts() ) : 

				    while ( $author->have_posts() ) : 
				        $author->the_post();
				        the_title();

				        // $content_types = get_the_terms( get_the_id(), 'fictiv_content_type' );
				        // $topics = get_the_terms( get_the_id(), 'fictiv_topic' );
				        // $topic_name = $topics[0]->name;
				        // $topic_link = get_category_link( $topics[0]->term_id );
				        // $content_type_name = $content_types[0]->name;

			?>
			<!-- <div class="lg:w-1/3 px-4">
				<div class="relative h-0 mb-2" style="padding-bottom: 56.25%">
					 <img class="absolute inset-0 w-full h-full" src="<?php //the_post_thumbnail_url(); ?>">
				</div>
				<div>
					<div>
						<a title="See more <?php // echo $topic_name ?> <?php // echo $content_type_name; ?>s" href="<?php // echo $topic_link ?>">
							<?php // echo $topic_name; ?>
						</a>
					</div>
					<?php // the_title(); ?>
				</div>
				
			</div> -->
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