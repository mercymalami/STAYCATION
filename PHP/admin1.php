<?php
 require('db_connect1.php');

if (isset($_POST['username']) and isset($_POST['password'])){

// Assigning POST values to variables.
$username = $_POST['username'];
$password = $_POST['password'];

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `userlogin` WHERE username='$username' and password='$password'";

$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){

//echo "Login Credentials verified";
header("Location: http://localhost/Staycation/admin/adminhome.php");
}else{
header("Location: http://localhost/Staycation/admin.php");
//echo "Invalid Login Credentials";
}

}
?>
