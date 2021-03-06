if ( document.getElementById('filter-form') ) {
	

	const filterItems = Array.prototype.slice.call( document.querySelectorAll('.filter-item') );
	const filterTitles = Array.prototype.slice.call( document.querySelectorAll('.filter-title') );

	const filterItemcheckboxes = Array.prototype.slice.call( document.querySelectorAll('.filter-item-checkbox') );

	const clearAllBtns = Array.prototype.slice.call( document.querySelectorAll('.clear-all') );
	const filterApplyBtns = Array.prototype.slice.call( document.querySelectorAll('.filter-apply-btn') );

	const filterContentMobile = document.getElementById('filter-content-mobile');

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
				
				filterApplyBtns.forEach( ( btn ) => {
					btn.classList.add('hidden');
				});


			} else {

				filterApplyBtns.forEach( ( btn ) => {
					btn.classList.remove('hidden');
				});
			}
		});

		if ( checkCount ) {
			
			filterApplyBtns.forEach( ( btn ) => {
				btn.classList.remove('hidden');
			});
		}

	});


	filterTitles.forEach( ( title ) => {
		title.addEventListener('click', function( e ) {

			this.classList.toggle('active');

		});
	});

	clearAllBtns.forEach( ( btn ) => {

		btn.addEventListener('click', function(e) {

			e.preventDefault();

			filterItemcheckboxes.forEach( (box) => {
		
				if ( box.checked ) {

					checkCount--;
					box.checked = false;
				
				}
				
				filterApplyBtns.forEach( ( btn ) => {
					btn.classList.add('hidden');
				});
				
			});


		})
	});

	if ( filterContentMobile ) {
		filterContentMobile.addEventListener('click', function( e ) {
			this.classList.toggle('active');
		});
	}
	

}