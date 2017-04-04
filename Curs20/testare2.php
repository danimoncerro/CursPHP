<?php

session_start();

$_SESSION['materia'] = "Limba romana.";

echo $_SESSION['materia'] ." ". $_SESSION['carte'];