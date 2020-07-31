if ( document.getElementById('search-form').length ) {

	const resourcesSearchSubmit = document.getElementById('resources-search-submit');
	const searchFormSubmit = document.getElementById('search-form');

	resourcesSearchSubmit.addEventListener('click', function( e ) {
		// e.preventDefault();
		// console.log( 'click' );
		// console.log( this.parentElement.querySelector('.resources-search-input').value );

		if ( !this.parentElement.querySelector('.resources-search-input').value  ) {
		
			return false;
		
		} else {
		
			console.log( 'can submit');
			searchFormSubmit.submit();
		
		}
	});

}
