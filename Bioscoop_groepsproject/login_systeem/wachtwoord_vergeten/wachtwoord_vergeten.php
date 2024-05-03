<?php
require ('../config.php');
require ('../../php/sendmail.php');
require __DIR__.'../../../vendor/autoload.php';

$passChangePageUrl = $_SERVER['HTTP_HOST'].str_replace('/login_systeem/wachtwoord_vergeten/wachtwoord_vergeten.php', '/verander_wachtwoordpage.php',$_SERVER['REQUEST_URI']);

$logo = str_replace('\login_systeem\wachtwoord_vergeten', '/img/Logo_AMO.png',__DIR__);

$email = $_POST["email"];

// Fetch een item van het rij waar de $_POST["email"] is.
$sql = "SELECT * FROM gegevens WHERE email = :ph_email";
$query = $db->prepare($sql);
$query->execute([':ph_email' => $email]);
$items = $query->fetch(PDO::FETCH_ASSOC);

$aTag = "<a href=http://"."$passChangePageUrl"."?hashID=".$items['wachtwoord'].">Click this link to change password</a>";

// controleert de input text of het een email formaat is.
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
  // controleert de email of het wel in de database bestaat.
  if ($email == $items['email']) {
    SendMail($email, $items['achternaam'], "Wachtwoord vergeten", $aTag, "Deze email is niet succesvol ingeladen", $logo);
    exit(header('Location: ../../wachtwoord_vergeten.php?msg=exist'));

  } else {
    // Anders ga terug met een bericht dat het account niet bestaat.
    exit(header('Location: ../../wachtwoord_vergeten.php?msg=notexist'));

  }

} else {
  // Anders ga terug met een bericht dat de email verkeerd is geschreven.
  exit(header('Location: ../../wachtwoord_vergeten.php?msg=fail'));

}

  // 
  // echo "<p>Er is een mail naar u gestuurd waar via u uw wachtwoord kan aanpassen.</p>";
  // sleep(3);
  // time_sleep_until(microtime(true)+10.0));
  // header('Location: ../../index.php');

  //persoon naam kopelen aan emial $naamUser

  // $sqlt = "SELECT * FROM loginkassasysteem WHERE email = :email";
  // $queryt = $db->prepare($sqlt);
  // $preparet->execute([
  //   ':email' => $email
  // ]);
  //
  // $itemt = $preparet->fetch(PDO::FETCH_ASSOC);
  //
  //
  // $mailAdress = $email;
  // $userName = $itemt['voornaam'];
  // $subject = "Wachtwoord vergeten Bioscoop";
  // $mailBody = "placeholder";
  // $altMailBody = "de email kon niet geladen worden"

?>
