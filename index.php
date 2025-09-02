<?php
include "connect.php";
include "./model/users.model.php";
include "./controller/users.controller.php";
include "./view/users/product.view.php";
$product = new ProductView();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test PHP</title>
</head>
<body>
    <!-- navigator bar -->
     <?php include "./view/utils/navbar.utils.php"; ?>

    <!-- mencari produk via url -->
     <?php $users->find(); ?>
    
    <!-- semua produk -->
    <table border="1">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>PRICE</th>
            <th>STOCK</th>
        </tr>
        <?php $users->show() ?>
    </table>

    <!-- footer disini -->
</body>
</html>