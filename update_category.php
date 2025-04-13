<?php
include './assets/pages/_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = intval($_POST['id']);
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $date = $_POST['add_date'];
    
    $query = "";
    $image = "";

    // Check if image is uploaded
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $image = uniqid() . '_' . basename($_FILES['image']['name']);
        $uploadPath = './assets/images/category/' . $image;
        move_uploaded_file($_FILES['image']['tmp_name'], $uploadPath);

        $query = "UPDATE categories SET title = '$title', add_date = '$date', image = '$image' WHERE id = $id";
    } else {
        $query = "UPDATE categories SET title = '$title', add_date = '$date' WHERE id = $id";
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