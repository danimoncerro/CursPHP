<?php

include 'connect.php';
include 'function4.php';

// construieste sql

$sql = "INSERT INTO products(tip, soi, pret)
		VALUES('butasi zmeura primocane', 'paris', '4')
		";

// executa sql

$conn->exec($sql);