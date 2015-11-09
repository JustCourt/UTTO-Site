<!DOCTYPE html>
	<head>
		<title>UTTO - Home</title>
		<link type="text/css" rel="stylesheet" href="stylesheet.css">
		<link type="image/jpg" rel="icon" href="images/icon.jpg"/>
		<meta name="keywords" content="UTTO, UofT, Taekwondo, Hart House, University of Toronto">
		<meta name="description" content="Visit to learn about the University of Toronto Taekwondo Organization">
		<meta name="author" content="UTTO">
		<link rel="image_src" href="http://uofttaekwondo.org/images/compteam5.jpg" / >

		<!-- Start meta tags for Facebook posts -->
		<meta property="og:title" content="University of Toronto Taekwondo Organization"/>
		<meta property="og:description" content="Visit to learn about the University of Toronto Taekwondo Organization">
		<meta property="og:image" content="http://uofttaekwondo.org/images/compteam5.jpg">
		<meta property="og:url" content="http://uofttaekwondo.org"/>
		<!-- End meta tags for Facebook posts -->
		
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<meta name=viewport content="width=device-width, initial-scale=1">
	</head>
	<body>
		<?php include_once("navbar.html"); ?>

		<div id="home-page">
			<h2>UTTO</h2>
			<p>University of Toronto's official Taekwondo organization!</p>
			<a href="About.html"><div class="site-button">LEARN MORE</div></a>
		</div>
		<div id="home-links">
			<div><a href="events.php"><img src="images/pastevents2.jpg"/><h4>EVENTS</h4></a><p>Check out our upcoming socials and events!</p></div>
			<div><a href="classes.php"><img src="images/addtraining1.jpg"/><h4>CLASSES</h4></a><p>Class schedules, fitness sessions and other training!</p></div>
			<div><a href="competitive-team.php"><img src="images/compteam5.jpg"/><h4>COMPETITIVE TEAM</h4></a><p>Check out competitive team practices and competitions!</p></div>
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
</html>