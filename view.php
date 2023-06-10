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
		<title>Новости</title>
	</head>
<body>
	<header class="">
		
	</header>

		<section class="news_cover">
			<p class="title_news"><?php echo $news->title; ?></p>
		  <p class="announce_news"><?php echo $news->announce; ?></p>
		  <p class="content_news"><?php echo $news->content; ?></p>
		  <p class="announce_idate"><?php echo date("Y-m-d", $news->idate); ?></p>
		</section>

	<footer class="">
		
	</footer>
</body>
</html>

