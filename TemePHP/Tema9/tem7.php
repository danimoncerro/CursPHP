<?php

session_start();
$_SESSION['url_parameters'] = $_GET;
echo "Salvam datele din url in sesiune.";
