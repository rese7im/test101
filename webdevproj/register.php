<?php
include 'config/dbcon.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    
  
    $sql = "INSERT INTO users (uname, email, pass) VALUES
     ('$uname', '$email', '$password')";
    if ($conn->query($sql) === TRUE) {
        echo "Registered Successfully";
    } else {
        echo "Error: " . $connection->error;
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        h1, form {
            text-align: center;
        }

        form {
            background-color: #f0f0f0;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label, input, select {
            display: block;
            margin: 10px 0;
        }

        button {
            margin: 10px 0;
            padding: 10px;
            width: 100%;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    
    <form action="register.php" method="POST">
    <h1>Registration</h1>
        <label for="uname">Username:</label>
        <input type="text" id="uname" name="uname" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="pass">Password:</label>
        <input type="password" id="pass" name="pass" required>

        <button type="submit" name="register">Register</button>

        <div class="text">
        <a href='index.php'><br>Login now</a>
      </div>
    </form>
</body>
</html>
