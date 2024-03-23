<?php
define('BASE_URL', (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST']);
// var_dump($_SERVER);
?>

<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Jason Sims Design</title>
	<meta name="viewport" content="width=device-width, user-scalable=0" />
	<link rel="shortcut icon" href="<?php echo BASE_URL; ?>/lib/css/image/favicon/favicon.ico">

	<!-- Flickity -->
	<!-- <link rel="stylesheet" href="lib/vendor/Flickity/css/flickity.css"> -->

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800|Pathway+Gothic+One">

	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/lib/css/main.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/lib/css/portfolio.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/lib/css/color.css">

	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<!--<script src="lib/js/main.js"></script>-->
	<!-- <script src="lib/js/modernizr.custom.js"></script> -->

	<!-- Flickity -->
	<!-- <script src="lib/vendor/Flickity/js/flickity.pkgd.min.js"></script> -->

</head>

<body>

	<section class="header">
		<header class="wrap inner-header cfl">
			<a href="https://jasonsims.design" class="logo">
				<!-- <img src="lib/css/image/web-logo.png" /> -->
				<svg class="icon-logo" viewBox="0 0 59 64">
					<use xlink:href="<?php echo BASE_URL; ?>/lib/css/image/icons.svg#icon-logo"></use>
				</svg>
			</a>
			<nav>
				<ul class="nav" id="main-nav">
					<li><a href="https://jasonsims.design#work">Work</a></li>
					<li><a href="https://jasonsims.design#about">About</a></li>
					<li><a href="https://jasonsims.design#contact">Contact</a></li>
				</ul>
			</nav>
		</header>
		<span class="ribbon ribbon-cmyk"></span>
	</section>

	<?php

	$portfolio = [
		'web'			=> [
			[
				'title'			=> 'Republic Bank &amp; Trust',
				'category'	=> 'Web Design',
				'client'		=> 'Digital Insight',
				'image'			=> BASE_URL . '/lib/img/portfolio/web/republicbank.jpg',
				'link'			=> 'http://webservices.digitalinsight.com/t/republicbank/',
			],
			[
				'title'			=> 'Central Bank of Utah',
				'category'	=> 'Web Design',
				'client'		=> 'Digital Insight',
				'image'			=> BASE_URL . '/lib/img/portfolio/web/centralbank.jpg',
				'link'			=> 'http://webservices.digitalinsight.com/t/centralbankutah/',
			],
			[
				'title'			=> 'Clean Energy Credit Union',
				'category'	=> 'Web Design',
				'client'		=> 'Digital Insight',
				'image'			=> BASE_URL . '/lib/img/portfolio/web/cleanenergy.jpg',
				'link'			=> 'http://webservices.digitalinsight.com/t/cleanenergycu/',
			],
			[
				'title'			=> 'Harbins Church',
				'category'	=> 'Web Design',
				'client'		=> 'Jason Sims Design',
				'image'			=> BASE_URL . '/lib/img/portfolio/web/harbinschurch.jpg',
				'link'			=> 'http://harbinschurch.org',
			],
			[
				'title'			=> 'Better For Kids',
				'category'	=> 'Web Design',
				'client'		=> 'Jason Sims Design',
				'image'			=> BASE_URL . '/lib/img/portfolio/web/betterforkids.jpg',
				'link'			=> 'https://betterforkids.org',
			],
			[
				'title'			=> 'Fortner Taxidermy',
				'category'	=> 'Web Design',
				'client'		=> 'Jason Sims Design',
				'image'			=> BASE_URL . '/lib/img/portfolio/web/fortnertaxidermy.jpg',
				'link'			=> 'http://fortnertaxidermy.com',
			],
			[
				'title'			=> 'Selfie Socials',
				'category'	=> 'Web Design',
				'client'		=> 'Jason Sims Design',
				'image'			=> BASE_URL . '/lib/img/portfolio/web/selfiesocials.jpg',
				'link'			=> 'http://selfiesocials.com',
			],
			[
				'title'			=> 'Jason Sims Design',
				'category'	=> 'Web Design',
				'client'		=> 'Jason Sims Design',
				'image'			=> BASE_URL . '/lib/img/portfolio/web/jasonsimsdesign.jpg',
				'link'			=> 'https://jasonsims.design',
			],
			[
				'title'			=> 'Crisis Rescue Int\'l',
				'category'	=> 'Web Concept',
				'client'		=> 'Jason Sims Design',
				'image'			=> BASE_URL . '/lib/img/portfolio/web/crisisrescue.jpg',
				'link'			=> '#',
			],
			[
				'title'			=> 'Norwood Photography',
				'category'	=> 'Web Concept',
				'client'		=> 'Jason Sims Design',
				'image'			=> BASE_URL . '/lib/img/portfolio/web/norwoodphotography.jpg',
				'link'			=> '#',
			],
		],
		'print'		=> [
			[
				'title'			=> 'Crisis Rescue Int\'l',
				'category'	=> 'Print Design',
				'client'		=> 'Jason Sims Design',
				'image'			=> BASE_URL . '/lib/img/portfolio/print/crisisrescue.jpg',
				'link'			=> '#',
			],
			[
				'title'			=> 'Crossfit Zona G',
				'category'	=> 'Print Design',
				'client'		=> 'Jason SIms Design',
				'image'			=> BASE_URL . '/lib/img/portfolio/print/crossfit.jpg',
				'link'			=> '#',
			],
			[
				'title'			=> 'Micah 6:8',
				'category'	=> 'Print Design',
				'client'		=> 'Jason SIms Design',
				'image'			=> BASE_URL . '/lib/img/portfolio/print/micah.jpg',
				'link'			=> '#',
			],
			[
				'title'			=> 'MOOD:',
				'category'	=> 'Print Design',
				'client'		=> 'Jason SIms Design',
				'image'			=> BASE_URL . '/lib/img/portfolio/print/mood.jpg',
				'link'			=> '#',
			],
			[
				'title'			=> 'Sanctuary Baptist Church',
				'category'	=> 'T-Shirt Design',
				'client'		=> 'Jason Sims Design',
				'image'			=> BASE_URL . '/lib/img/portfolio/print/sanctuaryshirt_front.jpg',
				'link'			=> '#',
			],
			[
				'title'			=> 'Sanctuary Baptist Church',
				'category'	=> 'T-Shirt Design',
				'client'		=> 'Jason Sims Design',
				'image'			=> BASE_URL . '/lib/img/portfolio/print/sanctuaryshirt_back.jpg',
				'link'			=> '#',
			],
		],
		'branding'		=> [
			[
				'title'			=> 'Acadia Homes',
				'category'	=> 'Logo Design',
				'client'		=> 'Jason Sims Design',
				'image'			=> BASE_URL . '/lib/img/portfolio/branding/acadia.jpg',
				'link'			=> '#',
			],
			[
				'title'			=> 'Christy Martin Photography',
				'category'	=> 'Logo Design',
				'client'		=> 'Jason Sims Design',
				'image'			=> BASE_URL . '/lib/img/portfolio/branding/christymartin.jpg',
				'link'			=> '#',
			],
			[
				'title'			=> 'Crossfit Zona G',
				'category'	=> 'Logo Design',
				'client'		=> 'Jason Sims Design',
				'image'			=> BASE_URL . '/lib/img/portfolio/branding/crossfit.jpg',
				'link'			=> '#',
			],
			[
				'title'			=> 'Crystal Solutions',
				'category'	=> 'Logo Concept',
				'client'		=> 'Jason Sims Design',
				'image'			=> BASE_URL . '/lib/img/portfolio/branding/crystal.jpg',
				'link'			=> '#',
			],
			[
				'title'			=> 'The Photo Collective',
				'category'	=> 'Logo Design',
				'client'		=> 'Jason Sims Design',
				'image'			=> BASE_URL . '/lib/img/portfolio/branding/photocollective.jpg',
				'link'			=> '#',
			],
			[
				'title'			=> 'The Photo Collective',
				'category'	=> 'Logo Design',
				'client'		=> 'Jason Sims Design',
				'image'			=> BASE_URL . '/lib/img/portfolio/branding/photocollective_alt.jpg',
				'link'			=> '#',
			],
		]
	];


	if (isset($_REQUEST['category'])) {
		$category = $_REQUEST['category'];
	} else {
		$category = 'web';
	}
	?>


	<section class="portfolio">

		<?php
		// foreach ($portfolio as $category => $articles) {
		foreach ($portfolio[$category] as $article) {
			echo '<article class="portfolio__item">';
			echo '<div class="portfolio__content">';
			echo '<div class="portfolio__content__thumb">';
			echo '<a href="' . $article['link'] . '">';
			echo '<img src="' . $article['image'] . '" alt="' . $article['title'] . '">';
			echo '</a>';
			echo '</div>';
			echo '<div class="portfolio__content__description">';
			echo '<p class="title"><a href="' . $article['link'] . '">' . $article['title'] . '</a></p>';
			echo '<p class="subtitle">' . $article['category'] . ' // ' . $article['client'] . '</p>';
			echo '</a>';
			echo '</div>';
			echo '</div>';
			echo '</article>';
		}
		// }
		?>
	</section>
	<footer id="footer">
		<span class="ribbon ribbon-cmyk ribbon-shift"></span>
		<h3 class="inner-footer">
			&copy; <?php echo date('Y') ?> Jason Sims Design. Hand crafted in the USA.
		</h3>
	</footer>

	<script src="<?php echo BASE_URL; ?>/lib/js/image-cover.min.js"></script>
	<script>
		(function($) {
			$(document).ready(function() {
				$('.portfolio__content__thumb').cover({
					target: 'img',
					align: {
						h: 'left',
						v: 'top'
					}
				});
			});
		})(jQuery);
	</script>


	<?php include_once("analyticstracking.php"); ?>
</body>

</html>