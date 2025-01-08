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
        /* General Styling */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .otp-container {
            text-align: center;
            background-color: #ffffff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 420px;
        }

        h2 {
            font-size: 1.8em;
            color: #333;
            margin-bottom: 20px;
        }

        .otp-input {
            width: 100%;
            padding: 12px 20px;
            font-size: 1.1em;
            border: 1px solid #ddd;
            border-radius: 8px;
            margin-bottom: 20px;
            outline: none;
            transition: border 0.3s ease;
        }

        .otp-input:focus {
            border-color: #4CAF50;
        }

        .btn-submit {
            padding: 12px 20px;
            font-size: 1.2em;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        .btn-submit:hover {
            background-color: #45a049;
        }

        .btn-submit:active {
            background-color: #388e3c;
        }

        .otp-description {
            font-size: 1em;
            color: #666;
            margin-bottom: 20px;
        }

        .otp-description span {
            font-weight: bold;
            color: #4CAF50;
        }
    </style>
</head>
<body>

<div class="otp-container">
    <h2>Enter OTP to Verify</h2>
    <p class="otp-description">Please enter the One-Time Password (OTP) sent to your registered number. If you haven't received it, check your inbox or try again later.</p>
    <form action="verify_otp_action.php" method="POST">
        <input type="text" name="otp" class="otp-input" placeholder="Enter OTP" required>
        <button type="submit" class="btn-submit">Verify OTP</button>
    </form>
</div>

</body>
</html>
