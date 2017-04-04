<?php 


/** verifica daca utilizatorul este logat 
 * daca da, atunci returneaza true
 * daca nu, atunci returneaza false 
 **/
function check_logat() {

	if (isset($_SESSION['login']) && $_SESSION['login'] == 1) {
		return true;
	} else {
		
		return false;
	}

}

function get_stocuri($sql) {

	global $conn;

	// pregatim sql-ul

	$stmt = $conn->prepare($sql);

	// executam sql-ul

	$stmt->execute();

	// citire rezultate

	return $stmt->fetchAll();
}