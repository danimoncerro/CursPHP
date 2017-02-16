<?php

// 1. include header

include 'header.php';

// 2. cream variabila id_comanda citind valoarea din url

$id = $_GET['id'];

// 3. cream sql de interogare (citire)

$order = new Order();
$comanda = $order->get($id);
$results = $order->getProducts($id);

?>
<br><br><br><br>
<div class="container">
	<div class="row">
		<h2><?php echo $order->getTitle($comanda) ?></h2>


		<table class="table table-bordered">
			<tr>
				<th>ID PRODUS</th>
				<th>PRODUS</th>
				<th>CANTITATE</th>
				<th>PRET</th>
				<th>VALOARE</th>
			</tr>

		<?php
		foreach ($results as $k=>$produs){
			echo "<tr>";

				echo "<td>";
					echo $produs['id'];		
				echo "</td>";
				echo "<td>";
					echo $produs['tip'] .' '. $produs['soi'] .' '. $produs['culoarea'];		
				echo "</td>";
				echo "<td>";
					echo $produs['cantitate'];		
				echo "</td>";
				echo "<td>";
					echo $produs['pret'];		
				echo "</td>";
				echo "<td>";
					echo $produs['valoare'];		
				echo "</td>";

			echo "</tr>";
		}
		?>
		</table>
		<br>

		<a href="comenzi.php">Vizualizare comenzi</a>
	</div>
</div>
<?php

// include footer.php

include 'footer.php';