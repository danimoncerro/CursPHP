<?php

	session_start();

	include 'functions.php';

	// Daca nu este logat atunci redirect catre form login 
	check_access();
?>

<!DOCTYPE html>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title> Formular editare </title>

</head>
<body>

<?php

// includem fisierul de conectare la baza de date

include 'connect.php';

// citim parametrul 'id'din url cu get
$id = $_GET['id'];

// construim sql-ul

$sql = "SELECT * FROM cars
		WHERE id = $id";


// pregatim sql-ul

$stmt = $conn->prepare($sql);

// rulam sql-ul

$stmt->execute();

// citim datele

$auto = $stmt->fetch();


// construim formularul de editare
// afisam datele din baza de date in formularul de editare

?>

<div id="div1">

<form action="update.php?id=<?php echo $id;  ?>" method="post">

	Brand: <input type="text" name="brand" value="<?php echo $auto["brand"];  ?>" required>
	<br>
	Model: <input type="text" name="model" value="<?php echo $auto["model"];  ?>" required>
	<br>
	Culoare: <input type="text" name="culoare" value="<?php echo $auto["culoare"];  ?>" required> 
	<br>
	Inmatriculat: <input type="text" name="inmatriculat" value="<?php echo $auto["inmatriculat"];  ?>" required>
	<br>
	Pret: <input type="text" name="pret" value="<?php echo $auto["pret"];  ?>" required>
	<br>
	<input type="submit" name="submit" value="Editeaza">

</form>

</div>


</body>
</html>