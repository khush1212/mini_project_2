
	<?php require 'header.php'; ?>

<div class="edit_user">

	<form method="post" class="form" action="">
		
		<h1>edit user details</h1>

		<div class="form__group">
      <input type="text" name="firstname" placeholder="Enter your firstname..." value="<?php echo $row['firstname'];?>" /><br><br>
        </div>
        
        <div class="form__group">
      <input type="text" name="lastname" placeholder="Enter your lastname..." value="<?php echo $row['lastname'];?>" /><br><br>
        </div>

		<div class="form__group">
      <input type="date" name="dob" placeholder="Enter your data of birth..." value="<?php echo $row['dob'];?>" /><br><br>
        </div>
 		<div class="edit_1">
 			<input type="submit" name="submit" />
			<!-- <a href="view.php"><button type="submit" name="btn-update" id="btn-update" onclick="update()">
			<strong>Update</strong>
			</button></a> -->
			<a href="view.php"><button type="button" value="button">Cancel</button></a>
		</div>

	</form>
</div>


<!-- 	<script type="text/javascript">
		function update(){
			var x;
			if (confirm("update data sucessfully")== true) {
				x= "update";
				 // onclick="location.href = 'view.php';"
				// window.location.replace = "view.php";
			}
		}
	</script> -->


		<?php require 'footer.php'; ?>

<?php
include'config.php';

if (isset($_GET['edit_id'])) {
	$sql="SELECT * FROM mini WHERE id=".$_GET['edit_id'];
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($result);

	if (isset($_POST['submit'])) {
		echo "string";exit;
	 	$firstname=$_POST['firstname'];
	 	$lastname=$_POST['lastname'];
	 	$dob=$_POST['dob'];

	 	$update="UPDATE mini SET firstname='".$firstname."',lastname='".$lastname."',dob='".$dob."' WHERE id='".$_GET['edit_id']."'";
	 	echo $update;
	 	// $update= mysqli_query($conn,$update);
	 	// if (!isset($sql)) {
	 	// 	die("error $sql".mysqli_connect_error());
	 	// }else{
	 	// 	header("location:http://localhost/mini_project_2/view.php");
	 	// }
	 } 
}

?>