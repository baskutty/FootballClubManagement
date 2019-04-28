<?php 

include("header.php");
?>
<article>
<center>

<h1 style="text-align: center;">Coaches List</h1>
</center>
<?php
$con=mysqli_connect("localhost","root","","club");
$get_mov="select * from coach order by id desc";
$run_mov=mysqli_query($con,$get_mov);
while($row_movie=mysqli_fetch_array($run_mov))
{
$id=$row_movie['id'];
    $name=$row_movie['name'];
    $password=$row_movie['password'];
      $username=$row_movie['username'];
        $nationality=$row_movie['nationality'];
          $age=$row_movie['age'];
            $designation=$row_movie['designation'];
              $salary=$row_movie['salary'];
                $section=$row_movie['section'];

$image=$row_movie['photo'];
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

<a href='tdetails.php?the_id=$id'><img width='240' height='240' src='../admin_area/images/$image'  style=' border: 2px solid grey;
    border-radius: 8px;'/></a>
<br>
<a href='cdetails.php?c_id=$id'><h4 style='color:rgb(0,69,135);'>$name</h4></a>
<br>

</div>";

}
?>
</article>



<?php

include("footer.php");

?>