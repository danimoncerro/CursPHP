<!DOCTYPE html>
<html>
<head>
	<title> Curs CSS pas cu pas </title>
	<style>
	#tabel {
		margin: 0 auto;
		width: 90%;
		border-spacing: 0;
		border-collapse: collapse;;
	}

	#tabel th {
		border: 1px solid black;
		background-color: black;
		color: white;
		padding: 6px;
		text-transform: uppercase;
	}

	#tabel td {
		border: 1px solid black;
		text-align: center;
		padding: 6px;

	}

    .highlight td {
    	background-color: lightgray;
    }

	</style>


</head>

<body>

<table id='tabel'>
	<tr>
		<th>Id</th>
		<th>Titlu</th>
		<th>Descriere</th>
		<th>Link</th>
	</tr>

	<?php for ($i=1; $i<=20; $i++){ ?>

	<?php 
		$highlight = "";
		if ($i % 2 == 1) {
			$highlight = "highlight";
		}

	?>


	<tr class="<?php echo $highlight ?>">
		<td><?php echo $i ?></td>
		<td>jfidsjif</td>
		<td>dsadsaa</td>
		<td>http://</td>
	</tr>
	<?php } ?>


</table>

</body>
</html>