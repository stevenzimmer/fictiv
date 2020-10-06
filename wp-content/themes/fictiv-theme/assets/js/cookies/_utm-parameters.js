import { readCookie } from './read-cookie';
import { createCookie } from './create-cookie';
// console.log( readCookie );
// console.log( location );

// var url_string = "http://www.example.com/t.html?a=1&b=3&c=m2-m3-m4-m5"; // window.location.href
var url = new URL( location.href );
// var hour = 1 / 192;
var hour = .001;
// console.log( hour );
// document.referrer = "https://www.google.com";
const regex = /(?:[\w-]+\.)+[\w-]+/;

function regexMatch( domain ) {
	var re = new RegExp( "(https?:\/\/(.+?\.)?" + domain + "\.com(\/[A-Za-z0-9\-\._~:\/\?#\[\]@!$&'\(\)\\*\+,;\=]\\*)?)", "g" );
	console.log( re );
	// var reg = "domain".replace( re, domain );
	// console.log( reg );
	
	console.log( document.referrer );

	return re.test(document.referrer);

}

console.log( regexMatch('google') );

function utmCookie( $query ) {

	if ( !readCookie( $query ) || readCookie( $query ) === 'null' ) {

		if ( url.searchParams.get( $query ) ) {
			console.log('there are search params');

			createCookie( $query, url.searchParams.get( $query ), hour );

		} else if ( document.referrer ) {

			console.log( 'there is a referrer' );
			let source;
			let medium;

			switch( document.referrer ) {

				// case "https://www.google.com/" :
				// case "google.com".match(regex) :
				case /^https?:\/\/([a-zA-Z\d-]+\.){0,}google\.com$/.test('https://google.com') :
					source = "google";
					medium = "organicsearch";
					break;

				// case "https://www.bing.com/" :
				// case "bing.com".match(regex) :
				case /^https?:\/\/([a-zA-Z\d-]+\.){0,}bing\.com$/.test('https://bing.com') :
					source = "bing";
					medium = "organicsearch";
					break;

				// case "https://www.youtube.com/" :
				// case "youtube.com".match(regex) :
				case /^https?:\/\/([a-zA-Z\d-]+\.){0,}youtube\.com$/.test('https://youtube.com') :
					source = "youtube";
					medium = "organicsearch";
					break;

				// case "https://www.facebook.com/" :
				// case "facebook.com".match(regex) :
				case /^https?:\/\/([a-zA-Z\d-]+\.){0,}facebook\.com$/.test('https://facebook.com') :
					source = "facebook";
					medium = "organicsocial";
					break;

				// case "https://www.linkedin.com/" :
				// case "linkedin.com".match(regex) :
				case /^https?:\/\/([a-zA-Z\d-]+\.){0,}linkedin\.com$/.test('https://linkedin.com') :
					source = "linkedin";
					medium = "organicsocial";
					break;

				// case "https://www.instagram.com/" :
				// case "instagram.com".match(regex) :
				case /^https?:\/\/([a-zA-Z\d-]+\.){0,}instagram\.com$/.test('https://instagram.com') :
					source = "instagram";
					medium = "organicsocial";
					break;

				// case "https://www.twitter.com/" :
				// case "twitter.com".match(regex) :
				case /^https?:\/\/([a-zA-Z\d-]+\.){0,}twitter\.com$/.test('https://twitter.com') :
				case "https://t.co/" :
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

	} else {

		console.log('cookie is set');
	
	}

	console.log( $query, readCookie( $query ) ); 

}

utmCookie('utm_medium');
utmCookie('utm_source');
utmCookie('utm_campaign');
utmCookie('utm_content');
utmCookie('utm_term');

