import { readCookie } from './read-cookie';
import { createCookie } from './create-cookie';
// console.log( readCookie );
// console.log( location );

// var url_string = "http://www.example.com/t.html?a=1&b=3&c=m2-m3-m4-m5"; //window.location.href
var url = new URL( location.href );
var utmContent = url.searchParams.get("utm_content");
// console.log(url);
// console.log(utmContent);
if ( utmContent ) {
	createCookie('utm_content', utmContent, 1);	
}


// console.log( readCookie('utm_content') );

