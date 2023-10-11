<?php
session_start();
include 'config/dbCon.php';

// Check if the user is already logged in
if (isset($_SESSION['test202'])) {
    header("Location: admin/dashboard.php");
}

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);
    $sql = "SELECT * FROM test202 WHERE email = '$email' AND password = '$password'";
    $select = mysqli_query($con, $sql);

    if (mysqli_num_rows($select) != 0) {
        $test202 = mysqli_fetch_array($select);
        $_SESSION['test202'] = $test202['id'];
        header("Location: admin/dashboard.php");
    } else {
        echo "Failed to login. Try again.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP BASICS</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <h1>LOGIN</h1>
    <form action="index.php" method="POST">
        <input type="email" name="email" required autofocus>
        <input type="password" name="password" required autofocus>
        <button type="submit" name="login">Login</button>
    </form>
</body>
</html>
