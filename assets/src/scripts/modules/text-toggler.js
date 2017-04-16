(function () {
	var slideSpeed = 400;
	var fadeSpeed = 400;
	run();

	function run() {
		$('.text-to-be-toggled').slideUp(0);
		attachEvents();
	}

	function attachEvents() {
		$('.text-toggler').click(toggleText);
	}

	function toggleText() {
		var $btn = $(this);
		var $text = $btn.parent().find('.text-to-be-toggled');
		hideActive($text);

		if($text.length) {
			if($text.hasClass('active')) {
				$btn.text('READ MORE');
				hideText($text);
			}
			else {
				$btn.text('READ LESS');
				showText($text);
			}
		} else {
			$btn.fadeOut(fadeSpeed)
		}
	}

	function hideActive($excludedText) {
		$('.text-to-be-toggled.active').not($excludedText).removeClass('active')
			.slideUp(slideSpeed).parent()
			.find('.text-toggler').text('READ MORE');
	}

	function hideText($text) {
		$text.removeClass('active').slideUp(slideSpeed);
	}
	function showText($text) {
		$text.addClass('active').slideDown(slideSpeed);
	}
})();