<!DOCTYPE html>
<html>
<head>
	<title> Curs CSS pas cu pas </title>
	<style>

	p {
		border: 1px gray dotted;
		padding: 20px;
		font-size: 24px;
	}

	.orange {
		color: orange;
	}

	/* Are prioritate fata de clasa .orange */
	.col1 p {
		color: blue;
	}



	</style>


</head>

<body>


<div id="page">
   	<p>Paragraf #page </p>
    <div class="col1">
   	   <p class="orange">Paragraf in .col1</p>
    </div>


   <div class="col2">
   	   <p>Paragraf in .col2</p>

   </div>
</div>


</body>
</html>