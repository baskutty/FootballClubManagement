<!DOCTYPE>
<html>
<head>
	<title>INSERTING STADIUM</title>
	
	<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=nl7f1ceqvxqbzrybr358plda3lgdi6u85rwqzybk64jzb0ht"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
</head>
<body bgcolor="skyblue">
<form action="insert_stadium.php" method="post" enctype="multipart/form-data">
	<table align="center" width="700" height="500" border="2" bgcolor="yellow" style="background-color: #ffc107">
		<tr align="center">
			<td colspan="5"><h1 style="text-align:center">INSERT NEW POST HERE</h1></td>
		</tr>

<tr>
			<td align="right">Name</td>
			<td>
               <input type="text" name="name" required>

			</td>
		</tr>
		<tr>
			<td align="right">Location</td>
			<td>
               <input type="text" name="location" required>

			</td>
		</tr>
		<tr>
			<td align="right">Capacity</td>
			<td>
               <input type="text" name="capacity" required>

			</td>
		</tr>
			
		
		<tr>
			<td align="right">Stadium Image</td>
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
$location=$_POST['location'];
$capacity=$_POST['capacity'];


$photo=$_FILES['photo']['name'];
$photo_temp=$_FILES['photo']['tmp_name'];
move_uploaded_file($photo_temp, "images/$photo");
$insert_movie="insert into stadium(name,location,capacity,photo) values ('$name','$location','$capacity','$photo')";

$insert_mov= mysqli_query($con, $insert_movie);

if($insert_mov)
{
	echo "<script>alert('THE STADIUM HAS BEEN INSERTED!')</script>";
	echo "<script>window.open('admin.php?ist','_self')</script>";
}


}
?>