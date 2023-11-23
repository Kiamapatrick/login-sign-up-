<?php
include_once("header.php");
?>

    <h2>Sign In</h2>
    <form action="includes/login.inc.php" method="post">
      <div class="input-box">
        <input type="text" name="name" placeholder="Enter your name" required>
      </div>
      <div class="input-box">
        <input type="password" name="pwd" placeholder="Enter password" required>
      </div>
      
      <div class="input-box button">
        <input type="Submit" value="Sign in" name="submit">
      </div>
      <div class="text">
        <h3>Do not have an account? <a href="signup.php">Sign up now</a></h3>
      </div>
      <?php
if (isset($_GET["error"])){
  if ($_GET["error"] == "emptyinput"){
    echo "<p>Fill in all fields</p>";
  }
  else if ($_GET["error"] == "wronglogin"){
    echo"<p>wrong input</p>";
  } 
}
?>
    </form>
    <?php 
include_once'footer.php'
?>
