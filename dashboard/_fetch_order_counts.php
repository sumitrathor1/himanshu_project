<?php
include "_connection.php";

// SQL queries to count orders based on status
$query = "SELECT order_status, COUNT(*) as count FROM orders GROUP BY order_status";
$result = $conn->query($query);

// Prepare an associative array to hold counts for each status
$order_counts = [
    'pending' => 0,
    'shipping' => 0,
    'completed' => 0,
    'canceled' => 0,
    'returned' => 0
];

// Process the result and store the counts
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $status = $row['order_status'];
        $count = $row['count'];
        
        if (isset($order_counts[strtolower($status)])) {
            $order_counts[strtolower($status)] = $count;
        }
    }
}

// Return the counts as a JSON response
echo json_encode($order_counts);

// Close the connection
$conn->close();
?>