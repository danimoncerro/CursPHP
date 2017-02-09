<?php

include 'connect.php';
include 'functions.php';
// citim variabila id din url

$id = $_GET['id'];

// facem o interogare si luam datele utilizatorului

$sql = "SELECT * FROM elevi 
		WHERE id = $id";

$stmt = $conn->prepare($sql);

$stmt->execute();

// Varianta 1: $result = $stmt->fetchAll(); vei obtine un array care contine array 
// $elev = $result[0];


// Varianta 2 : array cu un singur nivel = elementul selectat
$elev = $stmt->fetch(PDO::FETCH_ASSOC);



// creem un formular html
?>

<form action="salveaza_elev.php" method="post">

<input type="hidden" name="id" value="<?php echo $elev['id'] ?>">

Numele: 
<input name="numele" type="text" value="<?php echo $elev['numele'] ?>" >
<br>

<select name="clasa">
	<option value="">Selecteaza clasa</option>
	<?php dropdown('clasa', 'diriginte', 'nume', $elev['clasa']) ?>
	<?php //dropdown('judet', 'id', 'name', ''); ?>
</select>

<br>

<input type="submit" value="Salveaza" name="submit">
</form>

