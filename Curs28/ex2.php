<?php 

require 'classes/Student.php';


$user = new Student('Pop', 'Liviu');

$user->setFirstname('Iliescu');
$user->setLastname('Gabriel');



echo $user->getFirstname();
echo '<br>';
echo $user->getLastname();



