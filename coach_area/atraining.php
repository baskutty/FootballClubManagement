<?php 

include("header.php");
date_default_timezone_set('Asia/Kolkata');
$today=date('Y-m-d');
?>

<!DOCTYPE>
<html>
<head>
	<title>ADD TRAINING SESSIONS</title>
	
	<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=nl7f1ceqvxqbzrybr358plda3lgdi6u85rwqzybk64jzb0ht"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
</head>
<body bgcolor="skyblue">
<form action="atraining.php" method="post" enctype="multipart/form-data">
	<table align="center" width="700" height="500" border="2" bgcolor="skyblue" style="background-color: skyblue;">
		<tr align="center">
			<td colspan="5"><h1 style="text-align:center">ADD TRAINING </h1></td>
		</tr>

<tr>
			<td align="right">Name</td>
			<td><input type="text" name="name" required></td>
		</tr>
		<tr>
			<td align="right">Date</td>
			<td><input type="date" name="date" required></td>
		</tr>
			
		

		
		
		
		<tr>
			<td align="right">Summary</td>
			<td><textarea name="summary" cols="60" rows="15"> </textarea></td>
		</tr>
		
		<tr align="center">
			<td colspan="5"><input type="submit" name="insert_post" value="POST"/></td>
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
	$date=$_POST['date'];
	

$summary=$_POST['summary'];

$coach_username=$_SESSION['coach'];


$insert_movie="insert into training(name,date,coach_username,summary) values ('$name','$date','$coach_username','$summary')";

$insert_mov= mysqli_query($con, $insert_movie);

if($insert_mov)
{
	echo "<script>alert('YOUR Training Session IS POSTED')</script>";
	echo "<script>window.open('training.php','_self')</script>";
}


}
?>




<?php

include("footer.php");

?>