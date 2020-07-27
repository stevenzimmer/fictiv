import Siema from 'siema';

if ( document.body.classList.contains('page-template-page-resource-center')  ) {


  const resourcesRows = Array.prototype.slice.call( document.querySelectorAll('.resources-carousel') );
  const resourcesCarouselLeft = Array.prototype.slice.call( document.querySelectorAll('.resource-carousel-left') );
  const resourcesCarouselRight = Array.prototype.slice.call( document.querySelectorAll('.resource-carousel-right') );

  resourcesRows.forEach( ( row ) => {
    let resourcesCarousel = new Siema({
       selector: row,
        duration: 200,
        easing: 'ease-out',
        perPage: 3.3,
        startIndex: 0,
        draggable: true,
        multipleDrag: true,
        threshold: 20,
        loop: false,
        rtl: false,
        onInit: function( e ) {

          let left = ( this.selector.parentElement.querySelector('.resource-carousel-left') ? this.selector.parentElement.querySelector('.resource-carousel-left') : false );
          let right = ( this.selector.parentElement.querySelector('.resource-carousel-right') ? this.selector.parentElement.querySelector('.resource-carousel-right') : false );

          if ( left ) {

            left.addEventListener('click', function(e) {
                resourcesCarousel.prev( 1 );
            });
          }

          if ( right ) {

            right.addEventListener('click', function(e) {
                resourcesCarousel.next( 1 );
            });
          }

        },
        onChange: function( e ) {

          if ( this.currentSlide > 0 ) {

            console.log( 'can scroll back' );
          
          } else if( this.currentSlide === 0) {
          
              console.log('can only scroll forward');
          
          }
        }
    });
  });

}