<?php

$in_stock = true; // underline 

class Product {

	protected $inStock = true; // camelCase 

	// EX1: 
	// GRESIT: 
    public function getProducts(); 

	// RECOMANDAT:
	public function getAll();
	public function findAll(); 

	// ===============================

	// EX2: 
	// GRESIT: 
	public function getProductById(); 

	// RECOMANDAT:
	public function getById(); 
	public function findOneById();
	public function findById(); 

	// Ex3:
	// GRESIT
	public function searchProductByCondition($params);

	// RECOMANDAT:
	public function searchByCondition($params);
	public function search($params);


}