<?php 

include("header.php");
?>
<article>
<center>

<h1 style="text-align: center;">TOURNAMENTS</h1>
</center>
<?php
$con=mysqli_connect("localhost","root","","club");
$get_mov="select * from tournament group by name";
$run_mov=mysqli_query($con,$get_mov);
while($row_movie=mysqli_fetch_array($run_mov))
{

    
                $name=$row_movie['name'];



echo "
<div id='movie_box' class ='dashdiv'style='margin-left: 200px;
    padding: 20px;
    margin-top:10px;
    text-align: center;
    width:370px;
    height:120px;
    display: inline-block;
    background-color: white;
    border: 2px solid black;
    border-radius: 8px;
margin-bottom: 80px;'>

<a href='tname.php?name=$name'><h1 style='color:rgb(0,69,135); font-size:18px;'>$name</h1></a>
<br>

</div>";

}
?>
</article>



<?php

include("footer.php");

?>