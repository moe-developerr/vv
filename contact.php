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
		<div class="row page-title-row" data-aos="fadeIn">
			<div class="col-sm-12 text-center">
				<h1 class="page-title">CONTACT</h1>
			</div>
		</div>
	</section>

	<section class="section overflow--x-hidden">
		<?php $count = 4; for($i=0; $i<$count; $i++) { $isEven = ($i % 2 == 0) ? true : false; $isLast = ($i == $count - 1) ? true : false; ?>
			<div class="row <?=$isLast ? 'm--b3-xs' : 'm--b1'?>" data-aos="<?=$isEven ? 'slideInLeft' : 'slideInRight';?>">
				<div class="col-sm-6 <?=$isEven ? '' : 'col-sm-push-6';?>">
					<div class="map" data-lat="33.4" data-lng="35" data-zoom="4" data-title="Vivienda"></div>
				</div>
				<div class="col-sm-6 <?=$isEven ? '' : 'col-sm-pull-6';?>">
					<div class="row">
						<div class="col-xs-12 text-center">
							<div style="background-image: url(assets/images/arrows-3.png)" class="m--b2 m--t1-xs min--h-80 bgc"></div>
							<h4 class="tdc--c"><strong>TURKI AL AWAL</strong></h4>
							<div class="lh--lg fz--95 m--b1">
								<p>301444 Riyadh, 11372 Saudi Arabia</p>
								<div><strong>T</strong> 00966 11 4002200</div>
								<div><strong>F</strong> 00966 11 4003300</div>
							</div>
							<a href="#" class="tdc--c hover--tlc-c transition--all-f">
								<strong>turkialawal@vivienda.com.sa</strong>
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
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDkGiqwLCKMZ3OiNIdn8YiLlFkX-LAezGY"></script>
	<script>
    google.maps.event.addDomListener(window, 'load', function () {
    	$.each($('.map'), function (i, v) {
    		var $map = $(this);
    		var lat = parseInt($map.attr('data-lat'));
    		var lng = parseInt($map.attr('data-lng'));
    		var zoom = parseInt($map.attr('data-zoom'));
    		map.init(lat, lng, zoom, $map.attr('data-title'), i);
    	});
    });
	</script>
</body>
</html>