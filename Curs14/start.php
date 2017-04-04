<!DOCTYPE html>
<html>
<head>
	<title> Bootstrap </title>
	
    <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1> Start Bootstrap </h1>
			</div>
		</div>
	</div>


	<nav class="navbar navbar-inverse">
	  <div class="container">
	    <ul class="nav navbar-nav">
	      <li class="active"><a href="#">Home</a></li>
	      <li class="dropdown">
	        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1
	        <span class="caret"></span></a>
	        <ul class="dropdown-menu">
	          <li><a href="#">Page 1-1</a></li>
	          <li><a href="#">Page 1-2</a></li>
	          <li><a href="#">Page 1-3</a></li> 
	        </ul>
	      </li>

	      <!-- Custom dropdown -->
	      <li class="dropdown">
	        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Zmeura
	        <span class="caret"></span></a>
	        <ul class="dropdown-menu">
	          <li><a href="https://google.ro">Zmeura 1</a></li>
	          <li><a href="#">Zmeura 2</a></li>
	        </ul>
	      </li>

	      <li><a href="#">Page 2</a></li> 
	      <li><a href="#">Page 3</a></li> 
	    </ul>
	  </div>
	</nav>

 
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<table class="table table-bordered table-striped">
				<tr>
					<th>Id</th>
					<th> Nume produs</th>
					<th>Pret</th>
				</tr>
				<tr>
					<td>3</td>
					<td>Zmeura</td>
					<td>20</td>
				</tr>
				<tr>
					<td>4</td>
					<td>Zmeura</td>
					<td>20</td>
				</tr>
				<tr>
					<td>3</td>
					<td>Zmeura</td>
					<td>20</td>
				</tr>
				<tr>
					<td>4</td>
					<td>Zmeura</td>
					<td>20</td>
				</tr>
				</table>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<ul class="nav nav-tabs">
				  <li class="active"><a data-toggle="tab" href="#home">Descriere</a></li>
				  <li><a data-toggle="tab" href="#menu1">Galerie Foto</a></li>
				  <li><a data-toggle="tab" href="#menu2">Pareri</a></li>
				</ul>

			<div class="tab-content">
			  <div id="home" class="tab-pane fade in active">
			    <h3>Descriere</h3>
			    <p>Some content.</p>
			  </div>
			  <div id="menu1" class="tab-pane fade">
			    <h3>Galerie Foto</h3>
			    <p><img src="http://localhost/TemePHP/Proiect1/poze/poza3.jpg" style="width: 300px"></p>
			  </div>
			  <div id="menu2" class="tab-pane fade">
			    <h3>Pareri</h3>
			    <p>Some content in menu 2.</p>
			  </div>
			  </div>
			</div>
		</div>


		<div class="row">
		<div class="col-md-12">
			<!-- Trigger the modal with a button -->
			<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Zmeura</button>

			<!-- Modal -->
			<div id="myModal" class="modal fade" role="dialog">
			  <div class="modal-dialog">

			    <!-- Modal content-->
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
			        <h4 class="modal-title">Modal Header</h4>
			      </div>
			      <div class="modal-body">
			        <p>			    <p><img src="http://localhost/TemePHP/Proiect1/poze/poza3.jpg" style="width: 300px"></p>
</p>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			      </div>
			    </div>

			  </div>
			</div>
		</div>
		</div>


			<div class="row">
				<div class="col-md-12">
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
					  <!-- Indicators -->
					  <ol class="carousel-indicators">
					    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					    <li data-target="#myCarousel" data-slide-to="1"></li>
					    <li data-target="#myCarousel" data-slide-to="2"></li>
					    <li data-target="#myCarousel" data-slide-to="3"></li>
					  </ol>

					  <!-- Wrapper for slides -->
					  <div class="carousel-inner" role="listbox">
					    <div class="item active">
					      <img src="http://localhost/TemePHP/Proiect1/poze/poza1.jpg" alt="Chania">
					    </div>

					    <div class="item">
					      <img src="http://localhost/TemePHP/Proiect1/poze/poza2.jpg" alt="Chania">
					    </div>

					    <div class="item">
					      <img src="http://localhost/TemePHP/Proiect1/poze/poza3.jpg" alt="Flower">
					    </div>

					    <div class="item">
					      <img src="http://localhost/TemePHP/Proiect1/poze/poza4.jpg" alt="Flower">
					    </div>
					  </div>

					  <!-- Left and right controls -->
					  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					  </a>
					  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					  </a>
					</div>
				</div>
			</div>
	</div>

	<script   src="https://code.jquery.com/jquery-2.2.4.js"   integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="   crossorigin="anonymous"></script>
	<script src="bootstrap/bootstrap.js"></script>
</body>
</html>

