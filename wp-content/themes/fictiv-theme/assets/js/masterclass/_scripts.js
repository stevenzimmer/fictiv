require('waypoints/lib/noframework.waypoints.js');
import StickySidebar from 'sticky-sidebar';
const primaryNav = document.getElementById('primary-nav');
const scrollOffset = 20;
let contentsSidebar;

if ( document.body.classList.contains('cpt_masterclass-template-page-masterclass-module')  ) {
	
	const module_h2 = Array.prototype.slice.call( document.querySelectorAll('.post-content h2') );
	let headers = [];
	const label = "header-";
	const masterclassContents = document.getElementById('masterclass-contents');
	const moduleFooter = document.getElementById('module-footer');
	const masterclassContentsWidth = masterclassContents.offsetWidth;
	const masterclassContentsHeight = masterclassContents.offsetHeight;
	const masterclassContentsTop = masterclassContents.offsetTop;

	const currentContentItem = document.querySelector('.masterclass-content-item.current');
	const sidebarObj = {
		topSpacing: primaryNav.offsetHeight + scrollOffset,
		bottomSpacing: scrollOffset,
		containerSelector: '#module-container',
		innerWrapperSelector: '.masterclass-sidebar-inner',
		minWidth: 1024
	};

	contentsSidebar = new StickySidebar( masterclassContents, sidebarObj);
	
	currentContentItem.addEventListener('click', function() {

		this.nextElementSibling.classList.toggle('active');

		this.querySelector('.caret').classList.toggle('active');

		contentsSidebar.updateSticky();

	});
	

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

			li.innerHTML = `<a id="masterclass-content-item-${i}" class="masterclass-content-item block py-2 text-grey-600 hover:text-teal-light ${ i === 0 ? 'active' : '' }" href="#${label}${i}">${item}</a>`;
			

			let contentsLinks = new Waypoint({
			    element: document.getElementById( label + i ),
			    handler: (direction) => {
			    	
			    	document.querySelectorAll('.masterclass-content-item').forEach( ( contentItem ) => {

			    		contentItem.classList.remove('active');

			    	});

			        document.getElementById("masterclass-content-item-" + i ).classList.add('active');

			        
			        contentsSidebar.updateSticky();
			       

			    },

			    offset: scrollOffset + primaryNav.offsetHeight + 10
		
			});
			
		});

		const links = document.querySelectorAll(".contents-list li .masterclass-content-item");
	 
		for ( const link of links ) {

			link.addEventListener("click", clickHandler);
		
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

function clickHandler(e) {
  	e.preventDefault();
  	const href = this.getAttribute("href");
  
 	const offsetTop = document.querySelector( href ).offsetTop;
 	
 	contentsSidebar.updateSticky();

  	scroll({
    	top: offsetTop - ( primaryNav.offsetHeight + scrollOffset ),
    	behavior: "smooth"
  	});


}
