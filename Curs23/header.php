<?php 
	require 'connect.php'; 
	require 'functions.php';
?>

<!DOCTYPE html>

<html>
<head>
	<title>E.Zmeura</title>
	<link rel="stylesheet" href="bootstrap/bootstrap.css">
	<link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">

</head>
<body>


<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
        <img src="poze/logo.jpg" class="img-circle" width="100" height="100">
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">

    <?php if (check_logat()): ?>
      <ul class="nav navbar-nav navbar-left">
        <li><a href="logout.php">Logout</a></li> 
      </ul>
    <?php else: ?>
     <ul class="nav navbar-nav navbar-left">
        <li><a href="formular_login.php">Login |</a></li> 
        <li><a href="formular_new_user.php">New User</a></li>    
      </ul>
    <?php endif; ?>


      <ul class="nav navbar-nav navbar-right">
        <li><a href="http://localhost/CursPHP/Curs23/index.php#despre">DESPRE NOI</a></li>
        <li><a href="http://localhost/CursPHP/Curs23/#portofoliu">PORTOFOLIU</a></li>
        <li><a href="http://localhost/CursPHP/Curs23/#testimoniale">TESTIMONIALE</a></li>
        <li><a href="http://localhost/CursPHP/Curs23/index_logat.php#magazin">MAGAZIN</a></li>
        <li><a href="http://localhost/CursPHP/Curs23/#contact">CONTACT</a></li>

        <?php if (check_logat()): ?>
          <ul class="nav navbar-nav navbar-left">
            <li>
              <a href="view_cart.php">
                COSUL MEU
                <span class="badge"><?php echo cart_count(); ?> </span>
              </a>
            </li> 
          </ul>
    <?php endif ?>

    </ul>               

   
    </div>
  </div>
</nav>
