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
    if(isset($_GET['manager_id']))
    {

$movie_id=$_GET['manager_id'];
$con=mysqli_connect("localhost","root","","club");

$get_movs="delete from manager where id=$movie_id";
$run_movs=mysqli_query($con,$get_movs);
echo "<script>alert('THE MANAGER HAS BEEN DELETED!')</script>";
  echo "<script>window.open('admin.php?m','_self')</script>";


}


?>

 <?php
    if(isset($_GET['staff_id']))
    {

$theatre_id=$_GET['staff_id'];
$con=mysqli_connect("localhost","root","","club");

$get_the="delete from staff where id=$theatre_id";
$run_the=mysqli_query($con,$get_the);
echo "<script>alert('THE STAFF HAS BEEN DELETED!')</script>";
  echo "<script>window.open('admin.php?s','_self')</script>";


}


?>






         <?php

     if(isset($_GET['coach_id']))
    {
$customer_id=$_GET['coach_id'];
$con=mysqli_connect("localhost","root","","club");

$get_cus="delete from coach where id=$customer_id";
$run_cus=mysqli_query($con,$get_cus);
echo "<script>alert('THE COACH IS DELETED!')</script>";
  echo "<script>window.open('admin.php?c','_self')</script>";
}
     
?>
    <?php

     if(isset($_GET['player_id']))
    {
$run_id=$_GET['player_id'];
$con=mysqli_connect("localhost","root","","club");

$get_cus="delete from player where id=$run_id";
$run_cus=mysqli_query($con,$get_cus);
echo "<script>alert('THE PLAYER IS DELETED!')</script>";
  echo "<script>window.open('admin.php?p','_self')</script>";
}
     
?>
          <div id="products">

         
         

   

          </div>
          
          </div>
        
      </div>
         </div>
   
     
    



<div id="footer">


<footer style="text-align:center;margin-bottom:0">
        <p style="text-align:center;">&copy; <?php echo date('Y'); ?> <?php echo $name; ?>,Comp.</p>
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