<?php 

require 'classes/Student.php';


$user = new Student('Pop', 'Liviu');

$user->setFirstname('Iliescu');
$user->setLastname('Gabriel');

$user->setFaculty('Vest');



echo $user->getFullname();
echo '<br>';
echo $user->getFaculty();


