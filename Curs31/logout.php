<?php

session_start();
require_once 'classes/User.php';

$sesiune = new User();
$sesiune->logout();
