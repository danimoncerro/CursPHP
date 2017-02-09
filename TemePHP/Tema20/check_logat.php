<?php 


 // Verifica daca utilizatorul este logat 
session_start();

include 'functions.php';

if (check_logat()) {
	echo 'Utilizatorul este logat';
} else {
	echo 'Utilizatorul NU este logat';
}
