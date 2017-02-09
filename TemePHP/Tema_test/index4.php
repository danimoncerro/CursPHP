<?php

include 'connect.php';
include 'function4.php';

// construire sql

$sql = "SELECT * FROM products ";

$result = get_produse($sql);
afiseaza_tabel($result);