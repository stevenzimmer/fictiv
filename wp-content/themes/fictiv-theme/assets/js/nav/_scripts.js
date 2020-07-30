const btnOpen = document.getElementById('mobile-toggle');
// const btnClose = document.getElementById('mobile-toggle-close');
const mobileNav = document.getElementById('mobile-nav');

btnOpen.addEventListener('click', function( e ) {
	this.classList.toggle('open');
});

// btnClose.addEventListener('click', function( e ) {
// 	mobileNav.classList.remove('open');
// });