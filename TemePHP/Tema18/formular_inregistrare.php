<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

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

<div id="div2">

<form action="register.php" method="post" novalidate>

<input type="text" name="username" placeholder="Introdu un username" 
value="<?php if (isset($_SESSION['username'])) echo $_SESSION['username'] ?>"
required>
<br><br>

<input type="password" name="password" placeholder="Introdu parola" 
value="<?php if (isset($_SESSION['password'])) echo $_SESSION['password'] ?>"

required>
<br><br>


<input type="text" name="email" placeholder="Introdu adresa de email" 
value="<?php if (isset($_SESSION['email'])) echo $_SESSION['email'] ?>"
required>
<br><br>



<input type="submit" name="submit" value="Creeaza">

</form>

</div>

</body>
</html>
