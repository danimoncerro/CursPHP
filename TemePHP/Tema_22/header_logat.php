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


    <?php if (check_logat()): ?>
      <div class="nvabar-right">
        <a href="logout.php" class="btn btn-info">Logout</a>
      </div>
    <?php else: ?>
      <form class="navbar-form navbar-right" action="login.php" method="post">
        <div class="form-group">
          <input type="text" placeholder="Email" name="email" class="form-control">
        </div>
        <div class="form-group">
          <input type="password" placeholder="Password" name="password" class="form-control">
        </div>
        <button type="submit" name="submit" class="btn btn-success">Sign in</button>
      </form>
    <?php endif; ?>


<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
        <img src="poze/logo.jpg" class="img-circle" width="100" height="100">
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">

      <ul class="nav navbar-nav navbar-left">
        <li><a href="logout.php">Logout</a></li> 
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="#despre">DESPRE NOI</a></li>
        <li><a href="#portofoliu">PORTOFOLIU</a></li>
        <li><a href="#testimoniale">TESTIMONIALE</a></li>
        <li><a href="#magazin">MAGAZIN</a></li>
        <li><a href="#contact">CONTACT</a></li>
               

   
    </div>
  </div>
</nav>
