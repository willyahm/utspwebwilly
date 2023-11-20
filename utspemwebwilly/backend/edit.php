<?php
require '../config/db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Mendapatkan data produk berdasarkan ID
    $product_query = mysqli_query($db_connect, "SELECT * FROM products WHERE id = $id");
    $product = mysqli_fetch_assoc($product_query);

    if ($product) {
        // Form untuk mengedit data
        echo "<h2>Edit Data Produk</h2>";
        echo '<form action="update.php" method="post">';
        echo '<input type="hidden" name="id" value="' . $product['id'] . '">';
        echo 'Nama Produk: <input type="text" name="name" value="' . $product['name'] . '"><br>';
        echo 'Harga: <input type="text" name="price" value="' . $product['price'] . '"><br>';
        echo '<input type="submit" name="submit" value="Update">';
        echo '</form>';
    } else {
        echo "Data produk tidak ditemukan.";
    }
} else {
    echo "ID tidak valid.";
}
?>
