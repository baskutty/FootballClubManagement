

<?php 

include("header.php");
?>
<article>
<center>

<h1 style="text-align: center; ">Previous Training Sessions</h1>
</center>
<?php

$con=mysqli_connect("localhost","root","","club");
$get_mov="select * from training  order by date desc";
$run_mov=mysqli_query($con,$get_mov);
while($row_movie=mysqli_fetch_array($run_mov))
{



$tname=$row_movie['name'];
  $date=$row_movie['date'];
  
$username=$row_movie['coach_username'];
$summary=$row_movie['summary'];

$get_movi="select * from coach where username='$username' LIMIT 1";
$run_movi=mysqli_query($con,$get_movi);
while($row_moviei=mysqli_fetch_array($run_movi))
{



$id=$row_moviei['id'];
    $name=$row_moviei['name'];
    $password=$row_moviei['password'];
      $username=$row_moviei['username'];
        $nationality=$row_moviei['nationality'];
          $age=$row_moviei['age'];
            $designation=$row_moviei['designation'];
              $salary=$row_moviei['salary'];
                $section=$row_moviei['section'];

$image=$row_moviei['photo'];

echo "
<div id='movie_box' class ='dashdiv'style='margin-left: 120px;
    padding: 20px;
    margin-top:10px;
    text-align: left;
   width:1300px;
    height:360px;
    display: inline-block;
    background-color: #c6f1dd;
    border: 2px solid black;
    border-radius: 8px;
margin-bottom: 80px;'>

<a href='cdetails.php?c_id=$id'><img width='60' height='60' src='../admin_area/images/$image'  style=' border: 2px solid grey;
    border-radius: 8px;'/></a>

<h4 style='color:red;'>$name</h4>


<h4 style='color:green;'>$date</h4>
<h4 style='color:brown;'>Section: $section</h4>
<h4 style='color:brown;'>Designation: $designation</h4>
<h3 style='color:black;'><b>Training : $tname</b></h3>

$summary
</div>";

}}
?>
</article>



<?php

include("footer.php");

?>

