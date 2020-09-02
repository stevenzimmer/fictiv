import MicroModal from 'micromodal';
const iFrame = document.getElementById('vimeo-modal-iframe');


MicroModal.init({
	
	onShow: ( modal ) => {
		iFrame.src = "https://player.vimeo.com/video/453488463?autoplay=1";
	},
	onClose: ( modal ) => {
		iFrame.src = "";
	},
	
	openTrigger: 'vimeo-open',
	closeTrigger: 'vimeo-close',
	disableScroll: false,
	disableFocus: true,
	awaitCloseAnimation: false
});
