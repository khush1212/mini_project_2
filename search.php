<?php

$connect = mysqli_connect("localhost", "root", "root", "mini_project_2");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM mini 
  WHERE id LIKE '%".$search."%'
  OR firstname LIKE '%".$search."%' 
  OR lastname LIKE '%".$search."%' 
  OR username LIKE '%".$search."%' 
  OR emailid LIKE '%".$search."%'
  OR mobile LIKE '%".$search."%'
  OR dob LIKE '%".$search."%'
 ";
}
else
{
 $query = "
  SELECT * FROM mini ORDER BY id
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>ID</th>
     <th>FIRSTNAME</th>
     <th>LASTNAME</th>
     <th>USERNAME</th>
     <th>EMAIL-ID</th>
     <th>PASSWORD</th>
     <th>MOBILE</th>
     <th>DOB</th>
     <th></th>
     <th></th>
     <th></th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["id"].'</td>
    <td>'.$row["firstname"].'</td>
    <td>'.$row["lastname"].'</td>
    <td>'.$row["username"].'</td>
    <td>'.$row["emailid"].'</td>
    <td>'.$row["password"].'</td>
    <td>'.$row["mobile"].'</td>
    <td>'.$row["dob"].'</td>
    <td><a href="view.php?id='.$row["id"].'">View</a></td>
    <td><a href="delete.php">Delete</a></td>
    <td><a href="make_.php">Make Admin</a></td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>
