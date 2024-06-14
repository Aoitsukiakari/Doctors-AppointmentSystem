<?php
// main_content.php
include 'adminfunction.php';

if (isset($_GET['section'])) {
    $section = $_GET['section'];
    if ($section == 'appointments') {
        $result = fetchAllRecords('appointments');
        $columns = ['appointment_id', 'user_id', 'name', 'doctor', 'date', 'time'];
        displayTable($result, $columns);
    } elseif ($section == 'doctors') {
        $result = fetchAllRecords('doctors');
        $columns = ['doctor_id', 'username', 'specialization'];
        displayTable($result, $columns);
    } elseif ($section == 'users') {
        $result = fetchAllRecords('users');
        $columns = ['user_id', 'username', 'email', 'contact_number'];
        displayTable($result, $columns);
    }
}

// main_content.php
if (isset($_GET['section']) && $_GET['section'] === 'doctors') {
    echo '
    <h2>Manage Doctors</h2>
    <button id="add-doctor-btn">Add Doctor</button>
    <div id="add-doctor-modal" class="modal">
        <div class="modal-content">
            <span class="close" id="close-modal">&times;</span>
            <h2>Add New Doctor</h2>
            <form id="doctor-form">
                <label for="doctor_id">Doctor ID:</label>
                <input type="text" id="doctor_id" name="doctor_id" required><br>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required><br>
                <label for="specialization">Specialization:</label>
                <input type="text" id="specialization" name="specialization" required><br>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required><br>
                <button type="submit">Save</button>
            </form>
        </div>
    </div>
    <div id="doctor-list">
        <!-- Here you can list existing doctors -->
    </div>
    ';
}


?>