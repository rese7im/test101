<?php
// Include the database configuration file
include 'config/dbcon.php'; 

// Check if the "login" POST parameter is set
if (isset($_POST['login'])) {
    // Retrieve user input from the form
    $email = $_POST['email'];
    $password = $_POST['pass']; 
    
    // Construct a SQL query to select a user based on email and password
    $sql = "SELECT * FROM users WHERE email = '$email' AND pass = '$password'";
    
    // Execute the SQL query
    $select = mysqli_query($conn, $sql);

    // Check if the query execution was successful
    if ($select) {
        // Check if any rows were returned
        if (mysqli_num_rows($select) != 0) {
            // User found, fetch user data and store user ID in a session
            $user = mysqli_fetch_array($select);
            $_SESSION['user_id'] = $user['id'];
            
            // Redirect the user to the admin dashboard
            header("Location: admin/dashboard.php");
        } else {
            // Display a message for login failure
            echo "Failed to login";
        }
    } else {
        // Display a database query error message
        echo "Database query error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        /* Add your CSS styles here */
        .center-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* This centers the form vertically on the page */
        }

        .login-container {
            text-align: center;
        }

        form {
            background-color: #f0f0f0;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
<div class="center-container">
    <div class="login-container">
        
        <form action="index.php" method="POST">
        <h1>LOGIN</h1>
            <!-- Input field for email -->
            <input type="email" name="email" placeholder="Email" required autofocus>
            <br>
            <br>
            <!-- Input field for password -->
            <input type="password" name="pass" placeholder="Password" required>
            <br>
            <br>
            <!-- Submit button to trigger login -->
            <button type="submit" name="login">Login</button>
            <br>
            <br>
            <!-- Link to the registration page -->
            <a href='register.php' class="register-button">Register</a>
        </form>
    </div>
</div>
</body>
</html>