<?php

require 'header.php';
require 'php/BarCodeGen.php';
echo '<form method="post" action=""><input type="text" name="code">
      <input type="submit">
      </form>';
//In dit geval gebruiken we een post, als $_POST leeg is negeer je het, anders geef je het variable door aan de functie. Als deze wordt geechoe
if(!empty($_POST['code'])){
echo GetBar($_POST['code']);
}
require 'footer.php';
?>
