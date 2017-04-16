(function () {
	var $form = $('.newsletter__form');
	var settings = {
		fadeAfter: 2000
	};
	activate();

	function activate()
	{
		attachEvents();
	}

	function attachEvents()
	{
		$form.submit(submit);
	}

	function submit(e)
	{
		e.preventDefault();
		if($(this).parsley().isValid()) {
			$.ajax({
				method: 'post',
				url: '',
				error: error,
				success: success
			});
		}
	}

	function success(repsonse)
	{
		$success = $('.newsletter__response--success');
		$success.addClass('active');
		$form[0].reset();
		setTimeout(function () {
			$success.removeClass('active');
		}, settings.fadeAfter);
	}

	function error(error)
	{
		console.log('Error occured during newsletter submission: ' + error.statusText);
	}
})();