# Hotel-management-system-website
<!DOCTYPE html>
<html>
<title>Hotel</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"  integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
</style>
<body class="w3-light-">

<!-- Navigation Bar -->
<div class="w3-bar w3-white w3-large">
  <a href="#" class="w3-bar-item w3-button w3-red w3-mobile"><i class="fa fa-bed w3-margin-right"></i>Ovo Rooms</a>
  <a href="room.html" class="w3-bar-item w3-button w3-mobile"> our rooms</a>
    <a href="register.html" class="w3-bar-item w3-button w3-mobile">new user register</a>
    <a href="https://www.yatra.com/" class="w3-bar-item w3-button w3-mobile">Book your travel tickets</a>
</div>

<!-- Header -->
         <!-- Page content -->
<div id="contact" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom">
    <div class="w3-container w3-green">
      <span onclick="document.getElementById('contact').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
      <h1>Book Now and get latest offers and discounts </h1>
    </div>
    <div class="w3-container">
      <p>Reserve a Room in Ovo Rooms:</p>
      <form action="/action_page.php" target="_blank">
        <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Name" required name="Name"></p>
        <p><input class="w3-input w3-padding-16 w3-border" type="number" placeholder="Total Guest" required name="People"></p>
        <p><input class="w3-input w3-padding-16 w3-border" type="datetime-local" placeholder="Date and time" required name="date" value="2017-11-16T20:00"></p>
        <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Message \ Special requirements" required name="Message"></p>
        <p><button class="w3-button w3-green" type="submit">Book Now</button></p>
      </form>
    </div>
  </div>
</div>

<header class="w3-display-container w3-content" style="max-width:1500px;">
  <img class="w3-image" src="hotel.jpg" alt="The Hotel" style="min-width:1000px" width="1500" height="800">
</header>

  <div class="w3-container w3-margin-top" id="rooms">
    <h3>Book your Rooms here</h3>

      <p><button onclick="document.getElementById('contact').style.display='block'" class="w3-button w3-lesft w3-deep-orange">Book From </button></p>
       <p><button onclick="document.getElementById('contact').style.display='block'" class="w3-button  w3-orange">Book To</button></p>

    <p>Make yourself at home is our slogan. We offer the best beds in the industry. Sleep well and rest well.</p>
   
     
  </div>
  

  <div class="w3-row-padding w3-padding-16">
    <div class="w3-third w3-margin-bottom">
      <img src="single.jpg" alt="Norway" style="width:100%">
      <div class="w3-container w3-white">
        <h3>Single Room-Ovo rooms</h3>
        <h6 class="w3-opacity">From 1000 Rs</h6>
        <p>Single bed</p>
        <p>15m<sup>2</sup></p>
        <p class="w3-large"><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i></p>
        <a href="room.html">choose rooms</a>
      </div>
    </div>
    <div class="w3-third w3-margin-bottom">
      <img src="double.jpg" alt="Norway" style="width:100%">
      <div class="w3-container w3-white">
        <h3>Double Room-Ovo Room</h3>
        <h6 class="w3-opacity">From 2000 Rs</h6>
        <p>Queen-size bed</p>
        <p>25m<sup>2</sup></p>
        <p class="w3-large"><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i> <i class="fa fa-tv"></i></p>
            <a href="room1.html">choose rooms</a>
      </div>
    </div>
    <div class="w3-third w3-margin-bottom">
      <img src="deluxe.jpg" alt="Norway" style="width:100%">
      <div class="w3-container w3-white">
        <h3>Deluxe Room-Ovo Room</h3>
        <h6 class="w3-opacity">From 3000 Rs</h6>
        <p>King-size bed</p>
        <p>40m<sup>2</sup></p>
        <p class="w3-large"><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i> <i class="fa fa-tv"></i> <i class="fa fa-glass"></i> <i class="fa fa-cutlery"></i></p>
           <a href="room2.html">choose rooms</a>
      </div>
    </div>
  </div>

  <div class="w3-row-padding" id="about">
    <div class="w3-col l4 m7">
      <h3>About</h3>
      <h6>Our hotel is one of a kind. It is truely amazing. </h6>
    <p>We accept: <i class="fa fa-credit-card w3-large"></i> <i class="fa fa-cc-mastercard w3-large"></i> <i class="fa fa-cc-amex w3-large"></i> <i class="fa fa-cc-cc-visa w3-large"></i><i class="fa fa-cc-paypal w3-large"></i></p>
    </div>
    <div class="w3-col l8 m5">
      <div id="googleMap" style="width:100%;height:400px;" class="w3-grayscale"></div>
    </div>
  </div>
  
  <div class="w3-row w3-large w3-center" style="margin:32px 0">
    <div class="w3-third"><i class="fa fa-map-marker w3-text-red"></i>Address-Kor mangla Banglore</div>
    <div class="w3-third"><i class="fa fa-phone w3-text-red"></i> Phone: +8825153852</div>
    <div class="w3-third"><i class="fa fa-envelope w3-text-red"></i> Email: abhishekranjan@gmail.com</div>
  </div>

  <div class="w3-panel w3-teal w3-leftbar w3-padding-20">
    <h6><i class="fa fa-briefcase w3-deep-orange w3-padding w3-margin-right"></i> On demand, we can offer playstation, babycall, children care, dog equipment, etc.</h6>
  </div>

  <div class="w3-container">
    <h3>Our Hotels</h3>
    <h6>You can find our hotels anywhere in the India:</h6>
  </div>
  
  <div class="w3-row-padding w3-padding-16 w3-text-white w3-large">
    <div class="w3-half w3-margin-bottom">
      <div class="w3-display-container">
        <img src="1.jpg" alt="Cinque Terre" style="width:100%">
        <span class="w3-display-bottomleft w3-padding">Delhi</span>
      </div>
    </div>
    <div class="w3-half">
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="2.jpg" alt="New York" style="width:100%">
            <span class="w3-display-bottomleft w3-padding">Mumbai</span>
          </div>
        </div>
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="3.jpg" alt="San Francisco" style="width:100%">
            <span class="w3-display-bottomleft w3-padding">Banglore</span>
          </div>
        </div>
      </div>
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="4.jpg" alt="Pisa" style="width:100%">
            <span class="w3-display-bottomleft w3-padding">Chennai</span>
          </div>
        </div>
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="5.jpg" alt="Paris" style="width:100%">
            <span class="w3-display-bottomleft w3-padding">Patna</span>
          </div>
        </div>
      </div>
    </div>
  </div>



  <div class="w3-container" id="contact">
    <h2>Contact Us</h2>
    <p>If you have any questions, do not hesitate to ask them.</p>
    <i class="fa fa-map-marker w3-text-red" style="width:30px"></i>Kor mangla Banglore <br>
    <i class="fa fa-phone w3-text-red" style="width:30px"></i>8825153852<br>
    <i class="fa fa-envelope w3-text-red" style="width:30px"> </i> Email: abhishekranjan@gmail.com<br>
    <form action="thank.php" method="POST">
      <p><input class="w3-input w3-padding-16 w3-border" type="text" name="name" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" name="email" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" name="message"placeholder="Message" required name="Message"></p>
       <p><input class="w3-input w3-padding-16 w3-border" type="text" name="phone" placeholder="Phone" required name="Phone"></p>
      <p><button class="w3-button w3-green w3-padding-large" type="submit">SEND MESSAGE</button></p>
    </form>
  </div>

<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-padding-32 w3-teal w3-center w3-margin-top">
  <h5>Find Us On</h5>
  <div class="w3-xlarge w3-padding-16">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank" class="w3-hover-text-red">Ovo Room</a></p>
</footer>

<script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<!--

-->

</body>
</html>

