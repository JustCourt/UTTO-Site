<!DOCTYPE html>
	<head>
		<title>UTTO - Additional Training</title>
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

		<h1>ADDITIONAL TRAINING</h1>
		<div class="content">
			<p>UTTO often works with other universities and local Taekwondo clubs to host joint training sessions. These training sessions are usually held off campus and are additional to competitive team practices. We also have regular fitness and poomsae sessions scheduled for the year. All training sessions are open to anyone enrolled in a class.</p>
			<h6>Schedule</h6>
			<h5>Fitness Sessions</h5>
			<p class="event_info">
				Every Tuesday from 8-9, starting Sept. 29<br/>
				Hart House<br/>
			</p>
			<h5>Poomsae Sessions</h5>
			<p>More information TBA</p>
			<h5>Testing</h5>
			<p>We will be offering belt testing this year in February. More information TBA</p>
			<br/>
			<p>Check out our gallery below for pictures from some of our additional training sessions!</p>
			
			<!-- Slideshow -->
			<div class="flexslider">
				<ul class="slides">
					<li data-thumb="images/addtraining1.jpg">
						<img src="images/addtraining1.jpg">
					</li>
					<li data-thumb="images/addtraining2.jpg">
						<img src="images/addtraining2.jpg">
					</li>
					<li data-thumb="images/addtraining3.jpg">
						<img src="images/addtraining3.jpg">
					</li>
					<li data-thumb="images/addtraining4.jpg">
						<img src="images/addtraining4.jpg">
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