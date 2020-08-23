if ( document.body.classList.contains('page-template-page-cnc-machining') ) {
const toleranceToggleBtns = Array.prototype.slice.call( document.querySelectorAll('.tolerance-toggle-btn') );
const toleranceTables = Array.prototype.slice.call( document.querySelectorAll('.tolerance-table') );
const toleranceModules = Array.prototype.slice.call( document.querySelectorAll('.tolerance-module') );
const optionsList = Array.prototype.slice.call( document.querySelectorAll(".tolerance-option") );
const optionsContainer = Array.prototype.slice.call( document.querySelectorAll(".options-container") );
const selectBox =  document.querySelector(".select-box");
const customClick = new CustomEvent('click');

if ( selectBox ) {
	selectBox.addEventListener('click', function( e ) {

		this.classList.toggle('active');
	});
}


toleranceToggleBtns.forEach( ( btn, i, all ) => {

	btn.addEventListener('click', function( e ) {
		e.preventDefault();

		toleranceTables.forEach( ( table ) => {
			table.classList.add('hidden');
		});

		all.forEach( (item) => {
			item.classList.remove('active');
		})
 
		this.classList.add('active');

		document.querySelector('[data-tolerance-table="' + this.hash.substring(1) + '"]').classList.remove('hidden');

	});
});

optionsList.forEach( function( o, i, all ) {
	o.addEventListener('click',  function( e ) {
		e.preventDefault();
		

		toleranceModules.forEach( ( mod ) => {

			mod.classList.add('hidden');
		});


		all.forEach( ( item ) => {
			item.classList.remove('active');
		});

		this.classList.add('active');
		
		document.querySelector('.tolerance-module[data-tolerance-module="' + this.dataset.toleranceModule + '"]').classList.remove('hidden');

		Array.from(document.querySelector('.tolerance-module[data-tolerance-module="' + this.dataset.toleranceModule + '"]').children ).forEach( ( child ) => {
			
			if( child.classList.contains('tolerance-toggle-btns') ) {

				child.children[0].classList.add('active');
				child.children[0].dispatchEvent(customClick);
			}


		});
	});
});
}