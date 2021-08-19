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

   <div class="container w3-black">
     <video width="100%" height="auto" autoplay muted loop>
     <source src="video/topbnb1.mp4" type="video/mp4">
   </video>
   <div class="top-left">
     <div id="mySidenav" class="sidenav">
     <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
     <a href="index.php">Home</a>
     <a href="place.php">Places to stay</a>
     <a href="experience.php">Experiences</a>
     <a href="signin.php">Sign In</a>
     <a href="signup.php">Sign Up</a>
     <a href="contact.php">Contact</a>
   </div>


   <span style="font-size:20px;cursor:pointer;font-weight:bolder" onclick="openNav()">&#9776; Menu</span>

   <script>
   function openNav() {
     document.getElementById("mySidenav").style.width = "250px";
   }

   function closeNav() {
     document.getElementById("mySidenav").style.width = "0";
   }
   </script>

   </div>
   <div class="centered">
   <h1 style="color:white;text-align:center;font-weight:bolder">Staycation</h1>
   </div>
   <div class="centered2 w3-hide-small">
     <p class="w3-animate-left" style="font-size:2vw;color:white;font-weight:bolder">YOUR COMFORT IS KEY</p>
     <p style="text-align:center"><button class="button w3-hover-black" style="background-color:#600000;width:200px"><span>
     <a href="place.php">Explore Nearby Stays</a>
     </span></button></p>
   </div>
   <div class="top-right w3-hide-small">
     <div class="w3-container">
  <p style="text-align:center"><button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-white w3-large w3-hover-black w3-round-xxlarge" style="width:120px">Login</button></p>

  <div id="id01" class="w3-modal">
   <div class="w3-modal-content w3-card-4 w3-animate-zoom w3-round-xlarge" style="max-width:200px">

     <div class="w3-center"><br>
       <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
     </div>
    <p style="font-size:24px;color:#600000;font-weight:bolder;text-align:center">Staycation</p>
    <p style="font-size:18px;padding-left:10px;color:black" class="w3-hover-text-red w3-center"> <a href="signup.php">Sign Up</a> </p>
    <p style="font-size:18px;padding-left:10px;color:black" class="w3-hover-text-red w3-center"> <a href="signin.php">Sign In</a> </p>
   </div>
  </div>
  </div>
   </div>
   </div>
 <?php include 'footer.php'; ?>
 </body>
</html>
