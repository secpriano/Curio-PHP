<?php 

if ( $_SERVER['REQUEST_METHOD'] !== 'POST' ) {
    header('Location: ../index.php'); 
    exit;
}

require 'config.php';
// $_POST 
$title          = $_POST['title'];
$deadline       = $_POST['deadline'];
$description    = $_POST['description'];

$sql = "INSERT INTO todo_items ( titel, beschrijving, deadline ) 
        VALUES ( :title, :description, :deadline )";

$query = $db->prepare($sql);
$query->execute([
    ':title'        => $title,
    ':deadline'     => $deadline,
    ':description'  => $description
]);
header('Location: ../index.php');