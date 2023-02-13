<?php
define("DB_HOST", "localhost:3306");
define("DB_LOGIN", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "eshop");
define("ORDERS_LOG", "orders.log");

$basket = [];
$count = 0;

$link = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME);

if ( !$link ) {
    echo "ERROR:"
    . mysqli_connect_error();
    die;
}

basketInit();