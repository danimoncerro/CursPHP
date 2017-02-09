<?php


/** Creeaza un dropdown avand sursa un tabel specificat 
 * @param: $tabel - numel tabelului
 * @param: $value - camp care se va salva in option value 
 * @param: $display - camp care se va afisa in option 
 * @param: $default - valoare implicita
 *
 * @return string - dropdown complet 
 **/ 
function dropdown ($tabel, $value = "id", $display , $default = '') {
	global $conn;

	// Citim datele din tabelul selectat
	$sql = "SELECT * FROM $tabel";
	$stmt = $conn->prepare($sql);
	$stmt->execute();

	// Citim toate rezultatele sub forma de array in variabila $rows ;
	$rows = $stmt->fetchAll();

	// Parcurgem toaterezultatele 
	// <option value="{valoare}">{text}</option>

	foreach ($rows as $row) { ?>
			<?php //$selected = ($default == $row[$value]) ? "selected" : ""; ?>
			<?php 
				// Presupunem ca valoarea curent nu este valoare implicita
				$selected = "";
				// Daca valoarea curenta este egala cu valoare implicita sa marcheze dropdonw-ul selectat. 
				if ($default == $row[$value]) {
					$selected = "selected";
				} 

			?>

			<option value="<?php echo $row[$value] ?>" <?php echo $selected ?>>
				<?php echo $row[$value] . "-" . $row[$display] ?>
			</option>
		<?php } // sfarsit foreach 

}






/** verifica daca utilizatorul este logat 
 * daca da, atunci returneaza true
 * daca nu, atunci returneaza false 
 **/
function check_logat() {

	if (isset($_SESSION['logat']) && $_SESSION['logat'] == 1) {
		return true;
	} else {
		
		return false;
	}

}

function get_produse($sql) {

	global $conn;

	// pregatim sql-ul

	$stmt = $conn->prepare($sql);

	// executam sql-ul

	$stmt->execute();

	// citire rezultate

	return $stmt->fetchAll();
}


// Return products from cart
function get_cart() {
	$cart = [];

	if (isset($_SESSION['cart'])) {
		$cart = $_SESSION['cart'];
	}

	return $cart;

}


// Add to cart 
function add_to_cart($id_product, $cantitate = 1) {
	global $conn;

	// 1. Citeste datele produsului din baza de date 
	$sql = "SELECT products.*, culori.culoarea
			FROM products
			LEFT JOIN culori on products.culoare=culori.id
			WHERE products.id = $id_product";

	$stmt = $conn->prepare($sql);

	$stmt->execute();

	$result = $stmt->fetchAll();

	$product  = $result[0]; // primul element - este singurul element pt ca am cautat dupa id unic.

	// 2. Adauga in cos 
	$_SESSION['cart'][$id_product] = [
		"id" => $id_product,
		"title" => $product["tip"],
		"soi"	 => $product["soi"],
		"culoare" =>  $product["culoarea"],
		"pret" => $product["pret"],
		"cantitate" => $cantitate,
	];
}

// Update cart 
function update_cart_product($id_product, $cantitate = 1) {
	// $_SESSION['cart'][$id_product]['cantitate'] = $cantitate;

	// Varianta cu 2 nivele de array
	// Pas1: Citim cart-ul din sesiune
	$cart = $_SESSION['cart'];

	// Pas2: Modificam cantitatea pentru produsul selectat
	$cart[$id_product]['cantitate'] = $cantitate;

	// Pas3: Scriem in sesiune noul cart . 
	$_SESSION['cart'] = $cart; 
}

function calculeaza_total() {
	$mycart = $_SESSION['cart'];
	$total = 0;
	foreach ($mycart as $k=>$produs) {
		$total+=$produs["cantitate"] * $produs["pret"];
	} 
	return $total;
}

function cart_count() {
	if (isset($_SESSION['cart'])) {
		$mycart = $_SESSION['cart'];
		return count($mycart);
	} else {
		return 0;
	}
}

function get_comenzi($sql) {

	global $conn;

	// pregatim sql-ul

	$stmt = $conn->prepare($sql);

	// executam sql-ul

	$stmt->execute();

	// citire rezultate

	return $stmt->fetchAll();
}


