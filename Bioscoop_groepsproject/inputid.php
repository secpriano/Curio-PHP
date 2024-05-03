<?php require('header.php'); ?>

<div class="wrapper sectionspacing">

    <a href="selecttime.php" class="btn btn-warning">stap terug</a>
  <form action="post">
    <h1 class="h1">ID</h1>
    <input class="form-control" type="number" name="" id="" value="<?php echo $_SESSION['id'] ?>">

    <a href="index.php" class="btn btn-danger">cancel</a>
    <input name="type" type="submit" class="btn btn-success" value="confirm">
    </form>
</div>
<footer class="footer">

    <?php require('footer.php'); ?>
