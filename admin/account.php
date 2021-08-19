<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<style>
@import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
* {
  box-sizing: border-box;
}

.row::after {
  content: "";
  clear: both;
  display: table;
}

[class*="col-"] {
  float: left;
  padding: 15px;
}

html {
  font-family: 'quicksand', sans-serif;
}

.header {
  background-color: #4d0000;
  color: black;
  padding: 15px;
}

.menu ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

.menu li {
  padding: 8px;
  margin-bottom: 7px;
  background-color: black;
  color: white;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.menu li:hover {
  background-color: purple;
}
a{
  color: white;
  font-family: 'quicksand',sans-serif;
}
.footer {
  margin-top: 40px;
  background-color: black;
  color: white;
  text-align: center;
  font-size: 12px;
  padding: 15px;
}

/* For mobile phones: */
[class*="col-"] {
  width: 100%;
}

@media only screen and (min-width: 600px) {
  /* For tablets: */
  .col-s-1 {width: 8.33%;}
  .col-s-2 {width: 16.66%;}
  .col-s-3 {width: 25%;}
  .col-s-4 {width: 33.33%;}
  .col-s-5 {width: 41.66%;}
  .col-s-6 {width: 50%;}
  .col-s-7 {width: 58.33%;}
  .col-s-8 {width: 66.66%;}
  .col-s-9 {width: 75%;}
  .col-s-10 {width: 83.33%;}
  .col-s-11 {width: 91.66%;}
  .col-s-12 {width: 100%;}
}
@media only screen and (min-width: 768px) {
  /* For desktop: */
  .col-1 {width: 8.33%;}
  .col-2 {width: 16.66%;}
  .col-3 {width: 25%;}
  .col-4 {width: 33.33%;}
  .col-5 {width: 41.66%;}
  .col-6 {width: 50%;}
  .col-7 {width: 58.33%;}
  .col-8 {width: 66.66%;}
  .col-9 {width: 75%;}
  .col-10 {width: 83.33%;}
  .col-11 {width: 91.66%;}
  .col-12 {width: 100%;}
}
p{
  color: black;
}
html {
  font-family: 'quicksand', sans-serif;
}
button{
  background-color:black;
  width: 200px;
  height: 50px;
  font-size: 16px;
  color: white;
}
a{
  text-decoration: none;
}
</style>
</head>
<body>

<div class="header">
  <p style="text-align:center;color:white;text-decoration:none;font-weight:bolder;text-decoration:underline">ADMIN INFORMATION</p>
</div>


<div class="row">
  <div class="col-3 col-s-3 menu">
    <p style="font-weight:bolder;text-decoration:underline"> ADMIN IMAGE </p>
    <i class="fa fa-user-circle" style="font-size:100px;color:black;"></i>
<br><br><br><br>
<p style="font-size:16px;font-weight:bolder;text-decoration:underline">CHANGE PASSWORD AND<br>USERNAME HERE</p>
<button type="button"><a href="adminpass.php">CHANGE PASSWORD</a></button>
</div>

  <div class="col-3 col-s-6">
<p style="font-weight:bolder;text-decoration:underline">PERSONAL INFORMATION</p>
  <p style="font-weight:bolder;text-decoration:underline">USERNAME:</p>
  <p>MERCY</p>
<p style="font-weight:bolder;text-decoration:underline">EMAIL: </p>
  <p>staycationkenya@gmail.com</p>
<p style="font-weight:bolder;text-decoration:underline">PASSWORD: </p>
<p>MERCY</p>
<br>
</div>
<div class="col-3 col-s-9">
<p style="font-weight:bolder;text-decoration:underline">CONNECTION INFORMATION</p>
  <p style="font-weight:bolder;text-decoration:underline">DATABASE HOST:</p>
  <p>localhost</p>
<p style="font-weight:bolder;text-decoration:underline">DATABASE USERNAME: </p>
  <p>root</p>
<p style="font-weight:bolder;text-decoration:underline">DATABASE PASSWORD: </p>
<p>NULL</p>
<p style="font-weight:bolder;text-decoration:underline">DATABASE NAME: </p>
<p>bnb</p>
  </div>

  <div class="col-3 col-s-12">
<p style="font-weight:bolder;text-decoration:underline">TOOLS USED FOR STAYCATION</p>
<p style="font-weight:bolder;text-decoration:underline">FRONT END</p>
<p>HTML, CSS AND JAVASCRIPT</p>
<p style="font-weight:bolder;text-decoration:underline">BACK END</p>
<p>PHP</p>
<p style="font-weight:bolder;text-decoration:underline">DATABASE</p>
<p>MYSQL</P>
<p style="font-weight:bolder;text-decoration:underline">SERVER</p>
<P>XAMPP(PHPMYADMIN)</P>

  </div>
</div>

<div class="footer">
  <p style="color:white">&copy; 2021 All Rights Reserved. Developed & Designed by MERCY MACHARIA.</p>
</div>

</body>
</html>
