<?php 

require_once 'function.php';

if (isset($_POST['submit'])) {

	$valid = false;

	$title = $_POST['title'];
	$descriere = $_POST['descriere'];
	$price = floatval($_POST['price']);

    if (strlen($title) > 4 &&
    	$price > 0) {
    	$valid = true;
    }
    

    if (!$valid){
    	$_SESSION['msg_error'] = '';
    	if (strlen($title) < 4 ) {
    		$_SESSION['msg_error'] = "Numarul minim de caractere pentru produs trebuie sa fie 4.<br>";
    	}
    	if ($price <= 0) {
			$_SESSION['msg_error'] .= 'Pretul trebuie sa fie mai mare decat 0.<br>';
		}
    	header('Location:form_add_product.php');
    	exit;

    }


	$sql = "
	INSERT INTO product (title, descriere, price)
	VALUES ('$title', '$descriere', '$price');
";
$result = mysqli_query($conn, $sql);

if ($result) {
	// echo 'Utilizatorul a fost inserat';
	$_SESSION['msg'] = 'Produsul a fost inserat';
	header('Location: start.php');
	exit;
} else {
	echo 'Eroare la inserare utilizator';
}

}
