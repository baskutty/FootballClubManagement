<?php 

include("header.php");
?>
<center>
<article>
<center>

<h1 style="text-align: center;">CASHBOOK</h1>
</center>
<?php
if(isset($_GET['month']))
{$year=$_GET['year'];
$month=$_GET['month'];
$m=$_GET['m'];
$con=mysqli_connect("localhost","root","","club");

$get_mov="select * from cashbook where year='$year' and month='$month' LIMIT 1";
$run_mov=mysqli_query($con,$get_mov);
while($row_movie=mysqli_fetch_array($run_mov))
{

    
                $player_salary=$row_movie['player_salary'];
                 $manager_salary=$row_movie['manager_salary'];
                 $staff_salary=$row_movie['staff_salary'];
                 $coach_salary=$row_movie['coach_salary'];
                 $merchandise_sale=$row_movie['merchandise_sale'];
                 $ticket_sale=$row_movie['ticket_sale'];
                 $endorsements=$row_movie['endorsements'];
                 $income=$merchandise_sale+$ticket_sale+$endorsements;
                 $expense=$player_salary+$manager_salary+$staff_salary+$coach_salary;
                 $profit=$income-$expense;

if($profit>=0)
{

echo "
<div id='movie_box' class='dashdiv' style='
    padding: 10px;
    margin-top:25px;
    text-align: center;
    width:600px;
    display: inline-block;
    background-color: white;
    border: 2px solid grey;
    border-radius: 8px;
    margin-bottom: 40px;'>
<h1 style='color:rgb(0,69,135); font-size:50px;'>$year</h1>
<h1 style='color:rgb(0,69,135); font-size:50px;'>$m</h1>
<h1 style='color:green; font-size:30px;'>Profit:<b> $ $profit</b></h1>



<p><b><i><u>Details : </u></i></b></p>
<p>Player Salary:<b> $ $player_salary</b></p>
<p>Manager Salary:<b> $ $manager_salary</b></p>
<p>Coach Salary:<b> $ $coach_salary</b></p>
<p>Staff Salary:<b> $ $staff_salary</b></p>
<p>Merchandise Sale:<b> $ $merchandise_sale</b></p>
<p>Ticket Sale:<b> $ $ticket_sale</b></p>
<p>Endorsements:<b> $ $endorsements</b></p>







";}
else
{$loss=$profit*(-1);

echo "
<div id='movie_box' class='dashdiv' style='
    padding: 10px;
    margin-top:25px;
    text-align: center;
    width:600px;
    display: inline-block;
    background-color: white;
    border: 2px solid grey;
    border-radius: 8px;
    margin-bottom: 40px;'>
<h1 style='color:rgb(0,69,135); font-size:60px;'>$year</h1>
<h1 style='color:rgb(0,69,135); font-size:60px;'>$m</h1>
<h1 style='color:red; font-size:60px;'>Loss:<b> $loss</b></h1>



<p><b><i><u>Details : </u></i></b></p>
<p>Player Salary:<b> $player_salary</b></p>
<p>Manager Salary:<b> $manager_salary</b></p>
<p>Coach Salary:<b> $coach_salary</b></p>
<p>Staff Salary:<b> $staff_salary</b></p>
<p>Merchandise Sale:<b> $merchandise_sale</b></p>
<p>Ticket Sale:<b> $ticket_sale</b></p>
<p>Endorsements:<b> $endorsements</b></p>







";






}

}}
?>
</article>

</center>


<?php

include("footer.php");

?>