<!DOCTYPE>
<html>
<head>
	<title>INSERTING STAFF</title>
	
	<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=nl7f1ceqvxqbzrybr358plda3lgdi6u85rwqzybk64jzb0ht"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
</head>
<body bgcolor="skyblue">
<form action="insert_staff.php" method="post" enctype="multipart/form-data">
	<table align="center" width="700" height="500" border="2" bgcolor="yellow" style="background-color: #ffc107">
		<tr align="center">
			<td colspan="5"><h1 style="text-align:center">INSERT NEW POST HERE</h1></td>
		</tr>

<tr>
			<td align="right">Name</td>
			<td><input type="text" name="name" required></td>
		</tr>
		<tr>
			<td align="right">Username</td>
			<td>
               <input type="text" name="username" required>
			</td>
		</tr>
		<tr>
			<td align="right">Password</td>
			<td>
               <input type="text" name="password" required>
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
			<td align="right">Department</td>
			<td><select name="department">

          <option>Select Department</option>
          <option value="Stadium">Stadium</option>
          <option value="Public Relation">Public Relation</option>
          <option value="Medical">Medical</option>
      </select>
  </td>
</tr>
<tr>
			<td align="right">Designation</td>
			<td>
               <input type="text" name="designation" required>
			</td>
		</tr>
		<tr>
			<td align="right">Staff Image</td>
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
$username=$_POST['username'];
$password=$_POST['password'];
$designation=$_POST['designation'];
$department=$_POST['department'];
$age=$_POST['age'];
$nationality=$_POST['nationality'];
$salary=$_POST['salary'];

$photo=$_FILES['photo']['name'];
$photo_temp=$_FILES['photo']['tmp_name'];
move_uploaded_file($photo_temp, "images/$photo");
$insert_movie="insert into staff(name,username,password,designation,department,age,nationality,salary,photo) values ('$name','$username','$password','$designation','$department','$age','$nationality','$salary','$photo')";

$insert_mov= mysqli_query($con, $insert_movie);

if($insert_mov)
{
	echo "<script>alert('THE STAFF HAS BEEN INSERTED!')</script>";
	echo "<script>window.open('admin.php?is','_self')</script>";
}


}
?>