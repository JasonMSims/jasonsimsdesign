<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Jason Sims Design</title>
<meta name="description" content="Branding, Website and Print Design">
<meta name="viewport" content="width=device-width, user-scalable=0" />
<link rel="apple-touch-icon" sizes="57x57" href="lib/css/image/favicon/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="lib/css/image/favicon/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="lib/css/image/favicon/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="lib/css/image/favicon/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="lib/css/image/favicon/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="lib/css/image/favicon/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="lib/css/image/favicon/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="lib/css/image/favicon/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="lib/css/image/favicon/apple-touch-icon-180x180.png">
<link rel="icon" type="image/png" href="lib/css/image/favicon/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="lib/css/image/favicon/android-chrome-192x192.png" sizes="192x192">
<link rel="icon" type="image/png" href="lib/css/image/favicon/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="lib/css/image/favicon/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="lib/css/image/favicon/manifest.json">
<link rel="shortcut icon" href="lib/css/image/favicon/favicon.ico">
<meta name="msapplication-TileColor" content="#B91D47">
<meta name="msapplication-TileImage" content="lib/css/image/favicon/mstile-144x144.png">
<meta name="msapplication-config" content="lib/css/image/favicon/browserconfig.xml">
<!--<meta name="theme-color" content="#165B69">-->
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Pathway+Gothic+One">
<link rel="stylesheet" type="text/css" href="lib/css/main.css">
<link rel="stylesheet" type="text/css" href="lib/css/color.css">
<!--<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="lib/js/main.js"></script>
</head>

<body>
	<section class="header">
		<header class="wrap inner-header cfl">
			<a href="#" class="logo">
				<!-- <img src="lib/css/image/web-logo.png" /> -->
				<svg class="icon-logo" viewBox="0 0 59 64">
					<use xlink:href="lib/css/image/icons.svg#icon-logo"></use>
				</svg>
			</a>
			<nav>
				<ul class="nav" id="main-nav">
					<li><a href="#work">Work</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
			</nav>
		</header>
		<span class="ribbon ribbon-cmyk"></span>
	</section>
	<section class="cyan-5" id="work">
		<div class="wrap cfl">
			<ul>
				<a href="portfolio.php?category=branding">
					<li class="cyan-2">
						<figure>
							<!-- <img src="lib/css/image/branding.png" /> -->
							<svg class="icon icon-branding" viewBox="0 0 58 64">
								<use xlink:href="lib/css/image/icons.svg#icon-branding"></use>
							</svg>
						</figure>
						<header>
							<h1>Branding</h1>
						</header>
					</li>
				</a>
				<a href="portfolio.php?category=web">
					<li class="cyan-3">
						<figure>
							<!-- <img src="lib/css/image/web-design.png" /> -->
							<svg class="icon icon-web icon-mobile" viewBox="0 0 35 64">
								<use xlink:href="lib/css/image/icons.svg#icon-mobile"></use>
							</svg>
							<svg class="icon icon-web icon-tablet" viewBox="0 0 48 64">
								<use xlink:href="lib/css/image/icons.svg#icon-tablet"></use>
							</svg>
							<svg class="icon icon-web icon-desktop" viewBox="0 0 77 64">
								<use xlink:href="lib/css/image/icons.svg#icon-desktop"></use>
							</svg>
						</figure>
						<header>
							<h1>Web Development</h1>
						</header>
					</li>
				</a>
				<a href="portfolio.php?category=print">
					<li class="cyan-4">
						<figure>
							<!-- <img src="lib/css/image/print-design.png" /> -->
							<svg class="icon icon-print" viewBox="0 0 99 64">
								<use xlink:href="lib/css/image/icons.svg#icon-card"></use>
							</svg>
							<svg class="icon icon-print" viewBox="0 0 55 64">
								<use xlink:href="lib/css/image/icons.svg#icon-brochure"></use>
							</svg>
							<svg class="icon icon-print" viewBox="0 0 50 64">
								<use xlink:href="lib/css/image/icons.svg#icon-letter"></use>
							</svg>
						</figure>
						<header>
							<h1>Print Marketing</h1>
						</header>
					</li>
				</a>
			</ul>
		</div>
	</section>
	<section id="about">
		<div class="wrap about cfl">
			<aside class="profile">
	    	<figure>
					<!-- <img class="round" src="lib/css/image/profile/profile_1.jpg" /> -->
					<?php echo file_get_contents('lib/css/image/geo_self_port.svg'); ?>
							
				<!-- 	<svg class="round" viewBox="0 0 480 480">
						<use xlink:href="lib/css/image/geo_self_port.svg#profile-geo"></use>
					</svg> -->

				</figure>
			</aside>
	  	<section class="bio">
	      <h1>My name is Jason Sims. I am a graphic designer and web developer. </h1>
	      <p>Several years ago, a lifelong passion for traditional drawing reinvented itself along a modern, technically proficient path. While I still make it a regular practice to take pencil to paper, I find myself as much at home with a mouse, a trackpad, or my always trusty Wacom pen in hand.</p>
				<p>During my time as Lead Graphic Designer at One of A Kind Signs, I learned to manage quality and timeliness in a way that provides the client with a superb product and a quick turnaround.</p>
				<p>More recently, I have had the privilege to work with organizations such as Norwood Photography, Fortner Taxidermy, Crisis Rescue International and 12Stone Church. I have enjoyed such fun and challenging endeavors as branding design & implementation, print marketing and interactive/responsive web development.</p>
	   	</section>
	   	<aside class="accolades">
				<!-- <div>
					<h2>Specialty</h2>
					<ul>
						<li>Branding</li>
						<li>Website Design</li>
						<li>Print Design</li>
						<li>Illustration</li>
						<li>Typography</li>
						<li>HTML5 & CSS3</li>
					</ul>
				</div> -->
				<div>
					<h2>Tools O' The Trade</h2>
					<ul>
						<li>Photoshop&reg; CC</li>
						<li>Illustrator&reg; CC</li>
						<li>Dreamweaver&reg; CC</li>
						<li>After Effects&reg; CC</li>
					</ul>
				</div>
			</aside>
	   </div>
	</section>
	<section class="cyan-0" id="contact">
		<div class="wrap contact cfl">
	  	<aside class="note">
			<p>Feel free to drop me a line if you have any inquiries about a project, or if you just want to say hello.</p>
	    <h3><a href="mailto:jason@jasonsims.design">jason@jasonsims.design</a></h3>
			</aside>
	    <section class="contact-form">
	    	<form id="contact-form" method="post" action="">
	  	  	<input id="name" type="text" name="name" placeholder="Name" required>
					<input id="email" type="email" name="email" placeholder="Email" required>
					<input id="subject" type="text" name="subject" placeholder="Subject" required>
					<textarea id="message" rows="5" name="message" placeholder="Message" required></textarea>
					<input class="cyan-2" id="send" type="submit" name="send" value="Send">
				</form>
			</section>
		</div>
	</section>
	<footer id="footer">
		<span class="ribbon ribbon-cmyk ribbon-shift"></span>
		<h3 class="inner-footer">
	  	&copy; <?php echo date('Y') ?> Jason Sims Design.  Hand crafted in the USA.
	  </h3>
	</footer>
</body>
</html>
