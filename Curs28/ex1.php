<?php 

require 'classes/User.php';


$user = new User('Pop', 'Liviu');

$user->setFirstname('Iliescu');
$user->setLastname('Gabriel');



echo $user->getFirstname();
echo '<br>';
echo $user->getLastname();



