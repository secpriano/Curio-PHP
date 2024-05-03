<?php session_start(); ?>
<!doctype html>
<html class="no-js" lang="EN">

<head>
  <meta charset="utf-8">
  <title>Bioscoop AMO</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='https://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>
  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <link href="https://fonts.googleapis.com/css?family=Oswald|PT+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">

  <meta name="theme-color" content="#fafafa">
</head>

<body>

  <header>
    <div class="wrapper flex">
      <div class="brand">
        <a href="index.php">
          <h1>Bioscoop AMO</h1>
        </a>
      </div>
      <nav>
        <a href="index.php#hero_movies">Populair</a>
        <a href="index.php#nu">Nu</a>
        <a href="index.php#binnenkort">Binnenkort</a>
        <a href="index.php#kids">Kids</a>
      </nav>
      <form action="" method="POST">
        <div class="dropdown">
            <?php
              if ( isset( $_SESSION['fName'] ) && isset( $_SESSION['lName'] ) ) {
                echo '<button class="dropdown-toggle" style="background:none;border:none;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
                echo '<a href="#">Welkom ' . $_SESSION['lName'] . ", " . $_SESSION['fName'] . '</a>';
                echo '</button>';
                echo '<div class="dropdown-menu" style="background:rgb(32, 32, 32);border:none;" aria-labelledby="dropdownMenuButton">';
                echo '<a class="dropdown-item" style="padding: 10px;" href="logout.php">Logout</a>';
                echo '</div>';
                // unset($_SESSION['lName']);
                // unset($_SESSION['fName']);
                // refresh page to unset
              }
              else {
                echo '<div class="flexcent">';
                echo '<a href="loginpage.php">Login</a>';
                echo '<p>or</p>';
                echo '<a href="registerpage.php">Register</a>';
                echo '</div>';
              }
            ?>
        </div>
        <input type="text" name="zoek" placeholder="Zoek">
        <a href="selectmovie.php"><i class="fas">&#xf271;</i></a>
          <?php
          // ingelogd
          if (!isset($_SESSION['fName'])) {
            echo "<p>U bent niet ingelogd</p>";
          }
          else {
            echo "<p>U bent ingelogd</p>";
          }
           ?>
      </form>
    </div>
  </header>
