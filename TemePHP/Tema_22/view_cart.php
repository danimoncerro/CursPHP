<?php include 'header_logat.php' ?>

<?php

$myCart = get_cart(); 
echo "<br><br><br><br>";
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
		  </table>
		 </div>

		 <div class="col-md-3">

		</div>

	</div>
</div>



<?php include 'footer.php' ?>
