<!DOCTYPE html>
<html>
<head>
	<title> Tabel Fructe </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
</head>

<body>


<?php

include 'classes/Database.php';

$id = $_GET['id'];

$fruct = new Database();

$result = $fruct->findDatabase($id);

?>



<h1>Editeaza produs</h1>



<form action="tema7_edit_fruct.php?id=<?php echo $result['id'] ?>" method="post">

	<input type="text" value="<?php echo $result['nume'] ?>" placeholder="Introdu fruct" name="nume">
	<input type="text" value="<?php echo $result['gust'] ?>" placeholder="Introdu gust" name="gust" required>
	<input type="text" value="<?php echo $result['provenienta'] ?>" placeholder="Introdu provenienta" name="provenienta"> 
	<input type="submit" name="submit" value="Editeaza fruct">

</form>

</body>
</html>

