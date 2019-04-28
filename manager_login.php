<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/logo.png"/>

    <title>Football Club</title>

    <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    
  <!-- CSS_ADSBLOCK_START -->
<link rel="stylesheet" href="http://adblockers.opera-mini.net/css_block/default-domainless.css" type="text/css" />
</head>

<body style="background-image: url('background.jpg'); width: 100%;">
  <div>
<form action="" method="post" enctype="multipart/form-data">
  <table align="center" width="550" height="300" style="background-color:  grey;">
    <tr align="center">
      <td colspan="5"><h1 style="text-align:center">MANAGER</h1></td>
    </tr>

<tr>
      <td style="padding-right:5" align="right">MANAGER:</td>
      <td style="padding-left:5"><input type="text" name="admin_name" placeholder="Name" required></td>
    </tr>
    
<tr>
      <td style="padding-right:5" align="right">PASSWORD:</td>
      <td style="padding-left:5"><input type="password" name="admin_pass" placeholder="Password" required></td>
    </tr>
    
<tr>
      <td></td>
      <td  style="float:left;"  >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="login" value="LOGIN"/></td>
      
    </tr>

  </table>
</form>


</div>

	 

	</body>
	</html>
  <?php
$con=mysqli_connect("localhost","root","","club");
if(isset($_POST['login']))
{
$admin_name=$_POST['admin_name'];
$admin_pass=$_POST['admin_pass'];

$get_admin="select * from manager where username='$admin_name' AND password='$admin_pass' AND status='current'";
$run_admin=mysqli_query($con,$get_admin);



if($row_admin=mysqli_fetch_array($run_admin))
{
$admin_names=$row_admin['username'];

$_SESSION['manager']=$admin_names;
echo "<script>alert('LOGIN SUCCESSFULL')</script>";
echo "<script>window.open('manager_area/manager.php','_self')</script>";

}





else
{echo "<script>alert('LOGIN UNSUCCESSFULL')</script>";
echo "<script>window.open('manager_login.php','_self')</script>";

}

}
?>