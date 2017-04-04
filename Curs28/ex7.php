<?php 

require 'classes/Student.php';


$user = new Student('pop', 'liviu');

//$user->setFirstname('iliescu');
//$user->setLastname('gabriel');


echo $user->getUserSecret();


