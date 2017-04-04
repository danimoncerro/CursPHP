<?php include 'header.php' ?>

<?php

$myCart = get_cart(); 

?>

<div class="container">
	<div class="row">
		
		<div class="col-md-9">
		  <h1>Cosul meu de cumparaturi:</h1>

		  <table class="table table-bordered">

		  <?php foreach ($myCart as $produs): ?>
		  	<tr>
			  	<td>
			  		<?php echo $produs ?>
			  	</td>
		  	</tr>
		  <?php endforeach; ?>
		 </div>

		 <div class="col-md-3">

		</div>

	</div>
</div>



<?php include 'footer.php' ?>
