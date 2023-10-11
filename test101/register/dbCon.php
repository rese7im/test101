<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lim";

// Check if the username starts with "BSIT"
$desiredPrefix = "BSIT";
$usernameInput = $_POST['username'];

if (strpos($usernameInput, $desiredPrefix) !== 0) {
    echo "Connection not established.";
    exit(); // Exit the script
}

$con = mysqli_connect($servername, $username, $password, $dbname);
if (!$con) {
    echo "Connection failed: " . mysqli_connect_error();
} else {
    echo "Connected successfully<br>";
}

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$pass = $_POST['pass'];
$email = $_POST['email'];

$query = "INSERT INTO lim (fname, lname, pass, email, username) VALUES ('$fname', '$lname', '$pass', '$email', '$usernameInput')";

if (mysqli_query($con, $query)) {
    echo "Registered successfully";
} else {
    echo "Error: " . mysqli_error($con);
}

mysqli_close($con);
?>

