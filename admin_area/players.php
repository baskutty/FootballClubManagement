<div id="products">

           <form action="" method="post" enctype="multipart/form-data">
<table  style="background-color:rgb(5, 197, 228);" align="center" width="700"  border="2" >

<tr align="center">
  <th>S.N</th>
  <th>IMAGE</th>
  <th>NAME</th>
  <th>SECTION</th>
  <th>POSITION</th>
  <th>AGE</th>
  <th>NATIONALITY</th>
  <th>SALARY</th>
  <th>FORM</th>
  <th>FITNESS</th>
  <th>CONTRACT</th>
  <th>MORALE</th>
  <th>EDIT</th>
  <th>DELETE</th>
</tr>

<?php



$con=mysqli_connect("localhost","root","","club");
 

$i=1;

  
  $movie="select * from player order by id";
  $run_movie=mysqli_query($con,$movie);
  while($row_movie=mysqli_fetch_array($run_movie))
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

$image=$row_movie['photo'];


     echo "<tr align='center'>
  <td>$i.</td>
  <td style='padding:5'><img style='padding:5' width='60' height='60' src='images/$image' /></td>
  
  <td> $name</td>
  <td> $section</td>
  <td> $position</td>
  <td> $age</td>
  <td> $nationality</td>
  <td> $salary</td>
  <td> $form</td>
  <td> $fitness</td>
  <td> $contract</td>
  <td> $morale</td>

  <td><a href='edit.php?player_id=$id'>edit</a></td>
  <td><a href='delete.php?player_id=$id'>delete</a></td>
</tr>";

$i=$i+1;

  }


  

?>
</table>

</form>
</div>


