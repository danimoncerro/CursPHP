<?php

include 'connect.php';

if(isset($_POST['submit'])){
	$tip = $_POST['tip'];
	$soi = $_POST['soi'];
	$culoare = $_POST['culoare'];
	$pret = $_POST['pret'];

// Construim sql-ul de insert 

	$sql = "INSERT INTO products (tip, soi, culoare, pret)
			VALUES ('$tip', '$soi', '$culoare', '$pret')";

	echo $sql . "<br>";

// Executam sql -ul;

	$conn->exec($sql);
	echo "Am inserat un nou produs.";
?>

<hr>
<a href="products.php">Afiseaza produsele</a>


<?php

} else {
	echo "Acces interzis, produsul se insereaza doar prin formular.";
}



