<?php

if (isset($_GET['varsta'])) {
	$varsta = $_GET['varsta'];
	echo "<h3> Am $varsta ani. </h3>";
} else {
	echo "Trebuie sa introduceti in url un parametru cu numele varsta.";
}

