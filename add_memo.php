<?php
// Include the database connection file
include('db_connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $date_in = $_POST['date_in'];
    $from_field = $_POST['from_field'];
    $document_type = $_POST['document_type'];
    $ref_no = $_POST['ref_no'];
    $udailifu_no = $_POST['udailifu_no'];
    $subject = $_POST['subject'];
    $sender_comment = $_POST['sender_comment'];
    $action_officer = $_POST['action_officer'];
    $date_out = $_POST['date_out'];
    $to_field = $_POST['to_field'];
    $receiver_comment = $_POST['receiver_comment'];

    // Insert into the database
    $sql = "INSERT INTO memos (date_in, from_field, document_type, ref_no, udailifu_no, subject, sender_comment, action_officer, date_out, to_field, receiver_comment)
            VALUES ('$date_in', '$from_field', '$document_type', '$ref_no', '$udailifu_no', '$subject', '$sender_comment', '$action_officer', '$date_out', '$to_field', '$receiver_comment')";

    if ($conn->query($sql) === TRUE) {
        echo "<p class='success'>New memo added successfully!</p>";
    } else {
        echo "<p class='error'>Error: " . $sql . "<br>" . $conn->error . "</p>";
    }
}

// Close the database connection
$conn->close();
?>
