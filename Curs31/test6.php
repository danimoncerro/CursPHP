<?php

session_start();
include 'test5.php';

$sesiune = new Sesiune();

$sesiune->afiseaza();

echo "<br>";
//echo $_SESSION['mesaj'];
?>

<script type="text/javascript">
<!-- 
    window.alert("Bine ai venit");
//--> 
</script>