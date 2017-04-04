
<?php

$zile =	['Luni', 'Marti', 'Miercuri', 'Joi', 'Vineri', 'Sambata', 'Duminica'];
$curse = ['Bucuresti', 'Viena', 'Budapesta', 'Bucuresti', 'Roma', 'Madrid', 'Londra'];

if (isset($_GET['submit'])){
	
		$ziua = $_GET['ziua'];
		$contor = 0;

		for ($i = 0; $i < count($zile); $i++) {
			if ($zile[$i] == $ziua) {
				echo $ziua. " zboara cursa spre " . $curse[$i] . "." . "<br>"; 
				$contor = 1;
			} 
		}
		if ($contor == 0) {
			echo "Ati introdus gresit ziua! <br>";
		}
		
}
?>

<form action="tema1.php" method="get">
<h3>PLECARI curse aeriene de pe aeroportul Baia Mare.<h3>
<input type="text" name="ziua" placeholder="Introduceti ziua" required>
<input type="submit" name="submit" value="verifica">
</form>

