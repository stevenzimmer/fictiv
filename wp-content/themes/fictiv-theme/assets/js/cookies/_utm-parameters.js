import { readCookie } from './read-cookie';
import { createCookie } from './create-cookie';
// console.log( readCookie );
// console.log( location );

// var url_string = "http://www.example.com/t.html?a=1&b=3&c=m2-m3-m4-m5"; // window.location.href
var url = new URL( location.href );
var hour = 1 / 192;
// console.log( hour );

function utmCookie( $query ) {

	if ( !readCookie( $query ) || readCookie( $query ) === 'null' ) {

		if ( url.searchParams.get( $query ) ) {
			console.log('there are search params');

			createCookie( $query, url.searchParams.get( $query ), hour );

		} else if ( document.referrer ) {

			let source;
			let medium;

			switch( document.referrer ) {

				case "https://www.google.com" :
					source = "google";
					medium = "organicsearch";
					break;

				case "https://www.bing.com/" :
					source = "bing";
					medium = "organicsearch";
					break;

				case "https://www.youtube.com/" :
					source = "youtube";
					medium = "organicsearch";
					break;

				case "https://www.facebook.com/" :
					source = "facebook";
					medium = "organicsocial";
					break;

				case "https://www.linkedin.com/" :
					source = "linkedin";
					medium = "organicsocial";
					break;

				case "https://www.instagram.com/" :
					source = "instagram";
					medium = "organicsocial";
					break;

				case "https://www.twitter.com/" :
					source = "twitter";
					medium = "organicsocial";

					break;

				default:
					source = document.referrer;
					medium = "organic";

					break;

			}

			switch( $query ) {
				
				case "utm_medium" :
					createCookie( $query, medium, hour );
					break;

				case "utm_source" :
					createCookie( $query, source, hour );
					break;

				default :
					createCookie( $query, 'Not Provided', hour );
					break;

			}

		} else {
			console.log('no referrer, no params');

			switch( $query ) {
				case "utm_medium" :
				case "utm_source" :
					createCookie( $query, 'X', hour );
					break;

				default :
					createCookie( $query, 'Not Provided', hour );
					break;

			}
		}
	}

	console.log( $query, readCookie( $query ) ); 

}

utmCookie('utm_medium');
utmCookie('utm_source');
utmCookie('utm_campaign');
utmCookie('utm_content');
utmCookie('utm_term');

