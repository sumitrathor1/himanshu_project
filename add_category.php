<?php
session_start();
include './assets/pages/_connection.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $category_title = $_POST['category_title'];
    $add_date = $_POST['add_date'];
    
    if (isset($_FILES['category_image']) && $_FILES['category_image']['error'] === 0) {
        $image = $_FILES['category_image'];
        $imageName = time() . '_' . basename($image['name']);
        $uploadPath = "./assets/images/category/" . $imageName;

        if (move_uploaded_file($image['tmp_name'], $uploadPath)) {
            $query = "INSERT INTO categories (image, title, add_date) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("sss", $imageName, $category_title, $add_date);

            if ($stmt->execute()) {
                echo "Category added successfully!";
            } else {
                echo "Failed to insert into DB.";
            }
        } else {
            echo "Image upload failed.";
        }
    } else {
        echo "Image file is required.";
    }
} else {
    echo "Invalid request.";
}
?>