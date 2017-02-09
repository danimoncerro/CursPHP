<?php
session_start();

if (isset($_POST['submit'])) {
	$_SESSION['ai_bifat'] = 1;
}



?>


<?php if (!isset($_SESSION['ai_bifat'])) { ?>
	<form action="" method="post">
		<input type='submit' value='Voteaza' name='submit'>
	</form>
<?php } else {?>
    Ai bifat deja :)
<?php } ?>