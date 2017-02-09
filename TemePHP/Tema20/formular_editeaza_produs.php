<?php

//include conexiune la baza de date

include 'connect.php';

//include fisierul functions.php

include 'functions.php';

// atribuire valoare din url parametrului id

$id = $_GET['id'];

// formulare sql

$sql = "SELECT * FROM stocuri
		WHERE id=$id";

// citire rezultate

$result = get_stocuri($sql);

//echo var_dump($result);
//exit;

?>

<form action="update_produs.php?id=<?php echo $id ?>" method="post">

	Produs: <input type="text" name="denumire_produs" value="<?php echo $result[0]["denumire_produs"] ?>">
	<br>
	Data achizitiei: <input type="text" name="data_achizitiei" value="<?php echo $result[0]['data_achizitiei'] ?>" >
	<br>
	Cantitate: <input type="int" name="cantitate" value="<?php echo $result[0]['cantitate'] ?>" >
	<br>
	Pret: <input type="int" name="pret_unitar" value="<?php echo $result[0]['pret_unitar'] ?>" >
	<br>
	Furnizor: <input type="text" name="furnizor" value="<?php echo $result[0]['furnizor'] ?>" >
	<br><br>
	<input type="submit" name="submit" value="Editeaza">

</form>


