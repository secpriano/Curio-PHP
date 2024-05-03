<?php 
require('header.php');
$sql = "SELECT * FROM todo_items";
$query = $db->query($sql);
$items = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="container">
<h1>Dit wordt mijn site</h1>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Titel item</th>
            
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($items as $item) {
                $titel = htmlentities( $item['titel'] );
                $id = $item['id'];
                echo "<tr>";
                    echo "<td><a href='detail.php?id=$id'> $titel </a></td>";
                echo "</tr>";
            }

        ?>
    </tbody>
</table>

<form action="backend/todoController.php" method="POST">
    <div class="form-group">
        <label for="titel">Titel</label>
        <input id="titel" type="text" class="form-control" name="title">
    </div>
    
    <div class="form-group">
        <label for="">Description</label>
        <textarea rows="10" class="form-control" name="description"> </textarea>
    </div>
    
    <div class="form-group">
        <label for="">Deadline</label>
        <input type="date" class="form-control" name="deadline" id="">
    </div>

    <input type="submit" value="Toevoegen" class="btn btn-success">
</form>
</div>
<?php require('footer.php'); ?>