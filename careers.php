<?php include 'includes/head-top.php'; ?>
<head>
	<?php include 'includes/head.php'; ?>
</head>
<body>
	<?php include 'includes/header.php'; ?>

	<div class="slider rsDefault slider--short slider--no-arrows">
		<div class="rsContent"><a href="assets/images/slide1.jpg" class="rsImg"></a></div>
		<div class="rsContent"><a href="assets/images/slide2.jpg" class="rsImg"></a></div>
		<div class="rsContent"><a href="assets/images/slide3.jpg" class="rsImg"></a></div>
	</div>

	<section class="section min--h-200 pdc--bg">
		<div class="row page-title-row abs" data-aos="fadeIn">
			<div class="col-sm-12 text-center">
				<h1 class="page-title">CAREERS</h1>
			</div>
		</div>
	</section>

	<section class="section m--b8">
		<div class="row">
			<div class="col-xs-12">
				<div class="nm--t8">
					<div class="left-right-card">
						<div class="left">
							<h4 class="title">MARKETING MANAGER</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas nobis ut quaerat, obcaecati vel nemo assumenda voluptatem. Magnam similique, voluptatibus.</p>
						</div>
						<div class="right">
							<a href="#" class="link tlc">APPLY NOW</a>
						</div>
					</div>
					<div class="left-right-card">
						<div class="left">
							<h4 class="title">RECEPTIONIST</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas nobis ut quaerat, obcaecati vel nemo assumenda voluptatem. Magnam similique, voluptatibus.</p>
						</div>
						<div class="right">
							<a href="#" class="link tlc">APPLY NOW</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section m--b8">
		<div class="row zero--fz text-center shift--up-half overflow--x-hidden">
			<div style="background-image: url(assets/images/arrows-3.png)" class="col-sm-3 zero--pl zero--pr center--vertically-cols hidden-xs min--h-80 bgc" data-aos="fadeInLeft"></div>
			<div class="col-sm-6 center--vertically-cols" data-aos="fadeIn">
				<h4 class="tdc--c"><strong>FOR FUTURE OPENINGS</strong></h4>
			</div>
			<div style="background-image: url(assets/images/arrows-3.png)" class="col-sm-3 zero--pl zero--pr center--vertically-cols hidden-xs min--h-80 bgc" data-aos="fadeInRight"></div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-3"></div>
			<div class="col-xs-12 col-sm-6 text-center fw-700">
				<p>Please ensure that you provide us with accurate and up to date information regarding your experience and your contact information</p>
				<form class="file-form m--t3" data-parsley-validate>
					<?php
						$isRtl = ($dir == 'rtl');
						$emailErrorMessage = $isRtl ? 'تأكد من إدخال بريد الكتروني صحيح' : 'This value should be a valid email.';
						$requiredErrorMessage = $isRtl ? 'هذا الحقل مطلوب' : 'This value is required.';
					?>
					<div class="row">
						<div class="col-xs-6">
							<div class="vv-input-wrapper">
								<input name="firstName" type="text" class="vv-input" id="candidate-fist-name" placeholder="first name" data-parsley-required data-parsley-required-message="<?=$requiredErrorMessage?>">
								<span class="input--rhombus-1"></span>
								<span class="input--rhombus-2"></span>
							</div>
						</div>
						<div class="col-xs-6">
							<div class="vv-input-wrapper">
								<input name="lastName" type="text" class="vv-input" id="candidate-last-name" placeholder="last name" data-parsley-required data-parsley-required-message="<?=$requiredErrorMessage?>">
								<span class="input--rhombus-1"></span>
								<span class="input--rhombus-2"></span>
							</div>
						</div>
						<div class="col-xs-6">
							<div class="vv-input-wrapper">
								<input name="phone" type="text" class="vv-input" id="candidate-phone" placeholder="phone">
								<span class="input--rhombus-1"></span>
								<span class="input--rhombus-2"></span>
							</div>
						</div>
						<div class="col-xs-6">
							<div class="vv-input-wrapper">
								<input name="email" type="email" class="vv-input" id="candidate-email" placeholder="email" data-parsley-required data-parsley-type="email" data-parsley-required-message="<?=$requiredErrorMessage?>" data-parsley-error-message="<?=$emailErrorMessage?>">
								<span class="input--rhombus-1"></span>
								<span class="input--rhombus-2"></span>
							</div>
						</div>
						<div class="col-xs-6">
							<div class="vv-input-wrapper">
								<input name="country" type="text" class="vv-input" id="candidate-country" placeholder="country of residence" data-parsley-required data-parsley-required-message="<?=$requiredErrorMessage?>">
								<span class="input--rhombus-1"></span>
								<span class="input--rhombus-2"></span>
							</div>
						</div>
						<div class="col-xs-6">
							<div class="vv-input-wrapper">
								<input name="city" type="text" class="vv-input" id="candidate-city" placeholder="city of residence">
								<span class="input--rhombus-1"></span>
								<span class="input--rhombus-2"></span>
							</div>
						</div>
						<div class="col-xs-6">
							<div class="vv-file-input">
								<div class="left">upload cv</div>
								<div class="right"></div>
								<input name="file" type="file" id="file" class="file" data-parsley-required data-parsley-required-message="<?=$requiredErrorMessage?>">
							</div>
						</div>
						<div class="col-xs-6">
							<div class="vv-input-wrapper">
								<label for="vv-submit" class="vv-submit-text">submit</label>
								<button class="vv-submit" id="vv-submit">
									<!--[if lt IE 9]>
										<h5 class="zero--m tlc--c m--b1">SEND</h5>
									<![endif]-->
								</button>
							</div>
							<div class="success">Your CV is received</div>
						</div>
					</div>
				</form>
			</div>
			<div class="col-xs-12 col-sm-3"></div>
		</div>
	</section>

	<?php include 'includes/newsletter.php'; ?>
	<?php include 'includes/footer.php'; ?>
	<?php include 'includes/scripts.php'; ?>
</body>
</html>