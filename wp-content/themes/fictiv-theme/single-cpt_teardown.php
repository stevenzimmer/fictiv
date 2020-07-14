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

        $authors = get_coauthors( get_the_id() );
        
?>
<header class="relative py-24">
	<div class="absolute w-full h-full bg-cover bg-center inset-0"  style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>
	<div class="absolute w-full h-full inset-0 bg-black opacity-50"></div>
	<div class="container relative">
		<div class="flex justify-center">
			<div class="w-11/12 lg:w-10/12">
				<div>
					<p class="text-white uppercase font-museo-700 text-grey-400">
						<?php 
							echo get_post_type_object( get_queried_object()->post_type )->labels->name;
						?>
				
					</p>
				</div>
				<div>
					<h1 class="text-white font-museo-500 text-3 leading-tight"><?php the_title(); ?></h1>
				</div>
			</div>
		</div>
	</div>
</header>
<section class="section">
	<div class="container">
		
		<div class="flex justify-center">
			<div class="lg:w-11/12">
				<div class="flex justify-center">
					<div class="w-11/12 lg:w-full">
						<div class="mb-6 font-museo-500 text-14 text-grey-300 ">
							<a class="hover:text-grey-600" href="#">Home</a> / <a class="hover:text-grey-600" href="<?php echo get_post_type_archive_link( get_queried_object()->post_type ); ?>"><?php 
								echo get_post_type_object( get_queried_object()->post_type )->labels->name;
							?></a>
						
						</div>
					</div>
				</div>
				
				<div class="mb-6 font-museo-500 text-14 text-grey-300 hidden">
					<a class="hover:text-grey-600" href="/resource-center/">Resources Center</a> / <a class="hover:text-grey-600" href="<?php echo get_post_type_archive_link( get_queried_object()->post_type ); ?>">Blog Articles</a> / <a class="hover:text-grey-600" href="<?php echo $topic_link; ?>"><?php echo $topic_name; ?></a>
				
				</div>
				<div class="flex flex-wrap -mx-4 mb-12 flex-col-reverse lg:flex-row items-center lg:items-start lg:justify-start">
					<div class="w-11/12 lg:w-4/12 px-4">
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
						<div class="flex justify-center -mx-2 mb-12">
							<div class=" px-2 w-1/3">
								<div class="bg-grey-100 p-4 flex items-center justify-center">
									<div class="">
										<a title="Connect with us on Twitter" rel="noopener noreferrer" target="_blank" href="#">
											<?php 
												echo file_get_contents( get_template_directory_uri() . '/assets/images/icons/twitter.svg');
											?>
												
											</a>
				  							
									</div>
								</div>
							</div>
							<div class=" px-2 w-1/3">
								<div class="bg-grey-100 p-4 flex items-center justify-center">
									<div class="">
										<a title="Connect with us on Facebook" rel="noopener noreferrer" target="_blank" href="#">
				  								<?php 
													echo file_get_contents( get_template_directory_uri() . '/assets/images/icons/facebook.svg');
												?>
										
											</a>
											
									</div>
								</div>
							</div>
							<div class=" px-2 w-1/3">
								<div class="bg-grey-100 p-4 flex items-center justify-center">
									<div class="">
										<a title="Connect with us on LinkedIn" rel="noopener noreferrer" target="_blank" class="#" href=""><?php 
												echo file_get_contents( get_template_directory_uri() . '/assets/images/icons/linkedin.svg');
											?></a>
									</div>
								</div>
							</div>
						</div>
						<div class="bg-grey-100 py-6 px-4">
							<div class="text-center mb-2">
								<h3 class="text-blue-dark text-16 font-museo-500">
									Get the latest news and strategies to your inbox
								</h3>
							</div>
							<div class="p-2 bg-white mb-4 text-grey-300">
							    	Enter your email
							</div>
						    <div class="p-2 bg-teal-light text-white text-center uppercase font-museo-700 text-16">
						    	submit
						    </div>
						</div>
						
					</div>
					<div class="w-11/12 lg:w-8/12 px-4">
						
						<div class="flex flex-wrap justify-between items-center mb-4">
							<div class="w-full lg:w-1/2 ">
								<div class="flex ">
									<div class="lg:w-3/12">
										<div class="flex -mx-1">
											<?php 
												 foreach ($authors as $i => $author ) :
											?>
											<div class="lg:w-1/2 px-1">
												<img alt="<?php echo $author->display_name; ?> headshot" width="40" src="<?php echo get_avatar_url( $author->data->ID ); ?>">
											</div>
											<?php 
												endforeach;
											?>
										</div>
										
									</div>
								
									<div class=" lg:w-9/12 px-2 text-12">
										<div>
											<p class="text-blue-dark uppercase font-museo-700">
												<?php 
													foreach ( $authors as $i => $author ) :

														if( $i > 0 ) :

															echo '<span class="text-grey-600">&</span>';

														endif;
												?>
												<?php echo $author->display_name; ?>
												<?php 
													endforeach;
												?>
											</p>
										</div>
										<div>
											<p class="font-museo-700 text-grey-600 uppercase">
												<?php the_date('m.d.Y') ?> <a href="<?php echo get_post_type_archive_link( get_queried_object()->post_type ) ?>">
												<?php echo get_post_type_object( get_queried_object()->post_type )->labels->name; ?>
											</p>
											
											</a>
										</div>
										
									</div>
								</div>
							</div>
							<div class="w-full lg:w-1/2 hidden ">
								<div class="flex justify-start lg:justify-end">
									<div class="w-1/2 lg:w-1/3">
										<div class="flex justify-between">
											<a title="Share <?php the_title()?> on Twitter" rel="noopener noreferrer" target="_blank" class="js-share-twitter-link" href="https://twitter.com/intent/tweet?text=<?php the_title(); ?>&url=<?php echo urlencode( get_the_permalink() ); ?>&hashtags=<?php echo $topic_name; ?>&via=fictiv">
											<?php 
												echo file_get_contents( get_template_directory_uri() . '/assets/images/icons/twitter.svg');
											?>
												
											</a>
				  							<a title="Share <?php the_title()?> on Facebook" rel="noopener noreferrer" target="_blank" class="js-share-facebook-link" href="https://www.facebook.com/dialog/share?app_id=1688841191297210&display=popup&href=<?php echo urlencode( get_the_permalink() ); ?>&redirect_uri=<?php echo urlencode( get_the_permalink() ); ?>">
				  								<?php 
													echo file_get_contents( get_template_directory_uri() . '/assets/images/icons/facebook.svg');
												?>
										
											</a>
											<a title="Share <?php the_title()?> on LinkedIn" rel="noopener noreferrer" target="_blank" class="js-share-linkedin-link" href="https://www.linkedin.com/shareArticle/?mini=true&url=<?php echo urlencode( get_the_permalink() ); ?>&title=<?php the_title(); ?>"><?php 
												echo file_get_contents( get_template_directory_uri() . '/assets/images/icons/linkedin.svg');
											?></a>
										</div>
									</div>
									
								</div>
							</div>
								
						</div>
						
						<div class="post-content border-b border-grey-300 mb-8">
							<?php 
								the_content();
							?>	
						</div>
							
						<div class="flex flex-wrap mb-8 -mx-4">
							<?php 

								foreach ( $authors as $i => $author ) :
								
							?>
							<div class="w-full lg:w-1/2 mb-8 lg:mb-0 px-4">
								<div class="flex justify-start -mx-2">
									<div class="w-1/6 md:w-auto lg:w-1/5 xl:w-1/6 px-2">
										<img alt="<?php echo $author->display_name; ?> headshot" width="40" src="<?php echo get_avatar_url( $author->data->ID ); ?>">
										
									</div>
									
									<div class=" w-5/6 text-12"> 
										<span class="text-blue-dark uppercase font-museo-700"><?php echo $author->display_name; ?></span> 
										<span class="text-grey-600">
											<?php 
												echo get_the_author_meta('description',  $author->data->ID );
											?>
											<br>
											<a class="text-teal-light font-museo-500 " href="<?php echo get_author_posts_url( $author->data->ID ); ?>">Learn More »</a>
										</span>
									</div>
								</div>
							</div>
							<?php 
								endforeach;
							?>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="flex justify-center">
			<div class="w-11/12 lg:w-full">
				<div class="mb-2">
					<h3 class="uppercase text-16 font-museo-500 text-grey-600">
						more teardowns to explore
					</h3>
				</div>
				<div class="flex flex-wrap -mx-2">
					<?php 
						$related_args = array(
							'posts_per_page' => 2,
						    'post_type' => get_queried_object()->post_type,
						    'post__not_in' => array( get_the_id() ),
						    // 'tax_query' => array(
						    //     array (
						    //         'taxonomy' => $tax,
						    //         'field' => 'slug',
						    //         'terms' => $tax_slug,
						    //     )
						    // ),
						);

						$related_posts = new WP_Query( $related_args );
						
						if ( $related_posts->have_posts() ) : 

						    while ( $related_posts->have_posts() ) : 
						        $related_posts->the_post();
					?>
					<div class="w-full lg:w-1/2 px-2 mb-4 lg:mb-0">
						<div class="">
							<div class="relative h-0" style="padding-bottom: 40.25%">
								<img class="absolute w-full h-full inset-0 object-cover" src="<?php the_post_thumbnail_url(); ?>">
							</div>
							<div class="p-4">
								<h3 class="text-14 font-museo-700">
									<a class="hover:text-grey-600" href="<?php the_permalink(); ?>">
										<?php 
											the_title();
										?>
									</a>
									
								</h3>
							</div>
						</div>
						
						
					</div>
					<?php
						    endwhile;
						endif;
					?>
					
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