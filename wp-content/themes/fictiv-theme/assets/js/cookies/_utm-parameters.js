import { readCookie } from './read-cookie';
import { createCookie } from './create-cookie';

const url = new URL( location.href );
const hour = (1 / 24);

function regexMatch( domain ) {
	const re = new RegExp( "(https?:\/\/(.+?\.)?" + domain + "(\/[A-Za-z0-9\-\._~:\/\?#\[\]@!$&'\(\)\\*\+,;\=]\\*)?)", "g" );

	return re.test( document.referrer );

}

function utmCookie( $query ) {

	if ( !readCookie( $query ) || readCookie( $query ) === 'null' ) {
		
		if ( url.searchParams.get( $query ) ) {

			createCookie( $query, url.searchParams.get( $query ), hour );

		} else if ( document.referrer ) {

			let source;
			switch( true ) {

				case regexMatch('google.com') :
					source = "google";
					break;

				case regexMatch('bing.com') :
					source = "bing";
					break;

				case regexMatch('youtube.com') :
					source = "youtube";
					break;

				case regexMatch('facebook.com') :
					source = "facebook";
					break;

				case regexMatch('linkedin.com') :
					source = "linkedin";
					break;

				case regexMatch('instagram.com') :
					source = "instagram";
					break;

				case regexMatch('twitter.com') :
				case regexMatch('t.co') :
					source = "twitter";
					break;

				case regexMatch('fictiv.com') :
					source = "fictiv.com";
					break;

				default:
					source = document.referrer;
					break;

			}

			let medium;
			switch( true ) {

				case regexMatch('google.com') :
				case regexMatch('bing.com') :
				case regexMatch('youtube.com') :
					medium = "organicsearch";
					break;

				case regexMatch('facebook.com') :
				case regexMatch('linkedin.com') :
				case regexMatch('instagram.com') :
				case regexMatch('twitter.com') :
				case regexMatch('t.co') :
					medium = "organicsocial";
					break;

				case regexMatch('fictiv.com') :
					medium = "direct";
					break;

				default:
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
}

utmCookie('utm_medium');
utmCookie('utm_source');
utmCookie('utm_campaign');
utmCookie('utm_content');
utmCookie('utm_term');

