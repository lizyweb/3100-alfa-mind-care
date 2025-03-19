<?php
// Your database connection details
$servername = "Localhost";
$username = "u276255518_alp";
$password = "Alpha@2024";
$dbname = "u276255518_alp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve all records from the patient_records table
$sql = "SELECT * FROM patient_records";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Define CSV header
    $csvFileName = 'patient_records.csv';
    $csvHeader = array("Record ID", "Patient ID", "Date", "Name", "Age", "Gender", "Phone", "Address", "Treatment", "Medication", "Next Appointment");

    // Initialize file handle and write CSV headers
    $file = fopen($csvFileName, 'w');
    fputcsv($file, $csvHeader);

    // Write data rows to the CSV file
    while ($row = $result->fetch_assoc()) {
        fputcsv($file, $row);
    }

    // Close the file handle
    fclose($file);

    // Prompt download for the generated CSV file
    header('Content-Type: application/csv');
    header('Content-Disposition: attachment; filename=' . $csvFileName);
    readfile($csvFileName);
} else {
    echo "No records found.";
}

// Close the connection
$conn->close();
?>