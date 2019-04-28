<?php 

include("header.php");
?>

<h1 style="text-align:center; font-size: 200%; ">Gallery</h1>
<div class="slideshow-container">

<?php
$con=mysqli_connect("localhost","root","","club");
$get_mov="select * from gallery order by id desc LIMIT 0,10";
$run_mov=mysqli_query($con,$get_mov);
$count=mysqli_num_rows($run_mov);
$i=1;
while($row_mov=mysqli_fetch_array($run_mov))
{
$movie_image=$row_mov['photo'];
$id=$row_mov['id'];
$desc=$row_mov['description'];
echo "<div class='mySlides fade'>
  <div class='numbertext' style='text-align:center;'>$i/$count</div>
  <a href='g_details.php?g_id=$id'>
  <img src='../admin_area/images/$movie_image' style='width:100%; height:500px; border: 4px solid grey;
    border-radius: 8px; border-style:double;'></a>
  <div class='text' style='color: black;'>$desc</div>
</div>";

$i++;
}

?>




<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <?php
$con=mysqli_connect("localhost","root","","club");
$get_mov="select * from gallery order by id desc LIMIT 0,10";
$run_mov=mysqli_query($con,$get_mov);
$count=mysqli_num_rows($run_mov);
$i=1;
while($row_mov=mysqli_fetch_array($run_mov))
{
echo "<span class='dot' onclick='currentSlide($i)'></span>";
$i++;
}


?>
 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

<center>
<br>
  <a href="gallery.php"><img src="as.png" style="width: 150px; height: 80px; "></a>
  
</center>




<?php

include("footer.php");

?>