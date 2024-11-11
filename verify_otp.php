<?php
session_start();

// Check if OTP is set in session
if (!isset($_SESSION['otp'])) {
    echo "No OTP has been sent. Please try logging in again.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify OTP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f3f4f6;
        }

        .otp-container {
            text-align: center;
            padding: 30px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 90%;
        }

        h2 {
            font-size: 1.5em;
            color: #333;
        }

        .otp-input {
            width: 80%;
            padding: 10px;
            font-size: 1em;
            margin: 15px 0;
        }

        .btn-submit {
            padding: 10px 20px;
            font-size: 1em;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-submit:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="otp-container">
    <h2>Enter OTP</h2>
    <form action="verify_otp_action.php" method="POST">
        <input type="text" name="otp" class="otp-input" placeholder="Enter OTP" required>
        <button type="submit" class="btn-submit">Verify OTP</button>
    </form>
</div>

</body>
</html>
