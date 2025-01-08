<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
            flex-direction: column;
        }

        /* Header with small home button */
        .header {
            width: 100%;
            background-color: #003366; /* ODPP Blue */
            color: white;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            padding: 10px 20px;
            font-size: 18px;
            font-weight: bold;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
        }

        .header .home-button {
            background-color: transparent;
            color: #ffcc00; /* Yellow */
            border: none;
            font-size: 24px;
            cursor: pointer;
            padding: 10px;
            transition: all 0.3s ease-in-out;
        }

        .header .home-button:hover {
            color: #e6a300; /* Darker yellow */
            transform: scale(1.1); /* Slightly enlarge the icon */
        }

        .header .home-button:active {
            color: #cc8e00; /* Even darker yellow */
            transform: scale(1); /* Return to normal size when clicked */
        }

        /* Marquee Styling */
        .marquee {
            width: 100%;
            background-color: #003366; /* ODPP Blue */
            color: white;
            padding: 10px 0;
            font-size: 18px;
            text-align: center;
            font-weight: bold;
            position: fixed;
            top: 40px; /* Adjusted for header */
            left: 0;
            z-index: 999;
            overflow: hidden;
        }

        .marquee marquee {
            font-size: 20px;
        }

        /* Container for Image and Form */
        .container {
            display: flex;
            width: 100%;
            height: 100vh;
            margin-top: 80px; /* Adjusted for header and marquee */
        }

        /* Image Section */
        .image-section {
    flex: 1;
    background-image: url('odpp.jpeg');
    background-size: contain;
    background-position: center;
    background-repeat: no-repeat;
    height: calc(100vh - 160px); /* Adjusts height to fit without touching footer */
    margin-bottom: 20px; /* Adds extra space between image and footer */
    border-radius: 8px;
    box-shadow: inset 0 0 15px rgba(0, 0, 0, 0.3);
}


        /* Login Form Section */
        .login-section {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .login-form {
            width: 100%;
            max-width: 400px;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
        }

        .login-form h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin: 10px 0 5px;
            font-size: 14px;
            color: #333;
        }

        input[type="email"], input[type="password"] {
            width: 100%;
            padding: 12px;
            margin: 8px 0 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #003366; /* ODPP Blue */
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 14px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .error {
            color: red;
            font-size: 14px;
            text-align: center;
        }

        .form-footer {
            text-align: center;
            margin-top: 10px;
        }

        .form-footer a {
            text-decoration: none;
            color: #003366; /* ODPP Blue */
        }

        .form-footer a:hover {
            text-decoration: underline;
        }

        /* Footer Styles */
        footer {
            background-color: #003366; /* ODPP Blue */
            color: white;
            text-align: center;
            padding: 15px;
            width: 100%;
            position: fixed;
            bottom: 0;
        }

        footer p {
            margin: 0;
            font-size: 0.9em;
        }

        footer a {
            color: #ffcc00; /* Complementary yellow */
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <!-- Header with Home Button -->
    <div class="header">
        <button class="home-button" onclick="window.location.href='index.html';">
            <i class="fas fa-home"></i> <!-- Font Awesome home icon -->
        </button>
    </div>

    <!-- Marquee Header -->
    <div class="marquee">
        <marquee>Welcome to the ODPP Portal - Secure Access for Authorized Users</marquee>
    </div>

    <!-- Image and Login Form -->
    <div class="container">
        <!-- Image Section -->
        <div class="image-section"></div>

        <!-- Login Form Section -->
        <div class="login-section">
            <div class="login-form">
                <h2>Login</h2>
                <form action="login_action.php" method="POST">
                    <label for="email">Email:</label>
                    <input type="email" name="email" required>
                    <label for="password">Password:</label>
                    <input type="password" name="password" required>
                    <button type="submit">Login</button>
                </form>
                <div class="form-footer">
                    <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 ODPP. All rights reserved.</p>
        <p><a href="privacy-policy.html">Privacy Policy</a> | <a href="terms-of-service.html">Terms of Service</a></p>
    </footer>
</body>
</html>
