<?php

include 'connect.php';
include 'functions.php';

// 1. Calculam totalul ( pt cos ) si salvam intr-o variabila

$total = calculeaza_total();

// 2. Citim idul utilizatorului din sesiune

$id_user = $_SESSION['user']['id'];

// 3. Facem insert in tabelul comenzi 

$sql = "INSERT INTO comenzi(id_user, total)
        VALUES ($id_user, $total)";

$stmt = $conn->prepare($sql);

$stmt->execute();

// golim cosul

unset($_SESSION['cart']);


// 4. Afisam un mesaj 

?>

<h1>Comanda D-vostra a fost inregistrata</h1>

<?php 

// 5. Link catre homepage sau Magazin. 

?>

<a href="http://localhost/CursPHP/Curs23/index_logat.php#magazin">Inapoi la MAGAZIN</a>