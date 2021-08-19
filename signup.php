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
   <div class="col-4 col-s-4 menu">
   </div>
   <div class="col-4 col-s-8">
       <div class="signin">
     <form action="PHP/signup1.php" target="_blank" method="post" autocomplete="on">
     <h2 style="color:#600000;text-align:center"> CREATE ACCOUNT</h2>
       <input type="text" name="firstname" placeholder="Firstname" required>
       <input type="text" name="lastname" placeholder="Lastname" required>
       <input type="email" name="email" placeholder="Email" required>
       <input type="password" name="password" placeholder="Password" required>
       <input type="tel" name="phone" placeholder="+000-000-000-000" pattern="[+,0-9]{4}-[0-9]{3}-[0-9]{3}-[0-9]{3}" required><br><br>
      <p style="text-align:center"><input type="submit" value="Create Account"></p>
      <p style="text-align:center;font-size:16px;padding-top:40px">Already have an account?</p>
      <p style="text-align:center;font-size:16px;padding-top:10px;color:brown;font-weight:bolder"><a href="signin.php">LOG IN</a> </p>
   </form>
   </div>
   </div>
   <div class="col-4 col-s-12">
   </div>
 </div>

 <?php include 'footer.php'; ?>

 </body>
</html>
