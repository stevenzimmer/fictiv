if ( document.getElementById('search-form') ) {

	const resourcesSearchSubmit = document.getElementById('resources-search-submit');
	const searchFormSubmit = document.getElementById('search-form');

	resourcesSearchSubmit.addEventListener('click', function( e ) {
		
		if ( !this.parentElement.querySelector('.resources-search-input').value  ) {
		
			return false;
		
		} else {
		
			searchFormSubmit.submit();
		
		}
	});

}
