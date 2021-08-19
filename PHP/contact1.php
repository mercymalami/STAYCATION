<?php
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$phone = filter_input(INPUT_POST, 'phone');
$comment = filter_input(INPUT_POST, 'comment');
if (!empty($name)){
if (!empty($email)){
if (!empty($phone)){
if (!empty($comment)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "bnb";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);


if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO contact (name, email, phone, comment)
values ('$name','$email','$phone','$comment')";
if ($conn->query($sql)){
header("Location: http://localhost/Staycation/contact.php");
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
header("Location: http://localhost/Staycation/contact.php");
die();
}
}
else{
header("Location: http://localhost/Staycation/contact.php");
die();
}
}
else{
header("Location: http://localhost/Staycation/contact.php");
die();
}
}
else{
header("Location: http://localhost/Staycation/contact.php");
die();
}
?>
