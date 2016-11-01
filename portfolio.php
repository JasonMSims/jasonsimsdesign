<!doctype html>
<html class="demo-1">
<head>
<meta charset="UTF-8">
<title>Jason Sims Design</title>
<meta name="viewport" content="width=device-width, user-scalable=0" />
<link rel="shortcut icon" href="lib/css/image/favicon/favicon.ico">

<!-- Flickity -->
<link rel="stylesheet" href="lib/vendor/Flickity/css/flickity.css">

<style type="text/css">
@import url(http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800);
@import url(http://fonts.googleapis.com/css?family=Pathway+Gothic+One);
@import url(lib/css/main.css);
@import url(lib/css/portfolio.css);
@import url(lib/css/color.css);
</style>

<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<!--<script src="lib/js/main.js"></script>-->
<script src="lib/js/modernizr.custom.js"></script>
	
<!-- Flickity -->
<script src="lib/vendor/Flickity/js/flickity.pkgd.min.js"></script>
	
</head>

<body>
<section class="header cf">
   	<span class="ribbon ribbon-cmyk"></span>
    <a href="../">
    	<span id="return-home" class="fa fa-times-circle-o fa-2x cyan-font-2"></span>
    </a>
</section>
<section class="white grid gallery" id="portfolio">
    	<?php
			if(isset($_POST["category"])){
				$category = $_POST["category"];
			}
			elseif(isset($_GET["category"])){
				$category = $_GET["category"];
			}
			else{
				$category = "web";
			}
        	$images = glob("lib/img/portfolio/" . $category . "/*.{jpg,png,gif}", GLOB_BRACE);
			$count = 0;
			foreach($images as $image){
				echo "<div class='gallery-cell'>";
				//echo "<a href='#'>";
				echo "<figure>";
				echo "<img src='" . $image . "'/>";
				echo "</figure>";
				/*echo "<figcaption>";
				echo "<h2>" . $captions["name"][$count] . "</h2>";
				echo "<p>" . $captions["descr"][$count] . "</p>";
				echo "</figcaption>";*/
				echo "</a>";
				echo "</div>";
				$count++;
			};
		?>
<script>
	$(function(){		
		$('.gallery').flickity({
			// options
			cellAlign: 'center',
			contain: true,
			cellSelector: '.gallery-cell',
			setGallerySize: false,
			imagesLoaded: true,
			percentPosition: true,
		});
	});
	
</script>
</section>
</body>
</html>
