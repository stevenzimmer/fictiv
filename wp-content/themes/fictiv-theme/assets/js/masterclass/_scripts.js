// require('waypoints/lib/noframework.waypoints.js');
import StickySidebar from 'sticky-sidebar';

if ( document.body.classList.contains('cpt_masterclass-template-page-masterclass-module')  ) {
	
	const module_h2 = Array.prototype.slice.call( document.querySelectorAll('.post-content h2') );



	let headers = [];

	const label = "header-";

	const masterclassContents = document.getElementById('masterclass-contents');
	const moduleFooter = document.getElementById('module-footer');
	const masterclassContentsWidth = masterclassContents.offsetWidth;
	const masterclassContentsHeight = masterclassContents.offsetHeight;

	const masterclassContentsTop = masterclassContents.offsetTop;
	const primaryNav = document.getElementById('primary-nav');
	const scrollOffset = 20;

	if ( module_h2.length ) {

		module_h2.forEach( ( h2, i ) => {

			h2.id = label + i;

			headers.push( h2.innerText );

		});

		let contents_list = document.createElement('ul');

		document.getElementById('contents-list').appendChild( contents_list );

		headers.forEach( ( item, i, all ) => {

			let li = document.createElement('li');

			contents_list.appendChild( li );

			li.innerHTML = `<a id="contents-item-${i}" class="contents-item block py-2 text-grey-600 hover:text-teal-light" href="#${label}${i}">${item}</a>`;

	// 		// let waypoint = new Waypoint({
	// 		//     element: document.getElementById( label + i ),
	// 		//     handler: (direction) => {
			    	
	// 		//     	document.querySelectorAll('.contents-item').forEach( ( contentItem ) => {

	// 		//     		contentItem.classList.remove('active');

	// 		//     	});
	// 		//         document.getElementById("contents-item-" + i ).classList.add('active');
	// 		//     },
	// 		//     offset: scrollOffset + primaryNav.offsetHeight + 10
		
	// 		// });
			
		});

	// 	// let waypointFooter = new Waypoint({
	// 	//     element: moduleFooter,
	// 	//     handler: function(direction) {

	// 	//     	if ( direction === 'down' ) {
	// 	//     		console.log( 'module footer hit down' );

	// 	// 	    	masterclassContents.classList.remove( "fixed" );
	// 	// 	    	masterclassContents.classList.add( "absolute" );

	// 	// 			masterclassContents.style.top = ( this.triggerPoint + primaryNav.offsetHeight + scrollOffset ) + "px";

	// 	// 			masterclassContents.style.width = masterclassContentsWidth + "px";

	// 	//     	} else {

	// 	//     		console.log( 'module footer hit up' );

	// 	// 	    	masterclassContents.classList.add( "fixed" );
	// 	// 	    	masterclassContents.classList.remove( "absolute" );

	// 	// 	    	masterclassContents.style.width = masterclassContentsWidth + "px";
	// 	// 			masterclassContents.style.top = primaryNav.offsetHeight + scrollOffset + "px";

	// 	//     	}
		    	
	// 	//     },
	// 	//     offset: masterclassContentsHeight + moduleFooter.offsetHeight + primaryNav.offsetHeight

	// 	// });

		

		// const contentsEvents = new StickySidebar( masterclassContents );

		// masterclassContents.addEventListener('affix.top.contentsEvents', function ( e ) {
	// 	// 	console.log( e );
	// 	//     console.log( 'Fires immediately before the element has been affixed to the top of the viewport' );
	// 	// });

	// 	// masterclassContents.addEventListener('affixed.container-bottom.contentsEvents', function ( e ) {
	// 	// 	console.log( e );
	// 	//     console.log( 'Fired before the element is affixed to the bottom of the container' );
	// 	// });

		// const contentsSidebar = new StickySidebar( '#masterclass-contents', {
		// 	topSpacing: primaryNav.offsetHeight + scrollOffset,
		// 	bottomSpacing: scrollOffset,
		// 	containerSelector: '.container',
		// 	innerWrapperSelector: '.masterclass-sidebar-inner'
		// });

	// 	const contentSidebar = new StickySidebar( masterclassContents );

	// 	masterclassContents.addEventListener('initialized.contentSidebar', function( ) {
	// 	   // after the sticky sidebar plugin has been initialized
	// 	   console.log('initialized');
	// 	});

	// 	masterclassContents.addEventListener('affixed.top.contentSidebar', function( ) {
	// 	   // after the sticky sidebar plugin has been initialized
	// 	   console.log('affixed top');
	// 	});

		// let waypointContents = new Waypoint({
		//     element: masterclassContents,
		//     handler: function(direction) {

		//     	console.log( this );

		//     	if ( direction === 'down' ) {

		//     		console.log( 'sidebar hit down' );

		// 	    	masterclassContents.classList.add( "fixed" );
		// 			masterclassContents.style.width = masterclassContentsWidth + "px";
		// 			masterclassContents.style.top = primaryNav.offsetHeight + scrollOffset + "px";

		//     	} else {

		//     		console.log( this.triggerPoint );
		//     		console.log( 'sidebar hit up' );
			
		// 			// masterclassContents.classList.remove("fixed");
			
		//     	}
		    	
		//     },
		//     offset: primaryNav.offsetHeight

		// });

		// window.addEventListener('scroll', function( e ) {

		// 	if ( e.target.scrollingElement.scrollTop > moduleFooter.offsetTop - ( primaryNav.offsetHeight + masterclassContentsHeight + moduleFooter.offsetHeight + scrollOffset ) ) {
		// 		console.log( 'disable' );

		// 		waypointContents.disable();

		// 		masterclassContents.classList.remove( "fixed" );
		//     	masterclassContents.classList.add( "absolute" );
		// 		masterclassContents.style.top = ( moduleFooter.offsetTop - ( primaryNav.offsetHeight + masterclassContentsHeight + moduleFooter.offsetHeight + scrollOffset ) ) + "px";

		// 		masterclassContents.style.width = masterclassContentsWidth + "px";
			
		// 	}

		// 	if ( !waypointContents.enabled && e.target.scrollingElement.scrollTop < moduleFooter.offsetTop - ( primaryNav.offsetHeight + masterclassContentsHeight + moduleFooter.offsetHeight + scrollOffset ) ) {
		// 		console.log('enabled');
		// 		waypointContents.enable();

		// 		masterclassContents.classList.add( "fixed" );
		//     	masterclassContents.classList.remove( "absolute" );
		//     	masterclassContents.style.width = masterclassContentsWidth + "px";
		// 		masterclassContents.style.top = primaryNav.offsetHeight + scrollOffset + "px";
		// 	}

		// });

		const links = document.querySelectorAll(".contents-list li .contents-item");
	 
		for (const link of links) {
		  link.addEventListener("click", clickHandler);
		}
		 
		function clickHandler(e) {
		  e.preventDefault();
		  const href = this.getAttribute("href");
		  const offsetTop = document.querySelector(href).offsetTop;
		 
		  scroll({
		    top: offsetTop - ( primaryNav.offsetHeight + scrollOffset + 9.9 ),
		    behavior: "smooth"
		  });
		}
	}
}

if ( document.body.classList.contains('cpt_masterclass-template-default')  ) {
	const bioTriggers = Array.prototype.slice.call( document.querySelectorAll('.bio-trigger') );

	bioTriggers.forEach( ( trigger ) => {

		trigger.addEventListener('click', function( e ) {

			e.preventDefault();

			document.querySelector('.bio-wrapper[data-bio="' + e.target.dataset.bio + '"]').classList.toggle('active');
			document.querySelector('.bio-wrapper[data-bio="' + e.target.dataset.bio + '"]').parentElement.classList.toggle('shadow-lg');
		
		});
	});

}