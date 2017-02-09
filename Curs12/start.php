<style>
table {
	border-spacing:0;
	border-collapse:collapse;
}
table th, table td {
	padding: 20px;
    border: 1px #000 solid;

}
</style>
<?php

require_once 'function.php';


// Activam layerul de securitate
if (!isset($_SESSION['logat']) || $_SESSION['logat'] != 1) {
	$_SESSION['msg'] = 'Pentru a vizualiza aceasta pagina trebuie sa fii logat.';
	header('Location: form_login.php');
	exit;
}


$text = '';
if (isset($_GET['submit'])) {
	//echo "vom apela functie de filtrare";
	$text = $_GET['username'];
	$users = search_all_users($text);
} else {
	$users = find_all_users(); // am toti utilizatorii	
}



?>

<h5>Bine ai venit <?php echo $_SESSION['user']['username'] ?>
	<small>
		<a href="logout.php">Iesire</a>
	</small>
</h5>

<h1>
	Lista utilizatori (<?php echo count($users) ?>) 

</h1>

<?php 
// Mesajul din sesiune 
if (isset($_SESSION['msg'])) {
	// afisam mesajul din sesiune
	echo "<p>" . $_SESSION['msg'] . "</p>";
	// stergem mesajul din sesiune 
	unset($_SESSION['msg']);
}


?>

<p>
	<form action="" method="get">
	<input type="text" name="username" value="<?php echo $text ?>" placeholder="Filtreaza dupa nume utilizator">
	<input type="submit" value="Filtreaza" name="submit">
	</form>
</p>

<p>
	<a href="form_add_user.php">Adauga utilizator</a>
</p>

<table>
<tr>
	<th>ID</th>
	<th>Nume utilizator</th>
	<th>Adresa Email</th>
	<th>Actiuni</th>
</tr>

<?php foreach ($users as $user): ?>
<tr>
	<td><?php echo $user['id'] ?></td>
	<td><?php echo $user['username'] ?></td>
	<td><?php echo $user['email'] ?></td>
	<td>
		<a href="form_edit_user.php?id=<?php echo $user['id'] ?>">Editeaza</a>
		| 
		<a href="delete_user.php?id=<?php echo $user['id'] ?>"
		   onclick="if (!window.confirm('Esti sigur?')) return false;">Sterge</a>

	</td>
</tr>
<?php endforeach; ?>

</table>