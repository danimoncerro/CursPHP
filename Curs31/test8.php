<?php
    session_start();
    require_once 'test7.php';

    $Se = new sessionControle();
    echo $Se->addSession('User', 'Crx');

    //Double check here !!
    //echo $_SESSION['User'];
?>