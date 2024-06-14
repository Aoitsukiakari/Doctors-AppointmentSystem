<?php
// add_doctor.php
session_start();
include("connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $doctor_id = $_POST['doctor_id'];
    $username = $_POST['username'];
    $specialization = $_POST['specialization'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password for security


    // Insert data into the database
    $sql = "INSERT INTO doctors (doctor_id, username, specialization, password) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $doctor_id, $username, $specialization, $password);

    if ($stmt->execute()) {
        echo "Doctor added successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
