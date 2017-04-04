<form action="process.php" method="post">
<p>
Vreau sa invat: 
	<input type="checkbox" value="PHP" name="language[]">PHP
	<input type="checkbox" value="HTML" name="language[]">HTML
	<input type="checkbox" value="CSS" name="language[]">CSS
</p>

<p>
Imi plac orasele:
<select name="city[]" multiple>
	<option value="Oradea">Oradea</option>
	<option value="Cluj Napoca">Cluj Napoca</option>
	<option value="Baia Mare">Baia Mare</option>
</select>

</p>

<p>
Vrei sa inveti programare?: 
<input type="radio" value="Da" name="answer" required>Da
<input type="radio" value="Nu" name="answer" >Nu
</p>

<p>
Sex: 
<input type="radio" value="M" name="s">M
<input type="radio" value="F" name="s">F

</p>


<input type="submit" name="submit" value="proceseaza">
</form>