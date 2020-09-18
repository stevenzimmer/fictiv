import Siema from 'siema';

if ( document.body.classList.contains('single-cpt_partners')  ) {
if ( document.querySelector('.partner-facility-carousel') ) {



const partnerCarousel = new Siema({
	selector: '.partner-facility-carousel',
  	duration: 200,
  	easing: 'ease-out',
  	perPage: 1,
  	startIndex: 0,
  	draggable: true,
  	multipleDrag: true,
  	threshold: 20,
  	loop: true,
  	rtl: false,
  	onInit: () => {},
  	onChange: () => {},
});

const partnerPrev = document.getElementById('partner-prev');
const partnerNext = document.getElementById('partner-next');
const carouselDots = Array.prototype.slice.call( document.querySelectorAll('.carousel-dot') );

partnerPrev.addEventListener('click', function() {
	partnerCarousel.prev( 1, function( e ) {
    changeDotStatus( carouselDots );
    document.querySelector('[data-carousel-index="' + partnerCarousel.currentSlide + '"]').classList.add('active');
  })
});

partnerNext.addEventListener('click', function() {
	partnerCarousel.next( 1, function( e ) {
   
    changeDotStatus( carouselDots );

    document.querySelector('[data-carousel-index="' + partnerCarousel.currentSlide + '"]').classList.add('active');
  });
});

carouselDots.forEach( ( dot, i, all ) => {
	dot.addEventListener('click', function(e) {

		changeDotStatus( all );

		this.classList.add('active');

		partnerCarousel.goTo( this.dataset.carouselIndex );

	})
});

function changeDotStatus( arr ) {

    arr.forEach( (item) => {

      item.classList.remove('active');

    });
}
}
}