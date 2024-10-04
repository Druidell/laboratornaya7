<?php
require __DIR__ . '/product.php';
require __DIR__ .'/client.php';

$product = new Product();
$product->new_information("Палка 2", "Волшебная", 250, "Шотландия");
echo $product->about_product().'<br>';
$product->new_cost(300);
echo "Обновленная информация о палке:<br>" . $product->about_product().'<br>';

$client = new Client();
$client->name = "Маг";
$client->allMoney = 200;
$client->last_order("Палка");
$client->money(200);
echo $client->about_client().'<br>';
?>
