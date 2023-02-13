<?php
	// подключение библиотек
	require "inc/lib.inc.php";
	require "inc/config.inc.php";

	$id = $_POST["delete_id"];
	deleteItemFromBasket($id);
	header("Location: basket.php");