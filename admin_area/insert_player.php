<!DOCTYPE>
<html>
<head>
	<title>INSERTING PLAYER</title>
	
	<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=nl7f1ceqvxqbzrybr358plda3lgdi6u85rwqzybk64jzb0ht"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
</head>
<body bgcolor="skyblue">
<form action="insert_player.php" method="post" enctype="multipart/form-data">
	<table align="center" width="700" height="500" border="2" bgcolor="yellow" style="background-color: #ffc107">
		<tr align="center">
			<td colspan="5"><h1 style="text-align:center">INSERT NEW POST HERE</h1></td>
		</tr>

<tr>
			<td align="right">Name</td>
			<td><input type="text" name="name" required></td>
		</tr>
		<tr>
			<td align="right">Morale</td>
			<td><select name="morale">

          <option>Select Morale</option>
          <option value="Very Happy">Very Happy</option>
          <option value="Happy">Happy</option>
          <option value="Sad">Sad</option>
          
      </select>
  </td>
		</tr>
		<tr>
			<td align="right">Form</td>
			<td><select name="form">

          <option>Select Form</option>
          <option value="Very Good">Very Good</option>
          <option value="Good">Good</option>
          <option value="Poor">Poor</option>
          
      </select>
  </td>
		</tr>
		<tr>
			<td align="right">Fitness</td>
			<td><select name="fitness">

          <option>Select Fitness</option>
          <option value="Fit">Fit</option>
          <option value="Rest">Rest</option>
          <option value="Injured">Injured</option>
          
      </select>
  </td>
		</tr>
		<tr>
			<td align="right">Age</td>
			<td>
               <input type="text" name="age" required>

			</td>
		</tr>
		<tr>
			<td align="right">Nationality</td>
			<td>
               <input type="text" name="nationality" required>
			</td>
		</tr>
		<tr>
			<td align="right">Salary</td>
			<td>
               <input type="text" name="salary" required>
			</td>
		</tr>
		<tr>
			<td align="right">Section</td>
			<td><select name="section">

          <option>Select Section</option>
          <option value="A team">A Team</option>
          <option value="B team">B team</option>
          
      </select>
  </td>
</tr>
<tr>
			<td align="right">Position</td>
			<td>
               <input type="text" name="position" required>
			</td>
		</tr>
		<tr>
			<td align="right">Contract Termination</td>
			<td>
               <input type="date" name="contract" required>
			</td>
		</tr>
		<tr>
			<td align="right">Player Image</td>
			<td><input type="file" name="photo" required></td>
		</tr>
		
		
		
		
		
		<tr align="center">
			<td colspan="5"><input type="submit" name="insert_post" value="Insert Now"/></td>
		</tr>




	</table>
</form>


</body>



</html>
<?php
$con=mysqli_connect("localhost","root","","club");
if(isset($_POST['insert_post']))
{
$name=$_POST['name'];
$morale=$_POST['morale'];
$position=$_POST['position'];
$form=$_POST['form'];
$contract=$_POST['contract'];
$fitness=$_POST['fitness'];

$section=$_POST['section'];
$age=$_POST['age'];
$nationality=$_POST['nationality'];
$salary=$_POST['salary'];

$photo=$_FILES['photo']['name'];
$photo_temp=$_FILES['photo']['tmp_name'];
move_uploaded_file($photo_temp, "images/$photo");
$insert_movie="insert into player(name,morale,position,fitness,form,contract,section,age,nationality,salary,photo) values ('$name','$morale','$position','$fitness','$form','$contract','$section','$age','$nationality','$salary','$photo')";

$insert_mov= mysqli_query($con, $insert_movie);

if($insert_mov)
{
	echo "<script>alert('THE PLAYER HAS BEEN INSERTED!')</script>";
	echo "<script>window.open('admin.php?ip','_self')</script>";
}


}
?>