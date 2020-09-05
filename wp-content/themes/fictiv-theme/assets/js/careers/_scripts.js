import axios from 'axios';
import Siema from 'siema';

const jobsNumber = document.getElementById('jobs-number');
const jobsWrapper = document.getElementById('jobs-wrapper');
const departmentsObj = {};

const overlay = document.getElementById('jobs-overlay');
const triggerOverlayOpen = document.getElementById('trigger-overlay-open');
const triggerOverlayClose = Array.prototype.slice.call( document.querySelectorAll('.trigger-overlay-close') );

const departmentFilterDropdown = document.getElementById("filter-by-department");

const overlayInner = document.getElementById('overlay-inner');

let departments = "";
let option = "";

if ( document.body.classList.contains('page-template-page-careers') ) {


	axios.get('https://boards-api.greenhouse.io/v1/boards/fictiv/jobs?content=true')
		.then( function( res ) {
			let jobObj = [];

			res.data.jobs.forEach( ( job, i ) => {

				departmentsObj[job.departments[0].name] = jobObj;
				
			});
			
			Object.keys( departmentsObj ).forEach( department => {
				
				let meta = [];
				res.data.jobs.map( ( job, i ) => {

					
					if ( job.departments[0].name === department ) {

						// console.log( job );
						meta.push({
							title: job.title,
							location: job.location.name,
							id: job.id
						});

					}
				});

				departmentsObj[department] = meta;

			});

			
			Object.entries( departmentsObj ).forEach( ( department, i ) => {

					let value = department[0].toLowerCase().replace(' ', "-");
					
					option = document.createElement("option");
					option.value = value;
					option.textContent = department[0];
					departmentFilterDropdown.appendChild( option );
					
			});

			departmentFilterDropdown.addEventListener("change", ( e ) => {
				
				departments = document.querySelectorAll('.department-list');

				departments.forEach( (department) => {

					department.classList.add('hidden');
				
				});

				if ( e.target.value === 'all' ) {
					
					departments.forEach( (department) => {

						department.classList.remove('hidden');
					
					});
				
				} else {

					document.querySelector('.department-list-' + e.target.value).classList.remove('hidden');

				}
				

			});
			
			const jobsMarkup = `
				<div>
					${ Object.entries( departmentsObj ).map( (department, i) => {

						return `
							<div class="department-list department-list-${ department[0].toLowerCase().replace(' ', "-") }">
								<div class="department-header" >
									<h3>
										${ department[0] } 
									</h3>
								</div>
								${ department[1].map( ( job ) => {
									
								return `
									<div class="jobs-item relative flex justify-between">
										<a href="#${job.id}" class="absolute pin w-full h-full jobs-item-link"></a>
										<div class="jobs-title ">
											<p>${job.title}</p>
										</div>
										
										<div class="jobs-location">
											<p>${job.location}</p>
										</div>

										<div class="jobs-apply ">
											<a href="#${job.id}" class="">Apply</a>
										</div>
									</div>
									`
								}).join("")}
							</div>
							
						`
					}).join("")}
					
				</div>
			`;

			jobsWrapper.innerHTML = jobsMarkup;
			
			const items = document.querySelectorAll('.jobs-item-link');

			items.forEach( ( item ) => {

				item.addEventListener('click', function(e) {

					getJob( e.srcElement.hash );

				});
			
			});


			const jobsNumberMarkup = `
				<p>
					${res.data.jobs.length } open positions
				</p>
			`;

			jobsNumber.innerHTML = jobsNumberMarkup;

		})
		.catch( function( err ) {
			console.log( err );
	});


	triggerOverlayClose.forEach( (close) => {

		close.addEventListener('click', ( e ) => {

			e.preventDefault();

			overlay.classList.remove('active');
			document.body.classList.remove('noscroll');
			overlay.setAttribute('aria-hidden', true );

			window.location.hash = '#all-jobs';

		});
	});


  	let careersCarousel = new Siema({
      selector: document.getElementById('careers-carousel'),
      duration: 200,
      easing: 'ease-out',
      perPage: 1,
      startIndex: 0,
      draggable: true,
      threshold: 20,
      loop: true,
      onInit: function( e ) {

        let prev = document.getElementById('careers-carousel-prev');
        let next = document.getElementById('careers-carousel-next');

      	prev.addEventListener('click', function(e) {
        	careersCarousel.prev( 1 );
      	});
        
        next.addEventListener('click', function(e) {
        	careersCarousel.next( 1 );
        });

      },
      onChange: function( e ) {
        // count = this.innerElements.length;
        
        // if ( this.currentSlide === 0 ) {
          
        //   this.selector.parentElement.querySelector('.resource-carousel-left').classList.add('hidden');

        // }  else if ( ( this.currentSlide + .1 ) > ( count - this.perPage ) ) {

        //   this.selector.parentElement.querySelector('.resource-carousel-right').classList.add('hidden');

        
        // }  else if( this.currentSlide > 0 ) {
        
        //   this.selector.parentElement.querySelector('.resource-carousel-left').classList.remove('hidden');
        //   this.selector.parentElement.querySelector('.resource-carousel-right').classList.remove('hidden');
        
        // }
      }
  	});
}

function getJob( hash ) {

	if ( hash.substring(1) !== 'all-jobs' ) {


		axios.get('https://boards-api.greenhouse.io/v1/boards/fictiv/jobs/' + hash.substring(1) )
			.then( function( res ) {

				overlay.classList.add('active');
				document.body.classList.add('noscroll');
				overlay.setAttribute('aria-hidden', false );

				const parser = new DOMParser();

				const jobContent = parser.parseFromString(res.data.content, "text/html");

				const modalMarkup = `
					<div class="flex justify-between items-center jobs-modal-top flex-wrap">
						<div class="flex items-end ">
							<div class="jobs-modal-title " id="overlayLabel">
								<h2>${res.data.title}</h2>
							</div>
						
						</div>
						<div class="flex items-center">
							<div class="jobs-modal-location ">
								<p>${res.data.location.name}</p>
							</div>
							<div class="w-10"></div>
							<div>
								<a href="${res.data.absolute_url}" class="btn btn-primary" target="_blank">Apply</a>
							</div>
							
						</div>
					</div>
					
					<div class="jobs-modal-content">
						${jobContent.body.innerText}
					</div>
					
				`;

				overlayInner.innerHTML = modalMarkup;
				
			})
			.catch( function( err ) {

				overlay.classList.remove('active');
				document.body.classList.remove('noscroll');
				overlay.setAttribute('aria-hidden', true );

		});
	}
}

if ( window.location.hash.substring(1) ) {

	getJob( window.location.hash );

}