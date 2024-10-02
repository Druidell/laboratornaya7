<?php
require __DIR__ . '/product.php';
require __DIR__ .'/client.php';

$client = new Client();

$client->name = "Маг";
$client->last_order("Палка");
$client->allMoney = 100;
echo $client->about_client();

$product = new Product();

$product->name = "Палка";
$product->description = "Магическая";
$product->price = 100;
$product->country = "Шотландия";
echo $product->about_product();

$product->new_information("Палка 2");
$product->new_cost(200);
echo "Обновленная информация о палке:<br>" . $product->about_product();

$client->money(200);
echo $client->about_client();
?>