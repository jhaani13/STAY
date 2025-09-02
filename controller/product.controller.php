<?php
include_once "connect.php";

class ProductController
{
    protected $connection;

    public function __construct()
    {
        global $connection; 
        $this->connection = $connection;
    }

    // ambil semua produk
    protected function getProduct()
    {
        $sql = "SELECT * FROM product";
        $result = mysqli_query($this->connection, $sql);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    // ambil produk berdasarkan ID (contoh)
    protected function getProductBy($id = null)
    {
        if ($id === null) {
            return [];
        }
        $sql = "SELECT * FROM product WHERE id = " . intval($id);
        $result = mysqli_query($this->connection, $sql);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
}
?>
