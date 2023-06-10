<?php
require "Php/db.php";

$news = R::findOne('news', 'id = ?', array($_GET['id']));

?>

<!DOCTYPE html>
<html lang=ru>
	<head>
		<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
		<title><?php echo $news->title; ?></title>
	</head>
<body>
	<header class="">
		
	</header>

		<section class="news_cover">
			<h1 class="title_news_view"><?php echo $news->title; ?></h1>
		  <h2 class="announce_news_view"><?php echo $news->announce; ?></h2>
		  <h3 class="content_news_view"><?php echo $news->content; ?></h3>
		  <h5 class="announce_idate_view"><?php echo date("Y-m-d", $news->idate); ?></h5>
		</section>

	<footer>
		<h2 class="back"><a href="news.php">Все новости</a></h2>
	</footer>
</body>
</html>

