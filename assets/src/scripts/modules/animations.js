(function ($w) {
	var throttlePromise, isThrottled = false;
	var settings = {
		throttleTime: 100
	};
	activate();

	function activate()
	{
		attachEvents();
	}

	function attachEvents()
	{
		isInView();
		$w.scroll(throttle);
	}

	function throttle()
	{
		if(!isThrottled) {
			isThrottled = true;
			setTimeout(function () {
				isInView();
				isThrottled = false;
			}, settings.throttleTime);
		}
	}

	function isInView()
	{
		var wt = $w.scrollTop();
		var wb = wt + $w.height();
		$.each($('[data-aos]'), function () {
			var $e = $(this);
			var et = $e.offset().top;
			var eb = et + $e.innerHeight();
			if((wb >= et && wt <= et) || (eb >= wt && eb <= wb)) $e.addClass($e.attr('data-aos') + ' animated');
		});
	}
})($(window));