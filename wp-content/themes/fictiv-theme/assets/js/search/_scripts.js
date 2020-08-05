if ( document.getElementById('search-form') ) {

	// const resourcesSearchSubmit = document.getElementById('resources-search-submit');
	const resourcesSearchSubmits = Array.prototype.slice.call( document.querySelectorAll('.resources-search-submit') );

	const searchFormSubmit = document.getElementById('search-form');

	resourcesSearchSubmits.forEach( ( submit ) => {

		submit.addEventListener('click', function( e ) {

			if ( !this.parentElement.querySelector('.resources-search-input').value  ) {
		
				return false;
			
			} else {
		
				this.parentElement.parentElement.submit();
				return false;
		
			}
		});
	});

	// resourcesSearchSubmit.addEventListener('click', function( e ) {
		
	// 	if ( !this.parentElement.querySelector('.resources-search-input').value  ) {
		
	// 		return false;
		
	// 	} else {
		
	// 		searchFormSubmit.submit();
		
	// 	}
	// });

}
