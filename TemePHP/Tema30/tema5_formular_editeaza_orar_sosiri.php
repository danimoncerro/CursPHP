<?php

require_once 'classes/Orar.php';

// citim parametrul 'id'din url cu get
$id = $_GET['id'];

$zbor = new OrarSosiri();

$result = $zbor->findOneById($id);


// construim formularul de editare
// afisam datele din baza de date in formularul de editare

?>

<form action="tema5_update_zbor.php?id=<?php echo $id;  ?>" method="post">

	Ora: <input type="text" name="ora" value="<?php echo $result["ora_aterizare"];  ?>" required>
	<br>
	De la: <input type="text" name="de_la" value="<?php echo $result["de_la"];  ?>" required>
	<br>
	Compania: <input type="text" name="compania" value="<?php echo $result["compania"];  ?>" required> 
	<br>
	<br>
	<input type="submit" name="submit" value="Editeaza">

</form>