<?php
include '../_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = isset($_POST['id']) ? intval($_POST['id']) : null;
    $name = mysqli_real_escape_string($conn, $_POST['product_name']);
    $price = mysqli_real_escape_string($conn, $_POST['product_price']);
    $description = mysqli_real_escape_string($conn, $_POST['product_description']);
    
    $image = "";
    if (isset($_FILES['product_image']) && $_FILES['product_image']['error'] == 0) {
        $image = uniqid() . '_' . basename($_FILES['product_image']['name']);
        $uploadPath = '../assets/images/products/' . $image;
        move_uploaded_file($_FILES['product_image']['tmp_name'], $uploadPath);
    }

    if ($id) {
        // Update existing product
        $query = "UPDATE best_selling_products SET name = '$name', price = '$price', description = '$description', image = '$image' WHERE id = $id";
    } else {
        // Insert new product
        $query = "INSERT INTO best_selling_products (name, price, description, image) VALUES ('$name', '$price', '$description', '$image')";
    }

    if (mysqli_query($conn, $query)) {
        echo "success";
    } else {
        echo "error: " . mysqli_error($conn);
    }
} else {
    echo "invalid";
}
?>