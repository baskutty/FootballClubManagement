<?php 

include("header.php");
date_default_timezone_set('Asia/Kolkata');
$today=date('Y-m-d');
?>
<article>
<center>

<h1 style="text-align: center;">Contract Alerts</h1>
</center>
<?php
$con=mysqli_connect("localhost","root","","club");
$get_mov="select * from player order by contract asc";
$run_mov=mysqli_query($con,$get_mov);
while($row_movie=mysqli_fetch_array($run_mov))
{
$id=$row_movie['id'];
    $name=$row_movie['name'];
    $section=$row_movie['section'];
      $position=$row_movie['position'];
        $nationality=$row_movie['nationality'];
          $age=$row_movie['age'];
            $form=$row_movie['form'];
              $salary=$row_movie['salary'];
                $fitness=$row_movie['fitness'];
                $morale=$row_movie['morale'];
                $contract=$row_movie['contract'];
$date1=date_create($today);
$date2=date_create($contract);
$diff=date_diff($date1,$date2);

$image=$row_movie['photo'];
$d=$diff->format("%R%a");

if($d<=0)
{
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

<a href='pdetails.php?p_id=$id'><img width='240' height='240' src='../admin_area/images/$image'  style=' border: 2px solid grey;
    border-radius: 8px;'/></a>
<br>
<a href='pdetails.php?p_id=$id'><h4 style='color:rgb(0,69,135);'>$name</h4></a>
<p style='color:red;'>Contract Expired</p>
<br>

</div>";
}
else if($d<=365)
{
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

<a href='pdetails.php?p_id=$id'><img width='240' height='240' src='../admin_area/images/$image'  style=' border: 2px solid grey;
    border-radius: 8px;'/></a>
<br>
<a href='pdetails.php?p_id=$id'><h4 style='color:rgb(0,69,135);'>$name</h4></a>
<p>$d days remaining</p>
<br>

</div>";
}

}
?>
</article>



<?php

include("footer.php");

?>