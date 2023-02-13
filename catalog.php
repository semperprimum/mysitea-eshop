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
	<link href="https://cdn.jsdelivr.net/gh/hung1001/font-awesome-pro-v6@44659d9/css/all.min.css" rel="stylesheet" type="text/css" /><body>
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
			<i class="fa-regular fa-cart-plus fa-xl"></i>
			</button>
		</form>
	</td>
</tr>
<?php endforeach;?>

</table>
</body>
</html>