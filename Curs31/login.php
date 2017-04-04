<?php

session_start();
require_once 'config.php';


if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

    $user = new User();
    $user->setUsername($username);
    $user->setPassword($password);

    $user->login();
}

