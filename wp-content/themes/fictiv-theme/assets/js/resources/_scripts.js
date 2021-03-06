import Siema from 'siema';

if ( document.body.classList.contains('page-template-page-resource-center')  ) {


  const resourcesRows = Array.prototype.slice.call( document.querySelectorAll('.resources-carousel') );
  const resourcesCarouselLeft = Array.prototype.slice.call( document.querySelectorAll('.resource-carousel-left') );
  const resourcesCarouselRight = Array.prototype.slice.call( document.querySelectorAll('.resource-carousel-right') );
  let count;
  let lastItem;

  resourcesRows.forEach( ( row ) => {
      let resourcesCarousel = new Siema({
          selector: row,
          duration: 200,
          easing: 'ease-out',
          perPage: {
            0: 1.5,
            768: 3.3 
          },
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
            count = this.innerElements.length;
            
            if ( this.currentSlide === 0 ) {
              
              this.selector.parentElement.querySelector('.resource-carousel-left').classList.add('hidden');

            }  else if ( ( this.currentSlide + .1 ) > ( count - this.perPage ) ) {

              this.selector.parentElement.querySelector('.resource-carousel-right').classList.add('hidden');

            
            }  else if( this.currentSlide > 0 ) {
            
              this.selector.parentElement.querySelector('.resource-carousel-left').classList.remove('hidden');
              this.selector.parentElement.querySelector('.resource-carousel-right').classList.remove('hidden');
            
            }
          }
      });
    });

  let resourcesLatestCarousel = new Siema({
          selector: document.querySelector('.resources-latest-carousel'),
          duration: 200,
          easing: 'ease-out',
          perPage: {
            0: 1.5,
            768: 2.2 
          },
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
                  resourcesLatestCarousel.prev( 1 );
              });
            }

            if ( right ) {

              right.addEventListener('click', function(e) {
                  resourcesLatestCarousel.next( 1 );
              });
            }

          },
          onChange: function( e ) {
            count = this.innerElements.length;
            
            if ( this.currentSlide === 0 ) {
              
              this.selector.parentElement.querySelector('.resource-carousel-left').classList.add('hidden');

            }  else if ( ( this.currentSlide + .1 ) > ( count - this.perPage ) ) {

              this.selector.parentElement.querySelector('.resource-carousel-right').classList.add('hidden');

            
            }  else if( this.currentSlide > 0 ) {
            
              this.selector.parentElement.querySelector('.resource-carousel-left').classList.remove('hidden');
              this.selector.parentElement.querySelector('.resource-carousel-right').classList.remove('hidden');
            
            }
          }
      });
  }