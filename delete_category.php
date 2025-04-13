<?php
session_start();
include './assets/pages/_connection.php'; // Adjust path as needed

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id']) && isset($_SESSION['user_type']) && $_SESSION['user_type'] === 'admin') {
    $id = intval($_POST['id']);
    $query = "DELETE FROM categories WHERE id = $id";

    if (mysqli_query($conn, $query)) {
        echo "success";
    } else {
        echo "error";
    }
} else {
    echo "unauthorized";
}
?>