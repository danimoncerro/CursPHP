<?php

require_once 'function.php';

$id = $_GET['id'];
$user = find_user($id);
//var_dump($user);
?>



<h1>Editeaza utilizator</h1>
<form action="edit_user.php?id=<?php echo $user['id'] ?>" method="post">

	<input type="text" value="<?php echo $user['username'] ?>" placeholder="Introdu username" name="username" required>
	<input type="email" value="<?php echo $user['email'] ?>" placeholder="Introdu adresa de email" name="email" required>
	<input type="submit" name="submit" value="Editeaza utilizator">

</form>