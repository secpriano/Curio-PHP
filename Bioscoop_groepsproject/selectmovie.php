<?php require('header.php');
require('php/dbconnect.php') ?>


<div class="wrapper sectionspacing">

    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th class="h1">Film</th>
            </tr>
        </thead>
        <tbody>
          <?php
          $sql = "SELECT rooster.id, rooster.startTime, rooster.movie, films.name
          FROM rooster
          INNER JOIN films ON rooster.movie = films.id";
          foreach($db->query($sql) as $row){
          $startTime = $row['startTime'];
          $movie = $row['name'];
          $id = $row['id'];
          echo "
          <tr>
          <td><a href='selecttime.php?id=$id'>$movie, starts at $startTime</a></td>
          </tr>";
          }
          ?>
        </tbody>
    </table>

    <a href="index.php" class="btn btn-danger">cancel</a>

</div>

<footer class="footer">

    <?php require('footer.php'); ?>
