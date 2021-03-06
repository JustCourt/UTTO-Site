<!DOCTYPE html>
	<head>
		<title>UTTO - Past Events</title>
		<link type="text/css" rel="stylesheet" href="stylesheet.css">
		<link type="image/jpg" rel="icon" href="images/icon.jpg"/>
		<meta name="keywords" content="UTTO, UofT, Taekwondo, Hart House, University of Toronto">
		<meta name="description" content="Visit to learn about the University of Toronto Taekwondo Organization">
		<meta name="author" content="UTTO">
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<meta name=viewport content="width=device-width, initial-scale=1">

		<!--FlexSlider Plugin for Slideshow-->
		<link rel="stylesheet" href="flexslider.css" type="text/css">
		<script src="jquery.flexslider.js"></script>
		<script type="text/javascript" charset="utf-8">
		$(window).load(function() {
		  $('.flexslider').flexslider({
		    animation: "slide",
		    controlNav: "thumbnails"
		  });
		});
		</script>
		<!--End FlexSlider Plugin-->

	</head>
	<body>

		<?php include_once("navbar.html"); ?>

		
		<h1>PAST UTTO EVENTS</h1>
		<div class="content">
			<p>UTTO has hosted plenty of exciting socials throughout the years. Look below for pictures!</p>
			<br/>
			<h5>Beach Day 2015</h5>
			<p>Thanks to everyone who came to our annual Beach Day on July 4th at Centre Island! If you have any photos, send them to us on Facebook so we can put them up here!</p>
			<br/>
			<h6>Other Events</h6>

			<!-- Slideshow -->
			<div class="flexslider">
				<ul class="slides">
					<li data-thumb="images/pastevents6.jpg">
						<img src="images/pastevents6.jpg">
					</li>
					<li data-thumb="images/pastevents2.jpg">
						<img src="images/pastevents2.jpg">
					</li>
					<li data-thumb="images/pastevents3.jpg">
						<img src="images/pastevents3.jpg">
					</li>
					<li data-thumb="images/pastevents4.jpg">
						<img src="images/pastevents4.jpg">
					</li>
					<li data-thumb="images/pastevents5.jpg">
						<img src="images/pastevents5.jpg">
					</li>
					<li data-thumb="images/pastevents7.jpg">
						<img src="images/pastevents7.jpg">
					</li>
				</ul>
			</div>
			<!-- End Slideshow -->

		</div>
		<div class="footer">
			<small>
			Copyright &copy 
			<script>
			var d= new Date()
			document.write(d.getFullYear())
			</script> 
			UTTO
			</small>
		</div>
	</body>
</html>