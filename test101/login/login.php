<?php
session_start();

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if ($username === '111' && $password === '111') {
    $_SESSION['username'] = $username;
    echo "Connected successfully";
} else {
    echo "Try again, please";
}
?>
