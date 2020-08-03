<?php
	function inject_form( $content ) {

	    if ( !is_singular('cpt_blog') ) :

	    	
	 	
	 	else:

 			if ( get_field('resources_home_form_title') ) :

	 		
			    $content = explode("</p>", $content);
			    $paragraphAfter = round( count( $content ) / 4, 0 );
			    $blog_subscribe = '';
			    for ($i = 0; $i < count($content); $i++) :
			    
			        if ( $i == $paragraphAfter ) :
			        	$blog_subscribe .= '
			        	<div class="bg-blue-dark py-4 px-6 md:float-right max-w-sm mt-1 md:ml-4 mb-6 md:mb-4 subscribe-box-float shadow-lg content-subscribe-wrapper">
					    	<div class="mb-2">
					    		<h3 class="text-white text-16 font-museo-500">' . 
									get_field('resources_home_form_title') . '
								</h3>
					    	</div>
					    	<div>
						    	<p class="text-white font-museo-500 text-14">' . 
									get_field('resources_home_form_paragraph') .
								
								'</p>
						    </div>
						    <div>
						    	<form data-form-type="mkto-redirect" class="mktoForm global" data-formId="' . get_field('resources_home_form_marketo_id') .  '"></form>
						    </div>
						  	
						</div>
						';
			 
			    
			            
			        endif;
			        $blog_subscribe .= $content[$i] . "</p>";
			    
			    endfor;

			    return $blog_subscribe;

			else :

				return $content;

			endif;
	 	
	 	endif;
	    
	    
	}

	add_filter('the_content', 'inject_form');
?>