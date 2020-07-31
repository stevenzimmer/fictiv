if ( document.getElementById('filter-form') ) {
	
	// const filterContentBtns = Array.prototype.slice.call( document.querySelectorAll('.filter-content-btn') );
	const filterItems = Array.prototype.slice.call( document.querySelectorAll('.filter-item') );
	const filterTitles = Array.prototype.slice.call( document.querySelectorAll('.filter-title') );

	const filterItemcheckboxes = Array.prototype.slice.call( document.querySelectorAll('.filter-item-checkbox') );
	const clearAllBtn = document.getElementById('clear-all');

	let checkCount = 0;


	filterItems.forEach( ( item, i, all ) => {

		if ( item.querySelector('.filter-item-checkbox').checked ) {
			checkCount++;

			if ( item.parentElement.parentElement.classList.contains('filter-tax-wrapper') && !item.parentElement.parentElement.querySelector('.filter-title').classList.contains('active') ) {
				item.parentElement.parentElement.querySelector('.filter-title').classList.add('active');
			}	
		}

		item.addEventListener('change', function( e ) {

			if ( e.target.checked ) {

				checkCount++;
			
			} else {
			
				checkCount--;
			
			}

			if ( checkCount === 0 ) {
				document.getElementById('filter-apply-btn').classList.add('hidden');
			} else {
				document.getElementById('filter-apply-btn').classList.remove('hidden');
			}
		});

		if ( checkCount ) {
			document.getElementById('filter-apply-btn').classList.remove('hidden');
		}

	});


	filterTitles.forEach( ( title ) => {
		title.addEventListener('click', function( e ) {

			this.classList.toggle('active');

		});
	});


	clearAllBtn.addEventListener('click', function(e) {
		e.preventDefault();

		filterItemcheckboxes.forEach( (box) => {
		
			if ( box.checked ) {

				checkCount--;
				box.checked = false;
			
			}
			
			document.getElementById('filter-apply-btn').classList.add('hidden');
		
		});
	});

}