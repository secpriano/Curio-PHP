<?php

$dbHost = 'localhost';
$dbName = 'bioscoop';
$dbUser = 'root';
$dbPass = '';

$db = new PDO("mysql:host=$dbHost;dbname=$dbName;", $dbUser, $dbPass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


?>
