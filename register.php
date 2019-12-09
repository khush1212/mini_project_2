

    <?php require 'header.php'; ?>
<div class="register_user">
    <form method="post" action="register_connect.php" class="form">
      <h2>Register</h2>

        <div class="form__group">
      <input type="text" name="firstname" placeholder="Enter your firstname..." /><br><br>
        </div>
        
        <div class="form__group">
      <input type="text" name="lastname" placeholder="Enter your lastname..." /><br><br>
        </div>
        
        <div class="form__group">
      <input type="text" name="username" placeholder="Enter your username..." /><br><br>
        </div>
        
         <div class="form__group">
      <input type="text" name="emailid" placeholder="Enter your emailid... " /><br><br>
        </div>
        
         <div class="form__group">
      <input type="passwod" name="password" placeholder="Enter your password..." /><br><br>
        </div>
        
         <div class="form__group">
      <input type="date" name="dob" placeholder="Enter your data of birth..." /><br><br>
        </div>
        
         <div class="form__group">
      <input type="number" name="mobile" placeholder="Enter your mobile no..." /><br><br>
        </div>
        
      <div>
        <input type="submit" name="submit" value="Registered"><br><br>
      </div>
      
        <span>Already Registered ? Click <a href="login.php">login</a></span> 
      
    </form>
  </div>

    <?php require 'footer.php'; ?>
