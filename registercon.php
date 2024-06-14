<?php
session_start();
include("connect.php");

// Retrieve and sanitize form inputs
$username = htmlspecialchars($_POST['username']);
$email = htmlspecialchars($_POST['email']);
$contact_no = htmlspecialchars($_POST['contact_no']);
$password = htmlspecialchars($_POST['password']);
$confirm_password = htmlspecialchars($_POST['confirm_password']);

// Check if password and confirm password match
if ($password !== $confirm_password) {
    
    // Redirect with password mismatch parameter
    header("Location: register.php?status=error&message=password_mismatch");
    exit();
}

// Hash the password for security
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Prepare and bind SQL statement
$stmt = $conn->prepare("INSERT INTO users (username, email, contact_number, password) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $username, $email, $contact_no, $hashed_password);

// Execute the statement
if ($stmt->execute()) {
    // Redirect with success parameter
    header("Location: register.php?status=success");
    exit();
} else {
    echo "Error: " . $stmt->error;
}

// Close the connection
$stmt->close();
$conn->close();
?>
