<?php
include "../_connection.php";

$user_id = isset($_GET['user_id']) ? (int)$_GET['user_id'] : 0;

$order_counts = [
    'pending' => 0,
    'shipping' => 0,
    'completed' => 0,
    'canceled' => 0,
    'returned' => 0
];

$sql = "SELECT order_status, COUNT(*) as count 
        FROM orders 
        WHERE user_id = $user_id 
        GROUP BY order_status";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $status = strtolower($row['order_status']);
        if (array_key_exists($status, $order_counts)) {
            $order_counts[$status] = (int)$row['count'];
        }
    }
}

header('Content-Type: application/json');
echo json_encode($order_counts);