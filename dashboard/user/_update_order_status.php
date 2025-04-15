<?php
include "../_connection.php";

if (isset($_POST['order_id']) && isset($_POST['order_status'])) {
    $order_id = intval($_POST['order_id']);
    $order_status = $conn->real_escape_string($_POST['order_status']);

    $query = "UPDATE orders SET order_status = '$order_status' WHERE id = $order_id";
    if ($conn->query($query)) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'error' => $conn->error]);
    }
} else {
    echo json_encode(['success' => false, 'error' => 'Missing parameters']);
}
?>