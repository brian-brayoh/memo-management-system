<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            flex-direction: column;
        }

        /* Static Header Styling */
        .header {
            background-color: #003366; /* ODPP Blue */
            color: white;
            text-align: center;
            padding: 20px 0;
            font-size: 24px;
            font-weight: bold;
            width: 100%;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
        }

        /* Sign Up Form Styles */
        .signup-form {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            margin-top: 80px; /* Adjusted for header */
        }

        .signup-form h2 {
            text-align: center;
            color: #003366; /* ODPP Blue */
        }

        label {
            display: block;
            margin: 10px 0 5px;
            font-size: 14px;
            color: #333;
        }

        input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #003366; /* ODPP Blue */
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
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

        /* Footer Styles */
        footer {
            background-color: #003366; /* ODPP Blue */
            color: white;
            text-align: center;
            padding: 15px;
            width: 100%;
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
    <script>
        // Redirect to home page if the page is reloaded
        if (performance.navigation.type === performance.navigation.TYPE_RELOAD) {
            window.location.href = 'index.html'; // Replace 'index.html' with your home page URL
        }
    </script>
</head>
<body>
    <!-- Static Header -->
    <div class="header">
        ODPP Portal - Sign Up
    </div>

    <!-- Sign Up Form -->
    <div class="signup-form">
        <h2>Sign Up</h2>
        <form action="signup_action.php" method="POST">
            <label for="email">Email:</label>
            <input type="email" name="email" required>
            <label for="password">Password:</label>
            <input type="password" name="password" required>
            <button type="submit">Sign Up</button>
        </form>
        <div class="form-footer">
            <p>Already have an account? <a href="login.php">login</a></p>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 ODPP. All rights reserved.</p>
        <p><a href="privacy-policy.html">Privacy Policy</a> | <a href="terms-of-service.html">Terms of Service</a></p>
    </footer>
</body>
</html>
