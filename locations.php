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

	<section class="section">
		<div class="row page-title-row abs" data-aos="fadeIn">
			<div class="col-sm-12 text-center">
				<h1 class="page-title">LOCATIONS</h1>
			</div>
		</div>
	</section>

	<section class="section overflow--x-hidden">
		<?php for($i=0; $i<2; $i++) { ?>
			<div class="row row--alternating row--link" data-aos="fadeInLeft">
				<div class="col-sm-6 image-col">
					<img src="assets/images/slide3.jpg" alt="" class="img-responsive">
				</div>
				<div class="col-sm-6 center--vertically-cols fz--md">
					<div class="row">
						<div class="col-sm-8 col-sm-offset-2">
							<h4 class="tdc--c"><strong>TURKI AL AWAL</strong></h4>
							<div class="lh--lg"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum error aliquid, distinctio neque? Qui optio a libero dolor laboriosam dignissimos.</p></div>
							<a href="#" class="link tdc">
								<strong>EXPLORE</strong>
								<span class="line">
									<span class="rhombus-1"></span>
									<span class="rhombus-2"></span>
								</span>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row row--alternating row--link" data-aos="fadeInRight">
				<div class="col-sm-6 col-sm-push-6 image-col">
					<img src="assets/images/slide2.jpg" alt="" class="img-responsive">
				</div>
				<div class="col-sm-6 col-sm-pull-6 center--vertically-cols fz--md">
					<div class="row">
						<div class="col-sm-8 col-sm-offset-2">
							<h4 class="tdc--c"><strong>TURKI AL AWAL</strong></h4>
							<div class="lh--lg"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum error aliquid, distinctio neque? Qui optio a libero dolor laboriosam dignissimos.</p></div>
							<a href="#" class="link tdc">
								<strong>EXPLORE</strong>
								<span class="line">
									<span class="rhombus-1"></span>
									<span class="rhombus-2"></span>
								</span>
							</a>
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