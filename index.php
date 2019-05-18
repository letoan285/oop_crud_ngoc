<?php 
require_once "Product.php";
require_once "User.php";

$products = Product::all();

// var_dump($products);die;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
<div class="container">
    <h3 class="text-center">Product List</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>STT</th>
                <th>Image</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Category</th>
                <th>
                    <a class="btn btn-sm btn-success" href="">Create</a>
                </th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($products as $key => $product): ?>
            <tr>
                <td><?= $key+1; ?></td>
                <td><img src="<?= $product->image ?>" width="100" alt=""></td>
                <td><a href="detail.php?id=<?=$product->id ?>"> <?= $product->name; ?> </a></td>
                <td><?= $product->price; ?></td>
                <td><?= $product->category_id ; ?></td>
                <td>
                    <a class="btn btn-sm btn-primary" href="edit.php?id=<?=$product->id ?>">Sua</a>
                    <a class="btn btn-sm btn-danger" href="./delete.php?id=<?=$product->id?>">Xoa</a>
                </td>
            </tr>
            
        <?php endforeach ?>

        </tbody>
    </table>
</div>
</body>
</html>
