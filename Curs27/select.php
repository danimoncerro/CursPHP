<?php

include 'connect.php';
include 'functions.php';

listeazaSelect('localitate', 'name', 'localitate');
echo "<hr>";
listeazaSelect('users', 'username', 'users');
echo "<hr>";
listeazaSelect('elevi', 'numele', 'elevi');