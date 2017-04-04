<?php include 'header.php' ?>

<?php

//$id = $_SESSION['user_id'];
$sql = "SELECT comenzi.* , users.username
		FROM comenzi
		LEFT JOIN users ON users.id = comenzi.id_user
		ORDER BY comenzi.id DESC";
$comenzi = get_comenzi($sql); 

echo "<br><br><br><br>";
?>

<div class="container">
	<div class="row">
		
		<div class="col-md-9">
		  <h1>Aveti in total un numar de  <span><?php echo count($comenzi) . " comenzi"; ?> </span>:</h1>
          <br>
		  <!-- Mesaj pentru alert -->
			<?php if (isset($_SESSION['message'])): ?>

			<div class="alert alert-warning">
				<?php echo $_SESSION['message']; ?>
			</div>

			<?php unset($_SESSION['message']); ?>
			<?php endif; ?>

		  <table class="table table-bordered">
		  	<tr>
		  		<th>NUMAR COMANDA</th>
		  		<th>UTILIZATOR</th>
		  		<th>DATA COMENZII</th>
		  		<th>LEI</th>
		  		<th>ACTIUNI</th>
		  	</tr>

		  <?php $total_val = 0; ?>

		  <?php foreach ($comenzi as $comanda): ?>
		   	<tr>
		   	 	<td>
			  		<?php echo $comanda["id"] ?>
			  	</td>
			  	<td>
			  	    <?php echo $comanda["username"] ?>
			  	</td>
			  	<td>
			  		<?php echo date("d-m-Y H:i:s", $comanda["created_at"]) ?>
			  	</td>
			  	<td>
			  	    <?php echo $comanda["total"] ?>
			  	</td>
			  	<td>
			  		<a href="view_comanda.php?id=<?php echo $comanda["id"] ?>">vizualizeaza</a>
			  	</td>
			<?php $total_val = $total_val + $comanda["total"]; ?>
			</tr>
		  <?php endforeach; ?>
		  </table>


		  <h3>Valoarea totala a comenzilor este <?php echo $total_val; ?> lei.</h3>
	</div>
</div>

<?php include 'footer.php' ?>