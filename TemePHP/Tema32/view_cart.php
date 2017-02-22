<?php

require_once 'config.php';

echo "<h2>Cosul tau de cumparaturi</h2>";

if(isset($_SESSION['message'])) {
	echo $_SESSION['message'];
}

echo "<br><br>";

$cart = new Cart();
$results = $cart->display();

?>

<br>
<a href="golire_cos.php">Golire cos</a>
<br>
<a href="start.php">Inapoi la MAGAZIN</a>




