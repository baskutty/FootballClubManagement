<?php 

include("header.php");
if(isset($_GET['name']))
{
    $name=$_GET['name'];
}
?>
<article>
<center>

<?php 
if(isset($_GET['name']))
{
    $name=$_GET['name'];
    echo "<h1 style='text-align: center;''>$name</h1>";
} ?>
</center>
<?php
if(isset($_GET['name']))
{
    $name=$_GET['name'];

$con=mysqli_connect("localhost","root","","club");
$get_mov="select * from tournament where name='$name' group by year order by year desc";
$run_mov=mysqli_query($con,$get_mov);
while($row_movie=mysqli_fetch_array($run_mov))
{

    
                $year=$row_movie['year'];



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
<a href='tdetails.php?year=$year&&name=$name'><h1 style='color:rgb(0,69,135); font-size:60px;'>$year</h1></a>
<br>

</div>";

}}
?>
</article>



<?php

include("footer.php");

?>