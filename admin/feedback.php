<?php

$host = "localhost";
$user = "root";
$password ="";
$database = "bnb";

$id = "";
$name = "";
$email = "";
$phone = "";
$comment = "";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// connect to mysql database
try{
    $connect = mysqli_connect($host, $user, $password, $database);
} catch (mysqli_sql_exception $ex) {
    echo 'Error';
}

// get values from the form
function getPosts()
{
    $posts = array();
    $posts[0] = $_POST['id'];
    $posts[1] = $_POST['name'];
    $posts[2] = $_POST['email'];
    $posts[3] = $_POST['phone'];
    $posts[4] = $_POST['comment'];
    return $posts;
}

// Search

if(isset($_POST['search']))
{
    $data = getPosts();

    $search_Query = "SELECT * FROM contact WHERE id = '$data[0]'";

    $search_Result = mysqli_query($connect, $search_Query);

    if($search_Result)
    {
        if(mysqli_num_rows($search_Result))
        {
            while($row = mysqli_fetch_array($search_Result))
            {
                $id = $row['id'];
                $name = $row['name'];
                $email = $row['email'];
                $phone = $row['phone'];
                $comment = $row['comment'];
            }
        }else{
            echo 'No Data For This Id';
        }
    }else{
        echo 'Result Error';
    }
}


// Insert
if(isset($_POST['insert']))
{
    $data = getPosts();
    $insert_Query = "INSERT INTO contact (`name`, `email`, `phone`, `comment` ) VALUES ('$data[1]','$data[2]','$data[3]','$data[4]')";
    try{
        $insert_Result = mysqli_query($connect, $insert_Query);

        if($insert_Result)
        {
            if(mysqli_affected_rows($connect) > 0)
            {
                echo 'Data Inserted';
            }else{
                echo 'Data Not Inserted';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Insert '.$ex->getMessage();
    }
}

// Delete
if(isset($_POST['delete']))
{
    $data = getPosts();
    $delete_Query = "DELETE FROM contact WHERE `id` = '$data[0]'";
    try{
        $delete_Result = mysqli_query($connect, $delete_Query);

        if($delete_Result)
        {
            if(mysqli_affected_rows($connect) > 0)
            {
                echo 'Data Deleted';
            }else{
                echo 'Data Not Deleted';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Delete '.$ex->getMessage();
    }
}

// Edit
if(isset($_POST['update']))
{
    $data = getPosts();
    $update_Query = "UPDATE contact SET `name`='$data[1]',`email`='$data[2]',`phone`='$data[3]',`comment`='$data[4]' WHERE `id` = '$data[0]'";
    try{
        $update_Result = mysqli_query($connect, $update_Query);

        if($update_Result)
        {
            if(mysqli_affected_rows($connect) > 0)
            {
                echo 'Data Updated';
            }else{
                echo 'Data Not Updated';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Update '.$ex->getMessage();
    }
}



?>


<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
html {
  font-family: 'quicksand', sans-serif;
}
table, th, td {
  border: 3px solid black;
  box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.5), 2px 2px 2px 2px rgba(0, 0, 0, 0.5);
}
table {
width: 100%;
color: black;
font-family: monospace;
font-size: 20px;
text-align: left;
}
th {
background-color: black;
color: white;
text-align: left;
}
tr:hover {
  background-color: grey;
}
</style>
</head>
<body>

  <h1 style="text-align:center; font-weight:bolder; background-color:#4d0000; height:100px;
  padding-top: 50px; color:black"> FEEDBACK DATABASE DATA</h1>

     <h2 style="text-align:center;text-decoration:underline">CONTACT (INSERT,UPDATE,DELETE,SEARCH FORM)</h2>
      <form action="feedback.php" method="post">
          <input type="number" name="id" placeholder="Id" value="<?php echo $id;?>"><br><br>
          <input type="text" name="name" placeholder="Name" value="<?php echo $name;?>"><br><br>
          <input type="email" name="email" placeholder="Email Address" value="<?php echo $email;?>"><br><br>
          <input type="tel" name="phone" placeholder="telephone" value="<?php echo $phone;?>"><br><br>
          <textarea type="text" name="comment" rows="10" cols="40" value="<?php echo $comment;?>">
          </textarea> <br> <br>
          <div>
              <!-- Input For Add Values To Database-->
              <input type="submit" name="insert" value="Add">

              <!-- Input For Edit Values -->
              <input type="submit" name="update" value="Update">

              <!-- Input For Clear Values -->
              <input type="submit" name="delete" value="Delete">

              <!-- Input For Find Values With The given ID -->
              <input type="submit" name="search" value="Find">
          </div>
      </form><br><br>

<table>
<tr>
<th>Id</th>
<th>name</th>
<th>email</th>
<th>phone</th>
<th>comment</th>
<th>reg_date</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "bnb");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, name, email, phone, comment, reg_date FROM contact";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"] . "</td><td>"
. $row["email"]. "</td><td>" . $row["phone"] . "</td><td>" . $row["comment"] . "</td><td>" . $row["reg_date"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>
