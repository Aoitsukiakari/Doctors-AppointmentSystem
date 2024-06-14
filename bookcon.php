<?php
    session_start();
    include("connect.php");

    header('Content-Type: application/json');

    $response = ['success' => false, 'message' => ''];

    // Handle form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validate and sanitize inputs
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $doctor = mysqli_real_escape_string($conn, $_POST['doctor']);
        $date = mysqli_real_escape_string($conn, $_POST['date']);
        $time = mysqli_real_escape_string($conn, $_POST['time']);

        // Check if the provided username exists in the users table
        $check_user_query = "SELECT user_id FROM users WHERE username = '$name'";
        $check_user_result = $conn->query($check_user_query);

        if ($check_user_result->num_rows > 0) {
            // Username exists, fetch the user_id
            $user_row = $check_user_result->fetch_assoc();
            $user_id = $user_row['user_id'];

            // Insert appointment into the appointments table
            $insert_appointment_query = "INSERT INTO appointments (user_id, name, doctor, date, time) 
                                        VALUES ('$user_id', '$name', '$doctor', '$date', '$time')";

            if ($conn->query($insert_appointment_query) === TRUE) {
                $response['success'] = true;
            } else {
                $response['message'] = 'Error inserting appointment: ' . $conn->error;
            }
        } else {
            // Username does not exist
            $response['message'] = 'Invalid username. Please sign up first.';
        }
    } else {
        $response['message'] = 'Invalid request method.';
    }

    // Send JSON response
    echo json_encode($response);

    // Close database connection
    $conn->close();
?>
