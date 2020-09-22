<?php 
/* 	Template Name: Guide to Injection Molding Success
**	Template Post Type: cpt_video, page
*/ 
	get_header();
?>
<header class="py-20 relative">
	<div class="absolute w-full h-full inset-0 bg-cover bg-center" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/images/background/thank-you-hero.png'; ?>)"></div>
	<div class="container relative">
		<div class="flex justify-center lg:justify-start flex-wrap">
			<div class="w-11/12 lg:w-5/12 mb-12 lg:mb-0">
				<div class="uppercase text-blue-dark font-museo-900">Video Course</div>
                <h1 class="text-blue-dark font-museo-900 text-24 lg:text-48 uppercase leading-tight mb-6"><?php the_title(); ?></h1>
                <div class="">
                	<a href="#register" class="btn btn-primary">SIGN UP NOW</a>
                </div>
			</div>
			<div class="w-full lg:w-7/12">
				<div style="padding-top: 56.25%;" class=" w-full relative p-0">
                    <iframe
                        class="absolute w-full h-full inset-0 "
                        src="https://www.youtube.com/embed/<?php the_field('youtube_id') ?>" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen
                       
                    ></iframe>
                </div>
			</div>
		</div>
	</div>
</header>
<section class="py-20">
	<div class="container">
		<div class="flex justify-center mb-6">
			<div class="w-11/12 lg:w-9/12">
				<p class="mb-4">Compared to other manufacturing processes, injection molding is incredibly complex and requires experience to achieve mastery. From designing parts for injection molding constraints to choosing between single vs multi cavity tooling to overseeing multi-step post processing operations, there’s a lot to manage and consider.</p>
               	<p class="">To help jumpstart your understanding of this complex process, we put together this 4-part educational video series where Fictiv’s Director of Overseas Manufacturing, Cameron Moore, will walk you through key injection molding tricks of the trade he’s acquired over thirteen years living and working in the manufacturing industry in China.</p>
			</div>
		</div>
		<div class="flex justify-center">
			<div class="w-11/12 lg:w-9/12">
				<div class="text-center mb-12">
					<h2 class="text-30 font-museo-500 text-blue-dark">Episodes</h2>
				</div>
				<div class="flex flex-wrap -mx-2">
					<?php 
						$episodes = array(
							array(
								'title' => 'Tool Types: Single vs Multi vs Family Cavity Tools',
								'para' => 'Learn the pros and cons of different tool types and which one is best suited for your manufacturing needs.'
							),

							array(
								'title' => 'Tricks of the Trade: Secondary Operations',
								'para' => 'Learn expert tips on how to manage multi-step post processing operations for injection molding including heat staking, painting and assembly.'
							),

							array(
								'title' => 'Mold Life: Rapid vs Production Tooling',
								'para' => 'Learn the differences and pros and con between rapid vs production tooling and tricks of the trade to extend your mold life.'
							),

							array(
								'title' => 'Manufacturability Feedback Tips',
								'para' => 'Learn why manufacturability early on is critical to your success in injection molding and how Fictiv can help.'
							),
						);

						foreach ( $episodes as $i => $ep ) :
						
					?>
					<div class="lg:w-1/2 px-2 mb-4">
						<div class="mb-4">
							<div style="padding-top: 56.25%;" class=" w-full relative p-0">
								<img class="absolute w-full h-full inset-0 object-cover lazyload" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/screenshots/guide-to-injection-molding-success-<?php echo $i + 1; ?>.jpg" alt="<?php echo $ep['title']; ?> thumbnail">

								<div class="absolute w-full h-full inset-0 flex justify-center items-center">
									<div>
										<?php 
											echo file_get_contents( get_template_directory_uri() . '/assets/images/icons/lock-white.svg');
										?>
									</div>
								</div>
							</div>
						</div>
						<div class="flex items-center">
							<div class="w-12 bg-teal-light h-12 flex justify-center items-center">
								<div>
									<p class="text-white font-museo-900 text-20"><?php echo $i + 1; ?></p>
								</div>
							</div>
							<div class="w-full px-4">
								<h3 class="text-blue-dark text-20 font-museo-500">
									<?php echo $ep['title']; ?>
								</h3>
							</div>
						</div>
						<div>
							<p>
								<?php echo $ep['para']; ?>
							</p>
						</div>
					</div>
					<?php 
						endforeach;
					?>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="bg-grey-100 py-20">
	<div class="container">
		<div class="text-center mv-12">
			 
		</div>
		<div class="flex justify-center">
			<div class="w-11/12 lg:w-9/12">
				<div class="bg-white p-8">
					<div class="flex flex-wrap -mx-6 items-center">
						<div class="w-1/2 lg:w-3/12 px-6">
							<div style="padding-top: 90.25%;" class=" w-full relative p-0">
								<img class="absolute w-full h-full inset-0 object-cover lazyload" alt="Cameron Moore headshot" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/headshots/cameron-moore.jpg">
								
							</div>
						
						</div>	
						<div class="w-full lg:w-9/12 px-6">
							<div class="mb-4">
								<h3 class="text-24 text-default font-museo-700">
									Cameron Moore
								</h3>
								<p>
									Director of Overseas Manufacturing | Fictiv
								</p>

		                    </div>
		                    <p>
		                        Cameron runs Fictiv&#x27;s China headquarters, overseeing operations and the expansion of Fictiv&#x27;s Asia Manufacturing Partner program. A Mechanical Engineer by training and a 13 year resident of Guangzhou, China, Cameron brings deep experience in overseas manufacturing to Fictiv. Cameron loves Chinese culture, and is constantly learning the subtle nuances of the language and doing business in China.
		                    </p>
						</div>
					</div>
				
				</div>
			</div>
		</div>
	</div>
</section>
<section class="py-20 ">
	<div class="container">
		<div class="mb-6 text-center">
			<h2 class="text-24 lg:text-30 font-museo-500 text-blue-dark">Sign up for the free 4-day course</h2>
		</div>
		<div class="flex justify-center">
			<div class="w-11/12 md:w-8/12 lg:w-6/12">
				<div class="mb-2">
					<form data-form-type="guide-to-injection-molding" class="mktoForm mb-6" data-formId="468"></form>
				</div>
				
				<?php 
					get_template_part('partials/gdpr', 'text');
				?>
			</div>
			
		</div>
	</div>
</section>
     
<?php 
get_footer();
?>
