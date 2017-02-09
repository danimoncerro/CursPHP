<?php

include 'connect.php';
include 'functions.php';

listeaza('localitate', 'name');
echo "<hr>";
listeaza('users', 'username');
echo "<hr>";
listeaza('elevi', 'numele');