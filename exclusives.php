<?php include 'includes/head-top.php'; ?>
<head>
	<?php include 'includes/head.php'; ?>
</head>
<body>
	<?php include 'includes/header.php'; ?>

	<div class="slider rsDefault slider--short slider--no-arrows">
		<div class="rsContent"><a href="assets/images/slide2.jpg" class="rsImg"></a></div>
		<div class="rsContent"><a href="assets/images/slide3.jpg" class="rsImg"></a></div>
		<div class="rsContent"><a href="assets/images/slide1.jpg" class="rsImg"></a></div>
	</div>

	<section class="section pdc--c trademark--bg bg--repeat-y">
		<div class="row page-title-row" data-aos="fadeIn">
			<div class="col-sm-12 text-center">
				<h1 class="page-title">EXCLUSIVES</h1>
			</div>
		</div>
		<div class="spacer--sm"></div>
		<div class="row">
			<?php for($i=0; $i<3; $i++) { ?>
				<div class="diamond-panel-wrapper">
					<div class="panel panel--diamond" data-aos="fadeInLeft">
						<div class="panel-body zero--pl zero--pr slc--bg">
							<div class="col-sm-6">
								<div class="diamond diamond--lg diamond--arrow diamond--arrow-right diamond--pull-top diamond--pull-left">
									<img src="assets/images/diamond.png" alt="" class="diamond__image">
								</div>
							</div>
							<div class="col-sm-6">
								<h4 class="tdc--c"><strong>ROMANTIC GATEWAY</strong></h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									Cum, commodi vel blanditiis. Quas quis perferendis nulla 
									perspiciatis debitis ullam, dolores.</p>
								<br>
								<p><small class="ls--sm tdc--c">PRIVILEGES</small></p>
								<ul class="list-unstyled">
									<li>Welcome drinks on arrival</li>
									<li>Daily breakfast buffet</li>
									<li>Jacuzzi access</li>
									<li>24 hours in-room Dining</li>
								</ul>
							</div>
						</div>
						<footer class="panel-footer clearfix pdc--bg">
							<div class="col-sm-6 plc--c">
								<p><small class="ls--sm">EXCLUSIVE PRICE</small></p>
								<h4 class="display--ib"><strong>6,000 SAR</strong></h4><small> / 2 nights</small>
							</div>
							<div class="col-sm-6">
								<a href="#" class="panel--diamond__link">
									<h5 class="panel--diamond__link-text">
										<div class="line">
											<div class="rhombus-1"></div>
											<div class="rhombus-2"></div>
										</div>
										INQUIRE
										<div class="line">
											<div class="rhombus-1"></div>
											<div class="rhombus-2"></div>
										</div>
									</h5>
								</a>
							</div>
						</footer>
					</div>
				</div>
			<?php	} ?>
		</div>
	</section>

	<?php include 'includes/newsletter.php'; ?>
	<?php include 'includes/footer.php'; ?>
	<?php include 'includes/scripts.php'; ?>
</body>
</html>