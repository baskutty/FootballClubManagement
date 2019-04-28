<?php
session_start();

if(!isset($_SESSION['admin']))
           {

            echo "<script>window.open('../login.php','_self')</script>";


           }
           else
           {
  
?>


<!DOCTYPE>
<html>
<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/logo.gif">

    <title>ADMIN PANEL</title>


    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  

    <!-- Custom styles for this template -->
   
    <link href="css/custom.css" rel="stylesheet" media="all">
<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=nl7f1ceqvxqbzrybr358plda3lgdi6u85rwqzybk64jzb0ht"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	</head>





<body>
<img class="logo" src="images/bg-header.jpg" title="logo" alt="logo" />
 


    
      
          <div class="container-fluid">
      <div class="row" >
        <div class="col-sm-3 col-md-2 sidebar">
           <div id="sidebar_title">MANAGE CONTENT</div>
          <ul class="nav nav-sidebar">
              <li> <a href="admin.php">ADMIN HOME</a></li>
           <li> <a href="admin.php?m">MANAGERS</a></li>
           <li> <a href="admin.php?s">STAFFS</a></li>
           <li> <a href="admin.php?c">COACHES</a></li>
           <li> <a href="admin.php?p">PLAYERS</a></li>
           <li> <a href="admin.php?im">INSERT MANAGER</a></li>
           <li> <a href="admin.php?is">INSERT STAFFS</a></li>
           <li> <a href="admin.php?ic">INSERT COACHES</a></li>
           <li> <a href="admin.php?ip">INSERT PLAYERS</a></li>
            <li> <a href="admin.php?ig">INSERT GALLERY</a></li>
                <li> <a href="admin_logout.php">ADMIN LOGOUT</a></li>
          </ul>
           </div>
        <div class="main">
         <?php
    if(isset($_GET['player_id']))
    {

$movie_id=$_GET['player_id'];
$con=mysqli_connect("localhost","root","","club");

$get_movs="select * from player where id=$movie_id";
$run_movs=mysqli_query($con,$get_movs);
while($row_movie=mysqli_fetch_array($run_movs))
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




    ?>
<form action="edit.php?player_id=<?php echo"$movie_id"; ?>" method="post" enctype="multipart/form-data">
  <table align="center" width="700" height="500" border="2" bgcolor="yellow" style="background-color: #ffc107">

    <tr align="center">
      <td colspan="5"><h1 style="text-align:center">UPDATE PLAYER HERE</h1></td>
    </tr>


    
    <tr>
      <td align="right">Name</td>
      <td><input type="text" name="name" value="<?php echo $name;?>"></td>
    </tr>
    <tr>
      <td align="right">Morale</td>
      <td><select name="morale">

          <option value="<?php echo $morale;?>"><?php
echo $morale;
          ?></option>
          <option value="Very Happy">Very Happy</option>
          <option value="Happy">Happy</option>
<option value="Sad">Sad</option>
 </select>
  </td>
    </tr>
    <tr>
      <td align="right">Form</td>
      <td><select name="form">

          <option value="<?php echo $form;?>"><?php
echo $form;
          ?></option>
          <option value="Very Good">Very Good</option>
          <option value="Good">Good</option>
          <option value="Poor">Poor</option>
          
      </select>
  </td>
    </tr>
    <tr>
      <td align="right">Fitness</td>
      <td><select name="fitness">

          <option value="<?php echo $fitness;?>"><?php
echo $fitness;
          ?></option>
          <option value="Fit">Fit</option>
          <option value="Rest">Rest</option>
          <option value="Injured">Injured</option>
          
      </select>
  </td>
    </tr>
    <tr>
      <td align="right">Age</td>
      <td>
               <input type="text" name="age" value="<?php echo $age;?>">

      </td>
    </tr>
    <tr>
      <td align="right">Nationality</td>
      <td>
               <input type="text" name="nationality" value="<?php echo $nationality;?>">
      </td>
    </tr>
    <tr>
      <td align="right">Salary</td>
      <td>
               <input type="text" name="salary" value="<?php echo $salary;?>">
      </td>
    </tr>
    <tr>
      <td align="right">Section</td>
      <td><select name="section">

          <option value="<?php echo $section;?>"><?php
echo $section;
          ?></option>
          <option value="A team">A Team</option>
          <option value="B team">B team</option>
          
      </select>
  </td>
</tr>
<tr>
      <td align="right">Position</td>
      <td>
               <input type="text" name="position" value="<?php echo $position;?>">
      </td>
    </tr>
<tr>
      <td align="right">Contract Termination</td>
      <td>
               <input type="date" name="contract" value="<?php echo $contract;?>">
      </td>
    </tr>
   
    
    
    
    
    <tr align="center">
      <td colspan="5"><input type="submit" name="insert_post" value="Update Now"/></td>
    </tr>




  </table>
    
    
</form>



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
$update="UPDATE player SET name = '$name', morale = '$morale', position='$position', form='$form', contract='$contract', fitness='$fitness', section='$section', age='$age', nationality='$nationality', salary='$salary' WHERE id = '$id'";
$insert_mov= mysqli_query($con, $update);

if($insert_mov)
{
  echo "<script>alert('THE Player HAS BEEN UPDATED!')</script>";
  echo "<script>window.open('admin.php?p','_self')</script>";
}






}
}
}

?>


   



  <?php
    if(isset($_GET['manager_id']))
    {

$theatre_id=$_GET['manager_id'];
$con=mysqli_connect("localhost","root","","club");

$get_the="select * from manager where id=$theatre_id";
$run_the=mysqli_query($con,$get_the);
while($row_movie=mysqli_fetch_array($run_the))
{
  
 

 $id=$row_movie['id'];
    $name=$row_movie['name'];
    $password=$row_movie['password'];
      $username=$row_movie['username'];
        $nationality=$row_movie['nationality'];
          $age=$row_movie['age'];
            $bio=$row_movie['bio'];
              $salary=$row_movie['salary'];
                $status=$row_movie['status'];





    ?>
<form action="edit.php?manager_id=<?php echo"$theatre_id"; ?>" method="post" enctype="multipart/form-data">
  <table align="center" width="700" height="500" border="2" bgcolor="yellow" style="background-color: #ffc107">

    <tr align="center">
      <td colspan="5"><h1 style="text-align:center">UPDATE MANAGER HERE</h1></td>
    </tr>


    
   <tr>
      <td align="right">Name</td>
      <td><input type="text" name="name" value="<?php echo $name;?>"></td>
    </tr>
    <tr>
      <td align="right">Username</td>
      <td>
               <input type="text" name="username" value="<?php echo $username;?>">
      </td>
    </tr>
    <tr>
      <td align="right">Password</td>
      <td>
               <input type="text" name="password" value="<?php echo $password;?>">
      </td>
    </tr>
<tr>
      <td align="right">Age</td>
      <td>
               <input type="text" name="age" value="<?php echo $age;?>">

      </td>
    </tr>
    <tr>
      <td align="right">Nationality</td>
      <td>
               <input type="text" name="nationality" value="<?php echo $nationality;?>">
      </td>
    </tr>
    <tr>
      <td align="right">Salary</td>
<td>
               <input type="text" name="salary" value="<?php echo $salary;?>">
      </td>
    </tr>
    <tr>
      <td align="right">Status</td>
      <td><select name="status">

          <option value="<?php echo $status;?>"><?php echo $status; ?></option>
          <option value="previous">Pevious</option>
          <option value="current">Current</option>
      </select>
  </td>
</tr>
<tr>
      <td align="right">Biography</td>
      <td><textarea name="bio" cols="20" rows="15"> <?php echo $bio;?></textarea></td>
    </tr>
    
    
    <tr align="center">
      <td colspan="5"><input type="submit" name="insert_post" value="Update Now"/></td>
    </tr>




  </table>
</form>



<?php
$con=mysqli_connect("localhost","root","","club");
if(isset($_POST['insert_post']))
{
$name=$_POST['name'];
$username=$_POST['username'];
$password=$_POST['password'];
$bio=$_POST['bio'];
$status=$_POST['status'];
$age=$_POST['age'];
$nationality=$_POST['nationality'];
$salary=$_POST['salary'];



$update="UPDATE manager SET name = '$name', username = '$username', password='$password', bio='$bio', status='$status', age='$age', nationality='$nationality', salary='$salary' WHERE id = '$id'";
$insert_mov= mysqli_query($con, $update);

if($insert_mov)
{
  echo "<script>alert('THE Manager HAS BEEN UPDATED!')</script>";
  echo "<script>window.open('admin.php?m','_self')</script>";
}



}
}
}

?>
<?php
    if(isset($_GET['staff_id']))
    {

$run_id=$_GET['staff_id'];
$con=mysqli_connect("localhost","root","","club");

$get_the="select * from staff where id=$run_id";
$run_the=mysqli_query($con,$get_the);
while($row_movie=mysqli_fetch_array($run_the))
{
  
 

 $id=$row_movie['id'];
    $name=$row_movie['name'];
    $password=$row_movie['password'];
      $username=$row_movie['username'];
        $nationality=$row_movie['nationality'];
          $age=$row_movie['age'];
            $designation=$row_movie['designation'];
              $salary=$row_movie['salary'];
                $department=$row_movie['department'];






    ?>
<form action="edit.php?staff_id=<?php echo"$run_id"; ?>" method="post" enctype="multipart/form-data">
  
  <table align="center" width="700" height="500" border="2" bgcolor="yellow" style="background-color: #ffc107">
    <tr align="center">
      <td colspan="5"><h1 style="text-align:center">EDIT STAFF HERE</h1></td>
    </tr>


   <tr>
      <td align="right">Name</td>
      <td><input type="text" name="name" value="<?php echo $name;?>"></td>
    </tr>
    <tr>
<td align="right">Username</td>
      <td>
               <input type="text" name="username" value="<?php echo $username;?>">
      </td>
    </tr>
    <tr>
      <td align="right">Password</td>
      <td>
               <input type="text" name="password" value="<?php echo $password;?>">
      </td>
    </tr>
<tr>
<td align="right">Age</td>
      <td>
               <input type="text" name="age" value="<?php echo $age;?>">

      </td>
    </tr>
    <tr>
      <td align="right">Nationality</td>
      <td>
               <input type="text" name="nationality" value="<?php echo $nationality;?>">
      </td>
    </tr>
    <tr>
      <td align="right">Salary</td>
<td>
               <input type="text" name="salary" value="<?php echo $salary;?>">
      </td>
    </tr>
    
<tr>
      <td align="right">Department</td>
      <td><select name="department">

          <option value="<?php echo $department;?>"><?php echo $department;?></option>
          <option value="Stadium">Stadium</option>
          <option value="Public Relation">Public Relation</option>
          <option value="Medical">Medical</option>
      </select>
  </td>
</tr>
<tr>
      <td align="right">Designation</td>
      <td>
               <input type="text" name="designation" value="<?php echo $designation;?>">
      </td>
    </tr>
   
   

   
    
    <tr align="center">
      <td colspan="5"><input type="submit" name="insert_post" value="Update Now"/></td>
    </tr>




  </table>
</form>


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

$update="UPDATE staff SET name = '$name', username = '$username', password='$password', designation='$designation', department='$department', age='$age', nationality='$nationality', salary='$salary' WHERE id = '$id'";
$insert_mov= mysqli_query($con, $update);

if($insert_mov)
{
  echo "<script>alert('THE Staff HAS BEEN UPDATED!')</script>";
  echo "<script>window.open('admin.php?s','_self')</script>";
}




}
}
}

?>














<?php
    if(isset($_GET['coach_id']))
    {

$run_id=$_GET['coach_id'];
$con=mysqli_connect("localhost","root","","club");

$get_the="select * from coach where id=$run_id";
$run_the=mysqli_query($con,$get_the);
while($row_movie=mysqli_fetch_array($run_the))
{
  
 

 $id=$row_movie['id'];
    $name=$row_movie['name'];
    $password=$row_movie['password'];
      $username=$row_movie['username'];
        $nationality=$row_movie['nationality'];
   $age=$row_movie['age'];
            $designation=$row_movie['designation'];
              $salary=$row_movie['salary'];
                $section=$row_movie['section'];






    ?>
<form action="edit.php?coach_id=<?php echo"$run_id"; ?>" method="post" enctype="multipart/form-data">
  
  <table align="center" width="700" height="500" border="2" bgcolor="yellow" style="background-color: #ffc107">
    <tr align="center">
      <td colspan="5"><h1 style="text-align:center">EDIT COACH HERE</h1></td>
    </tr>


   <tr>
      <td align="right">Name</td>
      <td><input type="text" name="name" value="<?php echo $name;?>"></td>
    </tr>
    <tr>
<td align="right">Username</td>
      <td>
               <input type="text" name="username" value="<?php echo $username;?>">
      </td>
    </tr>
    <tr>
      <td align="right">Password</td>
      <td>
               <input type="text" name="password" value="<?php echo $password;?>">
      </td>
    </tr>
<tr>
<td align="right">Age</td>
      <td>
               <input type="text" name="age" value="<?php echo $age;?>">

      </td>
    </tr>
    <tr>
      <td align="right">Nationality</td>
      <td>
               <input type="text" name="nationality" value="<?php echo $nationality;?>">
      </td>
</tr>
    <tr>
      <td align="right">Salary</td>
<td>
               <input type="text" name="salary" value="<?php echo $salary;?>">
      </td>
    </tr>
    
<tr>
      <td align="right">Section</td>
      <td><select name="section">

<option value="<?php echo $section;?>"><?php echo $section;?></option>
          <option value="A team">A Team</option>
          <option value="B team">B team</option>
          
      </select>
  </td>
</tr>
<tr>
      <td align="right">Designation</td>
      <td>
               <input type="text" name="designation" value="<?php echo $designation;?>">
      </td>
    </tr>
   
   

   
    
    <tr align="center">
      <td colspan="5"><input type="submit" name="insert_post" value="Update Now"/></td>
    </tr>




  </table>
</form>


<?php
$con=mysqli_connect("localhost","root","","club");
if(isset($_POST['insert_post']))
{


$name=$_POST['name'];
$username=$_POST['username'];
$password=$_POST['password'];
$designation=$_POST['designation'];
$section=$_POST['section'];
$age=$_POST['age'];
$nationality=$_POST['nationality'];
$salary=$_POST['salary'];

$update="UPDATE coach SET name = '$name', username = '$username', password='$password', designation='$designation', section='$section', age='$age', nationality='$nationality', salary='$salary' WHERE id = '$id'";
$insert_mov= mysqli_query($con, $update);

if($insert_mov)
{
  echo "<script>alert('THE Coach HAS BEEN UPDATED!')</script>";
  echo "<script>window.open('admin.php?c','_self')</script>";
}




}
}
}

?>

          <div id="products">

         
         

   

          </div>
          
          </div>
        
      </div>
         </div>
   
     
    



<div id="footer">


<footer style="text-align:center;margin-bottom:0">
        <p style="text-align:center;">&copy; <?php echo date('Y'); ?> <?php echo "JCB"; ?>,Comp.</p>
      </footer>


</div>






<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
   
	</body>



	</html>
<?php
}
  ?>