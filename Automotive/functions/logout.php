<?php
session_start();

$_SESSION = array();

session_destroy();

header("Location: /HTML-CSS-PHP/auto/pages/login.php");
exit;
