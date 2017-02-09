<?php

$note = [7, 9, 10, 8, 2, 6, 9]; // 6 elemente
// index start = 0; index end = 5

$nr_elemente = count($note);

echo "Avem $nr_elemente note";

$last_index = $nr_elemente - 1;

echo "Ultima nota ( element ): " . $note[$last_index];
