<?php
include "_connection.php";

// SQL query to fetch order data
$sql = "SELECT o.id AS order_id, u.name AS user_name, o.order_status, o.payment_method, o.total_amount, o.order_date
        FROM orders o
        JOIN users u ON o.user_id = u.user_id
        ORDER BY o.order_date DESC";

$result = $conn->query($sql);

$data = [];

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

echo json_encode(["data" => $data]);
$conn->close();
?>