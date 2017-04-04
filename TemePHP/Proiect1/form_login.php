<?php include 'header.php' ?>


	<div class="container-fluid">
		<div  class="row">
			<div class="col-md-2">
				<img src="http://localhost/TemePHP/Proiect1/poze/logo.jpg" class="img-responsive">
			</div>
		
			<div class="col-md-7">
				<img src="http://localhost/TemePHP/Proiect1/poze/poza3.jpg" class="img-responsive">
				<div class="carousel-caption">
          			<h3>"Un demers pentru cei ce iubesc aroma zmeurei, cea mai apreciata dintre fructele de padure!"</h3>
          		</div>
            </div>
        
			<div class="col-md-3">
				<h3><i class=" fa fa-sign-in "></i> Autentificare</h3><br>
				<form action="login.php" method="post">
					<p>
						<input type="text" name="username" placeholder="Introdu username">
					</p>
					<p>
						<input type="password" name="password" placeholder="Introdu parola">
					</p>
					<p>
						<input type="submit" name="submit" value="Login">	
					</p>
				</form>
				<a href="form_register.php">Inregistrare</a>
			</div>
		</div>
	</div>
	<br>
	<div class="container text-center">
	<div class="row">
		<div class="col-md-4">
			<h3>Sezonul 2016</h3> 

			<div>
				<img src="http://localhost/TemePHP/Proiect1/poze/poza2.jpg" class="img-response img-thumbnail" width=200>
			</div>
			Activitati din sezonul 2016 la Ferma Jeberean.
		</div>

		<div class="col-md-4">
			<h3>Produse</h3> 
			<div>
				<img src="http://localhost/TemePHP/Proiect1/poze/poza7.jpg" class="img-response img-circle" width=200>
			</div>
			Lista cu produsele de la Ferma Jeberean.
		</div>

		<div class="col-md-4">
			<h3>Perspectiva</h3> 
			<div>
				<img src="http://localhost/TemePHP/Proiect1/poze/poza5.jpg" class="img-response img-thumbnail" width=200>
			</div>
			Proiectele noastre de viitor.
		</div>
	</div>
</div>
<br><br><br>

	<footer class="container-fluid text-right">
  		<p>Copyright@ZmeuraDeLaFermaJeberean</p>
	</footer>



</body>
</html>