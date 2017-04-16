var popup = (function () {
	var popup = {
		selector: document.querySelectorAll('.pswp')[0],
		config: {
			index: 0,
			showAnimationDuration: 0,
			hideAnimationDuration: 0
		},
		slidesConfig: []
	};
	run();

	function run() {
		$(function () {
			attachEvents();
		});
	}

	function attachEvents() {
		$('.popup-trigger').click(function () {
			showPopup(+$(this).attr('data-slide-id'));
		});
	}

	function setSlidesConfig(slidesConfig) {
		var nbOfSlides = slidesConfig.length;
		for (var i = 0; i < nbOfSlides; i++) {
			slidesConfig[i].w = 1200;
			slidesConfig[i].h = 800;
		}
		popup.slidesConfig = slidesConfig;
	}

	function showPopup(id) {
		popup.config.index = id;
		new PhotoSwipe(popup.selector, PhotoSwipeUI_Default, popup.slidesConfig, popup.config).init();
	}

	return {
		setSlidesConfig: setSlidesConfig
	};
})();