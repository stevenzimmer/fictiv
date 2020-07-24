<?php 
function remove_jquery_migrate( $scripts ) {
   if ( ! is_admin() && isset( $scripts->registered['jquery'] ) ) :
        $script = $scripts->registered['jquery'];
        if ( $script->deps ) :
            // Check whether the script has any dependencies
            $script->deps = array_diff( $script->deps, array( 'jquery-migrate' ) );
        endif;
    endif;
}
add_action( 'wp_default_scripts', 'remove_jquery_migrate' );
?>