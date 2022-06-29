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
  <a target="_blank" href="download (7).png">
    <img src="download (7).png" alt="Palestian Flag" width="230" height="180">
  </a>
    <h3 class="w3-padding-64 w3-black"><b>MALAYSIA</b></h3>
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
  <a href="javascript:void(0)" class="w3-button w3-black w3-margin-right w3-hide-large" onclick="w3_open()">Open Menu</a>
  <span><h1><b>MALAYSIA</b></h1></span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<div class="w3-main" style="margin-left:340px;margin-right:40px">

<div class="w3-container center" style="margin-top:80px;margin-left:400px" id="showcase">
    <h1 class="w3-xxxlarge w3-text-black"><b>MALAYSIA</b></h1>
    <hr style="width:50px;margin-left:80px;border:5px solid black" class="w3-round">
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
      
      <a target="_blank" href="uitmck.jpg">
    <img src="uitmck.jpg" alt="Malaysian" width="450px" height="350px" >
  </a>
        
      
    </div>
    </div>
    <br></br>
    <p><b>Malaysia, country of Southeast Asia, lying just north of the Equator, that is composed of two noncontiguous regions: Peninsular Malaysia (Semenanjung Malaysia), also called West Malaysia (Malaysia Barat), which is on the Malay Peninsula, and East Malaysia (Malaysia Timur), which is on the island of Borneo. The Malaysian capital, Kuala Lumpur, lies in the western part of the peninsula, about 25 miles (40 km) from the coast; the administrative centre, Putrajaya, is located about 16 miles (25 km) south of the capital.</b></p>

    
    
    
  

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