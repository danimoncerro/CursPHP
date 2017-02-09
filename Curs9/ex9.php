<?php 
date_default_timezone_set("Europe/Bucharest");

echo time(); // calculeaza nr de secunde din 1 ian 1970 
echo "<h2>Peste 1 minut = 60 sec</h2>";
echo time() + 60 . ' ----- ' . date("d.m.Y H:i:s", time() + 60);

echo "<h2>Peste 1 ora = 3600 sec</h2>";
echo time() + 3600  . '-----'. date("d.m.Y H:i:s", time() + 3600);


echo "<h2>Peste 24 ore = 3600 * 24 sec</h2>";
echo time() + 3600 * 24 . '-----'. date("d.m.Y H:i:s", time() + 3600 * 24);

