<?php
include_once "ProductController.php";

class ProductView extends ProductController
{
    public function show()
    {
        $products = $this->getProduct();

        foreach ($products as $item) { ?>
            <tr>
                <td><?php echo $item['id']; ?></td>
                <td><?php echo $item['name']; ?></td>
                <td><?php echo $item['price']; ?></td>
                <td><?php echo $item['stock']; ?></td>
            </tr>
        <?php
        }
    }

    public function find($id)
    {
        $detailProducts = $this->getProductBy($id);
        if (empty($detailProducts)) {
            echo "<p>Produk tidak ditemukan.</p>";
            return;
        }

        foreach ($detailProducts as $detail) { ?>
            <div>
                <h3><?php echo $detail['name']; ?></h3>
                <p>Harga: Rp. <?php echo $detail['price']; ?></p>
                <p>Stock: <?php echo $detail['stock']; ?></p>
            </div>
        <?php
        }
    }
}
?>
