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
</head>
<body>



<nav class="navbar navbar-inverse ">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">E.Zmeura</a>
      <a class="" href="products.php">Produse</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">

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



    </div><!--/.navbar-collapse -->
  </div>
</nav>
