<?php
	function inject_form( $content ) {

	    if ( !is_singular('cpt_blog') ) :

	    	return $content;
	 	
	 	else:
	 		
		    $content = explode("</p>", $content);
		    $paragraphAfter = round( count( $content ) / 4, 0 );
		    $blog_subscribe = '';
		    for ($i = 0; $i < count($content); $i++) :
		    
		        if ( $i == $paragraphAfter ) :
		        	$blog_subscribe .= '
		        	<div class="bg-blue-dark border-radius p-4 md:float-right max-w-xs mt-1 md:ml-4 mb-6 md:mb-4 subscribe-box-float shadow-lg content-subscribe-wrapper">
				    	<div class="mb-2">
				    		<h3 class="text-white text-16 font-museo-500">Download tolerance analysis calculator</h3>
				    	</div>
				    	<div>
					    	<p class="text-white font-museo-500 text-14">Get access to our free tolerance analysis calculator to ensure your 3D parts are printed to spec every time.</p>
					    </div>
					    <div class="p-2 bg-white mb-4">
					    	Enter your email
					    </div>
					    <div class="p-2 bg-teal-light text-white text-center uppercase font-museo-700 text-16">
					    	Download
					    </div>

				    	<div class="form-group hidden">
							<form id="mktoForm_1442" class="content-subscribe"></form>
				        </div>
						<div class="form-terms text-white text-center">
							
						</div>
					</div>
					';
		 
		    
		            
		        endif;
		        $blog_subscribe .= $content[$i] . "</p>";
		    
		    endfor;
	 	
	 	endif;
	    
	    return $blog_subscribe;
	}

	add_filter('the_content', 'inject_form');
?>