<?php

include 'config.php';
// Salvam Order 
$order = new Order();
$id = $order->save();

// 4. Afisam un mesaj 

?>

<h1>Comanda D-vostra a fost inregistrata cu numarul <?php echo $id; ?></h1>

<?php 

// 5. Link catre homepage sau Magazin. 

?>

<a href="index_logat.php#magazin">Inapoi la MAGAZIN</a>