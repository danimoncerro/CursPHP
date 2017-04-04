<!DOCTYPE html>
<html>
<title>HTML Tutorial</title>
<body>

<h1>This is a heading</h1>
<p>This is a paragraph.</p>

  Produse disponibile.

  <!-- Afiseaza cu foreach produsele folosind <table> -->
		<table class="table table-bordered table-striped">
		<tr>
			<th>Tip</th>
			<th>Soi</th>
			<th>Culoare</th>
			<th>Pret</th>
			<th>Actiuni</th>
		</tr>

			<?php
			foreach ($results as $k=>$produs){

				$id = $produs['id']; ?>

			<tr>

				<td><?php echo $produs['tip'] ?></td>
				<td><?php echo $produs['soi'] ?></td>
				<td><?php echo $produs['culoarea'] ?></td>
				<td><?php echo $produs['pret'] ?></td>
				<td>
					<form action="add_to_cart.php" method="GET">
			        	<input type="hidden" value="<?php echo $id ?>" name="id">
          				<input type="number" name="cantitate" min="1" max="500" value="1">
        				<input type="submit" value="Adauga in cos">
        			</form>
				</td>
			</tr>
			<?php } ?>
			</table>

</div>

</body>
</html>