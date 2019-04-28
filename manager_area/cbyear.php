<?php 

include("header.php");
?>
<article>
<center>

<h1 style="text-align: center;">CASHBOOK</h1>
</center>
<?php
if(isset($_GET['year']))
{$year=$_GET['year'];
$con=mysqli_connect("localhost","root","","club");
$get_mov="select * from cashbook where year='$year' order by month desc";
$run_mov=mysqli_query($con,$get_mov);
while($row_movie=mysqli_fetch_array($run_mov))
{
$m="";
    
                $month=$row_movie['month'];
                if($month==1)
                {

                    $m="JAN";
                }
if($month==2)
                {

                    $m="FEB";
                }
if($month==3)
                {

                    $m="MAR";
                }
                if($month==4)
                {

                    $m="APR";
                }
                if($month==5)
                {

                    $m="MAY";
                }
                if($month==6)
                {

                    $m="JUN";
                }
                if($month==7)
                {

                    $m="JUL";
                }
                if($month==8)
                {

                    $m="AUG";
                }
                if($month==9)
                {

                    $m="SEP";
                }
                if($month==10)
                {

                    $m="OCT";
                }
                if($month==11)
                {

                    $m="NOV";
                }
                if($month==12)
                {

                    $m="DEC";
                }

echo "
<div id='movie_box' class ='dashdiv'style='margin-left: 120px;
    padding: 20px;
    margin-top:10px;
    text-align: center;
    width:300px;
    height:300px;
    display: inline-block;
    background-color: white;
    border: 2px solid black;
    border-radius: 8px;
margin-bottom: 80px;'>


<br>
<a href='cbmonth.php?year=$year&&month=$month&&m=$m'><h1 style='color:rgb(0,69,135); font-size:60px;'>$m</h1></a>
<br>

</div>";

}
}
?>
</article>



<?php

include("footer.php");

?>