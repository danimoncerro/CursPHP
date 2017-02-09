<!DOCTYPE html>
<html>
<head>
	<title> Tem7 </title>
	<style>

	p {
		border: 1px gray dotted;
		padding: 20px;
		font-size: 24px;
	}

	#orange {
		color: orange;
	}

	/* Nu Are prioritate fata de id #orange */
	.col1 p {
		color: blue;
	}



	</style>


</head>

<body>


<div id="page">
   	<p>Paragraf #page </p>
    <div class="col1">
   	   <p id="orange">Paragraf in .col1</p>
    </div>


   <div class="col2">
   	   <p>Paragraf in .col2</p>

   </div>
</div>


</body>
</html>