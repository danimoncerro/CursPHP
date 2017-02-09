<table style="width:80%" border="1" align="center" bgcolor="white">
<td>
<table style="width:90%" border="0" align="center">

<!-- <form action="tem1_upload.php" method="post" enctype="multipart/form-data"> -->
<form action="tema1.php" method="post">

<?php

if (isset($_POST['submit'])){
  $nume = $_POST['nume'];
  $prenume = $_POST['prenume'];
  $email = $_POST['email'];
  $sexul = $_POST['sexul'];
  $data_nasterii = $_POST['data_nasterii'];
  $telefon = $_POST['telefon'];
  $permis = $_POST['permis'];
  $stare_civila = $_POST['stare_civila'];
  $stagiu = $_POST['stagiu'];
  $localitate = $_POST['localitate'];
  $adresa = $_POST['adresa'];
  $nationalitate = $_POST['nationalitate'];
  $obiectiv = $_POST['obiectiv'];
  $tip_loc_munca = $_POST['tip_loc_munca'];
  $studii = $_POST['studii'];
  $limba_straina = $_POST['limba_straina'];
  $organizationale = $_POST['organizationale'];
  $tehnice = $_POST['tehnice'];

  session_start();
  $_SESSION['numele'] = $nume;
  $_SESSION['prenumele'] = $prenume;
  $_SESSION['email'] = $email;
  $_SESSION['sexul'] = $sexul;
  $_SESSION['data_nasterii'] = $data_nasterii;
  $_SESSION['telefon'] = $telefon;

  //setcookie('prenumele', $prenume, time() + 30);
  

if(strlen($nume)==0) {
    echo "<style>
div.mesaj {
    background-color:black;
    text-align:center;
    color:white;
    margin:20px;
    padding:20px;
    width:400px;
} 
</style>

<div class='mesaj'>
<h2>Atentie !</h2>
<p>Nu ati introdus numele.</p>
</div>";

  }

  if(strlen($email)==0) {
    echo "<style>
div.mesaj {
    background-color:black;
    text-align:center;
    color:white;
    margin:20px;
    padding:20px;
    width:400px;
} 
</style>

<div class='mesaj'>
<h2>Atentie !</h2>
<p>Trebuie sa introduceti o adresa de email valida.</p>
</div>";

  }

  
  
  echo "<h4> 1) Detalii personale </h4>";
  echo "Numele: $nume <br>";
  echo "Prenumele: $prenume <br>";
  echo "Email: $email <br>";
  echo "Sexul: $sexul <br>";
  echo "Data nasterii: $data_nasterii <br>";
  echo "Telefon: $telefon <br>";
  echo "Permis conducere categoria: $permis <br>";
  echo "Starea civila: $stare_civila <br>";
  echo "Stagiu militar: $stagiu <br>";
  echo "Localitatea: $localitate <br>";
  echo "Adresa: $adresa <br>";
  echo "Nationalitatea: $nationalitate <br>";
  echo "<h4> 2) Detalii loc de munca </h4>";
  echo "Obiectivul: $obiectiv <br>";
  echo "Tipul locului de munca: $tip_loc_munca <br>";
  echo "<h4> 3) Studii </h4>";
  echo "Instiutii de invatamant absolvite: $studii <br>";
  echo "Limbi straine: $limba_straina <br>";
  echo "<h4> 4) Aptitudini si competente </h4>";
  echo "Organizationale: $organizationale <br>";
  echo "Tehnice: $tehnice <br>";
	

   
}
?>

<!--<form action="tema1.php" method="post"> -->

<th colspan="3">
Completati CV-ul de mai jos
<br><br><br>
</th>
<tr><td colspan="3"><p></td></tr>

<tr>
<td colspan="3">
<hr>
1) Date personale
<hr>
<br><br>
</td>
</tr>

<td width="30%" style="text-align: right"> 
Nume:
</td>
<td style="text-align:center">

<?php
if(isset($_SESSION['numele'])){
  echo "<input size='43' type='text' name='nume' value='$_SESSION[numele]' >" ;
} else {
  echo "<input size='43' type='text' name='nume' >" ;
}
?>
</td>
<td width="30%"><p>
</p>
</td>

<tr>
<td width="30%" style="text-align: right"> 
Prenume:
</td>
<td style="text-align:center">

<?php
if(isset($_SESSION['prenumele'])){
  echo "<input size='43' type='text' name='prenume' value='$_SESSION[prenumele]' >";
} else {
    echo "<input size='43' type='text' name='prenume'>";
}
?>

</td>
<td width="30%"><p>
</p>
</td>
</tr>

<tr>
<td width="30%" style="text-align: right"> 
Adresa de email:
</td>
<td style="text-align:center">

<?php
if(isset($_SESSION['email'])){
  echo "<input size='43' type='text' name='email' value='$_SESSION[email]' >";
} else {
    echo "<input size='43' type='text' name='email' >";
}
?>

</td>
<td width="30%"><p> (exemplu@yahoo.com)
</p>
</td>
</tr>

<!-- Campul sex-->
<?php 

$sexul = '';
if (isset($_SESSION['sexul'])) {
  $sexul = $_SESSION['sexul'];
}

?>
<tr>
  <td width="30%" style="text-align: right"> 
    Sex:
  </td>

  <td style="text-align:center">
  	<input type="radio" name="sexul" value="male" <?php if ($sexul == 'male') echo 'checked'; ?>>Male
  	<input type="radio" name="sexul" value="female" <?php if ($sexul == 'female') echo 'checked'; ?>>Female
  </td>

  <td width="30%">
    <p></p>
  </td>
</tr>

<tr>
<td width="30%" style="text-align: right"> 
Data nasterii:
</td>
<td style="text-align:center">
	<input type="date" name="data_nasterii">
</td>
<td width="30%"><p> (Format LL/ZZ/AA)
</p>
</td>
</tr>

<tr>
<td width="30%" style="text-align: right"> 
Telefon:
</td>
<td style="text-align:center">
<input size="43" type="text" name="telefon" >
</td>
<td width="30%"><p>
</p>
</td>
</tr>

<tr>
<td width="30%" style="text-align: right"> 
Permis conducere:
</td>
<td style="text-align:center">
<input type="checkbox" name="permis" value="A"> A 
<input type="checkbox" name="permis" value="B" checked> B  
<input type="checkbox" name="permis" value="C"> C 
<input type="checkbox" name="permis" value="D"> D  
<input type="checkbox" name="permis" value="E"> E
</td>
<td width="30%"><p>
</p>
</td>
</tr>

<td width="30%" style="text-align: right"> 
Stare civila:
</td>
<td style="text-align:center">
<select name="stare_civila">
  			<option value="casatorit(a)">casatorit(a)</option>
  			<option value="necasatorit(a)">necasatorit(a)</option>
  			<option value="casatorit(a)_cu_copii">casatorit(a) cu copii</option>
  			<option value="necasatorit(a)_cu_copii">necasatorit(a) cu copii</option>
  			<option value="vaduv(a)">vaduv(a)</option>
  			<option value="divortat(a)">divortat(a)</option>
</select>
</td>
<td width="30%"><p>
</p>
</td>

<tr>
<td width="30%" style="text-align: right"> 
Stagiu militar:
</td>
<td style="text-align:center">
			<input type="radio" name="stagiu" value="da" checked>da
			<input type="radio" name="stagiu" value="nu">nu
</td>
<td width="30%"><p>
</p>
</td>
</tr>

<td width="30%" style="text-align: right"> 
Localitate:
</td>
<td style="text-align:center">
<input size="43" type="text" name="localitate" >
</td>
<td width="30%"><p>
</p>
</td>

<tr>
<td width="30%" style="text-align: right"> 
Adresa:
</td>
<td style="text-align:center">
<input size="43" type="text" name="adresa" ><br>(Strada, numar, apartament etc.)
</td>
<td width="30%"><p>
</p>
</td>
</tr>

<tr>
<td width="30%" style="text-align: right"> 
Nationalitate:
</td>
<td style="text-align:center">
<input size="43" type="text" name="nationalitate" >
</td>
<td width="30%"><p>
</p>
</td>
</tr>

<tr><td colspan="3"><p></td></tr>

<tr>
<td colspan="3">
<br>
<hr>
2) Detalii loc de munca
<hr>
<br><br>
</td>
</tr>

<tr>
<td width="30%" style="text-align: right"> 
Obiectiv:
</td>
<td style="text-align:center">
<textarea name="obiectiv" rows="10" cols="43">
</textarea>
</td>
<td width="30%"><p>
</p>
</td>
</tr>

<tr>
<td width="30%" style="text-align: right"> 
Tipul locului de munca:
</td>
<td style="text-align:left">
<input type="checkbox" name="tip_loc_munca" value="Full time" checked> Full time <br>
<input type="checkbox" name="tip_loc_munca" value="Part time"> Part time <br>
<input type="checkbox" name="tip_loc_munca" value="Practica"> Practica <br>
<input type="checkbox" name="tip_loc_munca" value="Project based"> Project based <br>  
<input type="checkbox" name="tip_loc_munca" value="Sezonier"> Sezonier <br>
<input type="checkbox" name="tip_loc_munca" value="Voluntariat"> Voluntariat
</td>
<td width="30%"><p>
</p>
</td>
</tr>

<tr>
<td colspan="3">
<br>
<hr>
3) Studii
<hr>
<br><br>
</td>
</tr>

<tr>
<td width="30%" style="text-align: right"> 
Institutii frecventate/absolvite:
</td>
<td style="text-align:center">
<textarea name="studii" rows="5" cols="43">
</textarea>
</td>
<td width="30%"><p>
</p>
</td>
</tr>

<tr>
<td width="30%" style="text-align: right"> 
Limbi straine:
</td>
<td style="text-align:center">
<select name="limba_straina"[] multiple>
  			<option value="engleza">Engleza</option>
  			<option value="franceza">Franceza</option>
  			<option value="germana">Germana</option>
  			<option value="italiana">Italiana</option>
  			<option value="spaniola">Spaniola</option>
  			<option value="alta">Alta</option>
</select>
</td>
<td width="30%"><p>
</p>
</td>
</tr>

<tr>
<td colspan="3">
<br>
<hr>
4) Aptitudini si competente
<hr>
<br><br>
</td>
</tr>

<tr>
<td width="30%" style="text-align: right"> 
Organizationale si sociale:
</td>
<td style="text-align:center">
<textarea name="organizationale" rows="10" cols="43">
</textarea>
</td>
<td width="30%"><p>
</p>
</td>
</tr>

<tr>
<td width="30%" style="text-align: right"> 
Tehnice:
</td>
<td style="text-align:center">
<textarea name="tehnice" rows="10" cols="43">
</textarea>
</td>
<td width="30%"><p>
</p>
</td>
</tr>

<tr>
<td colspan="3">
<br>
<hr>
4) Poza
<hr>
<br><br>
</td>
</tr>

<tr>
<td width="30%" style="text-align: right"> 

</td>
<td style="text-align:center">
<input type="file" name="poza">
<!--<input type="submit" value="Upload poza" name="submit_poza"> -->
</td>
<td width="30%"><p>
</p>
</td>
</tr>
<br><br>

<tr>
<td width="30%" style="text-align: right"> 

</td>
<td style="text-align:center">
<br><br>
<hr>
<input type="submit" name="submit" value="submit">
<br><br><br>
</td>
<td width="30%"><p>
</p>
</td>
</tr>

</form>
</table>
</td>
</table>