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
        
        <div class="col-sm-3 col-md-2 sidebar" style="height:100%; ">
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
            <li> <a href="admin.php?if">INSERT FAN PHOTO</a></li>
             <li> <a href="admin.php?ist">INSERT STADIUM</a></li>
             <li> <a href="admin.php?icb">INSERT CASHBOOK</a></li>
              <li> <a href="admin.php?ie">INSERT EVENTS</a></li>
               <li> <a href="admin.php?imt">INSERT MATCHES</a></li>
              <li> <a href="admin.php?it">INSERT TOURNAMENT DETAILS</a></li>

                <li> <a href="admin_logout.php">ADMIN LOGOUT</a></li>
          </ul>
           </div>
        <div class="main">
          <?php
echo"<p style='text-align:center; font-size:40px;'>logged in as ". $_SESSION['admin']."</p>";

 ?>
         <?php
    if(isset($_GET['m']))
    {

include("managers.php");


    }
 if(isset($_GET['s']))
    {

include("staffs.php");


    }
     if(isset($_GET['c']))
    {

include("coaches.php");


    }
     if(isset($_GET['p']))
    {

include("players.php");


    }
     if(isset($_GET['im']))
    {

include("insert_manager.php");


    }
      if(isset($_GET['ic']))
    {

include("insert_coach.php");


    }
 if(isset($_GET['ip']))
    {

include("insert_player.php");


    }
    if(isset($_GET['is']))
    {

include("insert_staff.php");


    }
     if(isset($_GET['ig']))
    {

include("insert_gallery.php");


    }
     if(isset($_GET['if']))
    {

include("insert_fan.php");


    }
     if(isset($_GET['ist']))
    {

include("insert_stadium.php");


    }
    if(isset($_GET['icb']))
    {

include("insert_cashbook.php");


    }
     if(isset($_GET['ie']))
    {

include("insert_event.php");


    }
     if(isset($_GET['it']))
    {

include("insert_tournament.php");


    }
     if(isset($_GET['imt']))
    {

include("insert_matches.php");


    }
       
         ?>

          <div id="products">

         
         

   

          </div>
          
          </div>
        
      </div>
         </div>
   
     
    



<div id="footer" style="text-align:center;margin-bottom:0;">


<footer style="text-align:center;margin-bottom:0;">
        <p style="text-align:center;margin-bottom:0;">&copy; <?php echo date('Y'); ?> FC Comp.</p>
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