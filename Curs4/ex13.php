<?php

$user = [
			'age' => 34,
			'email' => 's@s.ro',
			'city' => 'Constanta',
		];

echo '<pre>';var_dump($user);echo '</pre>';

echo "<h4>Sorteaza crescator dupa valori</h4>";
asort($user); // Sorteaza crescator dupa valori
echo '<pre>';var_dump($user);echo '</pre>';

echo "<h4>Sorteaza descrescator dupa valori</h4>";
arsort($user); // Sorteaza descrescator dupa valori
echo '<pre>';var_dump($user);echo '</pre>';


echo "<h4>Sorteaza crescator dupa indecsi</h4>";
ksort($user); // Sorteaza crescator dupa indecsi
echo '<pre>';var_dump($user);echo '</pre>';

echo "<h4>Sorteaza descrescator dupa indecsi</h4>";
krsort($user); // Sorteaza descrescator dupa indecsi
echo '<pre>';var_dump($user);echo '</pre>';

