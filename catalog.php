<?php
	// подключение библиотек
	require "inc/lib.inc.php";
	require "inc/config.inc.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Каталог товаров</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<p>Товаров в <a href="basket.php">корзине</a>: <?= $count?></p>
<table border="1" cellpadding="5" cellspacing="0" width="100%">
<tr>
	<th>Название</th>
	<th>Автор</th>
	<th>Год издания</th>
	<th>Цена, руб.</th>
	<th>В корзину</th>
</tr>
<?php
$goods = selectAllItems($link);
foreach($goods as $item): ?>
<tr>
	<td><?= $item["title"] ?></td>
	<td><?= $item["author"] ?></td>
	<td><?= $item["pubyear"] ?> </td>
	<td><?= $item["price"] ?></td>
	<td align="center">
		<form action="add2basket.php" method="post">
			<input type="hidden" name="id" value="<?= $item['id'] ?>">
			<button type="submit" 
			style="border: none; background: none; color: green; cursor: pointer;"> 
				<i class="fa-solid fa-cart-shopping fa-xl"></i> 
			</button>
		</form>
	</td>
</tr>
<?php endforeach;  ?>

</table>
</body>
</html>