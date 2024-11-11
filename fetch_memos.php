<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM memos ORDER BY id DESC LIMIT 10";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>
            <tr>
                <th>Serial No</th>
                <th>Date In</th>
                <th>From</th>
                <th>Document Type</th>
                <th>Ref No</th>
                <th>UADLIFU No</th>
                <th>Subject</th>
                <th>Sender Comment</th>
                <th>Action Officer</th>
                <th>Date Out</th>
                <th>To</th>
                <th>Receiver Comment</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['serial_no']}</td>
                <td>{$row['date_in']}</td>
                <td>{$row['from_field']}</td>
                <td>{$row['document_type']}</td>
                <td>{$row['ref_no']}</td>
                <td>{$row['uadlifu_no']}</td>
                <td>{$row['subject']}</td>
                <td>{$row['sender_comment']}</td>
                <td>{$row['action_officer']}</td>
                <td>{$row['date_out']}</td>
                <td>{$row['to_field']}</td>
                <td>{$row['receiver_comment']}</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No memos found.";
}

$conn->close();
?>
