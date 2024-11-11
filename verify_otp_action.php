<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $enteredOtp = $_POST['otp'];

    if (isset($_SESSION['otp']) && $enteredOtp == $_SESSION['otp']) {
        // OTP is correct, allow access to dashboard
        $_SESSION['logged_in'] = true; // Set logged-in session
        unset($_SESSION['otp']); // Clear the OTP session variable after successful login
        header("Location: dashboard.php"); // Redirect to dashboard
        exit;
    } else {
        echo "<script>alert('Invalid OTP. Please try again.'); window.location.href='verify_otp.php';</script>";
    }
}
?>
