<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
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
  background-color: #e67300;
}
a{
  color: white;
  text-decoration: blink;
  font-family: 'quicksand', sans-serif;
}
.footer {
  margin-top: 40px;
  background-color: black;
  color: white;
  text-align: center;
  font-size: 12px;
  padding: 15px;
  clear:left;
  position:static;
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
}/*
.users {
  background:black;
  height: 150px;
  padding-top:50px;
  color: black;
  text-align: center;
  font-size: 20px;
  box-shadow: 0 10px 10px rgba(192,192,192,0.7), 0 10px 10px rgba(192,192,192,0.7);
}
.feedback {
  background:#663500;
  height: 150px;
  padding-top:50px;
  color: black;
  text-align: center;
  font-size: 20px;
  box-shadow: 0 10px 10px rgba(192,192,192,0.7), 0 10px 10px rgba(192,192,192,0.7);
}
.bookings {
  padding-top:50px;
  background:red;
  height: 150px;
  color: black;
  text-align: center;
  font-size: 20px;
  box-shadow: 0 10px 10px rgba(192,192,192,0.7), 0 10px 10px rgba(192,192,192,0.7);
}
.row{
    display:flex;
    justify-content:space-around;
    flex-wrap:wrap;
    box-sizing:border-box;
    clear: right;
}
.box{
    display: flex;
    flex-direction:column;
    width:200px;
    height:100px;
    border:1px solid black;
    margin: 10px;
    align-items:center;
    text-align:justify;
    padding:10px;
    border-radius:15px;
    background-color:rgb(218, 178, 119);
    color:black;
    background:line-gradient(to top, rgb(255,45,45) 50%, white 50%);
    background-size:100% 200%;
    transition:all .8s;
}
.box:hover{
    cursor: pointer;
    background-position:left bottom;
    color:#ffffcc;
    border:none;
    box-shadow:0 0 20px #c20303;

}*/
</style>
</head>
<body>

<div class="header">
  <h1 style="text-align:center">Staycation</h1>
</div>

<h1 style="color:black; text-align:center;font-weight:bolder;text-decoration:underline">WELCOME TO THE ADMIN PAGE</h1>

<div class="row">
  <div class="col-3 col-s-3 menu">
    <ul>
    <li><a href="account.php" style="font-style:italic">Profile</a></li>
    <li><a href="signup.php" style="font-style:italic">Users</a></li>
    <li><a href="booking.php" style="font-style:italic">Bookings</a></li>
    <li><a href="feedback.php" style="font-style:italic">Feedbacks</a></li>
    <li><a href="http://localhost/Staycation/admin.php" style="font-style:italic">Sign Out</a></li>
    </ul>
  </div>
</div>
<section>
<div class="footer">
  <p>&copy; 2021 All Rights Reserved. Developed & Designed by MERCY MACHARIA</p>
</div>
</section>
</body>
</html>
