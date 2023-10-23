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

    // Fetch the user data from the database
    $sql = "SELECT * FROM users WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    // Display the user data in an edit form
    // You can create an HTML form here to allow users to edit the data
    // Populate the form fields with the user's current data

    // Example form:
    echo "<form action='update_user.php' method='POST'>";
    echo "Username: <input type='text' name='username' value='" . $row['uname'] . "'><br>";
    echo "Password: <input type='password' name='password' value='" . $row['pass'] . "'><br>";
    echo "Email: <input type='text' name='email' value='" . $row['email'] . "'><br>";
    echo "<input type='hidden' name='id' value='" . $row['id'] . "'>";
    echo "<input type='submit' value='Update'>";
    echo "</form>";

} else {
    // Redirect to the dashboard if the "id" parameter is not set
    header("Location: dashboard.php");
}
?>
<style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        
        form {
            background-color: #f0f0f0;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
</style>