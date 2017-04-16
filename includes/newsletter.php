<section class="newsletter">
	<div class="row shift--up-half newsletter__image" data-aos="fadeIn">
		<div class="col-xs-8 col-xs-offset-2 col-sm-12 col-sm-offset-0">
			<img src="assets/images/vivienda.svg" alt="" class="img-responsive center-block" data-fallback="assets/images/vivienda.png">
		</div>
	</div>
	<div data-aos="fadeInUp">
		<h4>NEWSLETTER</h4>
		<small class="newsletter__subheading">Subscribe to our monthly newsletter</small>
		<form class="newsletter__form" data-parsley-validate>
			<?php
				$isRtl = ($dir == 'rtl');
				$emailErrorMessage = $isRtl ? 'تأكد من إدخال بريد الكتروني صحيح' : 'This value should be a valid email.';
				$requiredErrorMessage = $isRtl ? 'هذا الحقل مطلوب' : 'This value is required.';
			?>
			<div class="newsletter__col">
				<input type="text" name="name" id="name" class="newsletter__input" placeholder="full name" data-parsley-required data-parsley-required-message="<?=$requiredErrorMessage?>">
				<span class="input--rhombus-1"></span>
				<span class="input--rhombus-2"></span>
			</div>
			<div class="newsletter__col">
				<input type="email" name="email" id="email" class="newsletter__input" placeholder="email" data-parsley-required data-parsley-type="email" data-parsley-required-message="<?=$requiredErrorMessage?>" data-parsley-error-message="<?=$emailErrorMessage?>">
				<span class="input--rhombus-1"></span>
				<span class="input--rhombus-2"></span>
			</div>
			<div class="newsletter__col">
				<button class="newsletter__submit">
					<!--[if lt IE 9]>
						<h5 class="zero--m tlc--c m--b1">SEND</h5>
					<![endif]-->
				</button>
			</div>
			<div class="newsletter__response newsletter__response--success">You are now registered to our newsletter</div>
		</form>
	</div>
</section>