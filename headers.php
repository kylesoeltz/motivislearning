<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <title>Motivis</title>
        <meta name="description" content="">
        <?php include 'includes/head.php'; ?>
		<!--
			each of these headers starts of with .page-headers

			to specify whether or not it has an image use .image-header **
				> default image size must be 920x680
				> .callout-header specifies it as the main featured/bigger
				  version, which takes an image size of 1270x690

		    to change the COLOR you can use one of the following classes
		    	> .color-blue
		    	> .color-orange
		    	> .color-navy
		    	> .color-green
		    	> .color-yellow

		    to change the BACKGROUND you can use one of the following classes
				> .background-dots
				> .background-gears

			to give it a full image background they can specify the class
				> .featured-header
				> this will override any color classes, but it will work in
				  conjunction with the background classes. image size can be
				  anything as it uses background-size: cover and applies a blur
				  and overlay to all images

			** the paint masking is compatible with IE down to 9. IE 8 and below
			   does not support SVGs at all, so if they decide to support that we
			   will need to provide a basic image fallback. according to caniuse.com
			   all other older browsers support SVGs at the very least, so worst
			   case scenario it would just show an image without the paint strokes
			   masked over it.
		-->

    </head>

    <body>
        <?php include 'includes/header.php'; ?>
        <main>
        	<article>
	        	<header class="page-header image-header green dots callout-header">
		        	<section class="inner">
		        		<h1>Their Future is Our Mission</h1>
		        		<p>A modern platform built by educational experts for a holistic student experience.</p>
		        		<a href="#" class="btn">Learn More</a>
		        		<svg class="paint-image" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1270 690">
							<defs>
								<mask id="paintMask">
								<image width="1270" height="690" xlink:href="images/home/paint-clip-mask-large.png"></image>
						 		</mask>
							</defs>
							<image mask="url(#paintMask)" id="image" width="1270" height="690" xlink:href="images/home/slide2.jpg"></image>
						</svg>
					</section>
	        	</header>
	        	<header class="page-header navy gears">
		        	<section class="inner">
		        		<h1>CBE Best Practices</h1>
		        		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque lobortis, nunc at tempus tincidunt, risus justo dapibus ante, ullamcorper finibus risus dolor id metus. Nunc et finibus erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque lobortis, nunc at tempus tincidunt.</p>
	        		</section>
	        	</header>
	        	<header class="page-header green dots">
		        	<section class="inner">
		        		<h1>Our mission is to make a real difference in the world</h1>
		        		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque lobortis, nunc at tempus tincidunt, risus justo dapibus ante, ullamcorper finibus risus dolor id metus. Nunc et finibus erat.</p>
	        		</section>
	        	</header>
	        	<header class="page-header image-header blue dots">
		        	<section class="inner">
		        		<h1>Learning Relationship Management</h1>
		        		<p>Our Learning Relationship Management (LRM) platform is built specifically for education by experts in education. Both flexible and powerful, it ensures the solution you choose is an advantage today and in the future.</p>
		        		<svg class="paint-image" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1270 690">
							<defs>
								<mask id="mask">
								<image width="920" height="680" xlink:href="images/home/paint-clip-mask-2-large.png"></image>
						 		</mask>
							</defs>
							<image mask="url(#mask)" id="image" width="920" height="680" xlink:href="images/home/slide3.jpg"></image>
						</svg>
	        		</section>
	        	</header>
	        	<header class="page-header image-header navy">
		        	<section class="inner">
		        		<h1>Process</h1>
		        		<svg class="paint-image" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1270 690">
							<defs>
								<mask id="mask">
								<image width="920" height="680" xlink:href="images/home/paint-clip-mask-2-large.png"></image>
						 		</mask>
							</defs>
							<image mask="url(#mask)" id="image" width="920" height="680" xlink:href="images/home/slide3.jpg"></image>
						</svg>
	        		</section>
	        	</header>
	        	<header class="page-header navy gears">
		        	<section class="inner">
		        		<h1>Process</h1>
	        		</section>
	        	</header>
	        	<header class="page-header featured-header">
		        	<div class="background-image" style="background-image: url(images/home/insights-blog.jpg);"></div>
		        	<section class="inner">
			        	<address>Emily Dustin  |  June 10, 2016</address>
		        		<h1>Cornell Brings Online Community Alive, Reduces Email Overload</h1>
	        		</section>
	        	</header>
	        	<header class="page-header featured-header">
		        	<div class="background-image" style="background-image: url(images/home/insights-blog.jpg);"></div>
		        	<section class="inner">
			        	<address>Emily Dustin  |  June 10, 2016</address>
		        		<h1>Artificial Roadblocks to Competency-Based Education</h1>
		        		<small>Webinar  |  Tags <a href="#">Case Studies</a>, <a href="#">Student Success</a>, <a href="#">Learning Relationship Website</a></small>
		        		<a href="#" class="btn">Download Whitepaper</a>
	        		</section>
	        	</header>
        	</article>
        </main>
        <?php include 'includes/footer.php'; ?>
    </body>
</html>