<?php

// includem fisierul de conexiune la baza de date

include 'connect.php';

// includem fisierul functions;

include 'functions.php';

// pornim sessiunea

session_start();

// verificam daca utilizatorul este logat 

if(!check_logat()){
	header("Location: formular_login.php");
	exit;
} 

// afisam un titlu

echo "<h2>Magazia virtuala</h2>";

// Valori implicite
$pret_minim = 0;
$pret_maxim = 1000;

// citim pretul din url / formular 
// doar daca exista variabila min in url
if (isset($_GET['min'])) {
	$pret_minim = $_GET['min'];
} 

// doar daca exista variabila max in url
if (isset($_GET['max'])) {
	$pret_maxim = $_GET['max'];
}



// construim sql-ul

$sql = "SELECT * FROM stocuri
		WHERE pret_unitar >= $pret_minim
		  AND pret_unitar <= $pret_maxim
		  ";

// citim rezultatele

$result = get_stocuri($sql);


// calculam numarul de produse din magazie

$nr_produse = count($result);

// afisam rezultatele intr-un tabel

echo "<table border=1>";

	echo "<tr>";

		echo "<th>Nr. crt</th>";
		echo "<th>Denumire produs</th>";
		echo "<th>Data achizitiei</th>";
		echo "<th>Cantitate</th>";
		echo "<th>Pret unitar</th>";
		echo "<th>Furnizor</th>";
		echo "<th>Actiuni</th>";

	echo "</tr>";

	$nr=1;

	foreach ($result as $k=>$produs){
		
		$id = $produs['id'];

		echo "<tr>";

			echo "<td>".$nr."</td>";
			echo "<td>".$produs['denumire_produs']."</td>";
			echo "<td>".$produs['data_achizitiei']."</td>";
			echo "<td>".$produs['cantitate']."</td>";
			echo "<td>".$produs['pret_unitar']."</td>";
			echo "<td>".$produs['furnizor']."</td>";
			echo "<td>";
				echo "<a href='formular_editeaza_produs.php?id=".$id."'> Editeaza | 
					  <a href='sterge_produs.php?id=".$id."'> Sterge";
			echo "</td>";

			$nr++;


		echo "</tr>";

	}

echo "</table>";

echo "<hr>";


/**
 * Calculeaza valoarea totala a produselor 
 *
 * @param: array $produse - lista cu produse
 * @return: int
 **/
function calculeazaTotal($produse) {
	$total = 0;

	foreach ($produse as $k=>$produs) {
		$cantitate = $produs['cantitate'];
		$pret_unitar = $produs['pret_unitar'];

		$total += $cantitate * $pret_unitar;
	}

	return $total;
}

echo "Valoarea totala a stocului este:" . calculeazaTotal($result) . "lei (fara tva)"; 
echo "<br>";
echo "Valoarea totala a stocului este:" . calculeazaTotal($result) * 1.2 . "lei (cu tva)"; 

/** 

function calculeazaTotal($produse) {
	$total = 0;

	foreach ($produse as $k=>$produs) {
		$total = $total + $produs['cantitate'] * $produs['pret_unitar'];
	}

	return $total;
}
**/

echo "<hr>";


/*
// calculam valoare totala a stocului


$sql = "SELECT SUM(pret_unitar) AS total FROM stocuri
		WHERE pret_unitar >= $pret_minim
		  AND pret_unitar <= $pret_maxim
		";

$result = get_stocuri($sql);

// afisam valoare stocuri 

echo "<h3>Total valoare stocuri = " . $result[0]['total']. " lei</h3>";
*/
?>

<form action="" method="get">

<h3>Total produse magazie = <?php echo $nr_produse ?></h3>
<h3>Filtrari:</h3>
<input type="text" name="min" placeholder="Pretul minim"> lei si 
<input type="text" name="max" placeholder="Pretul maxim"> lei 

<br><br>

<input type="submit" value="Cauta">

</form>

<?php

echo "<br>";
echo "<a href='formular_adauga_produs.php'>Adauga produs</a>";
echo "<br><br>";
echo "<a href='orar_plecari_admin.php'>Vizualizare orar plecari</a>";


