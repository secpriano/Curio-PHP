<?php

$grades = [
    'Long'      => 6.9,
    'Jason'     => 9.6,
    'Tuvchin'   => 4.5,   
    'Ruben'     => 7.6
];

arsort($grades);

foreach ($grades as $name => $grade) {
    echo "<li><b>$name: </b>$grade</li>";
}

?>