<?php

include 'function.php';

unset($_SESSION['logat']);
unset($_SESSION['user']);

header('Location: form_login.php');
exit;