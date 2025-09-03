<?php
include "connection.php";
include "./model/product.model.php";
include "./controller/product.controller.php";
include "./view/product/product.view.php";
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

    <?php $product = new ProductView(); ?>

    <!-- mencari produk via url -->
     <?php $product->find(); ?>
    
    <!-- semua produk -->
    <table border="1">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>PRICE</th>
            <th>STOCK</th>
        </tr>
        <?php $product->show() ?>
    </table>

    <!-- footer disini -->
</body>
</html>