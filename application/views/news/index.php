<!DOCTYPE html>
<html>
	<head>
		<title>團主頁面</title>
	</head>
	<body>
		<h2><?php echo $title ?></h2>
		<?php foreach ($news as $news_item): ?>
			團購商品編號：<?php echo $news_item['slug'] ?>
			<h3><?php echo $news_item['title'] ?></h3>
			<div class="main">
				<?php echo $news_item['text'] ?></br></br>
				開團破盤價：<?php echo $news_item['price'] ?></br></br>
				目前跟團人數：<?php echo $sumpeople['count'] ?></br>
			</div>

			<p><a href="news/<?php echo $news_item['slug'] ?>">我要跟團</a></p>
			</br></br>
		<?php endforeach ?>


		<!--
		<p>目前有誰跟團：</p>
		<?php foreach ($os as $people): ?>
				<?php echo $people['ordername'] ?>
				<?php echo $people['orderaddress'] ?>
				<?php echo $people['orderphone'] ?>
				<?php echo $people['orderemail'] ?></br></br>
		<?php endforeach ?>
		-->

		<!--
		 		<?php foreach ($os as $people): ?>
					<?php foreach ($people as $o): ?>
						<?php echo $o ?></br></br>
					<?php endforeach ?>
				<?php endforeach ?>
		 -->

	</body>
</html>
