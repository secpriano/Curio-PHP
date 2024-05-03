<?php

function average(array $listNumbers) {
    $sum = array_sum($listNumbers);
    $amount = count($listNumbers);
    $average = $sum / $amount;
    echo "De gemiddelde temperatuur deze week is " . $average . " graden";
}

$temperaturesInCelcius = [12, 9, 9, 9, 10, 9, 11];

average($temperaturesInCelcius);
?>

