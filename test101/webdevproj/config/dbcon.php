<?php

session_start();
$host = "localhost";
$username = "root";
$password = "";
$db_name = "lim_db";

$conn = mysqli_connect($host, $username, $password, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>