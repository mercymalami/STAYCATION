<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Staycation</title>
    <link rel="stylesheet" href="bnb.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
   <script src="https://kit.fontawesome.com/a076d05399.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
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
     <form action="PHP/book1.php" target="_blank" method="post" autocomplete="on">
     <h2 style="color:#600000;text-align:center">BOOK A PLACE TO STAY!</h2>
     <h5 style="text-align:center">PERSONAL INFORMATION:</h5>
       <input type="text" name="firstname" placeholder="Firstname" required>
       <input type="text" name="lastname" placeholder="Lastname" required>
       <input type="tel" name="phone" placeholder="Phone Number" required>
       <input type="email" name="email" placeholder="Email Address" required>
       <h5 style="text-align:center">SELECT YOUR SCENE OF CHOICE:</h5>
       <select id="book" name="book">
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
      </select>
      <h5 style="text-align:center">SELECT A DATE:</h5>
      <h6 style="text-align:center">CHECK-IN:</h6>
      <input type="date" id="StartDate" name="starts">
      <h6 style="text-align:center">CHECK-OUT:</h6>
      <input type="date"  id="EndDate" name="ends">
      <h5 style="text-align:center">MODE OF PAYMENT:</h5>
      <p style="text-align:center">Payment to be done on arrival</p>
      <select id="cars" name="cars">
       <option value="M-Pesa">M-Pesa</option>
       <option value="Cash">Cash</option>
       <option value="Card">Card</option>
       <option value="PayPal">PayPal</option>
      </select>
       <br><br>
      <p style="text-align:center"><input type="submit" value="Send Booking"></p>
   </form>
   </div>
   </div>
   <div class="col-4 col-s-12">
   </div>
 </div>
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
 <?php include 'footer.php'; ?>
 </body>
</html>
