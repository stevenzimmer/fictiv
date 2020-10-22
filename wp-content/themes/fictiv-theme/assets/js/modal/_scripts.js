import MicroModal from 'micromodal';
const iFrame = document.getElementById('homepage-modal-iframe');

MicroModal.init({
		
	onShow: ( modal ) => {

		iFrame.src = document.getElementById('homepage-modal-trigger').dataset.embed;
	
	},
	onClose: ( modal ) => {
		iFrame.src = "";
	},
	
	openTrigger: 'homepage-modal-open',
	closeTrigger: 'homepage-modal-close',
	disableScroll: false,
	disableFocus: true,
	awaitCloseAnimation: false

});