<?php

require_once 'function.php';

// stergem produs

$products = find_all_products();
$products1 = count($products);
$products1--;
$id = $_GET['id'];
$valid = false;

	if ($products1 > 0) {
    		$valid = true;
    }
    
   if (!$valid){
    	$_SESSION['msg_error'] = '';
    	if ($products1 < 1 ) {
    		$_SESSION['msg_error'] = "Nu se poate sterge acest produs din lista deoarece lista trebuie sa contina minim 1 produs.<br>";
    	}
    	header('Location:form_add_product.php');
    	exit;

    }

delete_product($id);
$_SESSION['msg'] = "Produsul cu id-ul $id a fost sters";
// redirectare
header('Location: start.php');
exit;
