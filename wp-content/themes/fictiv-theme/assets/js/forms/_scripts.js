// import { readCookie } from './../cookies/read-cookie';

/* const */
const MKTOFORM_ID_ATTRNAME = "data-formId";

let mkto_forms = document.querySelectorAll('[' + MKTOFORM_ID_ATTRNAME +']');

if ( mkto_forms.length > 0 ) {
    
    let mkto_forms_ids = [];

    for ( let i = 0; i < mkto_forms.length; ++i ) {

    	if( !mkto_forms_ids.includes( mkto_forms[i].getAttribute(MKTOFORM_ID_ATTRNAME) ) ) {

    		mkto_forms_ids.push( mkto_forms[i].getAttribute( MKTOFORM_ID_ATTRNAME) );

    	}
    
    }

    const mktoFormConfig = {
        podId : "//info.fictiv.com",
        // podId: "//app-ab20.marketo.com",
        munchkinId : "852-WGR-716",
        formIds : mkto_forms_ids
    };

    /* ---- Prevent label confusion from multiple forms ---- */

 	function mktoFormChain(config) {

        /* util */
		var arrayFrom = Function.prototype.call.bind( Array.prototype.slice );

		/* fix inter-form label bug! */
		MktoForms2.whenRendered( function( form ) {

			// form.addHiddenFields({
			// 	'utm_content__c' : readCookie('utm_content')
			// });

			var formEl = form.getFormElem()[0],
				rando = "_" + new Date().getTime() + Math.random();

			form.onSuccess( function( values, followUpUrl ) {

				if ( form.getFormElem()[0].dataset.formType !== 'mkto-redirect' )  {
            
	                if ( form.getFormElem()[0].dataset.formType === 'global' )  {
	                	
	                	// Hide subscribe forms on success
	                	form.getFormElem()[0].classList.add('hidden');
	                	form.getFormElem()[0].parentElement.querySelector('.subscribe-form-terms').classList.add('hidden');

	                	form.getFormElem()[0].parentElement.querySelector('.global-form-success').classList.remove('hidden');

	                } else {

						// Redirect download forms to thank you page on success
						window.location = window.location.origin + window.location.pathname + '/thank-you';
						
					}

					return false;
				}
			});
                

			arrayFrom(formEl.querySelectorAll("label[for]")).forEach(function(labelEl) {
				var forEl = formEl.querySelector('[id="' + labelEl.htmlFor + '"]');
				if (forEl) {
					labelEl.htmlFor = forEl.id = forEl.id + rando;
				}
			});
		});

		/* chain, ensuring only one #mktoForm_nnn exists at a time */
		arrayFrom(config.formIds).forEach( function(formId) {
			var loadForm = MktoForms2.loadForm.bind(MktoForms2,config.podId,config.munchkinId,formId),
				formEls = arrayFrom(document.querySelectorAll("[" + MKTOFORM_ID_ATTRNAME + '="' + formId + '"]'));

			(function loadFormCb(formEls) {
				var formEl = formEls.shift();
				formEl.id = "mktoForm_" + formId;

				loadForm(function(form) {

					formEl.id = "";
					if (formEls.length) {
						loadFormCb(formEls);
					}
				});
			})(formEls);
		});
    }

    mktoFormChain(mktoFormConfig);
}

