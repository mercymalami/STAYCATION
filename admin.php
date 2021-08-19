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
     <form action="PHP/admin1.php" target="_blank" method="post" autocomplete="on">
     <h2 style="color:brown;text-align:center"> ADMIN SIGN IN </h2>
       <input type="text" name="username" placeholder="username" required>
       <input type="password" name="password" placeholder="password" required> <br><br>
      <p style="text-align:center"><input type="submit" value="Log in"></p>
     <br>
   </form>
   </div>
   </div>
   <div class="col-4 col-s-12">
   </div>
 </div>


 <?php include 'footer.php'; ?>

 </body>
</html>
