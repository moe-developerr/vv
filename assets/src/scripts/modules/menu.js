var menu = (function () {
	var debouncePromise;
	var $menu = $('.menu');
	var $header = $('.header');
	var $html = $('html');
	var settings = {
		animationSpeed: 600,
		debounceTime: 100,
		isRtl: $html.css('direction') == 'rtl' ? true : false 
	};
	var service = {
		close: close
	};
	activate();
	return service;

	function activate()
	{
		setPosition();
		attachEvents();
	}

	function attachEvents()
	{
		$header.on('click', '.menu__open, .menu__close', toggle);
		if(!Modernizr.csstransitions) {
			$header.find('.menu__open-wrapper .close-btn').click(close);
			$(window).resize(debounce);
		}
	}

	function toggle()
	{
		if($(this).hasClass('menu__open')) open();
		else close();
	}

	function open()
	{
		booking.close();
		$header.find('.menu__open-wrapper').addClass('z-index--primary-plus');
		$header.find('.booking__open-wrapper').removeClass('z-index--primary-plus');
		$header.find('.menu__open').removeClass('menu__open').addClass('menu__close');
		$menu.addClass('active');
		if(!Modernizr.csstransitions) {
			if(!settings.isRtl) $menu.animate({right: 0}, settings.animationSpeed);
			else $menu.animate({left: 0}, settings.animationSpeed);
		}
	}

	function close()
	{
		console.log(settings.isRtl);
		$header.find('.menu__close').removeClass('menu__close').addClass('menu__open');
		$menu.removeClass('active');
		if(!Modernizr.csstransitions) {
			if(!settings.isRtl) $menu.animate({right: -$menu.innerWidth()}, settings.animationSpeed);
			else $menu.animate({left: -$menu.innerWidth()}, settings.animationSpeed);
		}
	}

	function setPosition()
	{
		if(!Modernizr.csstransitions) {
			if(!settings.isRtl) $menu.css('right', -$menu.innerWidth());
			else $menu.css('left', -$menu.innerWidth());
			$menu.css('opacity', 1);
		}
	}

	function debounce()
	{
		clearTimeout(debouncePromise);
		debouncePromise = setTimeout(setPosition, settings.debounceTime);
	}
})();