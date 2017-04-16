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

	<div class="trademark">
		<img src="assets/images/trademark.png" alt="" class="img-responsive tradmark__image">
	</div>

	<section class="section">
		<div class="row page-title-row abs" data-aos="fadeIn">
			<div class="col-sm-12 text-center">
				<h1 class="page-title">PHILOSOPHY</h1>
			</div>
		</div>
	</section>
	
	<section class="section tdc--bg section--diamond-pulled-bot">
		<div class="row zero--fz text-center" data-aos="fadeInUpBig">
			<div class="col-sm-6 center--vertically-cols image-block">
				<div class="diamond diamond--lg diamond--arrow diamond--arrow-bot diamond--pull-bot">
					<img src="assets/images/diamond.png" alt="" class="diamond__image">
				</div>
			</div>
			<div class="col-sm-6 center--vertically-cols plc--c fz--md text-left text-block">
				<div class="max--tw lh--lg"><strong>From the heart of the middle east, the virtue of hospitality has long grown and prospered. it is an ineluctable product of the landscape. By opening our home to travelers, we embrace them as good friends.</strong></div>
			</div>
		</div>
	</section>

	<section class="section slc--bg section--diamond-pulled-top">
		<div class="row zero--fz" data-aos="fadeInUpBig">
			<div class="col-sm-6 center--vertically-cols col-sm-push-6 image-block">
				<div class="diamond diamond--lg diamond--arrow diamond--arrow-bot diamond--pull-top">
					<img src="assets/images/diamond.png" alt="" class="diamond__image">
				</div>
			</div>
			<div class="col-sm-6 center--vertically-cols col-sm-pull-6 fz--md text-left text-block">
				<div class="max--tw lh--lg center-block">We, Vivienda, take on the quest of respresenting the most refined qualities of the Middle East and spreading the value of generosity and the honoring of the traveler. Drawing from our rich heritage and cultural value, we move forward to transform the duty of hospitality into an Art.</div>
			</div>
		</div>
		<div class="row p--t6 p--b2">
			<div class="col-sm-4 col-sm-offset-4">
				<div class="text-center lh--lg"><strong>We, Vivienda, take on the quest of respresenting the most refined qualities of the Middle East and spreading the value of generosity and the honoring of the traveler. Drawing from our rich heritage and cultural value, we move forward to transform the duty of hospitality into an Art.</strong></div>
			</div>
		</div>
	</section>

	<section class="section">
		<div class="row zero--fz text-center shift--up-half overflow--x-hidden">
			<div style="background-image: url(assets/images/arrows-3.png)" class="col-sm-3 zero--pl zero--pr center--vertically-cols hidden-xs min--h-80 bgc" data-aos="fadeInLeft"></div>
			<div class="col-sm-6 center--vertically-cols" data-aos="fadeIn">
				<h4 class="tdc--c"><strong>OUR CORE VALUES</strong></h4>
			</div>
			<div style="background-image: url(assets/images/arrows-3.png)" class="col-sm-3 zero--pl zero--pr center--vertically-cols hidden-xs min--h-80 bgc" data-aos="fadeInRight"></div>
		</div>
	</section>

	<section class="section overflow--x-hidden">
		<?php for($i=0; $i<2; $i++) { ?>
			<div class="row row--alternating" data-aos="fadeInUp">
				<div class="col-sm-6 image-col center--vertically-cols min--bgh bgc" style="background-image:url(assets/images/slide3.jpg)"></div>
				<div class="col-sm-6 center--vertically-cols fz--md">
					<div class="row">
						<div class="col-sm-8 col-sm-offset-2">
							<h4 class="tdc--c">TURKI AL AWAL</h4>
							<div class="lh--lg"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum error aliquid, distinctio neque? Qui optio a libero dolor laboriosam dignissimos.</p></div>
						</div>
					</div>
				</div>
			</div>
			<div class="row row--alternating" data-aos="fadeInUp">
				<div class="col-sm-6 col-sm-push-6 image-col center--vertically-cols min--bgh bgc" style="background-image:url(assets/images/slide2.jpg)"></div>
				<div class="col-sm-6 col-sm-pull-6 center--vertically-cols fz--md">
					<div class="row">
						<div class="col-sm-8 col-sm-offset-2">
							<h4 class="tdc--c">TURKI AL AWAL</h4>
							<div class="lh--lg"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum error aliquid, distinctio neque? Qui optio a libero dolor laboriosam dignissimos.</p></div>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
	</section>


	<?php include 'includes/newsletter.php'; ?>
	<?php include 'includes/footer.php'; ?>
	<?php include 'includes/scripts.php'; ?>
</body>
</html>