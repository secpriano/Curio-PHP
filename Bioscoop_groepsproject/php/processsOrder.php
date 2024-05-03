<?php
require 'dbconnect.php';
session_name("ingelogd");
session_start();
    $query = "INSERT INTO reserveringen (owner, showing) VALUES (:owner, :showing)";
    $querySeat = "INSERT INTO seats (seatID, reservering) VALUES (:seatID, :reservering)";
    $statement = $db->prepare($query);
    $statementSeat = $db->prepare($querySeat);
    var_dump($_SESSION);
    $statement->execute([':owner' => $_SESSION['id'], ':showing'=>$_POST['id']]);
    $last = $db->lastInsertId();
    $statementSeat->execute([':seatID' =>$_POST['seat'], ':reservering' => $last]);
    header('Location: ../index.php');
?>
