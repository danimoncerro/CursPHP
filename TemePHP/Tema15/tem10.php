<?php

$orase = ['maramures' => 'baia mare',
          'cluj' => 'cluj napoca',
          'bihor' => 'oradea',
          'timis' => 'timisoara',
          'arges' => 'pitesti'];
foreach($orase as $k=>$v) {
	echo "<strong>Judetul</strong>: " . ucfirst($k) . "<br>";
	echo "<strong>Orasul</strong>: " . strtoupper($v) . "<br><br>";
}
