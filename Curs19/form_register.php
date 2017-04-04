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

<form action="register.php" method="post" novalidate>

<input type="email" name="email" placeholder="Introdu o adresa de email" 
value="<?php if (isset($_SESSION['email'])) echo $_SESSION['email'] ?>"
required>
<br><br>

<input type="password" name="password" placeholder="Introdu parola" 
value="<?php if (isset($_SESSION['password'])) echo $_SESSION['password'] ?>"

required>
<br><br>


<input type="text" name="fullname" placeholder="Introdu numele complet" 
value="<?php if (isset($_SESSION['fullname'])) echo $_SESSION['fullname'] ?>"
required>
<br><br>



<input type="submit" name="submit" value="Creeaza cont">

</form>


