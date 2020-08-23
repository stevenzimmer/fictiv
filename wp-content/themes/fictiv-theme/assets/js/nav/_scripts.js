const mobileToggle = document.getElementById('mobile-toggle');
// const btnClose = document.getElementById('mobile-toggle-close');
const mobileNav = document.getElementById('mobile-nav');

const primaryMenuItems = Array.prototype.slice.call( document.querySelectorAll('.primary-menu-item') );
const subMenus = Array.prototype.slice.call( document.querySelectorAll('.sub-menu') );
const mobileMenuItems = Array.prototype.slice.call( document.querySelectorAll('.mobile-menu-item') );
const mobileMenuDropdowns = Array.prototype.slice.call( document.querySelectorAll('.mobile-menu-dropdown') );
const bodyOverlay = document.getElementById('body-overlay');

const mobileMenu = document.getElementById('mobile-menu');


mobileToggle.addEventListener('click', function( e ) {
	this.classList.toggle('open');

	mobileMenu.classList.toggle('active');
	bodyOverlay.classList.toggle('hidden');
});

mobileMenuItems.forEach( ( item, i, all ) => {
	item.addEventListener('click', function( e ) {
		
		if ( !document.querySelector('.mobile-menu-dropdown[data-dropdown="' + item.dataset.menu +'"]').classList.contains('active')) {

			mobileMenuDropdowns.forEach( (dropdown) => {

				dropdown.classList.remove('active');
			
			});

			document.querySelector('.mobile-menu-dropdown[data-dropdown="' + item.dataset.menu +'"]').classList.add('active');

		} else {

			mobileMenuDropdowns.forEach( (dropdown) => {

				dropdown.classList.remove('active');
			
			});

		}
		
		
	});
});

primaryMenuItems.forEach( ( item, i, all ) => {

	item.addEventListener('click', function( e ) {
		e.preventDefault();

		if ( !this.classList.contains('active')) {

			all.forEach( (item) => {
				item.classList.remove('active');
			});

			subMenus.forEach( (menu) => {
				menu.classList.remove('active');
			});

			this.classList.add('active');
			document.querySelector('.sub-menu[data-menu="' + this.dataset.menu + '"]').classList.add('active');
			bodyOverlay.classList.remove('hidden');

		} else {

			all.forEach( (item) => {
				item.classList.remove('active');
			});

			subMenus.forEach( (menu) => {
				menu.classList.remove('active');
			});

			bodyOverlay.classList.add('hidden');

		}
	});
});

bodyOverlay.addEventListener('click', function() {

	primaryMenuItems.forEach( ( item, i, all ) => {
		item.classList.remove('active');
	});

	subMenus.forEach( (menu) => {
		menu.classList.remove('active');
	});

	mobileMenu.classList.remove('active');

	mobileToggle.classList.remove('open');

	this.classList.add('hidden');
});

