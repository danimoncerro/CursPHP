<?php

require_once 'config.php';

echo $_SESSION['message'];
echo "<br><br>";

$cart = new Cart();
$results = $cart->display();

?>

<br>
<a href="start.php">Inapoi la MAGAZIN</a>


