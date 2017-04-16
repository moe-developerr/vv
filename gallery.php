<?php include 'includes/head-top.php'; ?>
<head>
	<?php include 'includes/head.php'; ?>
</head>
<body>
	<?php include 'includes/header.php'; ?>
	<!-- Root element of PhotoSwipe. Must have class pswp. -->
	<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
	    <!-- Background of PhotoSwipe. 
	    It's a separate element as animating opacity is faster than rgba(). -->
	    <div class="pswp__bg"></div>

	    <!-- Slides wrapper with overflow:hidden. -->
	    <div class="pswp__scroll-wrap">

	        <!-- Container that holds slides. 
	            PhotoSwipe keeps only 3 of them in the DOM to save memory.
	            Don't modify these 3 pswp__item elements, data is added later on. -->
	            <div class="pswp__container">
	            	<div class="pswp__item"></div>
	            	<div class="pswp__item"></div>
	            	<div class="pswp__item"></div>
	            </div>

	            <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
	            <div class="pswp__ui pswp__ui--hidden">

	            	<div class="pswp__top-bar">

	            		<!--  Controls are self-explanatory. Order can be changed. -->

	            		<div class="pswp__counter"></div>

	            		<button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

	            		<button class="pswp__button pswp__button--share" title="Share"></button>

	            		<button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

	            		<button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

	            		<!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
	            		<!-- element will get class pswp__preloader--active when preloader is running -->
	            		<div class="pswp__preloader">
	            			<div class="pswp__preloader__icn">
	            				<div class="pswp__preloader__cut">
	            					<div class="pswp__preloader__donut"></div>
	            				</div>
	            			</div>
	            		</div>
	            	</div>

	            	<div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
	            		<div class="pswp__share-tooltip"></div> 
	            	</div>

	            	<button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
	            	</button>

	            	<button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
	            	</button>

	            	<div class="pswp__caption">
	            		<div class="pswp__caption__center"></div>
	            	</div>

	            </div>

	        </div>
	    </div>

	    <section class="section max-w1200 m--t9 pdc--bg">
	    	<div class="row page-title-row abs" data-aos="fadeIn">
	    		<div class="col-sm-12 text-center">
	    			<h1 class="page-title">GALLERY</h1>
	    		</div>
	    	</div>
	    	<div class="row overflow-h">
	    		<div class="popup-trigger col-xs-12 bgc zoom transition--all-s cu-p grayscale min--h-400" style="background-image:url('./assets/images/slide1.jpg')" data-slide-id="0"></div>
	    	</div>
	    	<div class="row overflow-h">
	    		<div class="col-xs-12 col-sm-6">
	    			<div class="row overflow-h">
	    			<div class="popup-trigger col-xs-12 bgc zoom transition--all-s cu-p grayscale min--h-400" style="background-image:url('./assets/images/slide2.jpg')" data-slide-id="1"></div>
	    			</div>
	    		</div>
	    		<div class="col-xs-12 col-sm-6">
	    			<div class="row overflow-h">
	    			<div class="popup-trigger col-xs-12 bgc zoom transition--all-s cu-p grayscale min--h-400" style="background-image:url('./assets/images/slide3.jpg')" data-slide-id="2"></div>
	    			</div>
	    		</div>
	    	</div>
	    	<div class="row overflow-h">
	    	<div class="popup-trigger col-xs-12 bgc zoom transition--all-s cu-p grayscale min--h-400" style="background-image:url('./assets/images/slide1.jpg')" data-slide-id="3"></div>
	    	</div>
	    	<div class="row overflow-h">
	    		<div class="col-xs-12 col-sm-6 clearfix">
	    			<div class="row overflow-h">
	    				<div class="popup-trigger col-xs-12 bgc zoom transition--all-s cu-p grayscale min--h-400" style="background-image:url('./assets/images/slide2.jpg')" data-slide-id="4"></div>
	    			</div>
	    			<div class="row overflow-h">
	    				<div class="popup-trigger col-xs-12 bgc zoom transition--all-s cu-p grayscale min--h-400" style="background-image:url('./assets/images/slide3.jpg')" data-slide-id="5"></div>
	    			</div>
	    		</div>
	    		<div class="col-xs-12 col-sm-6">
	    			<div class="row overflow-h">
	    				<div class="popup-trigger col-xs-12 bgc zoom transition--all-s cu-p grayscale min--h-800" style="background-image:url('./assets/images/slide1.jpg')" data-slide-id="6"></div>
	    			</div>
	    		</div>
	    	</div>
	    	<div class="row overflow-h">
	    		<div class="popup-trigger col-xs-12 bgc zoom transition--all-s cu-p grayscale min--h-400" style="background-image:url('./assets/images/slide2.jpg')" data-slide-id="7"></div>
	    	</div>
	    </section>

	    <?php include 'includes/newsletter.php'; ?>
	    <?php include 'includes/footer.php'; ?>
	    <?php include 'includes/scripts.php'; ?>
	    <script>
		    popup.setSlidesConfig([
		    	{
					src: './assets/images/slide1.jpg',
					title: 'title 0'
		    	},
		    	{
					src: './assets/images/slide2.jpg',
					title: 'title 1'
		    	},
		    	{
					src: './assets/images/slide3.jpg',
					title: 'title 2'
		    	},
		    	{
					src: './assets/images/slide1.jpg',
					title: 'title 3'
		    	},
		    	{
					src: './assets/images/slide2.jpg',
					title: 'title 4'
		    	},
		    	{
					src: './assets/images/slide3.jpg',
					title: 'title 5'
		    	},
		    	{
					src: './assets/images/slide1.jpg',
					title: 'title 6'
		    	},
		    	{
					src: './assets/images/slide2.jpg',
					title: 'title 7'
		    	},
		    ]);
	    </script>
	</body>
	</html>