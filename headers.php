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
	        	<header class="page-header full-background-image" style="background-image: url(images/home/insights-blog.jpg);">
		        	<div class="inner">
		        		<h1>Background Image Header</h1>
					</div>
	        	</header>
	        	<header class="page-header image-header green dots callout-header">
		        	<div class="inner">
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
					</div>
	        	</header>
	        	<header class="page-header navy gears">
		        	<div class="inner">
		        		<h1>CBE Best Practices</h1>
		        		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque lobortis, nunc at tempus tincidunt, risus justo dapibus ante, ullamcorper finibus risus dolor id metus. Nunc et finibus erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque lobortis, nunc at tempus tincidunt.</p>
	        		</div>
	        	</header>
	        	<header class="page-header green dots">
		        	<div class="inner">
		        		<h1>Our mission is to make a real difference in the world</h1>
		        		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque lobortis, nunc at tempus tincidunt, risus justo dapibus ante, ullamcorper finibus risus dolor id metus. Nunc et finibus erat.</p>
	        		</div>
	        	</header>
	        	<header class="page-header image-header blue dots">
		        	<div class="inner">
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
	        		</div>
	        	</header>
	        	<header class="page-header image-header navy">
		        	<div class="inner">
		        		<h1>Process</h1>
		        		<svg class="paint-image" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1270 690">
							<defs>
								<mask id="mask">
								<image width="920" height="680" xlink:href="images/home/paint-clip-mask-2-large.png"></image>
						 		</mask>
							</defs>
							<image mask="url(#mask)" id="image" width="920" height="680" xlink:href="images/home/slide3.jpg"></image>
						</svg>
	        		</div>
	        	</header>
	        	<header class="page-header navy gears">
		        	<div class="inner">
		        		<h1>Process</h1>
	        		</div>
	        	</header>
	        	<header class="page-header featured-header">
		        	<div class="background-image" style="background-image: url(images/home/insights-blog.jpg);"></div>
		        	<div class="inner">
			        	<address>Emily Dustin  |  June 10, 2016</address>
		        		<h1>Cornell Brings Online Community Alive, Reduces Email Overload</h1>
	        		</div>
	        	</header>
	        	<header class="page-header featured-header">
		        	<div class="background-image" style="background-image: url(images/home/insights-blog.jpg);"></div>
		        	<div class="inner">
			        	<address>Emily Dustin  |  June 10, 2016</address>
		        		<h1>Artificial Roadblocks to Competency-Based Education</h1>
		        		<small>Webinar  |  Tags <a href="#">Case Studies</a>, <a href="#">Student Success</a>, <a href="#">Learning Relationship Website</a></small>
		        		<a href="#" class="btn">Download Whitepaper</a>
	        		</div>
	        	</header>
	        	<header class="page-header navy solid-banner">
	        	<div class="background-image" style="background-image: url(images/home/insights-blog.jpg);"></div>
	        	<div class="inner">	        			
	        			<div class="author-info">
	        				<div class="author-avatar">
	        					<img src="http://motiviswp.thisbetterworkbetter.com/wp-content/uploads/2016/08/brian-peddle-1-150x150.jpg" width="42" height="42" alt="Brian Peddle" class="avatar avatar-42 wp-user-avatar wp-user-avatar-42 alignnone photo">
	        				</div><!-- .author-avatar -->
	        				<div class="author-description">
	        					<h2 class="author-title">
		        					<span class="author-heading">Author:</span> 
		        					Brian Peddle
		        				</h2>
	        					<p class="author-bio">
	        						Brian Peddle is founder and CEO of Motivis Learning, the next generation education platform that puts the focus on student outcomes. Prior to that he served as the Chief Technology Officer at College for America @ SNHU. During his time with CfA he and his team launched a competency-based learning management system and student information system built from the ground up on the Salesforce platform. Brian's previous roles include VP of Technology and Development at Jobscience and senior software engineering positions at Healthcaresource, Monster.com, and Adobe. He is also a first-generation college graduate.
	        						<a class="author-link" href="http://motiviswp.thisbetterworkbetter.com/insights/author/brian/" rel="author">View all posts by Brian Peddle</a>
	        					</p><!-- .author-bio -->
	        					<a href="https://www.facebook.com/motivislearning/" class="facebook" target="_blank">Facebook</a>
	        					<a href="https://plus.google.com/+Motivislearningsystems" class="googlePlus" target="_blank">Google+</a>
	        					<a href="https://twitter.com/brianpeddle" class="twitter" target="_blank">Twitter</a>
	        					<a href="https://www.linkedin.com/in/bpeddle" class="linkedin" target="_blank">linkedIn</a>
	        				</div><!-- .author-description -->
	        			</div><!-- .author-info -->
	        		</div>
	        	</header>
        	</article>
        </main>
        <?php include 'includes/footer.php'; ?>
    </body>
</html>