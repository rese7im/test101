<?php
// Include the database configuration file
include '../config/dbCon.php';

// Check if the user is not authenticated (not logged in)
if (!isset($_SESSION['user_id'])) {
    // Redirect to the login page
    header("Location: ../index.php");
}

// Check if there's a "log" parameter in the URL
if (isset($_GET['log'])) {
    if ($_GET['log'] == 'true') {
        // Destroy the user session (log out)
        session_destroy();
        // Redirect to the login page
        header("Location: ../index.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <h1>Dashboard</h1>
        <a href="dashboard.php?log=true">Logout</a>

        <table class="table mt-3">
           <!-- Add a new column for the delete button -->
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                    <th scope="col">Email</th>
                    <th scope="col">Actions</th> <!-- Add this column for the delete button -->
                </tr>
            </thead>


            <tbody>
                <?php
                // Select all user records from the database
                $sql = "SELECT * FROM users";
                $select = mysqli_query($conn, $sql);

                if (mysqli_num_rows($select) != 0) {
                    // Loop through each user record and display it in the table
                    while ($row = mysqli_fetch_array($select)) {
                ?>

                <tr>
                    <th scope="row">
                        <?php echo $row['id']; ?>
                    </th>
                    <td>
                        <?php echo $row['uname']; ?>
                    </td>
                    <td>
                        <?php echo $row['pass']; ?>
                    </td>
                    <th scope="row">
                        <?php echo $row['email']; ?>
                    </th>
                    <td>
                    <a class='btn btn-primary' href="edit_user.php?id=<?php echo $row['id']; ?>">Edit</a>
                    <a class='btn btn-danger' href="delete_user.php?id=<?php echo $row['id']; ?>">Delete</a> <!-- Add this delete link -->
                    </td>
                </tr>


                <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>