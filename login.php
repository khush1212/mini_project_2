<?php
include("loginserv.php");
?>
  <?php require 'header.php'; ?>

<div class="login">
<h1 align="center">Login</h1>
<form action="" method="post" style="text-align:center;" class="form">
<input type="text" placeholder="Username" id="user" name="user"><br/><br/>
<input type="password" placeholder="Password" id="pass" name="pass"><br/><br/>
<input type="submit" value="Login" name="submit"><br><br>
   <span>Not have an account Registered ? Click <a href="register.php">register</a></span> 

<span><?php echo $error; ?></span>

</form>
</div>
<?php require 'footer.php'; ?>
