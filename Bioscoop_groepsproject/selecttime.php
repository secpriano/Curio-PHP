<?php require('header.php'); ?>

<div class="wrapper sectionspacing">

    <a href="selectmovie.php" class="btn btn-warning">stap terug</a>

      <form action="php\processsOrder.php" method="post">
        <input type="number" name="seat">Seat ID</input>
        <input type="hidden" name="id" value="<?= $_GET['id']?>">
        <input type="submit">
      </form>


    <a href="index.php" class="btn btn-danger">cancel</a>

</div>

<footer class="footer">

<?php require('footer.php'); ?>
