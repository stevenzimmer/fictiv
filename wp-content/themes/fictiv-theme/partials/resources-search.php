<form role="search" method="get" id="search-form" class="search-form" action="<?php echo home_url(); ?>">
	<div class="flex justify-between items-stretch h-full" id="search-wrapper">
		<div class="w-full">
			<input placeholder="Search resources" class="w-full bg-grey-100 py-2 px-2 text-12 font-museo-700 text-grey-600 border border-transparent outline-none focus:border-teal-light resources-search-input" type="text" value="" name="s" id="s">
		</div>
		<div id="resources-search-submit" class="bg-grey-100 resources-search-submit">
			<div class="flex items-center h-full px-2">
				<?php 
					echo file_get_contents( get_template_directory_uri() . '/assets/images/icons/search.svg');
				?>
			</div>
		
			
		</div>
		
	</div>
</form>