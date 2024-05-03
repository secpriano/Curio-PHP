<?php
session_start();
require 'login_systeem/config.php';

// INSTALL THE stoelen.sql, OTHERWISE IT WONT HAVE A DATABASE TO PULL AND GO TO
// ID AND SEAT ? POSSIBLY MORE LATER
$type = $_POST['type'];

if ( $type == "STEP 3: CONFIRMATION" ) {
  $i = 1;
  foreach ($_POST['seats'] as $selected){
      $_SESSION['selectedSeat[' . $i . ']'] = $selected;
      $i++;
      //INSERT INTO DATABASE
      // $data = [
      //     'stoel' => $selected,
      //     'checked' => "checked"
      // ];
      // $sql = "UPDATE stoelen SET stoel=:stoel, checked=:checked WHERE stoel=:stoel";
      // $prep= $db->prepare($sql);
      // $prep->execute($data);
  }
  // REDIRECT
    header("Location: ordering.php");
}
else if ( $type == "STEP 2: CHOOSE YOUR CHAIRS" ) {
  $_SESSION['adult'] = $_POST['adult'];
  $_SESSION['child'] = $_POST['child'];
  $_SESSION['elder'] = $_POST['elder'];
  // REDIRECT
    header("Location: chairselection.php");
}
?>
