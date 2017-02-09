<!DOCTYPE html>
<html>
<head>
	<title>Zmeura de la Ferma Jeberean</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css"> 

</head>

<?php 

require_once 'function.php';

if (isset($_POST['submit'])) {

	$username = $_POST['username'];
	$password = $_POST['password'];
	$sql = "
	INSERT INTO utilizatori (username, password)
	VALUES ('$username', '$password');
";
$result = mysqli_query($conn, $sql);

if ($result) { 
	// echo 'Utilizatorul a fost inserat';
	//$_SESSION['msg'] = 'Contul tau a fost creat cu succes. ';
	//header('Location: index1.php');
	//exit; ?>

	<div class="container">
	
	<div class="alert alert-success">
    <a href="index1.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Felicitari!</strong> Inregistrarea s-a facut cu succes.
  </div>
	
    </div>
    

<?php 
	//header('Location: index1.php');
	//exit;
} else {
	echo 'Eroare la inserare utilizator';
}

}

?>

<body>

	<nav class = "navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Zmeura de la Ferma Jeberean</a>
			</div>

			<div class="collapse navbar-collapse" id="myNavbar">
      			<ul class="nav navbar-nav">
        			<li class="active"><a href="#">Acasa</a></li>
        			<li><a href="#">Despre</a></li>
        			<li><a href="#">Proiecte</a></li>
        			<li><a href="#">Contact</a></li>
      			</ul>
      			<ul class="nav navbar-nav navbar-right">
        			<li><a href="http://localhost/TemePHP/Proiect1/form_login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      			</ul>
    		</div>
		</div>
	</nav>

	<div class="container-fluid">
		<div  class="row">
			<div class="col-md-2">
			<img src="http://localhost/TemePHP/Proiect1/poze/logo.jpg" class="img-responsive">
			</div>
			<div class="col-md-8">
			<img src="http://localhost/TemePHP/Proiect1/poze/poza3.jpg" class="img-responsive">
			</div>
			<div class="carousel-caption">
          		<h3>"Un demers pentru cei ce iubesc aroma zmeurei, cea mai apreciata dintre fructele de padure!"</h3>
          		<br><br><br><br>
            </div>
        </div>
			<div class="col-md-2">
		
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
				<img src="http://www.ccbi.ac.nz/wp-content/uploads/2015/02/Visit-New-Zealand-Landscape-With-Road-and-Snowy-Mountains-Southern-Alps-New-Zealand-1600x1047.jpg" class="img-response img-circle" width=200>
			</div>
			Lista cu produsele de la Ferma Jeberean.
		</div>

		<div class="col-md-4">
			<h3>Perspectiva</h3> 
			<div>
				<img src="http://www.ccbi.ac.nz/wp-content/uploads/2015/02/Visit-New-Zealand-Landscape-With-Road-and-Snowy-Mountains-Southern-Alps-New-Zealand-1600x1047.jpg" class="img-response img-thumbnail" width=200>
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