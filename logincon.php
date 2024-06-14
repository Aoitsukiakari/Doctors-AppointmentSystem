<?php
session_start();
header('Content-Type: application/json');

// Include the database connection file
include("connect.php");

// Ensure POST request
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve and sanitize input
    $username = $conn->real_escape_string(trim($_POST['username']));
    $password = trim($_POST['password']); // No need to sanitize the password

    // Prepare and execute query
    $query = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['username'] = $user['username'];
            echo json_encode(['success' => true, 'redirect' => 'index.php']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Invalid username or password']);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Invalid username or password']);
    }

    // Clean up
    $stmt->close();
    $conn->close();
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
}
?>
