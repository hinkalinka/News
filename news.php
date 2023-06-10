<?php
require "Php/db.php";
$page = $_GET['page'];
$count = 5;

$db_news = R::findAll('news');
$news = array();
foreach ($db_news as $row) {
	$news[] = $row;
}

$page_count = floor(count($news) / $count);

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
		<div class="news-block">
			<div class="news-out">
        <?php for($i = $page*$count; $i < ($page+1)*$count; $i++) :?>
	        <?php if($news[$i]->id !=NULL) :?>
		        <div class="news">
		        	<a href="/news.php?id=<?php echo $news[$i]->id; ?>">
		        		<p class="title_news"><?php echo $news[$i]->title; ?></p>
		        		<p class="announce_news"><?php echo $news[$i]->announce; ?></p>
		        		<p class="announce_idate"><?php echo date("Y-m-d", $news[$i]->idate); ?></p>
		        	</a>
		        </div>
	        <?php endif;?>
        <?php endfor; ?>
      </div>
      <div class="paga_list" align="center">
      	<?php for($p = 0; $p <= $page_count; $p++) :?>
      	<a href="news.php?page=<?php echo $p; ?>"><button class="page_button"><?php echo $p + 1; ?></button></a>
      	<?php endfor;?>
      </div>
		</div>
	</section>
	<footer class="">
		
	</footer>
</body>