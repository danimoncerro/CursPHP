<?php 

require_once 'function.php';

if (isset($_POST['submit'])) {

	$valid = false;

	$title = $_POST['title'];
	$brand = $_POST['brand'];
	$model = $_POST['model'];
	$tip = $_POST['tip'];
	$year = $_POST['year'];
	$km = $_POST['km'];
	$image = $_POST['image'];
	//$price = floatval($_POST['price']);

    if (strlen($title) > 4) {
    	$valid = true;
    }
    

    if (!$valid){
    	$_SESSION['msg_error'] = '';
    	if (strlen($title) < 4 ) {
    		$_SESSION['msg_error'] = "Numarul minim de caractere pentru produs trebuie sa fie 4.<br>";
    	}
       	header('Location:form_add_product.php');
    	exit;

    }


	$sql = "
	INSERT INTO auto (title, brand, model, tip, year, km)
	VALUES ('$title', '$brand', '$model', '$tip', '$year', '$km');
";
$result = mysqli_query($conn, $sql);

if ($result) {
	$_SESSION['msg'] = 'Autovehiculul a fost inserat';
	header('Location: index.php');
	exit;
} else {
	echo 'Eroare la inserare autovehicul';
}

}
