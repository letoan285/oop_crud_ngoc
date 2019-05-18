<?php 
require_once "Product.php";
require_once "Category.php";
require_once "User.php";
$id = $_GET['id'];
$product = Product::find($id);
$categories = Category::all();
$users = User::all();
// $name = $_POST['name'];

// $price = $_POST['price'];

// $status = $_POST['status'];

// $category_id = $_POST['category_id'];

// $user_id = $_POST['user_id'];

// $description = $_POST['description'];

// $image = $_FILES['image'];
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
    <h3 class="text-center">Product update</h3>
    <form action="update.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?=$product->id ?>">
        <div class="form-group">
            <label for="">Product Name</label>
            <input type="text" class="form-control" name="name" value="<?=$product->name ?>">
        </div>
        <div class="form-group">
            <label for="">Slug</label>
            <input type="text" class="form-control" name="slug" value="<?=$product->slug ?>">
        </div>

        <div class="form-group">
            <label for="">Description</label>
            <textarea name="description" class="form-control" cols="30" rows="5"><?=$product->description ?></textarea>
        </div>

        <div class="form-group">
            <label for="">Short Description</label>
            <textarea name="short_description" class="form-control" cols="30" rows="5"><?=$product->short_description ?></textarea>
        </div>

        <div class="form-group">
            <label for="">Price</label>
            <input type="number" class="form-control" name="price" value="<?=$product->price ?>">
        </div>
        <div class="form-group">
            <label for="">Stock</label>
            <input type="number" class="form-control" name="stock" value="<?=$product->stock ?>">
        </div>

        <div class="form-group">
            <label for="">Image</label>
            <img src="<?= $product->image ?>" width="100" alt="">
            <input type="file" class="form-control" name="image">
        </div>

        <div class="form-group">
            <label for="">Status</label>
            <select name="status" class="form-control">

                <option value="1" <?php echo $product->status == 1 ? 'selected' : '' ?>>Active</option>
                <option value="0" <?php echo $product->status == 0 ? 'selected' : '' ?> >Inactive</option>

            </select>
        </div>

        <div class="form-group">
            <label for="">Category</label>
            <select name="category_id" class="form-control">
                <?php foreach ($categories as $key => $cate): ?>

                <option 
                
                <?php if($cate->id == $product->category_id){
                    echo 'selected';
                }?>
                
                value="<?=$cate->id ?>"><?=$cate->name ?></option>

                <?php endforeach ?>
            </select>
        </div>
        <div class="form-group">
            <label for="">User</label>
            <select name="user_id" class="form-control">
                <?php foreach ($users as $key => $u): ?>

                <option <?php if($u->id == $product->user_id){ echo 'selected'; } ?> value="<?=$u->id?>"><?=$u->username ?></option>

                <?php endforeach ?>
            </select>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success btn-block">Submit</button>
        </div>
    
    
    </form>
</div>
</body>
</html>