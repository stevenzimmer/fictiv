<?php 
	function capabilities_hero( $arr ) {
?>
<header class="capabilities-hero relative">
	<?php 
        if ( $arr['img'] ) :
    ?>
    <div class="absolute w-full h-full inset-0">
        <div class="flex md:justify-end h-full">
            <div class="w-full md:w-11/12 lg:w-9/12">
                <div class="h-full bg-cover bg-right lazyload" data-bg="url(<?php echo $arr['img']; ?>)"></div>
            </div>
        </div>
    </div>
    <?php 
        endif;
    ?>
    <div class="bg-white bg-opacity-75 md:bg-transparent md:bg-gradient-to-r from-white via-white absolute w-full inset-0 h-full"></div>

    <div class="container relative py-12">
       
        <div class="flex justify-center">
            <div class="w-11/12">
                <div class="flex flex-wrap justify-center lg:justify-start">
                    <div class="w-full lg:w-5/12 xl:w-7/12 mb-6 lg:mb-0">
                        <div>
                            <p class="text-grey-400 font-museo-700 uppercase" >
                                <?php 
                                    echo $arr['label'];
                                ?>
                            </p>
                            
                        </div>
                        <div >
                            <h1 class="text-grey-700 font-museo-700"><?php 
                                    echo $arr['title'];
                                ?></h1>

                        </div>
                        <?php 
                            if( $arr['para'] ) : 
                        ?>
                        <div class="text-grey-600 capabilities-hero-paragraph box-check-dark mb-4 mt-2">
                            <?php 
                               echo $arr['para'];
                            ?>
                        </div>
                        <?php 
                            endif; 
                        ?>

                        <div class="mt-4">
                            <?php 
                                $hero_cta_btn = $arr['btn'];

                                if ( $hero_cta_btn['text'] ) :
                            ?>
                            <a class="btn btn-primary" href="<?php echo $hero_cta_btn['link']; ?>"><?php echo $hero_cta_btn['text']; ?></a>
                            <?php 

                                else :
                            ?>
                            <a class="btn btn-primary" href="https://app.fictiv.com/signup/">Get a quote</a>
                            <?php
                                endif;
                            ?>    
                        </div>
                    </div>
                  
                </div>
                
            </div>
        </div>
    </div>
</header>
<?php 
}
?>