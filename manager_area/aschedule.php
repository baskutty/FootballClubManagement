<?php 

include("header.php");
?>
<article>
<center>

<h1 style="text-align: center;">A Team Schedule</h1>
</center>
<?php
$con=mysqli_connect("localhost","root","","club");
$get_mov="select * from matches where team='A team' order by date DESC";
$run_mov=mysqli_query($con,$get_mov);
while($row_movie=mysqli_fetch_array($run_mov))
{
$date=$row_movie['date'];
$team=$row_movie['team'];
$versus=$row_movie['versus'];
$tournament=$row_movie['tournament'];
$result=$row_movie['result'];
    
                



echo "
<div id='movie_box' class ='dashdiv'style='margin-left: 120px;
    padding: 20px;
    margin-top:10px;
    text-align: center;
    width:300px;
    height:300px;
    display: inline-block;
    background-color: white;
    border: 2px solid black;
    border-radius: 8px;
margin-bottom: 80px;'>


<br>
<h1 style='color:red; font-size:20px;'>$date</h1>
<h1 style='color:rgb(0,69,135); font-size:20px;'>Versus: $versus</h1>
<h1 style='color:brown; font-size:18px;'>$tournament</h1>
<h1 style='color:green; font-size:20px;'>Result: $result</h1>
<br>

</div>";

}
?>
</article>



<?php

include("footer.php");

?>