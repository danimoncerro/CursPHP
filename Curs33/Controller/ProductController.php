<?php


// Controller pentru produse

class ProductController {

	public function listAdminAction() {
		$product = new Product();
		$results = $product->findAll();

		require_once 'View/layout.php';
	}

	public function listGuestAction() {
		$product = new Product();
		$results = $product->findAll();

		require_once 'View/layout-guest.php';
	}
}