<?php

// Steg 1 - Ange lämpliga HTTP headers
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header("Referrer-Policy: no-referrer");
header("Content-Type: application/json; charset=UTF-8");


require_once 'Product.php';
require_once 'productsArrays.php';

// Steg 2 - Skapa products och spara dessa i en ny array

$show = isset($_GET['show']) ? $_GET['show'] : 20;

$products = array();

for ($i = 0; $i < $show; $i++)
{
$id =$productsArray[$i][0];
$title = $productsArray[$i][1];
$description = $productsArray[$i][2];
$price = $productsArray[$i][3];
$category = $productsArray[$i][4];


$product = new Product($id, $title, $description, $price, $category);

array_push($products, $product->toArray());

}

//Test
//print_r($products);
//die();

//Steg 3 – Konvertera PHP-arrayen($products) till JSON och skicka JSON till klienten
echo json_encode($products, JSON_UNESCAPED_UNICODE);

// json_encode — Returns the JSON representation of a value
