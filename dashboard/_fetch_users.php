<?php
include "_connection.php";

$data = [];

$query = "SELECT user_id, name, email, phone, address, created_at FROM users WHERE user_type='user'";
$result = $conn->query($query);

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = [
            'user_id' => $row['user_id'],
            'name' => '<a target="_main" href="user/index.php?user_id=' . $row['user_id'] . '">' . htmlspecialchars($row['name']) . '</a>',
            'email' => $row['email'],
            'phone' => $row['phone'],
            'address' => $row['address'],
            'created_at' => $row['created_at'],
        ];
        
    }
}

header('Content-Type: application/json');
echo json_encode(['data' => $data]);

?>