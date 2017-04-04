<?php

$note = [0=>3, 1=>5, 2=>7, 3=>10, 4=>8, 8=>7, 6=>9];

echo $note[3];
echo "<br>" . $note[0];
echo "<br>" . $note[8];
echo "<br>" . $note[6];
echo "<br>" . $note[8];
echo "<hr>";

$note1 = [
	'unu'=>3,
	'trei'=>5,
	'sase'=>9
];

echo $note1['trei'];
echo "<br>" . $note1['sase'];

$legume = [
	'verzi' => [
		'dulci'=>'spanac',
		'acre'=>'gulie',
		'iuti'=>[
			'rosu'=>'usturoi', 
			'galben'=>[
				'apa'=>'ceapa',
				'verde'=>'arpagic'
			]
		]
	]
];


//$legume_verzi_iuti  = $legume['verzi']['iuti'];

echo "<hr>";
echo $legume['verzi']['iuti']['rosu'];
echo "<hr>";
echo $legume['verzi']['iuti']['rosu'];
echo "<br>" . $legume['verzi']['iuti']['galben']['verde'];





