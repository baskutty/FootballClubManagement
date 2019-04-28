<!DOCTYPE>
<html>
<head>
	<title>INSERTING TOURNAMENT DETAILS</title>
	
	<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=nl7f1ceqvxqbzrybr358plda3lgdi6u85rwqzybk64jzb0ht"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
</head>
<body bgcolor="skyblue">
<form action="insert_tournament.php" method="post" enctype="multipart/form-data">
	<table align="center" width="700" height="500" border="2" bgcolor="yellow" style="background-color: #ffc107">
		<tr align="center">
			<td colspan="5"><h1 style="text-align:center">INSERT NEW POST HERE</h1></td>
		</tr>

<tr>
			<td align="right">Name</td>
			<td><select name="name">

          <option>Select Tournament Name</option>
          <option value="La Liga">La Liga </option>
          <option value="Copa Del Rey">Copa Del Rey</option>
          <option value="La Liga Segunda Division">La Liga Segunda Division</option>
          <option value="Champions League">Champions League</option>
          <option value="Super Cup">Super Cup</option>
          <option value="International Club World Cup">International Club World Cup</option>
          

      </select></td>
		</tr>
		<tr>
			<td align="right">Year</td>
			<td>
               <input type="text" name="year" required>
			</td>
		</tr>
		
		<tr>
			<td align="right">Position</td>
			<td><input type="text" name="position" required>
  </td>
</tr>
		<tr>
			<td align="right">Top Scorer</td>
			<td><input type="text" name="topscorer" required>
  </td>
</tr>
		
			<tr>
			<td align="right">Top Assists</td>
			<td><input type="text" name="topassists" required>
  </td>
</tr>
		<tr>
			<td align="right">Top Clean Sheets</td>
			<td><input type="text" name="topcleansheets" required>
  </td>
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
$year=$_POST['year'];
$position=$_POST['position'];
$topscorer=$_POST['topscorer'];
$topassists=$_POST['topassists'];
$topcleansheets=$_POST['topcleansheets'];


$insert_movie="insert into tournament(name,year,topscorer,topassists,topcleansheets,position) values ('$name','$year','$topscorer','$topassists','$topcleansheets','$position')";

$insert_mov= mysqli_query($con, $insert_movie);

if($insert_mov)
{
	echo "<script>alert('THE TOURNAMENT DETAIL ENTRY HAS BEEN INSERTED!')</script>";
	echo "<script>window.open('admin.php?it','_self')</script>";
}
else
{
		echo "<script>alert('THE TOURNAMENT ENTRY ALREADY BEEN INSERTED!')</script>";
	echo "<script>window.open('admin.php?it','_self')</script>";
}


}
?>