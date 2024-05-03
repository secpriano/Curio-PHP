<?php session_start();
unset($_SESSION['lName']);
unset($_SESSION['fName']);
unset($_SESSION['ingelogd']);

header("Location: index.php");
?>
