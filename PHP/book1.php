<?php
$firstname = filter_input(INPUT_POST, 'firstname');
$lastname = filter_input(INPUT_POST, 'lastname');
$phone = filter_input(INPUT_POST, 'phone');
$email = filter_input(INPUT_POST, 'email');
$book = filter_input(INPUT_POST, 'book');
$starts = filter_input(INPUT_POST, 'starts');
$ends = filter_input(INPUT_POST, 'ends');
$cars = filter_input(INPUT_POST, 'cars');
if (!empty($firstname)){
if (!empty($lastname)){
if (!empty($phone)){
if (!empty($email)){
if (!empty($book)){
if (!empty($starts)){
if (!empty($ends)){
if (!empty($cars)){
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
$sql = "INSERT INTO book (firstname, lastname, phone, email, book, starts, ends, cars)
values ('$firstname','$lastname','$phone','$email','$book','$starts','$ends','$cars')";
if ($conn->query($sql)){
echo "<script type='text/javascript'>alert('booking has been done successfully')</script>";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "firstname should not be empty";
die();
}
}
else{
echo "lastname should not be empty";
die();
}
}
else{
echo "phone should not be empty";
die();
}
}
else{
echo "email should not be empty";
die();
}
}
else{
echo "starts should not be empty";
die();
}
}
else{
echo "ends should not be empty";
die();
}
}
}
?>
