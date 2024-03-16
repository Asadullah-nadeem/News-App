<?php
include('config.php');

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $userId = $_GET['id'];

    // Perform the delete operation
    $deleteQuery = mysqli_query($con, "DELETE FROM users WHERE id = $userId");

    if ($deleteQuery) {
        // Redirect back to the page showing the users
        header('Location: login_mobile.php');
    } else {
        // Display an error message or handle the error as per your requirement
        echo "Error: Unable to delete user.";
    }
}
?>
