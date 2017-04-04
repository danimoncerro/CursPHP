
<?php

if (isset($_POST['submit'])){
	$numele = $_POST['numele'];
	$prenumele = $_POST['prenumele'];
	$sexul = $_POST['sexul'];
	$data_nasterii = $_POST['data_nasterii'];
	$stare_civila = $_POST['casatorit'];
	$vechime = $_POST['vechime'];
	$telefon = $_POST['telefon'];
	echo "Numele: $numele <br>";
	echo "Prenumele: $prenumele <br>";
	echo "Sexul: $sexul <br>";		
	echo "Data nasterii: $data_nasterii <br>";
	echo "Starea civila: $stare_civila <br>";
	echo "Telefon: $telefon <br>";
}
?>

<form action="tema3.php" method="post">
<h3>Introduceti datele D-voastra in campurile de mai jos pentru a va completa CV-ul:</h3><br>

<fieldset>
<legend>Informatii personale:</legend>

Numele: <input type="text" name="numele" required><br><br>
Prenumele: <input type="text" name="prenumele" required><br><br><br>
Sex: 
			<input type="radio" name="sexul" value="male" checked>Male<br>
			<input type="radio" name="sexul" value="female">Female<br>
	 <br>
Data nasterii: 
  					<input type="date" name="data_nasterii">
			   <br>
Stare civila: 
  				<input type="checkbox" name="casatorit" value="Casatorit"> Casatorit <br>
  				<input type="checkbox" name="casatorit" value="Necasatorit"> Necasatorit  
		        <br>
Vechime in munca (ani):   				            <input type="number" name="vechime" min="0">
				        <br>
Studii: <select name="studii">
  			<option value="Scoala primara">Scoala primara</option>
  			<option value="Liceu">Studii medii</option>
  			<option value="Facultate">Studii superioare</option>
        </select> <br><br>
Telefon: 
         	<input type="tel" name="telefon">
		 
Email: 
  	 	  <input type="email" name="email">
	   
Pagina web/blog: 
               		  <input type="url" name="homepage">
				 
Abilitati:<textarea name="message" rows="10" cols="30">

</textarea><br><br>
<input type="submit" name="submit" value="verifica">

</fieldset>
</form>

