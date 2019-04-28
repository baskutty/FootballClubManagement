<?php
session_start();
 if(!isset($_SESSION['manager']))
  {

  
  echo "<script>window.open('../login.php','_self')</script>";

  

  }

?>


<!DOCTYPE html>
<html>
<head>
  <title>FCB</title>
   <script src="jquery-3.2.1.min.js"></script>
<style>
* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;margin:0}
.mySlides {display:none}

/* Slideshow container */
.slideshow-container {
  max-width: 500px;
  max-height: 600px;
    position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor:pointer;
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
header
{
  background-color: black;
  color: white;
  text-align: center;
  padding: 1em;
  background-image: url('cij.jpg');
 
height: 122px;
}
footer
{
  background-color: black;
  color: white;
  text-align: center;
  padding: 1em;
position: fixed;
bottom: 0;   
left: 0;
width: 100%;

}
  

ul{
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333333;

}

ul li
{
  float:left;

}

ul li a {
    display: block;
    color: white;
    text-align: center;
    padding: 16px;
    text-decoration: none;
}
ul li a:hover {
    background-color: #111111;
}



ul li
{
  float:left;

}

ul li div
{
  float:right;
}




nav {
    line-height:30px;
    background-color:rgb(77, 105, 121);
    height:1220px;
    width:225px;
    float:left;
    padding:0px;        
}
.logo p
{
  display: inline-block;
    vertical-align: top;

    
}

div.lis ul li
{float: none;

}
body
{
  background-color: lightgrey;
}

article {
    margin-left: 10px;
    border-left: 1px solid grey;
    padding: 1px;
    overflow: hidden;
}
#bas
{
  background-color: grey;
  opacity: 0.9;
  width: 450px;
  text-align: center;
  margin: auto;
  color: black;
}

#bast
{
  background-color: black;
  
  width: 150px;
  text-align: center;
  float: right;
  color: blue;
}
ul.active
{
 border-color: white;
    border-left-color: black; 
    border-top-color: black;
    color: green; 
    background-color: #adadad;

}


#movie-list{float:left;list-style:none;margin-top:-3px;padding:0;width:190px;position: absolute;  background: white;}
#movie-list li{padding: 10px; background: white; border-bottom: #bbb9b9 1px solid;display: block; width: 190px;}
#movie-list li:hover{background:#ece3d2;cursor: pointer;display: block;}
#movie_box
{
background-color: white;
background-position: center;
background-size: cover;
}

</style>


</head>
<body>

<header style="font-size: 200%;">
<div id='bas'>
MANAGER AREA 
</div>

</header>


<ul>

  <li ><a href="manager.php">Home</a></li>

 

 
  <li><a href="staffs.php">Staffs</a></li>
  <li ><a href="coaches.php">Coaches</a></li>
    <li ><a href="play.php">Players</a></li>
        <li ><a href="p_managers.php">Previous Managers</a></li>
        <li ><a href="stadiums.php">Stadiums</a></li>
        <li ><a href="tournaments.php">Tournaments</a></li>
            <li ><a href="profile.php">Profile</a></li>


  <li style="float:right; color: white;padding-top: 15px;padding-right: 5px; "><?php 
    if(!isset($_SESSION['manager']))
{ 
  echo "<script>window.open('../login.php','_self')</script>";

 
}
else
{

echo "Welcome ".$_SESSION['manager'];



}
  ?></li>
 <li ><a href="logout.php">LogOut</a></li>
    
  

    </div>

</ul> 


<nav>
<br>
  <img src="a.gif" style="width: 225px; height: 200px;">
  <div class="lis">
  <ul>
    <li ><a href="schedules.php">Match Schedules</a></li>
    <li><a href="events.php">Events</a></li>
     <li><a href="training.php">Training</a></li>
    <li><a href="gallery.php">Gallery</a></li>
     <li><a href="fans.php">Fans Photos</a></li>
     <li><a href="calerts.php">Contract Alerts</a></li>
     <li><a href="cashbook.php">Cashbook</a></li>
     <li><a href="opinions.php">Staff Opinions</a></li>
     <li><a href="iplayers.php">Injured Players</a></li>


  </ul>
    </div>
    
</nav>