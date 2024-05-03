<?php
require 'header.php';
// benodigde data ophalen

// ik haal de id uit de url op
$id = $_GET['id'];

// ik bereid hier een sql query voor met een placeholder 
$sql = "SELECT * FROM todo_items WHERE id = :id";

$query = $db->prepare($sql);
$query->execute([
    ':id' => $id
]);
$item = $query->fetch(PDO::FETCH_ASSOC); 
?>

<h1> <?= $item['titel'] ?> </h1>
<p><?= $item['beschrijving'] ?></p>
<p>deadline: <?= $item['deadline'] ?></p>



<?php require 'footer.php'; ?>

