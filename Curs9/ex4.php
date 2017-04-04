<?php
session_start();

if (isset($_POST['submit'])) {
	$_SESSION['ai_votat'] = 1;
}



?>


<?php if (!isset($_SESSION['ai_votat'])) { ?>
	<form action="" method="post">
		<input type='submit' value='Voteaza' name='submit'>
	</form>
<?php } else {?>
    Ai votat deja :)
<?php } ?>