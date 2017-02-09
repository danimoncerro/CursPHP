<?php

include 'connect.php';
include 'function3.php';

// construire sql

$sql = "SELECT * FROM products";

// afisare rezultate

$result = get_produse($sql);

afisare_tabel();


