<?php

require 'header.php';
require 'php/dbconnect.php';
$sql = "SELECT rooster.id, rooster.startTime, rooster.movie, films.id, films.name
FROM rooster INNER JOIN films ON rooster.movie = films.id";
$stmt = $db->query($sql);
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

var_dump($result);

echo $result[0]['id'];

require 'footer.php';
?>
