
import axios from 'axios';

const jobsNumber = document.getElementById('jobs-number');
const jobsWrapper = document.getElementById('jobs-wrapper');
const departmentsObj = {};

const overlay = document.getElementById('overlay');
const triggerOverlayOpen = document.getElementById('trigger-overlay-open');
const triggerOverlayClose = document.querySelectorAll('.trigger-overlay-close');

const departmentFilterDropdown = document.getElementById("filter-by-department");

const overlayInner = document.getElementById('overlay-inner');

let departments = "";
let option = "";

axios.get('https://boards-api.greenhouse.io/v1/boards/fictiv/jobs?content=true')
	.then( function( res ) {
		// console.log( res.data.jobs );
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
								<div class="job-item relative">
									<a href="#${job.id}" class="absolute pin w-full h-full job-item-link"></a>
									<div class="job-title ">
										<p>${job.title}</p>
									</div>
									
									<div class="job-location">
										<p>${job.location}</p>
									</div>

									<div class="job-apply ">
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
		
		const items = document.querySelectorAll('.job-item-link');

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

			window.location.hash = '';

			// TODO Remove Hash mark


	});
});

function getJob( hash ) {


	axios.get('https://boards-api.greenhouse.io/v1/boards/fictiv/jobs/' + hash.substring(1) )
		.then( function( res ) {

			// console.log( res );

			overlay.classList.add('active');
			document.body.classList.add('noscroll');
			overlay.setAttribute('aria-hidden', false );

			const parser = new DOMParser();

			const jobContent = parser.parseFromString(res.data.content, "text/html");

			const modalMarkup = `
				<div class="flex justify-between items-center job-modal-top flex-wrap">
					<div class="flex items-end ">
						<div class="job-modal-title " id="overlayLabel">
							<h2>${res.data.title}</h2>
						</div>
					
					</div>
					<div class="flex items-center">
						<div class="job-modal-location ">
							<p>${res.data.location.name}</p>
						</div>
						<div class="w-10"></div>
						<div>
							<a href="${res.data.absolute_url}" class="btn btn-primary" target="_blank">Apply</a>
						</div>
						
					</div>
				</div>
				
				<div class="job-modal-content">
					${jobContent.body.innerText}
				</div>
				
			`;

			overlayInner.innerHTML = modalMarkup;
			
		})
		.catch( function( err ) {

			// console.log( err );

			overlay.classList.remove('active');
			document.body.classList.remove('noscroll');
			overlay.setAttribute('aria-hidden', true );

	});
}

if ( window.location.hash.substring(1) ) {

	getJob( window.location.hash );

}