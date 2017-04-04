<?php
session_start();

if (isset($_POST['submit'])) {
	$_SESSION['city'] = $_POST['city'];
}


?>


<?php if (!isset($_SESSION['city'])) { ?>
	<form action="" method="post">
		<input type="text" name="city" required placeholder="Introdu un oras">
		<input type='submit' value='Trimite' name='submit'>
	</form>
<?php } else {?>
    Imi place orasul:  <?php echo $_SESSION['city'] ?>
<?php } ?>