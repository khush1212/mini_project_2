<?php

$host = 'localhost';
$user = 'root';
$pass = 'root';

mysql_connect($host, $user, $pass);

mysql_select_db('demo');

if(isset($_POST['user_name']))
{
 $name=$_POST['user_name'];

 $checkdata=" SELECT name FROM mini WHERE name='$name' ";

 $query=mysql_query($checkdata);

 if(mysql_num_rows($query)>0)
 {
  echo "User Name Already Exist";
 }
 else
 {
  echo "OK";
 }
 exit();
}

if(isset($_POST['user_email']))
{
 $emailId=$_POST['user_email'];

 $checkdata=" SELECT loginid FROM mini WHERE loginid='$emailId' ";

 $query=mysql_query($checkdata);

 if(mysql_num_rows($query)>0)
 {
  echo "Email Already Exist";
 }
 else
 {
  echo "OK";
 }
 exit();
}
?>

<?php

if( isset( $_POST['submit_form'] ) )
{

$name = $_POST['username'];
$email = $_POST['useremail'];
$password = $_POST['userpass'];

$host = 'localhost';
$user = 'root';
$pass = 'root';

mysql_connect($host, $user, $pass);

mysql_select_db('demo');

$insertdata=" INSERT INTO mini VALUES( '$name','$email','$password' ) ";
mysql_query($insertdata);

}
?>