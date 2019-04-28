<?php 

include("header.php");
?>
<center>
<article>
<center>

<h1 style="text-align: center;">Event Details</h1>
</center>
<?php
if(isset($_GET['e_id']))
{$id=$_GET['e_id'];
$con=mysqli_connect("localhost","root","","club");

$get_mov="select * from events where id='$id' LIMIT 1";
$run_mov=mysqli_query($con,$get_mov);
while($row_movie=mysqli_fetch_array($run_mov))
{

                $id=$row_movie['id'];
    $name=$row_movie['name'];
    $date=$row_movie['date'];
                $description=$row_movie['description'];

$image=$row_movie['photo'];
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
<img width='400' height='400' src='../admin_area/images/$image' style='margin-top:25px; border: 2px solid grey;
    border-radius: 8px;'/>

<h4 font-size:150%>$name</h4>



<p><b><i><u>Details : </u></i></b></p>
<p>Date:<b> $date</b></p>
<p>Description:<b> $description</b></p>






";

}}
?>
</article>

</center>


<?php

include("footer.php");

?>