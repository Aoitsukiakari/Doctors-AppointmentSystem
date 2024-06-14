<?php
// admin_functions.php
include 'connect.php';



// Fetch all records from a given table
function fetchAllRecords($table) {
    global $conn;
    $query = "SELECT * FROM $table";
    $result = $conn->query($query);
    return $result;
}

// Display records in a table format
function displayTable($result, $columns) {
    echo '<table class="table table-striped table-hover">';

    echo "<tr>";
    foreach ($columns as $column) {
        echo "<th>$column</th>";
    }
    echo "<th>Actions</th>"; // For CRUD operations
    echo "</tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        foreach ($columns as $column) {
            echo "<td>" . $row[$column] . "</td>";
        }
        echo "<td>
                
                <button class='button delete-button' onclick='deleteRecord(" . $row[$columns[0]] . ")'>Delete</button>
              </td>";
        echo "</tr>";
    }
    echo "</table>";
}


// Edit appointment
function editAppointment($appointment_id) {
    // Fetch appointment details from the database based on $appointment_id
    // Implement code to display a form pre-filled with appointment details for editing
}

// Delete appointment
function deleteAppointment($appointment_id) {
    global $conn;
    $query = "DELETE FROM appointments WHERE appointment_id = $appointment_id";
    if ($conn->query($query) === TRUE) {
        echo "Appointment deleted successfully";
    } else {
        echo "Error deleting appointment: " . $conn->error;
    }
}

function deleteDoctor($doctor_id) {
    global $conn;
    $query = "DELETE FROM doctors WHERE doctor_id = $doctor_id";
    if ($conn->query($query) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting appointment: " . $conn->error;
    }
}

function deleteUser($user_id) {
    global $conn;
    $query = "DELETE FROM users WHERE user_id = $user_id";
    if ($conn->query($query) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting appointment: " . $conn->error;
    }
}


// Add more functions for CRUD as needed (create, update, delete)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css\adminfunction.css">


</head>
<body>
    
</body>
</html>