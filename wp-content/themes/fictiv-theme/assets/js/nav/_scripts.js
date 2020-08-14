const btnOpen = document.getElementById('mobile-toggle');
// const btnClose = document.getElementById('mobile-toggle-close');
const mobileNav = document.getElementById('mobile-nav');

const primaryMenuItems = Array.prototype.slice.call( document.querySelectorAll('.primary-menu-item') );
const subMenus = Array.prototype.slice.call( document.querySelectorAll('.sub-menu') );

	// const filterItems = Array.prototype.slice.call( document.querySelectorAll('.filter-item') );


btnOpen.addEventListener('click', function( e ) {
	this.classList.toggle('open');
});

// btnClose.addEventListener('click', function( e ) {
// 	mobileNav.classList.remove('open');
// });

primaryMenuItems.forEach( ( item ) => {

	item.addEventListener('click', function( e ) {
		e.preventDefault();

		// subMenus.forEach( (menu) => {
		// 	menu.classList.add('hidden');
		// });

		document.querySelector('.sub-menu[data-menu="' + this.dataset.menu + '"]').classList.toggle('hidden');

	});
});