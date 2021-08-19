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


       <div class="row" style="background-color:#600000;">
       <div class="col-4 col-s-4">
         <div id="mySidenav" class="sidenav">
         <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
         <a href="index.php">Home</a>
         <a href="place.php">Places to stay</a>
         <a href="experience.php">Experiences</a>
         <a href="signin.php">Sign In</a>
         <a href="signup.php">Sign Up</a>
         <a href="contact.php">Contact</a>
       </div>


      <p style="text-align:center"><span style="font-size:20px;cursor:pointer;color:white" onclick="openNav()">&#9776; Menu</span></p>
       <script>
       function openNav() {
         document.getElementById("mySidenav").style.width = "250px";
       }

       function closeNav() {
         document.getElementById("mySidenav").style.width = "0";
       }
       </script>

       </div>
       <div class="col-4 col-s-8">
   <h1 style="color:white;text-align:center;font-weight:bolder;">Staycation</h1>
       </div>
       <div class="col-4 col-s-12">
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

 </body>
</html>
