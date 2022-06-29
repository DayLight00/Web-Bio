<!DOCTYPE html>
<html lang="en">
<title>Bank Appointment</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>


</style>
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-purple w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft w3-green" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container w3-purple">
    <h3 class="w3-padding-64 w3-purple"><b>Bank Appointment System</b></h3>
  </div>
  <div class="w3-bar-block w3-purple">
    <a href="UserHomePage.jsp" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
    <a href="AppointmentPage.jsp" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Appointment</a> 
    <a href="UserProfilePage.jsp" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Profile</a> 
    <a href="bmi.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">bmi</a>
    <a href="logout.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">LogOut</a> 
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-green w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-green w3-margin-right" onclick="w3_open()">â°</a>
  <span>ONL-YNE</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-xxxlarge w3-text-purple"><b>Bank Appointment System</b></h1>
    <hr style="width:50px;border:5px solid purple" class="w3-round">
  </div>
  
  <!-- Home & Appointment -->
  <div class="w3-row-padding">
     <h1>Make an appointment here!</h1>

  <div class="w3-half">
      <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;"> <a href="AppointmentPage.page"> Schedule an Appointment</a></button>

 <div id="id01" class="modal">
  
  	<form class="modal-content animate" action="/action_page.php" method="post">

    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
    </div>
  </div>
  
  <!-- About -->
  <div class="w3-container" id="designers" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-purple"><b>About</b></h1>
    <hr style="width:50px;border:5px solid purple" class="w3-round">
    <p>Bank Appointment System is an Online Bank Appointment. The system has been running for around more than a year now. The founder was Ahmad Mahyuddin bin Shamsul Kamal. </p>

    <p>Due to COVID-19, most meeting or appointment needed to be scheduled to follow the rules of PKP that Government has provide. The system will allow customer to book an appointment according to dates and what time they want. There are currently 6 Bank that we are working with at the moment, but there will be more soon. </p>
    
    <p><b>Our schedule planner are thoughtfully chosen</b>:</p>
  </div>

  <!-- The Team -->
  <div class="w3-row-padding">
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey"><br>
        <img src="Hafizh.png" alt="Nopal" class="center">
        <div class="w3-container">
          <h3>Mahyudin</h3>
          <p class="w3-opacity">CEO & Founder</p>
          <p>The founder of Bank Appointment System. He started to create this system due to problems of meeting during COVID-19.</p>
          <h3>011-304 89822</h3>
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey"><br>
        <img src="Hakimi.png" alt="Hakimi" class="center">
        <div class="w3-container">
          <h3>Hafizh</h3>
          <p class="w3-opacity">Scheduler</p>
          <p>The scheduler of Bank Appointment System. He will manage the appointment operationally. All the appointment booking will be delivered to him.</p>
          <h3>013-294 6685</h3>
        </div>
      </div>
    </div>

<!-- End page content -->
</div>

<!-- Footer Container -->
<div class="w3-black w3-container w3-padding-32" style="margin-top:75px;padding-right:58px;color: white"><p class="w3-right">Â© 2020, Bank Appointment System | All rights reserved.</p>
</div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>

</body>
</html><!DOCTYPE html>
<html lang="en">
<title>Bank Appointment</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: purple;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* To center an Image */
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}

</style>
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-purple w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft w3-green" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container w3-purple">
    <h3 class="w3-padding-64 w3-purple"><b>Bank Appointment System</b></h3>
  </div>
  <div class="w3-bar-block w3-purple">
    <a href="UserHomePage.jsp" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
    <a href="AppointmentPage.jsp" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Appointment</a> 
    <a href="UserProfilePage.jsp" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Profile</a> 
    <a href="bmi.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">bmi</a>
    <a href="logout.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">LogOut</a> 
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-green w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-green w3-margin-right" onclick="w3_open()">â°</a>
  <span>ONL-YNE</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-xxxlarge w3-text-purple"><b>Bank Appointment System</b></h1>
    <hr style="width:50px;border:5px solid purple" class="w3-round">
  </div>
  
  <!-- Home & Appointment -->
  <div class="w3-row-padding">
     <h1>Make an appointment here!</h1>

  <div class="w3-half">
      <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;"> <a href="AppointmentPage.page"> Schedule an Appointment</a></button>

 <div id="id01" class="modal">
  
  	<form class="modal-content animate" action="/action_page.php" method="post">

    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
    </div>
  </div>
  
  <!-- About -->
  <div class="w3-container" id="designers" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-purple"><b>About</b></h1>
    <hr style="width:50px;border:5px solid purple" class="w3-round">
    <p>Bank Appointment System is an Online Bank Appointment. The system has been running for around more than a year now. The founder was Ahmad Mahyuddin bin Shamsul Kamal. </p>

    <p>Due to COVID-19, most meeting or appointment needed to be scheduled to follow the rules of PKP that Government has provide. The system will allow customer to book an appointment according to dates and what time they want. There are currently 6 Bank that we are working with at the moment, but there will be more soon. </p>
    
    <p><b>Our schedule planner are thoughtfully chosen</b>:</p>
  </div>

  <!-- The Team -->
  <div class="w3-row-padding">
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey"><br>
        <img src="Hafizh.png" alt="Nopal" class="center">
        <div class="w3-container">
          <h3>Mahyudin</h3>
          <p class="w3-opacity">CEO & Founder</p>
          <p>The founder of Bank Appointment System. He started to create this system due to problems of meeting during COVID-19.</p>
          <h3>011-304 89822</h3>
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey"><br>
        <img src="Hakimi.png" alt="Hakimi" class="center">
        <div class="w3-container">
          <h3>Hafizh</h3>
          <p class="w3-opacity">Scheduler</p>
          <p>The scheduler of Bank Appointment System. He will manage the appointment operationally. All the appointment booking will be delivered to him.</p>
          <h3>013-294 6685</h3>
        </div>
      </div>
    </div>

<!-- End page content -->
</div>

<!-- Footer Container -->
<div class="w3-black w3-container w3-padding-32" style="margin-top:75px;padding-right:58px;color: white"><p class="w3-right">Â© 2020, Bank Appointment System | All rights reserved.</p>
</div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>

</body>
</html>