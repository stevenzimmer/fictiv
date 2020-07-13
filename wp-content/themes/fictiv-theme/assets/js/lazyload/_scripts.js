import Lazyload from 'vanilla-lazyload';

const fictivLazyLoad = new Lazyload({
		elements_selector: ".lazyload",
		load_delay: 0,
		callback_reveal: function( e ) {
			if ( e.dataset.bg ) {
				e.classList.add('loaded');
			}
		}
	});


export default fictivLazyLoad;
