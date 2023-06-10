<?php
require "Php/db.php";

$page = $_GET['page'];
$count = 5;

$db_news = R::findAll('news');
$news = array();
foreach ($db_news as $row) {
	$news[] = $row;
}
function sortByOrder($a, $b) {
  return strnatcmp($a['idate'], $b['idate']);
}

usort($db_news, 'sortByOrder');
$lattest_news = array_reverse($db_news);
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
	<header>
		<h1 class="anoncer">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h1>
		<h4 class="anoncer_down">Sed do&nbsp;eiusmod tempor incididunt ut&nbsp;labore et&nbsp;dolore magna aliqua.</h4>
		<img src="src/foto.jpg" class="foto" alt="foto">
	</header>
	<section class="news_cover">
		<h2 class="title_new">Последние новости</h2>
		<div class="news-block">
			<div class="five_lattest">
        <?php for($i = 0; $i < 5; $i++) :?>
		        <div class="news">
		        	<a href="view.php?id=<?php echo $lattest_news[$i]->id; ?>">
		        		<h3 class="title_news"><?php echo $lattest_news[$i]->title; ?></h3>
		        		<h4 class="announce_news"><?php echo $lattest_news[$i]->announce; ?></h4>
		        		<h3 class="announce_idate"><?php echo date("Y-m-d", $lattest_news[$i]->idate); ?></h3>
		        	</a>
		        </div>
        <?php endfor; ?>
      </div>
      <h2 class="anoncer_second">ВСЕ НОВОСТИ</h2>
			<div class="news-out">
        <?php for($i = $page*$count; $i < ($page+1)*$count; $i++) :?>
	        <?php if($news[$i]->id !=NULL) :?>
		        <div class="news">
		        	<a href="view.php?id=<?php echo $lattest_news[$i]->id; ?>">
		        		<h3 class="title_news"><?php echo $lattest_news[$i]->title; ?></h3>
		        		<h4 class="announce_news"><?php echo $lattest_news[$i]->announce; ?></h4>
		        		<h3 class="announce_idate"><?php echo date("Y-m-d", $lattest_news[$i]->idate); ?></h3>
		        	</a>
		        </div>
	        <?php endif;?>
        <?php endfor; ?>
      </div>
      
		</div>
	</section>
	<footer>
		<h2 class="anoncer_second">СПИСОК НОВОСТЕЙ</h2>
		<div class="paga_list" align="center">
      	<?php for($p = 0; $p <= $page_count; $p++) :?>
      	<a href="news.php?page=<?php echo $p; ?>" class="news_info"><button class="page_button"><?php echo $p + 1; ?></button></a>
      	<?php endfor;?>
      </div>
	</footer>
</body>
</html>