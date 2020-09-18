if ( document.body.classList.contains('page-template-page-subprocess') || document.body.classList.contains('page-template-page-process') ) {
	
	const materialBtns = Array.prototype.slice.call( document.querySelectorAll('.material-btn') );
	const materialContentItems = Array.prototype.slice.call( document.querySelectorAll('.material-content-item') );

	materialBtns.forEach( (btn, i, all ) => {

		btn.addEventListener('click', function() {

			all.forEach( (item) => {
				item.classList.remove('active');
			});

			this.classList.add('active');

			materialContentItems.forEach( (contentItem) => {
				contentItem.classList.add('hidden');
			});

			document.querySelector('.material-content-item[data-material="' + this.dataset.material + '"]').classList.remove('hidden');

		});

	});

	const finishBtns = Array.prototype.slice.call( document.querySelectorAll('.finish-btn') );
	const finishContentItems = Array.prototype.slice.call( document.querySelectorAll('.finish-content-item') );

	finishBtns.forEach( (btn, i, all ) => {

		btn.addEventListener('click', function() {

			all.forEach( (item) => {
				item.classList.remove('active');
			});

			this.classList.add('active');

			finishContentItems.forEach( (contentItem) => {
				contentItem.classList.add('hidden');
			});

			document.querySelector('.finish-content-item[data-finish="' + this.dataset.finish + '"]').classList.remove('hidden');

		});

	});
}