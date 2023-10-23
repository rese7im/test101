<?php
include '../config/dbCon.php';

// Check if the user is not authenticated (not logged in)
if (!isset($_SESSION['user_id'])) {
    // Redirect to the login page
    header("Location: ../index.php");
    exit;
}

// Check if the "id" parameter is set in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Use prepared statement to prevent SQL injection
    $stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        // Record deleted successfully, redirect back to the dashboard
        header("Location: dashboard.php");
    } else {
        // Error occurred during deletion
        echo "Error: " . $conn->error;
    }
    $stmt->close();
} else {
    // Redirect to the dashboard if the "id" parameter is not set
    header("Location: dashboard.php");
}
?>
