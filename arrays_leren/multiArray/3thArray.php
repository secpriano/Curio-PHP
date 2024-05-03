<?php

$grades = [
    'Ine' => [
        'PHP' => 10,
        'C#' => 2.0,
        'CSS' => 6.7,
    ],
    'Okan' => [
        'PHP' => 9.0,
        'C#' => 4.5,
        'CSS' => 9.3,
    ]
];

echo count($grades['Okan']);
echo $grades['Okan']['PHP'];

?>