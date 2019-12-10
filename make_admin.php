<?php
include 'config.php';

$user_name = $_REQUEST['user_name'];


$update="UPDATE mini SET admin_role = 1 WHERE username = '$user_name'";
if (mysqli_query($conn, $update)) {
   
    header("Location: cdl.php");
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>