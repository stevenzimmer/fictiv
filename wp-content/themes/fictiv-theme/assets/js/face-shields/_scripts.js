import Siema from 'siema';

if ( document.body.classList.contains('page-template-page-face-shields')  ) {


const faceShieldCarousel = new Siema({
	 selector: '.face-shield-carousel',
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

const faceShieldPrev = document.getElementById('face-shield-prev');
const faceShieldNext = document.getElementById('face-shield-next');
// const carouselDots = Array.prototype.slice.call( document.querySelectorAll('.carousel-dot') );

faceShieldPrev.addEventListener('click', function() {
	faceShieldCarousel.prev( 1 );
});

faceShieldNext.addEventListener('click', function() {
	faceShieldCarousel.next( 1 );
});


}
