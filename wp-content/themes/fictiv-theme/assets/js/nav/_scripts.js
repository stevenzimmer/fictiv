const btnOpen = document.getElementById('mobile-toggle');
// const btnClose = document.getElementById('mobile-toggle-close');
const mobileNav = document.getElementById('mobile-nav');

const primaryMenuItems = Array.prototype.slice.call( document.querySelectorAll('.primary-menu-item') );
const subMenus = Array.prototype.slice.call( document.querySelectorAll('.sub-menu') );
const bodyOverlay = document.getElementById('body-overlay');
	// const filterItems = Array.prototype.slice.call( document.querySelectorAll('.filter-item') );
console.log( bodyOverlay );

btnOpen.addEventListener('click', function( e ) {
	this.classList.toggle('open');
});

primaryMenuItems.forEach( ( item, i, all ) => {

	item.addEventListener('click', function( e ) {
		e.preventDefault();

		
		

		if ( !this.classList.contains('active')) {

			all.forEach( (item) => {
				item.classList.remove('active');
			});

			subMenus.forEach( (menu) => {
				menu.classList.add('hidden');
			});

			this.classList.add('active');
			document.querySelector('.sub-menu[data-menu="' + this.dataset.menu + '"]').classList.remove('hidden');
			bodyOverlay.classList.remove('hidden');

		} else {

			all.forEach( (item) => {
				item.classList.remove('active');
			});

			subMenus.forEach( (menu) => {
				menu.classList.add('hidden');
			});

			bodyOverlay.classList.add('hidden');

		}
		
		

	});
});