<?php

session_start();
include 'header.php';

// Daca este logat du-te pe index_logat.php
if (check_logat()) {
	header("Location: index_logat.php");
	exit;
}


?>

<?php if (isset($_SESSION['message'])): ?>

<div class="alert alert-warning">
	<?php echo "<br><br>" . $_SESSION['message']; ?>
</div>

<?php unset($_SESSION['message']); ?>
<?php endif; ?>

<br><br><br>
<div id="div2">
<form action="login.php" method="post">
    <div>
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>
    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <input type="submit" name="submit" value="Login">
</form>
</div>