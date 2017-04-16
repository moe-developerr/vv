(function () {
	activate();

	function activate()
	{
		$('.slider').royalSlider({
			imageScaleMode: 'fill',
			slidesSpacing: 0,
			keyboardNavEnabled: true,
			transitionType: 'fade',
			arrowsNavAutoHide: false,
			loop: true,
			arrowsNav: true,
			controlNavigation: 'bullets',
		});
	}
})();