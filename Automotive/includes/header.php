<?php require_once $_SERVER['DOCUMENT_ROOT'].'/HTML-CSS-PHP/auto/config/database.php'; ?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" type="image/png" sizes="48x48" href="../favicon.ico">

  <link rel="stylesheet" href="/HTML-CSS-PHP/auto/css/normalize.css">
  <link rel="stylesheet" href="/HTML-CSS-PHP/auto/css/main.css">

  <title>Automotive</title>
</head>

<body>

    <header>
        <div class="wrapper">
            <a href="/HTML-CSS-PHP/auto/pages">
                <h1>Automotive</h1>
            </a>
            <nav>
                <ul>
                    <li><a href="/HTML-CSS-PHP/auto/pages/statistic">Statistieken</a></li>
                    <li><a href="/HTML-CSS-PHP/auto/pages/admin">Admin</a></li>
                </ul>
            </nav>
            <form action="search.php" method="get">
                <input type="text" name="search" placeholder="Zoek een auto">
                <input type="submit" value="Zoeken">
                <?php
                if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
                    echo
                    '<a href="/HTML-CSS-PHP/auto/functions/logout.php">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M160 96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96C43 32 0 75 0 128V384c0 53 43 96 96 96h64c17.7 0 32-14.3 32-32s-14.3-32-32-32H96c-17.7 0-32-14.3-32-32l0-256c0-17.7 14.3-32 32-32h64zM504.5 273.4c4.8-4.5 7.5-10.8 7.5-17.4s-2.7-12.9-7.5-17.4l-144-136c-7-6.6-17.2-8.4-26-4.6s-14.5 12.5-14.5 22v72H192c-17.7 0-32 14.3-32 32l0 64c0 17.7 14.3 32 32 32H320v72c0 9.6 5.7 18.2 14.5 22s19 2 26-4.6l144-136z"/></svg>
                </a>';
                }
                ?>
            </form>
        </div>
    </header>

