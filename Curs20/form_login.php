<?php

session_start();

$message = '';
if(isset($_SESSION['message'])){
	$message = $_SESSION['message'];
	unset($_SESSION['message']); // stergem dupa afisare / asignare valoare
}

?>



<?php if (strlen($message) > 0){ ?> 
<div class="error">
	<?php echo $message; ?>
</div>
<?php } ?>

<form action="login.php" method="post" novalidate>

<input type="email" name="email" placeholder="Introdu o adresa de email" required>
<br><br>

<input type="password" name="password" placeholder="Introdu parola" required>
<br><br>

<input type="submit" name="submit" value="Intra in  cont">

</form>
<form action="form_register.php">
<input type="submit" name="submit" value="Creeaza cont nou">
</form>


