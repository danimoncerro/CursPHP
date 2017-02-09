<?php

require 'classes/User.php';

$user1 = new User('ale', 'pop');
$user2 = new User('Cosma', 'Vlad');

$user1->setFirstname ('Qweerty');

echo $user1->getFullname();
echo '<br>';
echo $user2->getFullname();
