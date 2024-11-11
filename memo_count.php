<?php
// memo_count.php
// This file retrieves the total number of memos from the database

// Database connection (use your own credentials)
$servername = "localhost";
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "login"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to count the total number of memos
$sql = "SELECT COUNT(*) AS total_memos FROM memos"; // Adjust table name if necessary
$result = $conn->query($sql);

// Fetch the result
if ($result->num_rows > 0) {
    // Output the number of memos
    $row = $result->fetch_assoc();
    echo $row['total_memos'];
} else {
    echo "0";
}

// Close the database connection
$conn->close();
?>
