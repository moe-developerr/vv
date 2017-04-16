(function ($w) {
	var throttlePromise, isthrottled = false;
	var $header = $('.header');
	var settings = {
		throttleTime: 100
	};
	activate();

	function activate()
	{
		throttle();
		$w.on('scroll', throttle);
	}

	function updateHeader()
	{
		if($w.scrollTop() >= 140) {
			$header.addClass('header--sticky');
		}
		else {
			$header.removeClass('header--sticky');
		}
	}

	function throttle()
	{
		if(!isthrottled) {
			isthrottled = true;
			setTimeout(function () {
				updateHeader();
				isthrottled = false;
			}, settings.throttleTime);	
		}
	}
})($(window));