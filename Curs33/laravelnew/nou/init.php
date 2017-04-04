<?php 

// in majoritatea frameworkurilor se numeste bootstrap.php


require_once 'Config/database.php';
require_once 'Model/Product.php';
require_once 'Controller/ProductController.php';

// Cream conexiune la baza de date 
$conn = new PDO("mysql:host=$server;dbname=$database", $username, $password);


