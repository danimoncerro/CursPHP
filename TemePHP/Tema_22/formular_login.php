<?php

session_start();

include 'functions.php';

// Daca este logat du-te pe index_logat.php
if (check_logat()) {
	header("Location: index_logat.php");
	exit;
}


?>

<form action="login.php" method="post">

<label>Username</label>
<input type="text" name="username" placeholder="Introduceti username">
<br>
<label>Password</label>
<input type="password" name="password" placeholder="Introduceti parola">;
<br><br>
<input type="submit" name="submit" value="Login">