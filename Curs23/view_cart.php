<?php include 'header.php' ?>

<?php

$myCart = get_cart(); 
echo "<br><br><br><br>";
?>

<div class="container">
	<div class="row">
		
		<div class="col-md-9">
		  <h1>Cosul meu de cumparaturi contine <span><?php echo cart_count() . " produse"; ?> </span>:</h1>

		  <!-- Mesaj pentru alert -->
			<?php if (isset($_SESSION['message'])): ?>

			<div class="alert alert-warning">
				<?php echo $_SESSION['message']; ?>
			</div>

			<?php unset($_SESSION['message']); ?>
			<?php endif; ?>

		  <table class="table table-bordered">
		  	<tr>
		  		<th>ID</th>
		  		<th>Tip</th>
		  		<th>Soi</th>
		  		<th>Culoare</th>
		  		<th>Cantitate</th>
		  		<th>Pret</th>
		  		<th>Actiuni</th>
		  	</tr>

		  <?php foreach ($myCart as $produs): ?>
		  	<tr>
			  	<td>
			  		<?php echo $produs["id"] ?>
			  	</td>
			  	<td>
			  	    <?php echo $produs["title"] ?>
			  	</td>
			  	<td>
			  		<?php echo $produs["soi"] ?>
			  	</td>
			  	<td>
			  		<?php echo $produs["culoare"] ?>
			  	</td>
			  	<td>
			  		<?php echo $produs["cantitate"] ?>
			  	</td>
			  	<td>
			  		<?php echo $produs["pret"] ?> lei
			  	</td>
			  	<td>
			  		<a href="sterge_produs.php?id=<?php echo $produs["id"]; ?>" class="btn btn-sm btn-danger">Sterge</a>
			  	</td>

		  	</tr>
		  <?php endforeach; ?>
		  </table>


		  <h3>Valoare totala a cosului este <?php echo calculeaza_total(); ?> lei.</h3>

		  <a href="trimite_comanda.php" class="btn btn-sm btn-info">Trimite comanda</a>
		 </div>

		 <div class="col-md-3">

		</div>

	</div>
</div>



<?php include 'footer.php' ?>
