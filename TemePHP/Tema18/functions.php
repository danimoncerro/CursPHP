<?php 


// Daca nu este logat atunci redirect catre form login 

function check_access() {
	if (!isset($_SESSION['logat'])) {
		$_SESSION['message'] = 'Trebuie sa ai un cont pentru a accesa aceasta pagina!!!! ...';

		header("Location: formular_login.php");
		exit;
	}
}