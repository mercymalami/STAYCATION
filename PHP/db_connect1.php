<?php
$host = "localhost";
$user = "root";
$pass ="";
$db = "bnb";
$connection = mysqli_connect($host, $user, $pass, $db);
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
else
{
    echo "Connection Successful,";
}
$select_db = mysqli_select_db($connection, "bnb");
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}
else
{
    echo " Selection Successful";
}
?>