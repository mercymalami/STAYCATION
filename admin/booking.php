<?php

$host = "localhost";
$user = "root";
$password ="";
$database = "bnb";

$id = "";
$firstname = "";
$lastname = "";
$phone = "";
$email = "";
$book = "";
$starts = "";
$ends = "";
$cars = "";

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
    $posts[1] = $_POST['firstname'];
    $posts[2] = $_POST['lastname'];
    $posts[3] = $_POST['phone'];
    $posts[4] = $_POST['email'];
    $posts[5] = $_POST['book'];
    $posts[6] = $_POST['starts'];
    $posts[7] = $_POST['ends'];
    $posts[8] = $_POST['cars'];
    return $posts;
}

// Search

if(isset($_POST['search']))
{
    $data = getPosts();

    $search_Query = "SELECT * FROM book WHERE id = '$data[0]'";

    $search_Result = mysqli_query($connect, $search_Query);

    if($search_Result)
    {
        if(mysqli_num_rows($search_Result))
        {
            while($row = mysqli_fetch_array($search_Result))
            {
                $id = $row['id'];
                $firstname = $row['firstname'];
                $lastname = $row['lastname'];
                $phone = $row['phone'];
                $email = $row['email'];
                $book = $row['book'];
                $starts = $row['starts'];
                $ends = $row['ends'];
                $cars = $row['cars'];
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
    $insert_Query = "INSERT INTO book (`firstname`, `lastname`, `phone`, `email`,`book`, `starts`, `ends`,`cars`) VALUES ('$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','$data[7]','$data[8]')";
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
    $delete_Query = "DELETE FROM book WHERE `id` = $data[0]";
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
    $update_Query = "UPDATE book SET `firstname`='$data[1]',`lastname`='$data[2]',`phone`=$data[3] ,`email`='$data[4]',`book`='$data[5]',`starts`='$data[6]',`ends`='$data[7]',`cars`='$data[8]' WHERE `id` = '$data[0]'";
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
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
<style>
html {
  font-family: "Lucida Sans", sans-serif;
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
  padding-top: 50px; color:black"> BOOKINGS DATABASE DATA</h1>

<h2 style="text-align:center;text-decoration:underline">BOOKING (INSERT,UPDATE,DELETE,SEARCH FORM)</h2>
  <form action="booking.php" method="post">
  <input type="number" name="id" placeholder="Id" value="<?php echo $id;?>"><br><br>
  <input type="text" name="firstname" placeholder="Firstname" value="<?php echo $firstname;?>"><br><br>
  <input type="text" name="lastname" placeholder="Lastname" value="<?php echo $lastname;?>"> <br><br>
  <input type="tel" name="phone" placeholder="Phone" value="<?php echo $phone;?>"> <br><br>
  <input type="email" name="email" placeholder="Email Address" value="<?php echo $email;?>"> <br> <br>
  <select id="book" name="book" value="<?php echo $book;?>">>
        <option value="Harrys,Nairobi-One Bedroom Apartment- Kshs 1,600">Harry's,Nairobi-One Bedroom Apartment- Kshs 1,600</option>
        <option value="Elimurk,Nairobi-Two Bedroom Apartment-  Kshs 2,000">Elimurk,Nairobi-Two Bedroom Apartment-  Kshs 2,000</option>
        <option value="Fairview Hotel,Nairobi-Three Bedroom Apartment- Kshs 3,600">Fairview Hotel,Nairobi-Three Bedroom Apartment- Kshs 3,600</option>
        <option value="Sankara,Nairobi-Four Bedroom Apartment-  Kshs 5,600">Sankara,Nairobi-Four Bedroom Apartment-  Kshs 5,600</option>
        <option value="Bessoted Farmstay,Nanyuki-One Bedroom Apartment- Kshs 1,000">Bessoted Farmstay,Nanyuki-One Bedroom Apartment- Kshs 1,000</option>
        <option value="Peaks Hotel,Nanyuki-Two Bedroom Apartment- Kshs 1,600">Peaks Hotel,Nanyuki-Two Bedroom Apartment- Kshs 1,600</option>
        <option value="Maiyan Villas,Nanyuki-Three Bedroom Apartment- Kshs 2,600">Maiyan Villas,Nanyuki-Three Bedroom Apartment- Kshs 2,600</option>
        <option value="Esiankiki Resort and Spa,Nanyuki-Four Bedroom Apartment- Kshs 2,600">Esiankiki Resort and Spa,Nanyuki-Four Bedroom Apartment- Kshs 2,600</option>
        <option value="Alawi Botique Hotel,Watamu-One Bedroom Apartment- Kshs 1,600">Alawi Botique Hotel,Watamu-One Bedroom Apartment- Kshs 1,600</option>
        <option value="Lily Palm Hotel,Watamu-Two Bedroom Apartment- Kshs 2,000">Lily Palm Hotel,Watamu-Two Bedroom Apartment- Kshs 2,000</option>
        <option value="Lonno Lodge Hotel,Watamu-Three Bedroom Apartment- Kshs 3,600">Lonno Lodge Hotel,Watamu-Three Bedroom Apartment- Kshs 3,600</option>
        <option value="Kobe Suite Resort,Watamu-Four Bedroom Apartment- Kshs 5,600">Kobe Suite Resort,Watamu-Four Bedroom Apartment- Kshs 5,600</option>
        <option value="Bahari Beach Hotel,Mombasa-One Bedroom Apartment- Kshs 2,000">Bahari Beach Hotel,Mombasa-One Bedroom Apartment- Kshs 2,000</option>
        <option value="Ayodya Suites,Mombasa-Two Bedroom Apartment- Kshs 4,600">Ayodya Suites,Mombasa-Two Bedroom Apartment- Kshs 4,600</option>
        <option value="The Reef,Mombasa-Three Bedroom Apartment- Kshs 5,600">The Reef,Mombasa-Three Bedroom Apartment- Kshs 5,600</option>
        <option value="Bliss Resort,Mombasa-Four Bedroom Apartment- Kshs 6,600">Bliss Resort,Mombasa-Four Bedroom Apartment- Kshs 6,600</option>
        <option value="Casa Tulia Hotel,Nakuru-One Bedroom Apartment- Kshs 1,200">Casa Tulia Hotel,Nakuru-One Bedroom Apartment- Kshs 1,200</option>
        <option value="Ziwa Bush Lodge,Nakuru-Two Bedroom Apartment- Kshs 1,600">Ziwa Bush Lodge,Nakuru-Two Bedroom Apartment- Kshs 1,600</option>
        <option value="Taidys Suites,Nakuru-Three Bedroom Apartment- Kshs 2,000">Taidy's Suites,Nakuru-Three Bedroom Apartment- Kshs 2,000</option>
        <option value="Vickmark Hotel and lodges LTD,Nakuru-Four Bedroom Apartment- Kshs 3,600">Vickmark Hotel and lodges LTD,Nakuru-Four Bedroom Apartment- Kshs 3,600</option>
        <option value="Karimu Beach Hive,Diani-One Bedroom Apartment- Kshs 5,000">Karimu Beach Hive,Diani-One Bedroom Apartment- Kshs 5,000</option>
        <option value="Inshallah Melia Suite,Diani-Two Bedroom Apartment- Kshs 5,600">Inshallah Melia Suite,Diani-Two Bedroom Apartment- Kshs 5,600</option>
        <option value="Treehouse,Diani-Three Bedroom Apartment- Kshs 6,600">Treehouse,Diani-Three Bedroom Apartment- Kshs 6,600</option>
        <option value="Simba Secret Hideaway,Diani-Four Bedroom Apartment- Kshs 7,600">Simba Secret Hideaway,Diani-Four Bedroom Apartment- Kshs 7,600</option>
        <option value="St Johns Manor,Kisumu-One Bedroom Apartment- Kshs 1,600">St John's Manor,Kisumu-One Bedroom Apartment- Kshs 1,600</option>
        <option value="Ciala Resort,Kisumu-Two Bedroom Apartment- Kshs 2,000">Ciala Resort,Kisumu-Two Bedroom Apartment- Kshs 2,000</option>
        <option value="Imperial Hotel Express,Kisumu-Three Bedroom Apartment- Kshs 3,600">Imperial Hotel Express,Kisumu-Three Bedroom Apartment- Kshs 3,600</option>
        <option value="Acacia Hotel,Kisumu-Four Bedroom Apartment- Kshs 5,600">Acacia Hotel,Kisumu-Four Bedroom Apartment- Kshs 5,600</option>
        <option value="Romantic Beach House,Malindi-One Bedroom Apartment- Kshs 3,600">Romantic Beach House,Malindi-One Bedroom Apartment- Kshs 3,600</option>
        <option value="Malindi Beach,Malindi-Two Bedroom Apartment- Kshs 5,600">Malindi Beach,Malindi-Two Bedroom Apartment- Kshs 5,600</option>
        <option value="Classic Beach Apartment,Malindi-Three Bedroom Apartment- Kshs 6,000">Classic Beach Apartment,Malindi-Three Bedroom Apartment- Kshs 6,000</option>
        <option value="The Baobabs Sea View,Malindi-Four Bedroom Apartment- Kshs 8,600">The Baobabs Sea View,Malindi-Four Bedroom Apartment- Kshs 8,600</option>
        <option value="Chui Lodge,Naivasha-One Bedroom Apartment- Kshs 1,600">Chui Lodge,Naivasha-One Bedroom Apartment- Kshs 1,600</option>
        <option value="Hylise Hotel,Naivasha-Two Bedroom Apartment- Kshs 2,000">Hylise Hotel,Naivasha-Two Bedroom Apartment- Kshs 2,000</option>
        <option value="Lake Naivasha Resort,Naivasha-Three Bedroom Apartment- Kshs 3,600">Lake Naivasha Resort,Naivasha-Three Bedroom Apartment- Kshs 3,600</option>
        <option value="Lake Naivasha Country Club-Sun Africa Hotels,Naivasha-Four Bedroom Apartment- Kshs 5,600">Lake Naivasha Country Club-Sun Africa Hotels,Naivasha-Four Bedroom Apartment- Kshs 5,600</option>
      </select><br><br>
  <label for="booking">BOOKING PERIOD </label><br><br>
  <label for="from">STARTS:</label><br>
  <input type="date" id="StartDate" name="starts"value="<?php echo $starts;?>"><br>
  <label for="to">ENDS:</label><br>
  <input type="date" id="EndDate" name="ends"value="<?php echo $ends;?>"><br><br>
  <label for="cars">PAYMENT METHOD:</label><br>
  <select id="cars" name="cars" value="<?php echo $cars;?>">
       <option value="M-Pesa">M-Pesa</option>
       <option value="Cash">Cash</option>
       <option value="Card">Card</option>
       <option value="PayPal">PayPal</option>
      </select>
       <br><br>
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
<th>firstname</th>
<th>lastname</th>
<th>phone</th>
<th>email</th>
<th>book</th>
<th>starts</th>
<th>ends</th>
<th>cars</th>
<th>reg_date</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "bnb");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, firstname, lastname, phone, email, book, starts, ends, cars, reg_date FROM book";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>" . $row["firstname"]. "</td><td>" . $row["lastname"] . "</td><td>"
. $row["phone"]. "</td><td>" . $row["email"] . "</td><td>" . $row["book"] . "</td><td>". $row["starts"] . "</td><td>" . $row["ends"] . "</td><td>" . $row["cars"] . "</td><td>". $row["reg_date"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
<script>
$("#EndDate").change(function () {
    var startDate = document.getElementById("StartDate").value;
    var endDate = document.getElementById("EndDate").value;

    if ((Date.parse(endDate) <= Date.parse(startDate))) {
        alert("Please enter a valid date");
        document.getElementById("EndDate").value = "";
    }
});
</script>
</body>
</html>
