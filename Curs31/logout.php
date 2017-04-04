<?php

session_start();
require_once 'config.php';

$sesiune = new User();
$sesiune->logout();
