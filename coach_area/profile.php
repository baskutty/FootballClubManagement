<?php 

include("header.php");
?>
<center>
<article>
<center>

<h1 style="text-align: center;">Profile</h1>
</center>
<?php
$con=mysqli_connect("localhost","root","","club");
$username=$_SESSION['coach'];
$get_mov="select * from coach where username='$username' LIMIT 1";
$run_mov=mysqli_query($con,$get_mov);
while($row_movie=mysqli_fetch_array($run_mov))
{
$id=$row_movie['id'];
    $name=$row_movie['name'];
    $password=$row_movie['password'];
      $username=$row_movie['username'];
        $nationality=$row_movie['nationality'];
          $age=$row_movie['age'];
            $section=$row_movie['section'];
              $salary=$row_movie['salary'];
                $designation=$row_movie['designation'];

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
<p>Username:<b> $username</b></p>
<p>Password:<b> *********  </b>  <a href='cp.php'>change</a></p>
<p>Nationality:<b> $nationality</b></p>
<p>Age:<b> $age</b></p>
<p>Salary:<b>$ $salary</b></p>
<p>Section:<b> $section</b></p>
<p>Designation:<b> $designation</b></p>




";

}
?>
</article>

</center>


<?php

include("footer.php");

?>