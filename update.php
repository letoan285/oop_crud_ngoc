<?php 
require_once "Product.php";
require_once "Category.php";

$id = $_POST['id'];


$product = Product::find($id);

$product->name = $_POST['name'];
$product->slug = $_POST['slug'];
$product->price = $_POST['price'];
$product->status = $_POST['status'];
$product->category_id = $_POST['category_id'];
$product->user_id = $_POST['user_id'];
$product->description = $_POST['description'];
$product->short_description = $_POST['short_description'];


$product->update();
header('location: index.php');
