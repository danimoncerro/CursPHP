<?php

include "connect.php";

// 1. CItim id-ul din url

$id = $_GET['id'];

// 2. Construim sQL de citire dupa id 

$sql = "SELECT * FROM products
        WHERE id = $id";

// 3. Preparam sql-ul

$stmt = $conn->prepare($sql);

// 4. Citim produsul din baza de date 
$stmt->execute();

$product = $stmt->fetch();

// var_dump($product);

if ($product == false) {
	echo "Nu exista produsul selectat <br>";
	echo "<a href='products.php'>Acceseaza produsele</a>";

	exit;
}


?>

<h2>Editeaza produs</h2>
<form action="update.php?id=<?php echo $id; ?>" method="post">

Tip:
<input type="text" name="tip" value="<?php echo $product["tip"] ?>">
<br><br>
Soi:
<input type="text" name="soi" value="<?php echo $product["soi"] ?>">
<br><br>
Culoare:
<input type="text" name="culoare" value="<?php echo $product["culoare"] ?>">
<br><br>
Pret:
<input type="text" name="pret" value="<?php echo $product["pret"] ?>">
<br><br>
<input type="submit" name="submit" value="modifica">



</form>

