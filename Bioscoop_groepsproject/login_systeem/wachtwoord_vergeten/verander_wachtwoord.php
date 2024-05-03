<?php
require ('../config.php');
require ('../../php/sendmail.php');
require_once __DIR__.'../../../vendor/autoload.php';

$accountHolder = $_GET['userID'];
$NewPass = $_POST['wachtwoord'];
$confirmedPass = $_POST['wachtwoord_h'];

if (isset($NewPass) && $NewPass == $confirmedPass) {
    $sql = "UPDATE gegevens SET wachtwoord=:ph_wachtwoord WHERE wachtwoord=:ph_user";
    $query = $db->prepare($sql);
    $query->execute([
                    ':ph_wachtwoord' => sha1($confirmedPass), 
                    ':ph_user' => $accountHolder
                    ]);
    exit(header('Location: ../../verander_wachtwoordpage.php?hashID=&msg=success'));
} else {
    exit(header('Location: ../../verander_wachtwoordpage.php?hashID=&msg=wrong'));
}

?>