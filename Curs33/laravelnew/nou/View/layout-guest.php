<!DOCTYPE html>
<html>
<title>Produse disponibile.</title>
<body>

<h1>Produse disponibile.</h1>
<p>This is a paragraph.</p>

  

  <!-- Afiseaza cu foreach produsele folosind <table> -->
		<table class="table table-bordered table-striped" border="1" width="800">
		<tr>
			<th>Tip</th>
			<th>Soi</th>
			<th>Culoare</th>
			<th>Pret</th>
		</tr>

			<?php
			foreach ($results as $k=>$produs){

				$id = $produs['id']; ?>

			<tr>

				<td><?php echo $produs['tip'] ?></td>
				<td><?php echo $produs['soi'] ?></td>
				<td><?php echo $produs['culoarea'] ?></td>
				<td><?php echo $produs['pret'] ?></td>
			</tr>
			<?php } ?>
			</table>

</div>

</body>
</html>