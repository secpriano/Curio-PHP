<?php
require ('config.php');
require ('../php/sendmail.php');
// session_name("ingelogd");
// als je een session_name() gebruikt moet je deze oproepen voor elke session_start
// is misschien beter om deze weg te laten
session_start();

$email = $_POST['email-input'];
$wachtwoord =$_POST['password-input'];

$_SESSION['email-input'] = $email;

echo session_save_path();

$sql = "SELECT gegevens.email, gegevens.wachtwoord, gegevens.id, gegevens.voornaam, gegevens.achternaam FROM gegevens WHERE email= :mailchek";
$prepare = $db->prepare($sql);
$prepare->execute([
  ':mailchek' => $email
]);
$item = $prepare->fetch(PDO::FETCH_ASSOC);

if (sha1($wachtwoord) == $item['wachtwoord']) {
  $_SESSION['fName'] = $item['voornaam'];
  $_SESSION['lName'] = $item['achternaam'];
  $_SESSION['id'] = $item['id'];

  $_SESSION['ingelogd'] = true;

  echo $_SESSION['email-input'];

  header("Location: ../index.php");
} else {
  header("Location: ../loginpage.php?msg=failed");
}

?>
