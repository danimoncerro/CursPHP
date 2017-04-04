<!DOCTYPE html>
<html>
<head>
	<title> Curs CSS pas cu pas </title>
	<style>
	#page {
		border: 1px solid black;
		padding: 10px;
	}
	#page p {
		font-size: 22px;
	}

	#page .italic {
		background-color: yellow;
	}

	.italic {
		font-style: italic;
		background-color: lightgray;
	}



	</style>


</head>

<body>


<h1>Curs CSS</h1>

<div id="page">
	<p class="italic">sit voluptatem accusantium doloremque laudantium, totam rem aperiam,</p>
	<p class="strong"> eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae </p>
	<p class="italic strong">vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut</p>
</div>

<p>Paragraf outside</p>
<p class="italic">Pragraf outside .italic</p>


</body>
</html>