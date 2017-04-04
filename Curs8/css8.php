<!DOCTYPE html>
<html>
<head>
	<title> Curs CSS pas cu pas </title>
	<style>
	/*  Valabil pentru toate <p>-urile */
/*	p {
		border: 1px gray dotted;
		padding: 20px;
		font-size: 24px;
	}*/

	/*  Valabil pentru toate <p>-urile din interioul tagului cu id-ul #page */
/*	#page p {
		border: 1px gray dotted;
		padding: 20px;
		font-size: 24px;
	}
*/

	/*  Valabil pentru toate <p>-urile din interioul tagului cu id-ul #page care contine tag cu clasa .col1 */
	#page .col1 p {
		border: 1px gray dotted;
		padding: 20px;
		font-size: 24px;
	}





	</style>


</head>

<body>


<div id="page">
    <div class="col1">
   	   <p>Paragraf in .col1</p>
    </div>

</div>


</body>
</html>