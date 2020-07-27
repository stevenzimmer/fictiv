const filterContentBtns = Array.prototype.slice.call( document.querySelectorAll('.filter-content-btn') );
const filterItems = Array.prototype.slice.call( document.querySelectorAll('.filter-item') );
const filterItemcheckboxes = Array.prototype.slice.call( document.querySelectorAll('.filter-item-checkbox') );
const clearAllBtn = document.getElementById('clear-all');

filterContentBtns.forEach( (btn) => {
	btn.addEventListener('click', function( e ) {

		e.preventDefault();


		this.classList.toggle('active');

		console.log( this.dataset.contentType );


	});
});



clearAllBtn.addEventListener('click', function(e) {
	e.preventDefault();

	filterContentBtns.forEach( (btn) => {

		btn.classList.remove('active');
	
	});

	filterItemcheckboxes.forEach( (box) => {

		box.checked  = false;
	
	});

	
});