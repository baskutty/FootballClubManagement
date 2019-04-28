<?php 

include("header.php");
date_default_timezone_set('Asia/Kolkata');
$today=date('Y-m-d');
?>

<!DOCTYPE>
<html>
<head>
	<title>POST YOUR OPINIONS</title>
	
	<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=nl7f1ceqvxqbzrybr358plda3lgdi6u85rwqzybk64jzb0ht"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
</head>
<body bgcolor="skyblue">
<form action="opinions.php" method="post" enctype="multipart/form-data">
	<table align="center" width="700" height="500" border="2" bgcolor="skyblue" style="background-color: skyblue;">
		<tr align="center">
			<td colspan="5"><h1 style="text-align:center">POST YOUR OPINION </h1></td>
		</tr>


			
		

		
		
		
		<tr>
			<td align="right">Your Opinion</td>
			<td><textarea name="opinion" cols="60" rows="15"> </textarea></td>
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
$opinion=$_POST['opinion'];

$staff_username=$_SESSION['staff'];


$insert_movie="insert into opinions(opinion,date,staff_username) values ('$opinion','$today','$staff_username')";

$insert_mov= mysqli_query($con, $insert_movie);

if($insert_mov)
{
	echo "<script>alert('YOUR OPINION IS POSTED')</script>";
	echo "<script>window.open('popinions.php','_self')</script>";
}


}
?>




<?php

include("footer.php");

?>