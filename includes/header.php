<div class="header-placeholder"></div>
<header class="header">
	<div class="booking__open-wrapper">
		<span class="booking__open-text">
			BOOKING
		</span>
		<button class="booking__open">
			<img id="booking-icon" src="" alt="" data-fallback="body.homepage ? assets/images/booking-icon-gold.png : assets/images/booking-icon-white.png" class="img-responsive has-args">
		</button>
		<!--[if lt IE 9]>
			<span class="close-btn">x</span>
		<![endif]-->
		<script>
			var element = document.getElementById('booking-icon');
			var expression = element.getAttribute('data-fallback');
			var argument = expression.split(/[?,:]/);
			var cssSelector = argument[0].split('.');
			if(document.body.className == cssSelector[1].replace(/^\s+|\s+$/g, '')) element.setAttribute('src', argument[1]);
			else element.setAttribute('src', argument[2]);
		</script>
	</div>
	<div class="logo">
	  <img src="assets/images/logo.svg" alt="" class="img-responsive" data-fallback="assets/images/logo.png">
	</div>
	<div class="header__vivienda">
		<img src="assets/images/vivienda.svg" alt="" class="img-responsive header__vivienda-image" data-fallback="assets/images/vivienda.png">
	</div>
	<div class="menu__open-wrapper">
		<button class="menu__open">
			<span class="line">
				<span class="rhombus-1"></span>
				<span class="rhombus-2"></span>
			</span>
			<span class="line"></span>
			<span class="line">
				<span class="rhombus-1"></span>
			</span>
		</button>
		<!--[if lt IE 9]>
			<span class="close-btn">x</span>
		<![endif]-->
	</div>
	<?php include 'includes/menu.php'; ?>
	<?php include 'includes/booking.php'; ?>
</header>