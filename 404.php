<?php
define('BASE_URL', (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST']);
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Oops - Jason Sims Design</title>
<meta name="viewport" content="width=device-width, user-scalable=0" />
<link rel="shortcut icon" href="<?php echo BASE_URL; ?>/lib/css/image/favicon/favicon.ico">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800|Pathway+Gothic+One">
<link rel="stylesheet" href="<?php echo BASE_URL; ?>/lib/css/main.css">
<link rel="stylesheet" href="<?php echo BASE_URL; ?>/lib/css/portfolio.css">
<link rel="stylesheet" href="<?php echo BASE_URL; ?>/lib/css/color.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<style>
  h1,
  p,
  a {
    display: block;
    line-height: 1;
    margin: 1rem 0;
    text-align: center;
    width: 100%;
  }

  h1 {
    font-size: 8rem;
  }

  .content {
    align-content: center;
    align-items: center;
    display: flex;
    flex: 1 0 auto;
    flex-wrap: wrap;
    height: calc(100vh - 18rem);
  }

</style>
</head>

<body>

<section class="header">
  <header class="wrap inner-header cfl">
    <a href="https://jasonsims.design" class="logo">
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

<section class="content">
  <h1>404</h1>
  <p>This is not the page you're looking for.</p>
  <a href="https://jasonsims.design">Go back from whence ye came.</a>
</section>
<footer id="footer">
  <span class="ribbon ribbon-cmyk ribbon-shift"></span>
  <h3 class="inner-footer">
    &copy; <?php echo date('Y') ?> Jason Sims Design.  Hand crafted in the USA.
  </h3>
</footer>
<?php include_once("analyticstracking.php"); ?>
</body>
</html>
