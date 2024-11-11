<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Database connection
$servername = "localhost";
$username = "root"; // replace with your username
$password = ""; // replace with your password
$dbname = "login"; // replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if serial number is provided in the GET request
if (isset($_GET['serial_no'])) { 
    $serial_no = $_GET['serial_no'];

    // Query to search the memo by serial number (Limit to 1 result)
    $sql = "SELECT * FROM memos WHERE serial_no = ? LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $serial_no); // Bind as string for proper comparison
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Fetch the single result
        $row = $result->fetch_assoc();

        // Prepare the memo content
        $memoContent = "<table class='table'>";
        $memoContent .= "<thead><tr><th>Serial No</th><th>Date In</th><th>From</th><th>Document Type</th><th>Subject</th><th>Action Officer</th></tr></thead>";
        $memoContent .= "<tbody>";
        $memoContent .= "<tr>";
        $memoContent .= "<td>" . $row['serial_no'] . "</td>";
        $memoContent .= "<td>" . $row['date_in'] . "</td>";
        $memoContent .= "<td>" . (isset($row['from_field']) ? $row['from_field'] : 'N/A') . "</td>";
        $memoContent .= "<td>" . $row['document_type'] . "</td>";
        $memoContent .= "<td>" . $row['subject'] . "</td>";
        $memoContent .= "<td>" . $row['action_officer'] . "</td>";
        $memoContent .= "</tr>";
        $memoContent .= "</tbody>";
        $memoContent .= "</table>";

        // Return the content to be displayed
        echo $memoContent;
    } else {
        echo "<p>No memo found with the given serial number.</p>";
    }

    $stmt->close();
}

$conn->close();
?>
