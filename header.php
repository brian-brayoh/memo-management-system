<?php
// Start session if not already started
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ODPP Portal</title>
    <style>
        /* Styles for the header */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: #003366; /* ODPP-themed color */
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            border-radius: 0 0 8px 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            z-index: 1000; /* Makes sure header stays on top */
        }

        .logo-container {
            display: flex;
            align-items: center;
        }

        .logo {
            width: 50px; /* Adjust the logo size */
            height: auto;
            margin-right: 15px;
        }

        .title-container h1 {
            font-size: 1.8em;
            margin: 0;
        }

        .title-container p {
            font-size: 1em;
            margin: 5px 0 0;
        }

        nav {
            display: flex;
        }

        nav ul {
            display: flex;
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            margin: 0 10px;
        }

        nav ul li a {
            text-decoration: none;
            color: white;
            font-size: 1em;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        nav ul li a:hover {
            color: #ffcc00; /* Highlight on hover */
        }

        /* Mobile responsive styling */
        @media (max-width: 600px) {
            header {
                flex-direction: column;
                align-items: flex-start;
            }

            nav ul {
                flex-direction: column;
                margin-top: 10px;
            }

            nav ul li {
                margin: 5px 0;
            }
        }

        /* Adjust content below header */
        body {
            padding-top: 80px; /* Ensures content doesn't hide behind the fixed header */
        }
    </style>
    <script>
        // JavaScript for Dynamic Interactions
        document.addEventListener("DOMContentLoaded", () => {
            // Add an active class to the navigation link that corresponds to the current page
            const currentLocation = window.location.href;
            const navLinks = document.querySelectorAll("nav ul li a");

            navLinks.forEach(link => {
                if (link.href === currentLocation) {
                    link.classList.add("active");
                }
            });
        });
    </script>
</head>
<body>

<header>
    <div class="logo-container">
        <img src="odpp_logo.png" alt="ODPP Logo" class="logo">
    </div>
    <div class="title-container">
        <h1>ODPP Portal</h1>
        <p>Secure Access for Authorized Users</p>
    </div>
    <nav>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="login.html">Login</a></li>
            <li><a href="signup.html">Signup</a></li>
            <li><a href="otp.html">Verify OTP</a></li>
        </ul>
    </nav>
</header>

</body>
</html>
