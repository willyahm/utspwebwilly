<?php
require '../config/db.php';

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];

    $update_query = mysqli_query($db_connect, "UPDATE products SET name = '$name', price = '$price' WHERE id = $id");

    if ($update_query) {
        header("Location: ../show.php"); // Redirect ke halaman utama setelah mengupdate
        exit();
    } else {
        echo "Gagal mengupdate data.";
    }
} else {
    echo "Permintaan tidak valid.";
}
?>
