<?php
// You'd put this code at the top of any "protected" page you create

// Always start with this first
session_start();

if ( isset( $_SESSION['id'] ) ) {
    // Grab user data from the database using the user_id
    // Let them access the "logged in only" pages
} else {
    // Redirect them to the login page
    header("Location: http://localhost/Staycation/admin.php");
}
?>
