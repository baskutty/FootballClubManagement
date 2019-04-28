<!DOCTYPE>
<html>
<head>
	<title>INSERTING MATCH DETAILS</title>
	
	<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=nl7f1ceqvxqbzrybr358plda3lgdi6u85rwqzybk64jzb0ht"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
</head>
<body bgcolor="skyblue">
<form action="insert_matches.php" method="post" enctype="multipart/form-data">
	<table align="center" width="700" height="500" border="2" bgcolor="yellow" style="background-color: #ffc107">
		<tr align="center">
			<td colspan="5"><h1 style="text-align:center">INSERT NEW POST HERE</h1></td>
		</tr>

<tr>
			<td align="right">Tournament Name</td>
			<td><select name="tournament">

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
			<td align="right">Team</td>
			<td><select name="team">

          <option>Select Team</option>
          <option value="A team">A team </option>
          <option value="B team">B team</option>
          </select></td>
		</tr>
		<tr>
			<td align="right">date</td>
			<td>
               <input type="date" name="date" required>
			</td>
		</tr>
		
		<tr>
			<td align="right">Versus</td>
			<td><input type="text" name="versus" required>
  </td>
</tr>
		<tr>
			<td align="right">Result</td>
			<td><input type="text" name="result" required>
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
$date=$_POST['date'];
$team=$_POST['team'];
$versus=$_POST['versus'];
$tournament=$_POST['tournament'];
$result=$_POST['result'];



$insert_movie="insert into matches(date,team,versus,tournament,result) values ('$date','$team','$versus','$tournament','$result')";

$insert_mov= mysqli_query($con, $insert_movie);

if($insert_mov)
{
	echo "<script>alert('THE MATCH DETAIL ENTRY HAS BEEN INSERTED!')</script>";
	echo "<script>window.open('admin.php?imt','_self')</script>";
}
else
{
		echo "<script>alert('THE MATCH ENTRY ALREADY BEEN INSERTED!')</script>";
	echo "<script>window.open('admin.php?imt','_self')</script>";
}


}
?>