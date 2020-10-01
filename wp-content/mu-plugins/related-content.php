<?php 
function related_content_module( $rc_arr ) {
?>
	<div class="h-full relative group border border-grey-200">
        <a href="<?php echo $rc_arr['link']; ?>" class="absolute w-full h-full inset-0 z-50"></a>

        <div class="relative h-0" style="padding-bottom: 40.25%">
            <img class="absolute w-full h-full inset-0 object-cover lazyload" data-src="<?php echo $rc_arr['img']; ?>">
        </div>
        <div class="p-4">
        	<div>
                <h3 class="font-museo-700">

                    <?php 
                       echo $rc_arr['title'];
                    ?>
                    
                </h3>
            </div>
            <div class=" mb-4 max-lines max-lines-3">
				 <?php 
                   echo $rc_arr['excerpt'];
                ?>

			</div>
			<div class="">
				<p class="group-hover:text-teal-dark text-teal-light font-museo-700">Learn More</p>
			</div>
        </div>
    </div>
<?php
}
?>