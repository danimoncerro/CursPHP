<?php 

// .. config 
// M - Model - Business Logic - toate interogarile de MySQl 
// V - View - Partea vizuala: cod html + css + js 
// C - Controller -> apeleaza metodele corespunzatoare
// .. css/ js / librarii 

?>


<!DOCTYPE html>
<html>
<title>HTML Tutorial</title>
<body>

<h1>This is a heading</h1>
<p>This is a paragraph.</p>



<?php 

$server='localhost';
$username='root';
$password='';
$database='magazin';

$conn = new PDO("mysql:host=$server;dbname=$database", $username, $password);

// Extragem toate produsele 
$sql = 'SELECT products.*, culori.culoarea FROM products
				LEFT JOIN culori on culori.id = products.culoare';

    	$stmt = $conn->prepare($sql);
		$stmt->execute();
		$results = $stmt->fetchAll();
	
		

?>

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

						$id = $produs['id'];

						echo "<tr>";

							echo "<td>".$produs['tip']."</td>";
							echo "<td>".$produs['soi']."</td>";
							echo "<td>".$produs['culoarea']."</td>";
							echo "<td>".$produs['pret']."</td>";
							echo "<td>";
              ?>
								<form action="add_to_cart.php" method="GET">
                  <input type="hidden" value="<?php echo $id ?>" name="id">
                  <input type="number" name="cantitate" min="1" max="500" value="1">
                <input type="submit" value="Adauga in cos">
                </form>
  							<?php echo "</td>";

						echo "</tr>";

					}
					?>
					</table>
          <form action="upload_img.php" method="post" enctype="multipart/form-data">
            <input type="file" name="poza">
            <input type="submit" value="Upload poze" name="submit">
          </form>
          <a href="view_img.php">Galerie produse</a>
</div>

</body>
</html>