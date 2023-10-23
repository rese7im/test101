<?php
include '../config/dbCon.php';

// Check if the user is not authenticated (not logged in)
if (!isset($_SESSION['user_id'])) {
    // Redirect to the login page
    header("Location: ../index.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    // Update the user data in the database
    $sql = "UPDATE users SET uname = '$username', pass = '$password', email = '$email' WHERE id = $id";
    if (mysqli_query($conn, $sql)) {
        // Data updated successfully, redirect back to the dashboard
        header("Location: dashboard.php");
    } else {
        // Error occurred during the update
        echo "Error: " . $conn->error;
    }
} else {
    // Redirect to the dashboard if the request method is not POST
    header("Location: dashboard.php");
}
?>
