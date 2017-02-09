<?php
date_default_timezone_set("Europe/Bucharest");
echo time() . "<br>";

echo date("d.m.y") . "<br>";

echo "Poimaine pe vremea asta va fi: " . date("d.m.Y H:i:s", time() + 3600 * 48) . "<br>" ;
echo "Peste 1 minut va fi ora: " . date("H:i:s", time() + 60);
