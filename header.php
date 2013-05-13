<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
	<title><?php echo $title // add title tag here ?></title> 
	<meta name="description" content="<?php echo $description // add description tag here ?>" /> 
	<meta name="keywords" content="<?php echo $keywords // add keywords tag here ?>" />
	<link href="css/styles.css" rel="stylesheet" type="text/css" />
	<link href="css/slider.css" rel="stylesheet" type="text/css" />
	<link href="css/lightbox.css" rel="stylesheet" type="text/css" media="screen" />
	<!--[if IE 7]><link rel="stylesheet" type="text/css" href="css/IE7Styles.css" /><![endif]-->
	<link href="images/ico.png" rel="shortcut icon" type="image/png" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js" type="text/javascript"></script>
	<script src="scripts/javascriptFunctions.js" type="text/javascript"></script>
	<script src="scripts/contactForm.js" type="text/javascript"></script>
	<script src="scripts/jquery-1.7.2.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.8.18.custom.min.js" type="text/javascript"></script>
	<script src="scripts/jquery.smooth-scroll.min.js" type="text/javascript"></script>
	<script src="scripts/lightbox.js" type="text/javascript"></script>
	<script src="scripts/slides.min.jquery.js" type="text/javascript"></script>
	<script src="scripts/lightbox-activate.js" type="text/javascript"></script>
	
</head>
<body onload="MM_preloadImages('images/getquote2.jpg')">

<div id="contentHolder">
	
		<div id="header">
			<img src="images/header.jpg" alt="Old Dear Park" border="0" usemap="#Map" />
			<map name="Map" id="Map">
			  <area shape="poly" coords="34,45,23,66,20,98,28,122,43,138,60,147,82,149,104,141,121,126,131,108,133,84,127,56,111,38,88,29,56,29" href="index.php" />
			</map>
		</div>
		
		<div id="nav-bar">
          <ul id="nav"> <!-- Set active tab class inside each list tag -->
            <li<?php if (isset($home)){ echo $home; } else { echo NULL; }?>><a class="top" href="index.php">Home</a></li> <!-- Add h1 tag here -->
            <li<?php if (isset($about)){ echo $about; } else { echo NULL; }?>><a href="about.php">About</a></li> <!-- Add h1 tag here -->
			<li<?php if (isset($contact)){ echo $contact; } else { echo NULL; }?>><a href="contact.php">Contact</a></li> <!-- Add h1 tag here -->
          </ul>
		  <div class="TopNavOptions">
		  	<img src="images/emailIcon.gif" alt="Email Us" /><a href="mailto:enquiries@olddeerpark.co.uk">Email Us</a> 
		  </div>
		</div>
		
		<div id="leftBar">
			  <ul> <!-- Set active tab class inside each list tag -->
				<li<?php if (isset($weddings1)){ echo $weddings1; } else { echo NULL; }?>><a href="wedding-venue.php">Weddings</a></li>
				<li<?php if (isset($private)){ echo $private; } else { echo NULL; }?>><a href="party-venue.php">Private Celebrations</a></li>
				<li<?php if (isset($train)){ echo $train; } else { echo NULL; }?>><a href="conference-meeting-venue.php">Training, Conference and Meeting Facilities</a></li>
				<li<?php if (isset($team)){ echo $team; } else { echo NULL; }?>><a href="team-bonding-away-days.php">Team Bonding, Away Days, Field Events</a></li>
				<li<?php if (isset($rooms)){ echo $rooms; } else { echo NULL; }?>><a href="rooms.php">Our Rooms</a></li>
				<li<?php if (isset($food)){ echo $food; } else { echo NULL; }?>><a href="food.php">Our Food</a></li>
				<li<?php if (isset($sports)){ echo $sports; } else { echo NULL; }?>><a href="sportsclubs.php">Sports Clubs</a></li>
				<li<?php if (isset($tests)){ echo $tests; } else { echo NULL; }?>><a href="testimonials.php">Testimonials</a></li>
				<li<?php if (isset($direct)){ echo $direct; } else { echo NULL; }?>><a href="directions.php">Directions</a></li>
			  </ul>
			  
			  <div class="widgets">
				  <div class="widgets-header">
					  <h2>Party Rooms</h2>
				  </div>
				  <div class="widgets-body">
					<div class="smallfont">
					  <p><a href="pagoda-room.php">The Pagoda Room</a><br />
					  180 persons</p>
					  <p><a href="johndawes-room.php">The John Dawes' Room</a><br />
					  60 persons</p>
					  <p><a href="dragons-lounge.php">The Dragon's Lounge</a><br />
					  60 persons</p>
					  <p><a href="lions-lounge.php">The Lion's Lounge</a><br />
					  40 persons</p>
					  <p><a href="dragons-lounge.php">The Dragon's Lounge</a> + <a href="lions-lounge.php">The Lion's Lounge</a><br />
					  100 persons</p>
					</div>
				  </div> 
			  </div>
			
			  <div class="widgets">
				<div class="widgets-header">
				  <h2>Information Request</h2>
				</div>
				<div class="widgets-body">
				  <p align="center"><a href="contact.php">Click here</a> to send us a request for information.</p>				
				</div>		
			  </div>
		
	   </div>
		
	<div id="content">
