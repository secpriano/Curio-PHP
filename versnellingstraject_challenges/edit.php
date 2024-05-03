<?php
require('header.php');

//get id form URL in id
$id = $_GET['id'];

//select all form toto_items met de ID  in de url in sql
$sql = "SELECT * FROM todo_items WHERE id = :id";

//prepare de Database for this URL in prepare
$prepare = $db->prepare($sql);

//execute de prepare
$prepare->execute([
    ':id' => $id
]);

//after prepare, get de associate array in item
$item = $prepare->fetch(PDO::FETCH_ASSOC);
?>

<h1>Edit item</h1>

<div class="col-md-12">

    <p>Please fill this form and submit to change todo items in the database</p>

    <form action="backend/todoController.php" method="post">
        <input type="hidden" name="id" value="<?= $id ?>">
        <label>titel</label>
        <input type="text" name="titel" class="form-control" value="<?= $item['titel'] ?>">

        <label>beschrijving</label>
        <textarea name="beschrijving" class="form-control"><?= $item['beschrijving'] ?></textarea>

        <label>deadline</label>
        <input type="date" name="deadline" class="form-control" value="<?= $item['deadline'] ?>">

        <input name="type" type="submit" class="btn btn-primary" value="Change">
        <a href="index.php" class="btn btn-default">Cancel</a>

    </form>

</div>

<?php require('footer.php'); ?>