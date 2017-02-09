<?php

include 'header.php';

// Daca este logat du-te pe index_logat.php
if (check_logat()) {
	header("Location: index_logat.php");
	exit;
}


?>
<!--
<form action="login.php" method="post">
<br><br><br><br><br>
<label>Username</label>
<input type="text" name="username" placeholder="Introduceti username">
<br>
<label>Password</label>
<input type="password" name="password" placeholder="Introduceti parola">;
<br><br>
<input type="submit" name="submit" value="Login">
-->
<br><br><br><br><br><br><br>
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