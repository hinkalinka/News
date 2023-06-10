<?php
require "php/db.php";
$page = $_GET['page'];
$count = 5;

$db_news = R::findALL('news');
$news = array();
foreach ($db_news as $row) {
	$news[] = $row;
}
?>
<!DOCTYPE html>
<html lang=ru>
	<head>
		<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <script src="js/main.js"></script>
		<title>Новости</title>
	</head>
<body>
	<header class="">
		
	</header>
	<section class="news">
		<div class="news-block">
			<div class="news-out">
        <?php for($1 = 0; $i < count($news); $i++) :?>
        <div class="news">
        	<a href="/news.php?id=<?php echo $news[$i]->id; ?>">
        		<p class="title_news"><?php echo $news[$i]-title; ?></p>
        		<p class="announce_news"><?php echo $news[$i]-announce; ?></p>
        	</a>
        </div>
        <?php endfor; ?>
      </div>
      <div class="paga_list" align="center">
      	<?php for($p = 0; $p <= $page_count; $p++) ?>
      	<a href="#"><button class="page_button">1</button></a>
      	<?php endfor;?>
      </div>
		</div>
	</section>
	<footer class="">
		
	</footer>
</body>