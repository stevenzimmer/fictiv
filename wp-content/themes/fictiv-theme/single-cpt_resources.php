<?php 
get_header();
// print_r( get_queried_object() );
$post_taxonomies = get_object_taxonomies( get_queried_object()->post_type, 'objects' );

if ( have_posts() ) :

    while ( have_posts() ) :
        the_post();

        $topics = get_the_terms( get_the_id(), 'fictiv_topic' );
        $topic_link = get_category_link( $topics[0]->term_id );
        $topic_name = $topics[0]->name;

        $content_types = get_the_terms( get_the_id(), 'fictiv_content_type' );
        $content_type_link = get_category_link( $content_types[0]->term_id );
        $content_type_name = $content_types[0]->name;
?>
<header class="relative py-32">
	<div class="absolute w-full h-full bg-cover bg-center inset-0"  style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>
	<div class="absolute w-full h-full inset-0 bg-black opacity-50"></div>
	<div class="container relative">
		<div>
			<div>
				<p class="text-white">
					<a href="<?php echo $content_type_link; ?>">
						<?php 
							echo $content_type_name;
						?>
					</a>
					
				</p>
			</div>
			<div>
				<h1 class="text-white"><?php the_title(); ?></h1>
			</div>
		</div>
	</div>
</header>
<section class="section">
	<div class="container">
		<div class="flex flex-wrap -mx-6 mb-12">
			<div class="lg:w-3/12 px-6">
				<div class="bg-grey-200 h-64 flex items-center justify-center mb-12">
					<div>
						In Progress
					</div>
				</div>
				<div class="hidden">
					
				
					<div>
						<p class="uppercase">filter content</p>
					</div>
					<div>
						<?php 
							foreach ( $post_taxonomies as $i => $tax ) :
								// print_r( $tax );
					?>
						<div>
					<?php
								echo $tax->label;

								$terms = get_terms( array(
									'taxonomy' => $tax->name,
									'hide_empty' => true
								));

								foreach ( $terms as $j => $term ) :
					?>
							<div class="pl-4" data-<?php echo str_replace(' ', '-', 	strtolower( $tax->label ) ); ?>="<?php echo $term->slug; ?>">
							<?php echo $term->name ?>
							</div>
					<?php
								endforeach;
					?>
						</div>
					<?php
							endforeach;
						?>
					</div>
				</div>
				<div class="flex -mx-2 mb-12">
					<div class=" px-2 lg:w-1/3">
						<div class="bg-grey-100 p-4 flex items-center justify-center">
							<div class="w-2 h-2 bg-white rounded-full"></div>
						</div>
					</div>
					<div class=" px-2 lg:w-1/3">
						<div class="bg-grey-100 p-4 flex items-center justify-center">
							<div class="w-2 h-2 bg-white rounded-full"></div>
						</div>
					</div>
					<div class=" px-2 lg:w-1/3">
						<div class="bg-grey-100 p-4 flex items-center justify-center">
							<div class="w-2 h-2 bg-white rounded-full"></div>
						</div>
					</div>
				</div>
				<div class="bg-grey-100 py-12 px-4">
					<div class="text-center">
						<h3 class="text-blue-dark">
							Get the latest news and strategies to your inbox
						</h3>
					</div>
				</div>
				
			</div>
			<div class="lg:w-9/12 px-6">
				<div class="flex">
					<div>
						<a href="<?php echo get_post_type_archive_link( get_queried_object()->post_type ); ?>">resources</a> / <a href="<?php echo $topic_link; ?>"><?php echo $topic_name; ?></a>
					</div>
				</div>
				<div class="flex justify-between items-end mb-8">
					<div class="lg:w-1/2">
						<div class="flex ">
							<div class="lg:w-1/3">
								<img src="<?php echo get_avatar_url( get_the_author_meta('ID') ); ?>">
							</div>
						
							<div class="px-2">
								<div>
									<?php the_author(); ?>
								</div>
								<div>
									<?php the_date() ?> <a href="<?php echo $topic_link ?>">
										<?php echo $topic_name; ?>
									</a>
								</div>
								
							</div>
						</div>
					</div>
					<div class="lg:w-1/2">
						<div class="flex justify-end">
							<a rel="noopener noreferrer" target="_blank" class="js-share-twitter-link" href="https://twitter.com/intent/tweet?text=<?php the_title(); ?>&url=<?php echo urlencode( get_the_permalink() ); ?>&hashtags=<?php echo $topic_name; ?>&via=fictiv">Tweet</a>
  							<a rel="noopener noreferrer" target="_blank" class="js-share-facebook-link" href="https://www.facebook.com/dialog/share?app_id=1688841191297210&display=popup&href=<?php echo urlencode( get_the_permalink() ); ?>&redirect_uri=<?php echo urlencode( get_the_permalink() ); ?>">facebook</a>
							<a rel="noopener noreferrer" target="_blank" class="js-share-linkedin-link" href="https://www.linkedin.com/shareArticle/?mini=true&url=<?php echo urlencode( get_the_permalink() ); ?>&title=<?php the_title(); ?>">linkedin</a>
						</div>
					</div>
						
				</div>
				
				<div class="post-content border-b border-grey-300 mb-8">
					<?php 
						the_content();
					?>	
				</div>
					
				<div class="flex ">
					<div class="lg:w-1/2 ">
						<div class="flex -mx-2">
							<div class="lg:w-1/3 px-2">
								<img src="<?php echo get_avatar_url( get_the_author_meta('ID') ); ?>">
								
							</div>
							
							<div class=" w-full px-2"> 
								<span class="text-blue-dark"><?php the_author(); ?></span> <span>
									<?php 
										echo get_the_author_meta('description', get_the_author_meta('ID') );
									?> <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">Learn More</a>
								</span>
							</div>
						</div>
					</div>
					<div class="lg:w-1/2">
						<div class="flex justify-end">
							<div class="w-8 h-8 bg-grey-100"></div>
							<div class="w-8 h-8 bg-grey-200"></div>
							<div class="w-8 h-8 bg-grey-300"></div>
						</div>
					</div>
				
				</div>
			</div>
		</div>
		<div>
			<div>
				<h2 class="uppercase">
					You might also be interested in this
				</h2>
			</div>
			<div class="flex h-48 -mx-4">
				<div class="lg:w-1/2  px-4">
					<div class="bg-grey-200 h-full flex items-center justify-center">
						<div>
							In Progress
						</div>
					</div>
					
				</div>
				<div class="lg:w-1/2 bg-grey-300 px-4">
					<div class="bg-grey-300 h-full flex items-center justify-center">
						<div>
							In Progress
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</section>
<?php
	endwhile;
endif;
get_footer();
?>