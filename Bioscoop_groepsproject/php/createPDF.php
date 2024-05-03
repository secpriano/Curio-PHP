<?php

require_once __DIR__.'../../vendor/autoload.php';
require 'BarcodeGen.php';

GetBarJpg('123456789', 'test/');

$mpdf = new \Mpdf\Mpdf();

$mpdf->imageVars['barcode'] = file_get_contents('test/barcode.jpg');

$mpdf->WriteHTML("
<h1>Star wars: Rise of the Skywalker</h1>
<h2>IMAX 3D</h2>
<p>Maandag 24 februiari om 17:30 tot 20:12</p>
<p>Zaal 1</p>
<p>Rij: 8 stoel: 11, 12</p>
<p>Laat deze code scannen bij een medewerker</p>
<img src='var:barcode' alt='Smiley face'>
");
$mpdf->Output('order.pdf');

require "sendmail.php";
$order = require "order.pdf";

    $mailAdress = "Daanisaanwezig@gmail.com";
    $userName = "Daan van Rosmalen";
    $subject = "Bioscoop AMO - Ticket bevestiging";
    $mailBody = "
    <h1>Star wars: Rise of the Skywalker</h1>
    <h2>IMAX 3D</h2>
    <p>Maandag 24 februiari om 17:30 tot 20:12</p>
    <p style='color: #858585'>Zaal 1</p>
    <p>Rij: 8 stoel: 11, 12</p>
    <p>Laat deze code scannen bij een medewerker</p>
    ";
    $altMailBody = "Alternative mail content";
    $attachment = 'order.pdf';
    SendMail($mailAdress, $userName, $subject, $mailBody, $altMailBody, $attachment);

?>