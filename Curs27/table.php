<?php

include 'connect.php';
include 'functions.php';

listeazaTabel('localitate', 'name');
echo "<hr>";
listeazaTabel('users', 'username');
echo "<hr>";
listeazaTabel('elevi', 'numele');