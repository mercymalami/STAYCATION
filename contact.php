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

 <div class="mapWrapper w3-hide-small">
 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15955.256232723013!2d36.81483586904314!3d-1.285564082601941!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f10d714b90b4d%3A0xf58d8f9b297c294c!2sCentral%20Business%20District%2C%20Nairobi!5e0!3m2!1sen!2ske!4v1597665029235!5m2!1sen!2ske" width="600" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
   </div>

   <div class="row" style="padding-top:40px">
    <div class="col-6 col-s-6">
     <h2 style="text-align:center;color:black">CONTACT US</h2>
      <div class="container">
        <form action="PHP/contact1.php" target="_blank" method="post" autocomplete="on">
           <p style="text-align:center;font-size:18px"><input type="text" name="name" placeholder="Name" required style="width:70%"></p>
           <p style="text-align:center;font-size:18px"><input type="email" name="email" placeholder="Email" required style="width:70%"></p>
           <p style="text-align:center;font-size:18px"><input type="tel" name="phone" placeholder="+000-000-000-000" pattern="[+,0-9]{4}-[0-9]{3}-[0-9]{3}-[0-9]{3}" required style="width:70%"></p>
           <p style="text-align:center;font-size:18px"><textarea name="comment" placeholder="Message" required style="width:70%"></textarea></p>
           <p style="text-align:center;color:#600000"><input type="submit" value="Submit"></p>
        </form>
      </div>
    </div>
    <div class="col-6 col-s-12 w3-center">
      <h2 style="text-align:center;color:black">CONTACT INFORMATION</h2>
      <p style="color:#600000;font-size:18px;font-weight:bolder">PHONE</P>
      <p style="font-size:14px;padding:15px;color:black;font-weight:bolder">0700000000</P>
        <p style="color:#600000;font-size:18px;font-weight:bolder">EMAIL</P>
        <p style="font-size:14px;padding:15px;color:black;font-weight:bolder">staycationkenya@gmail.com</p>
       <p style="color:#600000;font-size:18px;font-weight:bolder">SOCIAL MEDIA</p><br>
      <p style="color:black;font-size:12px;font-weight:bolder">Please Follow us on our social media platform.</p><br>
      <a target="_blank" href="https://www.facebook.com/" style="font-size:14px;color:black" class="fa fa-facebook w3-hover-blue "></a>
      <a target="_blank" href="https://twitter.com/home" style="font-size:14px;color:black" class="fa fa-twitter w3-hover-blue"></a>
      <a target="_blank" href="https://www.instagram.com/" style="font-size:14px;color:black" class="fa fa-instagram w3-hover-purple"></a>
    </div>
   </div>




 <?php include 'footer.php'; ?>

 </body>
</html>
