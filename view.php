
    
    <?php require 'header.php'; ?>

<?php
include'config.php';
$id = $_REQUEST['id'];

$back_url = $_SERVER['HTTP_REFERER'];
if (strpos($back_url, 'cdl.php') !== false) {
  if ($id != 1) {
    $sql="SELECT * FROM mini WHERE id =".$id;
  } else {
    $sql="SELECT * FROM mini";
  }
} else {
  $sql="SELECT * FROM mini";
}
$result=$conn->query($sql);

?>

<h1 align="center">User datails</h1>
<table border="1" align="center" style="line-height: 25px;">
  <tr>
    <th>id</th>
    <th>firstname</th>
    <th>lastname</th>
    <th>username</th>
    <th>email</th>
    <th>password</th>
    <th>dob</th>
    <th>mobile</th>
    <th>edit</th>
     </tr>



<?php

if ($result->num_rows>0) {
  while ($row=$result->fetch_assoc()) {   
?>
<tr>
  <td><?php echo $row['id'];?></td>
  <td><?php echo $row['firstname'];?></td>
  <td><?php echo $row['lastname'];?></td>
  <td><?php echo $row['username'];?></td>
  <td><?php echo $row['emailid'];?></td>
  <td><?php echo $row['password'];?></td>
  <td><?php echo $row['dob'];?></td>
  <td><?php echo $row['mobile'];?></td>


  <td><a href="edit.php?edit_id=<?php echo $row['id'];?>" alt="edit">Edit</a></td>

</tr>

<?php

  }
}


else{
  ?>
  <tr>
    <th colspan="2">There is no data found!!</th>
  </tr>
  <?php
}
?>

    
</table>
    <?php require 'footer.php'; ?>
