<?php

session_start();

$_SESSION['mesaj1'] = 'Ce faci ?';

function afiseaza() {

	echo $_SESSION['mesaj'] . "<br>" . $_SESSION['mesaj1'] . $_SESSION['message'];

}

afiseaza();


