<?php

// include fisierul de conexiune la baza de date

include 'connect.php';

// definire id din url;

$id = $_GET["id"];

// construire sql;

$sql = "SELECT * FROM users
		WHERE id=$id";

// pregatire sql;

$stmt = $conn->prepare($sql);

//rulare sql;

$stmt->execute();

//afisare profil utilizator;

$result = $stmt->fetch();

echo "email: " . $result['email'];
echo "<br><br>password: " . $result['password'];
echo "<br><br>fullname: " . $result['fullname'];
echo "<br><br>";
echo "<a href='formular_editare_profile.php?id=$id'>Editeaza profil</a>";
echo "<br>";
echo "<a href='logout.php'>Logout</a>";


