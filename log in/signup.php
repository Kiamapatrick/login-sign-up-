<?php
include_once 'header.php'
?>
    <h2>sign up</h2>
    <form method="POST" action="includes/signup.inc.php">
      <div class="input-box">
        <input type="text" name="name"  placeholder="Enter your name" required>
      </div>
      <div class="input-box">
        <input type="email" name="email" placeholder="Enter your email" required>
      </div>
      <div class="input-box">
        <input type="text" name="uid"  placeholder="Enter your username" required>
      </div>
      <div class="input-box">
        <input type="password" name="pwd" placeholder="Create password" required>
      </div>
      <div class="input-box">
        <input type="password" name="pwdrepeat" placeholder="Confirm password" required>
      </div>
      
      <div class="input-box button">
        <input type="Submit" value="sign up" name="submit">
      </div>
      <div class="text">
        <h3>Already have an account? <a href="signin.php">Login now</a></h3>
      </div>
      <?php
if (isset($_GET["error"])){
  if ($_GET["error"] == "emptyinput"){
    echo "<p>Fill in all fields</p>";
  }
  else if ($_GET["error"] == "invalidUid"){
    echo"<p>choose a proper username</p>";
  }
  else if ($_GET["error"] == "invalidemail"){
    echo"<p>choose a proper email</p>";
  }
  else if ($_GET["error"] == "passworddontmatch"){
    echo"<p>password does not match</p>";
  }
  else if ($_GET["error"] == "stmtfailed"){
    echo"<p>something went wrong, try again</p>";
  }
  else if ($_GET["error"] == "usernameTaken"){
    echo"<p>choose another username</p>";
  }
  else if ($_GET["error"] == "none"){
    echo"<p>sign in succesful</p>";
  }


}
?>
    </form>


<?php 
include_once'footer.php'
?>