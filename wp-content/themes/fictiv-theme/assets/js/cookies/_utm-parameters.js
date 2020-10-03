import { readCookie } from './read-cookie';
import { createCookie } from './create-cookie';
// console.log( readCookie );
// console.log( location );

// var url_string = "http://www.example.com/t.html?a=1&b=3&c=m2-m3-m4-m5"; //window.location.href
var url = new URL( location.href );

function utmCookie( $query ) {

	if ( !readCookie($query) || readCookie( $query ) === 'null' ) {
		createCookie( $query, url.searchParams.get( $query ), 1 );	
	}

	console.log( readCookie( $query ) ); 

}

utmCookie('utm_content');
utmCookie('utm_medium');
utmCookie('utm_campaign');
utmCookie('utm_term');
utmCookie('utm_source');
