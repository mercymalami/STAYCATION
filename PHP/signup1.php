<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$email = $_POST['email'];
if (!empty($firstname) || !empty($lastname) || !empty($phone) ||!empty($password) || !empty($email)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "bnb";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT email From signup Where email = ? Limit 1";
     $INSERT = "INSERT Into signup (firstname, lastname, phone, password, email) values(?, ?, ?, ?, ?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sssss", $firstname, $lastname, $phone,$password, $email);
      $stmt->execute();
      header("Location: http://localhost/Staycation/signup.php");
     } else {
      header("Location: http://localhost/Staycation/signup.php");
     }
     $stmt->close();
     $conn->close();
    }
} else {
 header("Location: http://localhost/Staycation/signup.php");
 die();
}
?>
