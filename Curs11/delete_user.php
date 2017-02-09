<?php

include 'function.php';

// stergem utilizator
$id = $_GET['id'];
delete_user($id);
$_SESSION['msg'] = "Utilizatorul cu id-ul $id a fost sters";
// redirectare
header('Location: start.php');
exit;
