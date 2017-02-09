<?php




$city = $_REQUEST['city']; // citeste  get + post 

if ($city == 'bucuresti') {
	echo "Transport gratuit";
} else {
	echo "Transport 20 de lei";
}
