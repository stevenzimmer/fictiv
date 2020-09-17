const partnerToggleBtns = Array.prototype.slice.call( document.querySelectorAll('.partner-toggle-btn') );
const partnerCards = Array.prototype.slice.call( document.querySelectorAll('.partner-card') );
// const toggleModules = Array.prototype.slice.call( document.querySelectorAll('.toggle-module') );
// const toggleModuleWrapper = Array.prototype.slice.call( document.querySelectorAll('.toggle-module-wrapper') );
// const toggleBtnsWrapper = Array.prototype.slice.call( document.querySelectorAll('.toggle-btns-wrapper') );

partnerToggleBtns.forEach( ( btn, i, all ) => {

	btn.addEventListener('click', function( e ) {
		e.preventDefault();

		let mpid = this.dataset.manufacturingProcess;

		all.forEach( ( item ) => {
			item.classList.remove('active');
		});

		this.classList.add('active');

		partnerCards.forEach( (card) => {

			if ( card.dataset.manufacturingProcess === mpid ) {

				card.classList.remove('hidden');

			} else {

				card.classList.add('hidden');

			}

		});

	});
});