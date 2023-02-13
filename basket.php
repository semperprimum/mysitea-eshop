<?php
	// подключение библиотек
	require "inc/lib.inc.php";
	require "inc/config.inc.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Корзина пользователя</title>
</head>
<body>
	<h1>Ваша корзина</h1>
<?php
if (!isset($basket)) {
	echo "Ваша карзина пуста! Вернитесь в " . "<a href='catalog.php'>" . "каталог" . "</a>" . ".";
} else {
	echo "В " . "<a href='catalog.php'>" . "каталог" . "</a>" . ".";
}
?>
<table border="1" cellpadding="5" cellspacing="0" width="100%">
<tr>
	<th>N п/п</th>
	<th>Название</th>
	<th>Автор</th>
	<th>Год издания</th>
	<th>Цена, руб.</th>
	<th>Количество</th>
	<th>Удалить</th>
</tr>
<?php
$goods = myBasket();
$sum = 0;
foreach($goods as $item) {
	$sum += $item["quantity"] * $item["price"];
}
foreach($goods as $item):
?>
<tr>
	<td><?= $item["id"] ?></td>
	<td><?= $item["title"] ?></td>
	<td> <?= $item["author"] ?></td>
	<td> <?= $item["pubyear"] ?></td>
	<td> <?= $item["price"] ?></td>
	<td> <?= $item["quantity"] ?></td>
	<td> <form action="delete_from_basket.php" method="post">
		<input type="hidden" name="delete_id" value=" <?= $item['id'] ?>">
		<button type="submit">Удалить</button>
	</form> </td>
</tr>

<?php endforeach ?>

</table>

<p>Всего товаров в корзине на сумму: <?= $sum ?> руб.</p>

<div align="center">
	<input type="button" value="Оформить заказ!"
                      onClick="location.href='orderform.php'" />
</div>

</body>
</html>







