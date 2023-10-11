<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="assign.css">
    <style>
        /* CSS code to set the background color */
        body {
            background-color: skyblue; /* Replace with the color of your choice */
        }

        /* Center the image */
        .button-container {
            text-align: center;
        }

        /* Style the button and add hover effect */
        .button-container h1 {
            margin: 0;
        }

        .button-image {
            display: inline-block;
            vertical-align: middle;
        }

        button[type="submit"] {
            background-color: #008CBA;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #005F7F;
        }
    </style>
</head>
<body>
<div class="form-container">
    <div class="button-container">
        <img src="idkhim.jpg" alt="Image" class="button-image">
        <h1>LOGIN</h1>
    </div>

    <form action="login.php" method="POST">
        <div>
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username" required>
        </div>
        <br>
        <div>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" required>
        </div>
        <br>
        <div>
            <button type="submit">Login</button>
        </div>
    </form>
</div>
</body>
</html>
