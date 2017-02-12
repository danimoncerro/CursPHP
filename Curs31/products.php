<?php 

require_once 'classes/Database.php';

include 'header.php';

// de extras produsele din db  
// construim sql-ul

$sql = "SELECT * FROM products";

// citim rezultatele

$result = get_produse($sql);



?>




<!-- Continut -->
<div class="container">
	<div class="row">
		<div class="col-md-9">
		  Produse disponibile

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
					foreach ($result as $k=>$produs){
						
						$id = $produs['id'];

						echo "<tr>";

							echo "<td>".$produs['tip']."</td>";
							echo "<td>".$produs['soi']."</td>";
							echo "<td>".$produs['culoare']."</td>";
							echo "<td>".$produs['pret']."</td>";
							echo "<td>";
								echo "<a href='add_to_cart.php?id=".$id."'> Adauga in cos";
							echo "</td>";

						echo "</tr>";

					}
					?>
					</table>
		 </div>
		<div class="col-md-3">
		</div>

	</div>
</div>


<?php include 'footer.php'; ?>

