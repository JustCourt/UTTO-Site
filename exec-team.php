<!DOCTYPE html>
	<head>
		<title>UTTO - Executive Team</title>
		<link type="text/css" rel="stylesheet" href="stylesheet.css">
		<link type="image/jpg" rel="icon" href="images/icon.jpg"/>
		<meta name="keywords" content="UTTO, UofT, Taekwondo, Hart House, University of Toronto">
		<meta name="description" content="Visit to learn about the University of Toronto Taekwondo Organization">
		<meta name="author" content="UTTO">
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<meta name=viewport content="width=device-width, initial-scale=1">
		<script>


		function showBio(bioID){
			if (document.getElementById(bioID)){		
				if (document.getElementById(bioID).style.display!='none'){
					document.getElementById(bioID).style.display='none';
				}
				else{
					document.getElementById(bioID).style.display='block';
				}
			}
		}
		</script>

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
		<h1>2015-2016 Executive Team</h1>
		<div class="content">
		
			<p>The Executive Team is in charge of running the organization. We do things like scheduling classes, planning social events and trying to make sure everything runs smoothly!</p>
			<div class='execteam' id='currentteam'>
				<ul>
					<li><span>President:</span> Jess Chan</li>
					<li><span>Vice President:</span> Russell Luke</li>
					<li><span>Vice President:</span> Sean Pollock</li>
					<li><span>Tournament Director:</span> Alex Cheng</li>
					<li><span>Fitness Director:</span> Derek Ratz</li>
					<li><span>Finance Director:</span> Chris W.</li>
					<li><span>Social Director:</span> Cindy Park</li>
					<li><span>Communications Director:</span> Ruben Tjhie</li>
					<li><span>Logistics Director:</span> Marc Feng</li>
					<li><span>Marketing/Media Director:</span> Daphne Wang</li>
					<li><span>Webmaster:</span> Courtney Siu <!-- <a class="show-bio" id='red' onclick="showBio('CourtneySiu');" >BIO</a>
						<div class="bio" id='CourtneySiu'>Courtney Siu is a second year Computer Science student. This is her second year with the UTTO and her first year on the Executive Team.
						She currently has a Blue Stripe belt. Courtney finds talking about herself in the third person a bit weird.</div> -->
					</li>
				</ul>
			</div>
			<p>Like to join us? Click below to apply for a position on next year's executive team!</p>
			<a href='#'><div class="site-button">JOIN US</div></a>
			<p>Sorry! Applications for executive positions are now closed. Please check our Facebook page for information on when to apply!</p>
			<h6>Gallery</h6>
			<!-- Slideshow -->
			<div class="flexslider">
				<ul class="slides">
				<script>
					text = "";
					for (i=1; i<7; i++){
						text += "<li data-thumb='images/execteam" + i + ".jpg'> <img src='images/execteam" + i + ".jpg'></li>";
					}
					document.write(text);
				</script>
				</ul>
			</div>
			<!-- End Slideshow -->
			
			<h2>PAST EXECUTIVE TEAMS</h2>
			
				<ul id="dates">
					<li><a href="#1415">2014-2015</a></li>
					<li><a href="#1314">2013-2014</a></li>
					<li><a href="#1213">2012-2013</a></li>
					<li><a href="#1112">2011-2012</a></li>
					<li><a href="#1011">2010-2011</a></li>
					<li><a href="#0910">2009-2010</a></li>
					<li><a href="#0809">2008-2009</a></li>
					<li><a href="#0708">2007-2008</a></li>
				</ul>

				<div class="execteam">
					<a name="1415" class="anchor"></a><h3>2014-2015</h3>
					<ul>
						<li><span>President:</span> Donald Joseph</li>
						<li><span>Vice President:</span> Sherman Lai</li>
						<li><span>Vice President:</span> Derek Ratz</li>
						<li><span>Tournament Director:</span> Jess Chan</li>
						<li><span>Fitness Director:</span> Angela Sinilaite</li>
						<li><span>Finance Director:</span> Sean Pollock</li>
						<li><span>Social Director:</span> Russell Luke</li>
						<li><span>Communication Director:</span> Jeff Kwok</li>
						<li><span>Logistic Director:</span> Elizabeth Landry</li>
						<li><span>Media Director:</span> Nathan Chau</li>
						<li><span>Webmaster:</span> Alex Cheng</li>
					</ul>
				</div>
				<div class="execteam">
					<a name="1314" class="anchor"></a><h3>2013-2014</h3>
					<ul>
						<li><span>President:</span> Alex Cheng</li>
						<li><span>Vice President:</span> Piotr Wnuk</li>
						<li><span>Vice President:</span> Natalie Hui</li>
						<li><span>Tournament Director:</span> Donald Joseph</li>
						<li><span>Fitness Director:</span> Derek Ratz</li>
						<li><span>Finance Director:</span> Sherman Lai</li>
						<li><span>Social Director:</span> Sean Pollock</li>
						<li><span>Communication Director:</span> Jackie Tang</li>
						<li><span>Logistic Director:</span> Joanne Lee</li>
						<li><span>Media Director:</span> Nathan Chau</li>
						<li><span>Webmaster:</span> Alex Cheng</li>
					</ul>
				</div>
				<div class="execteam">
					<a name="1213" class="anchor"></a><h3>2012-2013</h3>
					<ul>
						<li><span>Co-President:</span> Esman L Calles</li>
						<li><span>Co-President:</span> Shelby Zhang</li>
						<li><span>Vice President:</span> Bilal Suboor</li>
						<li><span>Finance Director:</span> Rebecca Pan</li>
						<li><span>External Director:</span> Grayson Lee</li>
						<li><span>Social Director:</span> Julie Manalo</li>
						<li><span>Communications & Logistics Director:</span> Alex Cheng</li>
						<li><span>Media Director:</span> Natalie Hui</span>
						<li><span>Fitness Coach:</span> Peter Wnuk</li>
						<li><span>Webmaster:</span> Alan Cheung</li>
					</ul>
				</div>
				<div class="execteam">
					<a name="1112" class="anchor"></a><h3>2011-2012</h3>
					<ul>
						<li><span>President:</span> Esman L Calles</li>
						<li><span>Vice President:</span> Shelby Zhang</li>
						<li><span>Vice President:</span> Tracy Tang</li>
						<li><span>Logistics Director:</span> Bilal Suboor</li>
						<li><span>Social Director:</span> Lin Xi</li>
						<li><span>Finance Director:</span> Yangyang Wang</li>
						<li><span>Communication Director:</span> Sally Jeon</li>
						<li><span>Tournament Director:</span> Kim Min Gyu</li>
						<li><span>Fitness Coach:</span> Konrad Salata</li>
						<li><span>Fitness Coach:</span> Basra Bana</li>
						<li><span>Webmaster:</span> Thaksha Kaneshapillai</li>
					</ul>
				</div>
				<div class="execteam">
					<a name="1011" class="anchor"></a><h3>2010-2011</h3>
					<ul>
						<li><span>Co-President:</span> Jessica Suddaby</li>
						<li><span>Co-President:</span> Francis Do</li>
						<li><span>Logistics Director:</span> Esman L Calles</li>
						<li><span>Social Director:</span> Shelby Zhang</li>
						<li><span>Social Director:</span> Gemma Leung</li>
						<li><span>Finance Director:</span> Tracy Tang</li>
						<li><span>Communication Director:</span> Yanyang Wang</li>
						<li><span>Head Coach, Instructor:</span> Timothy Naweed</li>
						<li><span>Fitness Coach:</span> Marc Racette</li>
						<li><span>Fitness Coach:</span> Lex Wei</li>
						<li><span>Webmaster:</span> George Lai</li>
					</ul>
				</div>
				<div class="execteam">
					<a name="0910" class="anchor"></a><h3>2009-2010</h3>
					<ul>
						<li><span>President, Fitness Coach, Instructor:</span> Timothy Naweed</li>
						<li><span>Vice President:</span> Jessica Suddaby</li>
						<li><span>Director of Communications:</span> Janet Tong</li>
						<li><span>Director of Finance:</span> Lavender Zhang</li>
						<li><span>Captain, Instructor, Fitness Coach:</span> Owyn Notario</li>
						<li><span>Captain, Instructor:</span> Francis Do</li>
					</ul>
				</div>
				<div class="execteam">
					<a name="0809" class="anchor"></a><h3>2008-2009</h3>
					<ul>
						<li><span>President:</span> Dan YJ Cho</li>
						<li><span>Vice President:</span> Sang Ik Song</li>
						<li><span>Vice President:</span> Kevin Jones</li>
						<li><span>Director of Finance:</span> Darryl Koh</li>
						<li><span>Director of Events:</span> Tania Grafstein-Ho</li>
						<li><span>Director of Communications:</span> Chereen Park</li>
					</ul>
				</div>
				<div class="execteam">
					<a name="0708" class="anchor"></a><h3>2007-2008 (Founding Members)</h3>
					<ul>
						<li><span>President:</span> Robert K So</li>
						<li><span>Vice President:</span> Sang Ik Song</li>
						<li><span>Vice President:</span> Dan YJ Cho</li>
						<li><span>Director of Finance:</span> Sundae Zhu</li>
						<li><span>Directors of Events:</span> Nicodemus Oey, Kevin Jones</li>
						<li><span>Director of Marketing:</span> Augustine Kwok</li>
						<li><span>Director of Administration:</span> Kathleen Chang</li>
					</ul>
				</div>
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