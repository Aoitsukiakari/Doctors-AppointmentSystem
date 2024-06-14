<?php
// Include the file to establish a database connection
include 'connect.php';

// Set the Content-Type header to JSON
header('Content-Type: application/json');

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the JSON data from the request body and decode it
    $data = json_decode(file_get_contents('php://input'), true);

    // Initialize an array to hold messages
    $response = [];

    // Check if the 'id' field is provided in the JSON data
    if (isset($data['id']) && is_numeric($data['id'])) {
        $id = intval($data['id']);

        // Begin a transaction
        $conn->begin_transaction();

        // Delete record from the 'doctors' table
        $queryDoctors = "DELETE FROM doctors WHERE doctor_id = ?";
        $stmtDoctors = $conn->prepare($queryDoctors);
        $stmtDoctors->bind_param("i", $id);
        
        // Execute the statement and check for success
        if ($stmtDoctors->execute()) {
            $response['doctors'] = "Record deleted successfully from doctors table";
        } else {
            $response['doctors'] = "Error deleting record from doctors table: " . $stmtDoctors->error;
        }
        
        // Close the statement
        $stmtDoctors->close();

        // Delete record from the 'appointments' table
        $queryAppointments = "DELETE FROM appointments WHERE appointment_id = ?";
        $stmtAppointments = $conn->prepare($queryAppointments);
        $stmtAppointments->bind_param("i", $id);
        
        // Execute the statement and check for success
        if ($stmtAppointments->execute()) {
            $response['appointments'] = "Record deleted successfully from appointments table";
        } else {
            $response['appointments'] = "Error deleting record from appointments table: " . $stmtAppointments->error;
        }
        
        // Close the statement
        $stmtAppointments->close();

        // Delete record from the 'users' table
        $queryUser = "DELETE FROM users WHERE user_id = ?";
        $stmtUser = $conn->prepare($queryUser);
        $stmtUser->bind_param("i", $id);
        
        // Execute the statement and check for success
        if ($stmtUser->execute()) {
            $response['users'] = "Record deleted successfully from users table";
        } else {
            $response['users'] = "Error deleting record from users table: " . $stmtUser->error;
        }
        
        // Close the statement
        $stmtUser->close();

        // Check if there were any errors and commit or rollback the transaction
        if (isset($response['doctors']) && isset($response['appointments']) && isset($response['users']) && 
            strpos($response['doctors'], 'Error') === false &&
            strpos($response['appointments'], 'Error') === false &&
            strpos($response['users'], 'Error') === false) {
            // All deletions succeeded
            $conn->commit();
        } else {
            // There was an error, rollback the transaction
            $conn->rollback();
        }

    } else {
        // 'id' field not provided or not valid in the JSON data
        $response['error'] = "No valid ID provided.";
    }

    // Send the response
    echo json_encode($response);

} else {
    // Request method is not POST
    http_response_code(405); // Method Not Allowed
    echo json_encode(["error" => "Invalid request method."]);
}

// Close the database connection
$conn->close();
?>
