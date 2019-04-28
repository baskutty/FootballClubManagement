<?php 

include("header.php");
?>


<article>
<center>

<h1 style="text-align: center;">Schedules</h1>
</center>
<?php
$con=mysqli_connect("localhost","root","","club");
$get_mov="select * from coach order by id desc";
$run_mov=mysqli_query($con,$get_mov);



echo "
<div id='movie_box' class ='dashdiv'style='margin-left: 120px;
    padding: 20px;
    margin-top:10px;
    text-align: center;
    width:320px;
    height:360px;
    display: inline-block;
    background-color: white;
    border: 2px solid black;
    border-radius: 8px;
margin-bottom: 80px;'>

<a href='aschedule.php'><img width='240' height='240' src='ateam.jpg'  style=' border: 2px solid grey;
    border-radius: 8px;'/></a>
<br>
<a href='aschedule.php'><h4 style='color:rgb(0,69,135);'>A Team</h4></a>
<br>

</div>";
echo "
<div id='movie_box' class ='dashdiv'style='margin-left: 120px;
    padding: 20px;
    margin-top:10px;
    text-align: center;
    width:320px;
    height:360px;
    display: inline-block;
    background-color: white;
    border: 2px solid black;
    border-radius: 8px;
margin-bottom: 80px;'>

<a href='bschedule.php'><img width='240' height='240' src='bteam.jpg'  style=' border: 2px solid grey;
    border-radius: 8px;'/></a>
<br>
<a href='bschedule.php'><h4 style='color:rgb(0,69,135);'>B Team</h4></a>
<br>

</div>";


?>
</article>


<?php

include("footer.php");

?>