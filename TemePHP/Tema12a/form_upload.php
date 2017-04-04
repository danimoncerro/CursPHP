<?php

$id = $_GET['id'];

?>

<!DOCTYPE html>
<html>
<head>
	<title> Produse fitosanitare </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
</head>

<body>

<h1>Incarca poza</h1>

<form action="upload.php?id=<?php echo $id; ?>"  method="post" enctype="multipart/form-data">

<input type="file" name="poza"><br><br>


<input type="submit" value="Upload poza" name="submit">



</form>

</body>
</html>
