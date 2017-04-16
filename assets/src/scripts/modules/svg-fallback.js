(function () {
	activate();

	function activate()
	{
		replaceImagesSrc();
	}

	function replaceImagesSrc()
	{
		if(!Modernizr.svgasimg) {
			$('img[data-fallback]:not(.has-args)').each(function (i, v) {
				var $e = $(this);
				$e.attr('src', $e.attr('data-fallback'));
			});
		}
	}
})();
