<?php 

// salvam datele din sesiune in cookie
// !!!!: daca avem mai mult de 4KB in session, doar primele 4 KB se vor salva in cookie

session_start();


$session_as_string = implode(', ', $_SESSION['url_parameters']);// transforma array in string
setcookie("session_copy", $session_as_string, time() + 3600);

echo "salvam datele din sesiune in cookie";