<?php
include 'config.php';

$user_name = $_REQUEST['user_name'];

// sql to delete a record
$sql = "DELETE FROM mini WHERE username = '$user_name'";
if (mysqli_query($conn, $sql)) {
    // echo "Record deleted successfully";
    header("Location: cdl.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>