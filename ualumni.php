<?php
include 'css.php';


?>
<!DOCTYPE html>
<html lang="en">
<title>Bank Appointment</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}
</style>
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-black w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft w3-black" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container w3-black" class="gallery">
  <a target="_blank" href="uitm.png">
    <img src="uitm.png" alt="Palestian Flag" width="230" height="180">
  </a>
    <h3 class="w3-padding-64 w3-black"><b>UiTM Alumni</b></h3>
  </div>
  
  <div class="w3-bar-block w3-black">
    <a href="homepage.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
    <a href="uitm.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">UiTM</a> 
    <a href="umachang.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">UiTM Machang</a> 
    <a href="ualumni.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">UiTM Alumni</a>
    <a href="profile.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Profile</a> 
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-black w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-black w3-margin-right" onclick="w3_open()">â°</a>
  <span>UiTM Alumni</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">


<div class="w3-container center" style="margin-top:80px;margin-left:250px" id="showcase">
    <center><h1 class="w3-xxxlarge w3-text-black"><b>UiTM Alumni</b></h1></center>
    <center><hr style="width:50px;margin-left:10px;border:5px solid black" class="w3-round"></center>
  </div>
</div>
<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  
  
  <!-- Home & Appointment -->
  <div class="w3-row-padding">
    

  


    </div>
    <div class="w3-row-padding center" class="gallery">
    <div class="w3-col m4 w3-margin-bottom">
      
      <a target="_blank" href="uitm_1570616415.jpg">
    <img src="uitm_1570616415.jpg" alt="Malaysian" width="450px" height="350px" >
  </a>
        
      
    </div>
    </div>
  <!-- About -->
  <div class="w3-container" id="designers" style="margin-top:75px">
    
    <p>The Islamic Resistance Movement draws its guidelines from Islam;

derives from it its thinking, interpretations and views about existence,

life and humanity; refers back to it for its conduct; and is inspired by

it in whatever step it takes.</p>

    
    
    
  

  <!-- The Team -->
  
    

<!-- End page content -->
</div>
</div>
<!-- Footer Container -->
<div class="w3-black w3-container w3-padding-32" style="margin-top:75px;padding-right:60px;color: white"><p class="w3-right">© 2021. ABDULLAH MAHYUDDIN 2020981031</p>
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