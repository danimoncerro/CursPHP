<?php

include 'connect.php';
include 'functions.php';

// 1. Calculam totalul ( pt cos ) si salvam intr-o variabila

$total = calculeaza_total();

// 2. Citim idul utilizatorului din sesiune

$id_user = $_SESSION['user']['id'];

$created_at = time();


// 3. Facem insert in tabelul comenzi 

$sql = "INSERT INTO comenzi(id_user, total, created_at)
        VALUES ($id_user, $total, $created_at)";

$stmt = $conn->prepare($sql);

$stmt->execute();

// 4. Citim id-ul comenzii creat ( ultimul id )
$id_comanda = $conn->lastInsertId();

// 5. Inseram toate produsele din cart in comenzi_detalii
foreach ( $_SESSION['cart'] as $k=>$produs) {
	$id_produs = $produs["id"];
	$cantitate = $produs["cantitate"]; 
	$pret = $produs["pret"];
	$valoare = $cantitate * $pret;
	$sql = "INSERT INTO comenzi_detalii(id_comanda, id_produs, cantitate, pret, valoare)
			VALUES ($id_comanda, $id_produs, $cantitate, $pret, $valoare)";
	$stmt = $conn->prepare($sql);
	$stmt->execute();


} 

// golim cosul

unset($_SESSION['cart']);


// 4. Afisam un mesaj 

?>

<h1>Comanda D-vostra a fost inregistrata</h1>

<?php 

// 5. Link catre homepage sau Magazin. 

?>

<a href="http://localhost/TemePHP/Tema23/index_logat.php#magazin">Inapoi la MAGAZIN</a>