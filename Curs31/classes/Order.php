<?php

class Order {

	public function __construct() {
		$db = new Database();
		$this->conn = $db->getConnection();
	}

	protected function getConnection() {
    	return $this->conn;
    }


    // Salveaza comanda "principala" 
    protected function saveMain() {
    	// 1. Calculam totalul ( pt cos ) si salvam intr-o variabila
		$cart = new Cart();
		$total = $cart->priceTotal();

		// 2. Citim idul utilizatorului din sesiune

		$id_user = $_SESSION['user']['id'];

		$created_at = time();


		// 3. Facem insert in tabelul comenzi 

		$sql = "INSERT INTO comenzi(id_user, total, created_at)
		        VALUES ($id_user, $total, $created_at)";

		$stmt = $this->getConnection()->prepare($sql);

		$stmt->execute();

		// 4. Citim id-ul comenzii creat ( ultimul id )
		return  $this->getConnection()->lastInsertId();
    }


	//Inseram toate produsele din cart in comenzi_detalii
    protected function insertDetails($id_comanda) {
		foreach ( $_SESSION['cart'] as $k=>$produs) {
			$id_produs = $produs["id"];
			$cantitate = $produs["cantitate"]; 
			$pret = $produs["pret"];
			$valoare = $cantitate * $pret;
			$sql = "INSERT INTO comenzi_detalii(id_comanda, id_produs, cantitate, pret, valoare)
					VALUES ($id_comanda, $id_produs, $cantitate, $pret, $valoare)";
			$stmt = $this->getConnection()->prepare($sql);
			$stmt->execute();
		}

    }

    // Salveaza comanda cu detalii despre produse 
	public function save() {
		
		// Salveaza comanda "principala"
		$id_comanda = $this->saveMain();
		
		// Salveaza/ insereaza detalii comenzi ( produsele din comanda principala)
		$this->insertDetails($id_comanda);

		// Golim cosul
		unset($_SESSION['cart']);

		return $id_comanda;
	}


	/**
	 * Return  all orders 
	 **/
	public function findAll() {
		$sql = "SELECT comenzi.* , users.username
				FROM comenzi
				LEFT JOIN users ON users.id = comenzi.id_user
				ORDER BY comenzi.id DESC";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute();

		return $stmt->fetchAll();
	}

	/**
	 * List only selected order by $id 
	 *
	 * @param int $id 
	 * @return array $order
	 */
	public function get($id_comanda) {
		$sql = "SELECT comenzi.* 
		FROM  `comenzi` 
		WHERE id = $id_comanda ";

		// 4. executam sql

		$stmt = $this->getConnection()->prepare($sql);
		$stmt->execute();

		// 5. afisam rezultatele intr-un tabel
		return  $stmt->fetch();
	}	

	/**
	 * List only selected order by $id 
	 *
	 * @param int $id 
	 * @return $comenzi_detalii
	 */
	public function getProducts($id_order) {
		$sql = "SELECT comenzi_detalii. * , products.tip, products.soi, culori.culoarea
		FROM  `comenzi_detalii` 
		LEFT JOIN products ON comenzi_detalii.id_produs = products.id
		LEFT JOIN culori ON culori.id = products.culoare
		WHERE comenzi_detalii.id_comanda = $id_order ";

		// 4. executam sql

		$stmt = $this->getConnection()->prepare($sql);
		$stmt->execute();

		// 5. afisam rezultatele intr-un tabel

		return  $stmt->fetchAll();
	}

	public function getTitle($comanda) {

		return "Comanda cu nr # " . $comanda["id"] . 
			", valoare totala " . $comanda["total"] . "  lei";
	}
}