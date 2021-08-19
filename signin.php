<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Staycation</title>
    <link rel="stylesheet" href="bnb.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
   <script src="https://kit.fontawesome.com/a076d05399.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

  </head>
 <body>

<?php
  include 'nav.php';
 ?>

 <div class="row">
   <div class="col-6 col-s-6">
       <div class="signin">
     <form action="PHP/signin1.php" target="_blank" method="post" autocomplete="on">
     <h2 style="color:brown;text-align:center"> LOG IN </h2>
     <p style="text-align:center"><input type="email" name="email" placeholder="email" style="width:70%" required></p>
     <p style="text-align:center"><input type="password" name="password" placeholder="password" style="width:70%" required></p> <br><br>
      <p style="text-align:center"><input type="submit" value="Log in"></p>
     <br>
   </form>
   </div>
   </div>
   <div class="col-6 col-s-12">
     <form action="#" target="_blank" method="post" autocomplete="on">
     <h2 style="color:brown;text-align:center"> CREATE YOUR STAYCATION ACCOUNT </h2>
       <p style="text-align:center;padding-top:30px;">Create your Staycation customer account in just a few clicks! You <br>
         can register by signing up.</p>

        <p style="text-align:center;padding-top:30px;"><button type="button" name="button" class="w3-hover-black" style="background-color:brown;padding:10px;color:white"><a href="signup.php">Create an Account Via Signup</a></button></p>
         <p style="text-align:center;padding-top:30px;"><button type="button" name="button" class="w3-hover-red" style="background-color:black;padding:10px;color:white"><a href="admin.php">Log in as an Admin</a></button></p>

     <br>
   </form>
   </div>
 </div>


 <?php include 'footer.php'; ?>

 </body>
</html>
