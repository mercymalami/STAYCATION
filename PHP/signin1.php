<?php

 include('db_connect1.php');

if (isset($_POST['email']) and isset($_POST['password'])){

// Assigning POST values to variables.
$email = $_POST['email'];
$password = $_POST['password'];

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM signup WHERE email='$email' and Password='$password'";

$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){

//echo "Login Credentials verified";
header("Location: http://localhost/Staycation/index.php");

}else{
header("Location: http://localhost/Staycation/signin.php");
}
}
?>
