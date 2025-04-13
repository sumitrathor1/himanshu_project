<?php
include '../_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $price = floatval($_POST['price']);
    $old_price = floatval($_POST['old_price']);

    $image = "";
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $image = uniqid() . '_' . basename($_FILES['image']['name']);
        $uploadPath = '../assets/images/products/' . $image;
        move_uploaded_file($_FILES['image']['tmp_name'], $uploadPath);
    }

    $query = "INSERT INTO best_products (title, price, old_price, image) 
              VALUES ('$title', $price, $old_price, '$image')";

    if (mysqli_query($conn, $query)) {
        echo "success";
    } else {
        echo "error: " . mysqli_error($conn);
    }
}
?>