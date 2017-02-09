<?php 

session_start();
// salvam datele din parametrii url  in sesiune 
$_SESSION['url_parameters'] = $_GET;

echo "salvam datele din parametrii url  in sesiune ";