<!DOCTYPE>
<html>
<head>
	<title>INSERTING CASHBOOK</title>
	
	<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=nl7f1ceqvxqbzrybr358plda3lgdi6u85rwqzybk64jzb0ht"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
</head>
<body bgcolor="skyblue">
<form action="insert_cashbook.php" method="post" enctype="multipart/form-data">
	<table align="center" width="700" height="500" border="2" bgcolor="yellow" style="background-color: #ffc107">
		<tr align="center">
			<td colspan="5"><h1 style="text-align:center">INSERT NEW POST HERE</h1></td>
		</tr>

<tr>
			<td align="right">Month</td>
			<td><select name="month">

          <option>Select Month</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>

      </select></td>
		</tr>
		<tr>
			<td align="right">Year</td>
			<td>
               <input type="text" name="year" required>
			</td>
		</tr>
		<tr>
			<td align="right">Player Salary</td>
			<td>
               <input type="text" name="player_salary" value="<?php $con=mysqli_connect("localhost","root","","club");
 

$sal=0;
  
  $movie="select * from player order by id";
  $run_movie=mysqli_query($con,$movie);
  while($row_movie=mysqli_fetch_array($run_movie))
  {
    

    
              $salary=$row_movie['salary'];
                $sal+=$salary;}
                echo $sal;
?>" readonly>
			</td>
		</tr>
		<tr>
			<td align="right">Manager Salary</td>
			<td>
               <input type="text" name="manager_salary" value="<?php $con=mysqli_connect("localhost","root","","club");
 

$sal=0;
  
  $movie="select * from manager where status='current' order by id";
  $run_movie=mysqli_query($con,$movie);
  while($row_movie=mysqli_fetch_array($run_movie))
  {
    

    
              $salary=$row_movie['salary'];
                $sal+=$salary;}
                echo $sal;
?>" readonly>

			</td>
		</tr>
		<tr>
			<td align="right">Staff Salary</td>
			<td>
               <input type="text" name="staff_salary" value="<?php $con=mysqli_connect("localhost","root","","club");
 

$sal=0;
  
  $movie="select * from staff order by id";
  $run_movie=mysqli_query($con,$movie);
  while($row_movie=mysqli_fetch_array($run_movie))
  {
    

    
              $salary=$row_movie['salary'];
                $sal+=$salary;}
                echo $sal;
?>" readonly>
			</td>
		</tr>
		<tr>
			<td align="right">Coach Salary</td>
			<td>
               <input type="text" name="coach_salary" value="<?php $con=mysqli_connect("localhost","root","","club");
 

$sal=0;
  
  $movie="select * from coach order by id";
  $run_movie=mysqli_query($con,$movie);
  while($row_movie=mysqli_fetch_array($run_movie))
  {
    

    
              $salary=$row_movie['salary'];
                $sal+=$salary;}
                echo $sal;
?>" readonly>
			</td>
		</tr>
		<tr>
			<td align="right">Merchandise Sale</td>
			<td><input type="text" name="merchandise_sale" required>
  </td>
</tr>
		<tr>
			<td align="right">Ticket Sale</td>
			<td><input type="text" name="ticket_sale" required>
  </td>
</tr>
		<tr>
			<td align="right">Endorsements</td>
			<td><input type="text" name="endorsements" required>
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
$month=$_POST['month'];
$year=$_POST['year'];
$player_salary=$_POST['player_salary'];
$coach_salary=$_POST['coach_salary'];
$staff_salary=$_POST['staff_salary'];
$manager_salary=$_POST['manager_salary'];
$merchandise_sale=$_POST['merchandise_sale'];
$ticket_sale=$_POST['ticket_sale'];
$endorsements=$_POST['endorsements'];

$insert_movie="insert into cashbook(month,year,player_salary,coach_salary,staff_salary,manager_salary,merchandise_sale,ticket_sale,endorsements) values ('$month','$year','$player_salary','$coach_salary','$staff_salary','$manager_salary','$merchandise_sale','$ticket_sale','$endorsements')";

$insert_mov= mysqli_query($con, $insert_movie);

if($insert_mov)
{
	echo "<script>alert('THE CASHBOOK ENTRY HAS BEEN INSERTED!')</script>";
	echo "<script>window.open('admin.php?icb','_self')</script>";
}
else
{
		echo "<script>alert('THE CASHBOOK ENTRY ALREADY BEEN INSERTED!')</script>";
	echo "<script>window.open('admin.php?icb','_self')</script>";
}


}
?>