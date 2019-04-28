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
<form action='' method='post' enctype='multipart/form-data'>
<tr>
            <td align='right'>Section</td>
            <td><select name='section'>

          <option value='$section'>$section</option>
          <option value='A team'>A team</option>
          <option value='B team'>B team</option>
         
          
      </select>
  </td>
        </tr>

<tr>
            <td align='right'>Morale</td>
            <td><select name='morale'>

          <option value='$morale'>$morale</option>
          <option value='Very Happy'>Very Happy</option>
          <option value='Happy'>Happy</option>
          <option value='Sad'>Sad</option>
          
      </select>
  </td>
        </tr>
        <tr>
            <td align='right'>Form</td>
            <td><select name='form'>

          <option value='$form'>$form</option>
          <option value='Very Good'>Very Good</option>
          <option value='Good'>Good</option>
          <option value='Poor'>Poor</option>
          
      </select>
  </td>
        </tr>
        <tr>
            <td align='right'>Fitness</td>
            <td><select name='fitness'>

          <option value='$fitness'>$fitness</option>
          <option value='Fit'>Fit</option>
          <option value='Rest'>Rest</option>
          <option value='Injured'>Injured</option>
          
      </select>
  </td>
        </tr>
        <tr align='center'>
            <td colspan='5'><input type='submit' name='insert_post' value='Update Now'/></td>
        </tr>
</form>

<p>Nationality:<b> $nationality</b></p>
<p>Age:<b> $age</b></p>

<p>Contract Termination:<b> $contract</b></p>
<p>Salary:<b>$ $salary</b></p>





";

}}
?>
</article>

</center>


<?php
$con=mysqli_connect("localhost","root","","club");
if(isset($_POST['insert_post']))
{
    $id=$_GET['p_id'];

$morale=$_POST['morale'];

$form=$_POST['form'];

$fitness=$_POST['fitness'];
$section=$_POST['section'];

$update="UPDATE player SET morale = '$morale', form='$form', fitness='$fitness', section='$section' WHERE id = '$id'";
$insert_mov= mysqli_query($con, $update);

if($insert_mov)
{
  echo "<script>alert('THE Player HAS BEEN UPDATED!')</script>";
  echo "<script>window.open('pdetails.php?p_id=$id','_self')</script>";
}






}
include("footer.php");

?>