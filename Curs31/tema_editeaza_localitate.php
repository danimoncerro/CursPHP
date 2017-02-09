<?php

include 'connect.php';
include 'functions.php';


$id = $_GET['id'];


$sql = "SELECT * FROM localitate 
		WHERE id = $id";

$stmt = $conn->prepare($sql);

$stmt->execute();

$localitate = $stmt->fetch(PDO::FETCH_ASSOC);


?>

<form action="tema_salveaza_localitate.php" method="post">

<input type="hidden" name="id" value="<?php echo $localitate['id'] ?>">

Localitatea: 
<input name="numele" type="text" value="<?php echo $localitate['name'] ?>" >
<br>

<select name="judetul">
	<option value="">Selecteaza judetul</option>
	<?php dropdown('judet', 'id', 'name'); ?>
	<?php //dropdown('judet', 'id', 'name', ''); ?>
</select>

<br>

<input type="submit" value="Salveaza" name="submit">
</form>

