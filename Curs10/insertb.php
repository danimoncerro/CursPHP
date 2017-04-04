<?php

/**
* include - include fisierul ori de cate ori este apelata 
* include_once - include fisierul 1 singura data 
* require - include fisierul, daca nu exista fisierul atunci crapa pagina. ( se opreste executia)
* require_once
**/

// Step 1. Ne conectam la baza de date. 
include 'connect.php';


$username = 'sandor';
$email = 'sandor@sandorkovacs.ro';
$password = '123456';

// Step2. Scriem sql-ul de insert
$sql = "
	INSERT INTO users (username, email, password)
	VALUES ('$username', '$email', '$password');
";

// Step3. Executam sql query si salvam rezultate in $result. 
$result = mysqli_query($conn, $sql);

if ($result) {
	echo 'Utilizatorul a fost inserat';
} else {
	echo 'eroare la inserare utilizator';
}