(function () {
	var $form = $('.file-form');
	run();

	function run() {
		attachEvents();
	}

	function attachEvents() {
		var $file = $('#file');
		$file.click(function (e) { e.stopPropagation(); })
		$('.vv-file-input').click(function () { $file.click(); });
		$form.submit(submit);
	}

	function submit(e) {
		e.preventDefault();
		if($(this).parsley().isValid()) {
			$.ajax({
				method: 'post',
				url: '',
				cache: false,
			    contentType: false,
			    processData: false,
				data: new FormData($form[0]),
				error: error,
				success: success
			});
		}
	}

	function success(repsonse) {
		$success = $form.find('.success');
		$success.addClass('active');
		$form[0].reset();
		setTimeout(function () {
			$success.removeClass('active');
		}, 2000);
	}

	function error(error) {
		console.log(error)
	}
})();