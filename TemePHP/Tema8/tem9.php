<!DOCTYPE html>
<html>
<head>
	<title> Tem9 </title>
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

    .highlight1 td {
    	background-color: lightgreen;
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
			$highlight = "highlight1";
		}

	?>


	<tr class="<?php echo $highlight ?>">
		<td><?php echo $i ?></td>
		<td>Dunarea</td>
		<td>albastra</td>
		<td>http://dunarea.ro</td>
	</tr>
	<?php } ?>


</table>

</body>
</html>