const toggleBtns = Array.prototype.slice.call( document.querySelectorAll('.module-toggle-btn') );
const toggleModules = Array.prototype.slice.call( document.querySelectorAll('.toggle-module') );
const toggleModuleWrapper = Array.prototype.slice.call( document.querySelectorAll('.toggle-module-wrapper') );
const toggleBtnsWrapper = Array.prototype.slice.call( document.querySelectorAll('.toggle-btns-wrapper') );



toggleBtns.forEach( ( btn, i, all ) => {

	btn.addEventListener('click', function( e ) {
		e.preventDefault();

		Array.from( this.parentElement.children ).forEach( ( child ) => {
			child.classList.remove('active');
		});

		this.classList.add('active');

		Array.from( this.parentNode.parentNode.querySelectorAll('.toggle-module-wrapper')[0].children ).forEach( (child) => {

	
			child.classList.add('hidden');
		
		});

		document.querySelector('[data-toggle-module="' + this.hash.substring(1) + '"]').classList.remove('hidden');

	});
});

