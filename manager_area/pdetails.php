<?php 

include("header.php");
?>
<center>
<article>
<center>

<h1 style="text-align: center;">Player Details</h1>
</center>
<?php
if(isset($_GET['p_id']))
{$id=$_GET['p_id'];
$con=mysqli_connect("localhost","root","","club");

$get_mov="select * from player where id='$id' LIMIT 1";
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
<p>Section:<b> $section</b></p>
<p>Position:<b> $position</b></p>
<p>Form:<b> $form</b></p>
<p>Fitness:<b> $fitness</b></p>

<p>Nationality:<b> $nationality</b></p>
<p>Age:<b> $age</b></p>
<p>Morale:<b> $morale</b></p>
<p>Contract Termination:<b> $contract</b></p>
<p>Salary:<b>$ $salary</b></p>





";

}}
?>
</article>

</center>


<?php

include("footer.php");

?>