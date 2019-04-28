<?php 

include("header.php");
?>
<center>
<article>
<center>

<h1 style="text-align: center;">DETAILS</h1>
</center>
<?php
if(isset($_GET['year']))
{$year=$_GET['year'];
$name=$_GET['name'];

$con=mysqli_connect("localhost","root","","club");

$get_mov="select * from tournament where name='$name' and year='$year' LIMIT 1";
$run_mov=mysqli_query($con,$get_mov);
while($row_movie=mysqli_fetch_array($run_mov))
{

    
                $position=$row_movie['position'];
                 $topscorer=$row_movie['topscorer'];
                 $topassists=$row_movie['topassists'];
                 $topcleansheets=$row_movie['topcleansheets'];
                



echo "
<div id='movie_box' class='dashdiv' style='
    padding: 10px;
    margin-top:25px;
    text-align: center;
    width:600px;
    display: inline-block;
    background-color: white;
    border: 2px solid grey;
    border-radius: 8px;
    margin-bottom: 40px;'>
<h1 style='color:rgb(0,69,135); font-size:60px;'>$name</h1>
<h1 style='color:rgb(0,69,135); font-size:60px;'>$year</h1>
<h1 style='color:green; font-size:40px;'>Position:<b> $position</b></h1>



<p><b><i><u>Details : </u></i></b></p>
<p>Top Scorer:<b> $topscorer</b></p>
<p>Top Assists:<b> $topassists</b></p>
<p>Top Clean Sheets:<b> $topcleansheets</b></p>







";

}}
?>
</article>

</center>


<?php

include("footer.php");

?>