<div id="products">

           <form action="" method="post" enctype="multipart/form-data">
<table  style="background-color:rgb(5, 197, 228);" align="center" width="700"  border="2" >

<tr align="center">
  <th>S.N</th>
  <th>IMAGE</th>
  <th>NAME</th>
  <th>USERNAME</th>
  <th>PASSWORD</th>
  <th>AGE</th>
  <th>NATIONALITY</th>
  <th>SALARY</th>
  <th>DEPARTMENT</th>
  <th>DESIGNATION</th>
  <th>EDIT</th>
  <th>DELETE</th>
</tr>

<?php



$con=mysqli_connect("localhost","root","","club");
 

$i=1;

  
  $movie="select * from staff order by id";
  $run_movie=mysqli_query($con,$movie);
  while($row_movie=mysqli_fetch_array($run_movie))
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

$image=$row_movie['photo'];


     echo "<tr align='center'>
  <td>$i.</td>
  <td style='padding:5'><img style='padding:5' width='60' height='60' src='images/$image' /></td>
  
  <td> $name</td>
  <td> $username</td>
  <td> $password</td>
  <td> $age</td>
  <td> $nationality</td>
  <td> $salary</td>
  <td> $department</td>
  <td> $designation</td>
  <td><a href='edit.php?staff_id=$id'>edit</a></td>
  <td><a href='delete.php?staff_id=$id'>delete</a></td>
</tr>";

$i=$i+1;

  }


  

?>
</table>

</form>
</div>


