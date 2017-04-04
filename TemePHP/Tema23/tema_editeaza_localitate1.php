<?php

include 'connect.php';
include 'functions.php';

// citim id din url

$id = $_GET['id'];

// construire sql

$sql = "SELECT *
		FROM localitate
		WHERE id=$id ";

// preparare sql

$stmt = $conn->prepare($sql);

// executare sql

$stmt->execute();

$result = $stmt->fetch(PDO::FETCH_ASSOC);



?>

<form action="tema_salveaza_localitate1.php" method="post">
	<input type="hidden" name="param_id" value="<?php echo $result['id']?>">
	Localitate:
	<input type="text" name="localitate" value="<?php echo $result['name']?>">
	<br><br>
	<select name='judet'>
		<option value="">Alege judetul</option>
		<?php dropdown('judet', 'id', 'name',$result['id_judet']); ?>
	</select>
	<br><br>
	<input type="submit" name="submit" value="Salveaza">

</form>

