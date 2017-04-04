<?php 

if (isset($_GET['color'])) {
	$color = $_GET['color'];

	echo "<div style='color: $color'>Mesaj test culoare</div>";
}

?>

<form action="" method="get">
<input type="text" name="color" placeholder="Enter color in hexa, ex: #000000">
<input type="submit" value="Check color">

</form>