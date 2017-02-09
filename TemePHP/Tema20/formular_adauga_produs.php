<!DOCTYPE html>

<html>

<body>


<form action="adaugare_produs.php" method="post">

	Produs: <input type="text" name="denumire_produs" placeholder="introdu denumire produs" required>
	<br>
	Data achizitiei: <input type="text" name="data_achizitiei" placeholder="introdu data achizitiei" required>
	<br>
	Cantitate: <input type="int" name="cantitate" placeholder="introdu cantitatea" required>
	<br>
	Pret: <input type="int" name="pret_unitar" placeholder="introdu pretul" required>
	<br>
	Furnizor: <input type="text" name="furnizor" placeholder="introdu furnizorul" required>
	<br><br>
	<input type="submit" name="submit" value="Adauga">

</form>


</body>
</html>
