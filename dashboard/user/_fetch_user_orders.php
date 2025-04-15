<?php
include "../_connection.php";

// Prepare output structure
$data = [];

$user_id = isset($_GET['user_id']) ? (int)$_GET['user_id'] : 0;

$query = "SELECT o.id, u.name AS user_name, o.order_status, o.payment_method, o.total_amount, o.order_date
          FROM orders o
          JOIN users u ON o.user_id = u.user_id
          WHERE o.user_id = $user_id";

$result = $conn->query($query);

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = [
            'order_id' => $row['id'],
            'user_name' => $row['user_name'],
            'order_status' => '<select class="order-status" data-id="' . $row['id'] . '">
                <option value="Pending"' . ($row['order_status'] == 'Pending' ? ' selected' : '') . '>Pending</option>
                <option value="Shipping"' . ($row['order_status'] == 'Shipping' ? ' selected' : '') . '>Shipping</option>
                <option value="Completed"' . ($row['order_status'] == 'Completed' ? ' selected' : '') . '>Completed</option>
                <option value="Canceled"' . ($row['order_status'] == 'Canceled' ? ' selected' : '') . '>Canceled</option>
                <option value="Returned"' . ($row['order_status'] == 'Returned' ? ' selected' : '') . '>Returned</option>
            </select>',
            'payment_method' => $row['payment_method'],
            'total_amount' => $row['total_amount'],
            'order_date' => $row['order_date']
        ];
    }
}

header('Content-Type: application/json');
echo json_encode(['data' => $data]);
?>