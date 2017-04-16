var booking = (function ($w) {
	var bookingPromise, calendarPromise;
	var $booking = $('.booking');
	var $header = $('.header');
	var $arrival = $('#arrival');
	var $departure = $('#departure');
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
		init();
	}

	function attachEvents()
	{
		$('.booking-close').click(hideBooking);
		$header.on('click', '.booking__open, .booking__open-text, .booking__close, .booking__close-text', toggle);
		$w.on('resize', hideCalendar);
		if(!Modernizr.csstransitions) {
			$header.find('.booking__open-wrapper .close-btn').click(close);
			$w.resize(bookingDebounce);
		}
	}

	function hideBooking() {
		close();
	}

	function toggle()
	{
		if($(this).is('.booking__open, .booking__open-text')) open();
		else close();
	}

	function open()
	{
		menu.close();
		// $header.find('.booking__open-wrapper').addClass('z-index--primary-plus');
		$header.find('.menu__open-wrapper').removeClass('z-index--primary-plus');
		$header.find('.booking__open').removeClass('booking__open').addClass('booking__close');
		$header.find('.booking__open-text').removeClass('booking__open-text').addClass('booking__close-text');
		$booking.addClass('active');
		if(!Modernizr.csstransitions) {
			if(!settings.isRtl) $booking.animate({right: 0}, settings.animationSpeed);
			else $booking.animate({left: 0}, settings.animationSpeed);
		}
	}

	function close()
	{
		hideCalendar();
		$header.find('.booking__close').removeClass('booking__close').addClass('booking__open');
		$header.find('.booking__close-text').removeClass('booking__close-text').addClass('booking__open-text');
		$booking.removeClass('active');
		if(!Modernizr.csstransitions) {
			if(!settings.isRtl) $booking.animate({right: -$booking.innerWidth()}, settings.animationSpeed);
			else $booking.animate({left: -$booking.innerWidth()}, settings.animationSpeed);
		}
	}

	function init()
	{
		$booking.find('.booking__select').selectbox();
		$arrival.datepicker({
			dateFormat: 'dd-mm-yy',
			firstDay: 1,
			minDate: 0,
		  constrainInput: true,
			onSelect: updateDates
		}).datepicker('setDate', '0').datepicker('widget').wrap('<div class="calendar-skin"/>');
		$departure.datepicker({
			dateFormat: 'dd-mm-yy',
			firstDay: 1,
			minDate: 0,
		  constrainInput: true
		}).datepicker('setDate', '1').datepicker('widget').wrap('<div class="calendar-skin"/>');
	}

	function updateDates()
	{
		var arrSplit = $arrival.val().split('-');
		var depSplit = $departure.val().split('-');
		var arrivalTime = new Date(arrSplit[2], arrSplit[1] - 1, arrSplit[0]).getTime();
		var isAfter = arrivalTime	>	new Date(depSplit[2], depSplit[1] - 1, depSplit[0]).getTime();
		if(isAfter) $departure.datepicker('setDate', new Date(arrivalTime + 86400000));
	}

	function setPosition()
	{
		if(!Modernizr.csstransitions) {
			if(!settings.isRtl) $booking.css('right', -$booking.innerWidth());
			else $booking.css('left', -$booking.innerWidth());
			$booking.css('opacity', 1);
		}
	}

	function hideCalendar()
	{
		$arrival.add($departure).datepicker( "hide" );
	}

	function calendarDebounce()
	{
		clearTimeout(calendarPromise);
		calendarPromise = setTimeout(hideCalendar, settings.debounceTime);
	}

	function bookingDebounce()
	{
		clearTimeout(bookingPromise);
		bookingPromise = setTimeout(setPosition, settings.debounceTime);
	}

})($(window));