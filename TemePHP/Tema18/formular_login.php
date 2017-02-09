<?php

session_start();

$message = '';
if(isset($_SESSION['message'])){
	$message = $_SESSION['message'];
	unset($_SESSION['message']); 
}

?>



<?php if (strlen($message) > 0){ ?> 
<div class="error">
	<?php echo $message; ?>
</div>
<?php } ?>


<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<div id="div2">
<form action="login.php" method="post">
    <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <input type="submit" name="submit" value="Login">


    <br>

    <a href="formular_inregistrare.php">New user</a>
    <br><br><br>

    <input type="checkbox" checked="checked"> Remember me
  </div>

  <div class="container">
    <span class="psw">Forgot <a href="forgot_password.php">password?</a></span>
  </div>
</form>
</div>

</body>
</html>
