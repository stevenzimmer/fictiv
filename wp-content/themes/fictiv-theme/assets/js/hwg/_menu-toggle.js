const menuToggle = document.querySelectorAll('.hwg-menu-toggle');

menuToggle.forEach( (item, i, all ) => {

	item.addEventListener('click', ( e ) => {

		if ( e.target.nextElementSibling.classList.contains('hidden') ) {

			all.forEach( (item) => {
				item.nextElementSibling.classList.add('hidden');
			});

			e.target.nextElementSibling.classList.remove('hidden');


		
		} else {
		
			e.target.nextElementSibling.classList.add('hidden');
		
		}

		

	});
});